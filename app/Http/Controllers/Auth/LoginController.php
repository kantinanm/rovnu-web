<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Config;
use Adldap\Laravel\Facades\Adldap;
use App\User;
use App\Role;
use App\Events\Registered;
use Illuminate\Support\Str;
use Mail;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function username() {
        //return config('adldap_auth.usernames.eloquent');
        return 'username';
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required',
            'password' => 'required',
            // new rules here
        ]);
    }

    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        // Customization: validate if client status is active (1)
        //$credentials['active'] = 1;  // like sql where
        return $credentials;
    }

    protected function authenticated(Request $request, $user)
    {
        //
        $by_pass_submit_video =Config::get('app.by_pass_submit_video');

        if($user->usr_lvl === 'admin') {
            return redirect()->intended('/admin/dashboard');
        }

        if(($user->usr_lvl === 'subscriber')&($user->active==0)) {

            return redirect()->intended('/'); // to implement
        }

        // redirect to submit video form
        if(($user->usr_lvl === 'subscriber')&($user->register_completed==1)) {
            if($by_pass_submit_video==true){
                return redirect()->intended('/myteam');
            }else{
                return redirect()->intended('/register/continue');
            }
        }

        // waiting result after  submit video link
        if(($user->usr_lvl === 'subscriber')&($user->register_completed==2)) {
            return redirect()->intended('/myteam');
        }

        return redirect()->intended('/register/players');
    }


    public function showLoginForm()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');

        return view('pages.login')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }


    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];
        // Check user 's exits from database
        $user = \App\User::where($this->username(), $request->{$this->username()})->first();

        // Check LDAP server or the password is wrong
        if ( !Adldap::auth()->attempt($user->username,$request->password, $bindAsUser = true )){
            $errors = [$this->username() => trans('auth.failed')];
            return redirect()->back()
                ->withInput($request->only($this->username()))
                ->withErrors($errors);
            //dd($errors);
        }
        // Check active is not 1. If so, override the default error message.
        if (  $user->active != 1 ) {
            $errors = [$this->username() => 'บัญชี NU-NET ของท่าน  ยังไม่ได้ Activate โปรดตรวจสอบ email ตอบรับ หลังจากลงทะเบียน.'];
            return redirect()->back()
                ->withInput($request->only($this->username()))
                ->withErrors($errors);
            //dd($errors);
        }

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }

    protected function attemptLogin(Request $request)
    {
        //dd("test");
        $credentials = $request->only($this->username(), 'password');
        $username = $credentials[$this->username()];
        $password = $credentials['password'];
        //dd(env('ADLDAP_USER_FORMAT'));


        if (Adldap::auth()->attempt($username, $password, $bindAsUser = true)) {
            //dd("true");

            $user = \App\User::where($this->username(), $username)->first();

            if (!$user) { // to move to registerController

                /*$user = new \App\User();
                $user->username = $username;
                $user->password = '';
                $user->verify_token = Str::random(40);*/
                //$user->email = $username.'@nu.ac.th';

                $user= [
                    'username' => $username,
                    'name' => '',
                    'email' => '',
                    'password'=> '',
                    'verify_token' => Str::random(40)
                ];

                $user = User::create($user);

                $sync_attrs = $this->retrieveSyncAttributes($username);
                foreach ($sync_attrs as $field => $value) {
                    $user->$field = $value !== null ? $value : '';
                }


                $role_subscriber = Role::where("name", "subscriber")->first();
                $user->attachRole($role_subscriber);
                //$user->roles()->attach($role_subscriber);
                $user->save();
                $this->sendEmail($user,$password);

            }else {
                //have users
                //check active = 0
                if($user->active == 0){
                    //have users
                    //check active = 0
                    return false;
                }else{
                    $this->guard()->login($user, true);
                    return true;
                }
            }

        }
        // the user doesn't exist in the LDAP server or the password is wrong
        // log error
        //dd("false");
        return false;
    }

    protected function retrieveSyncAttributes($username)
    {
        $ldapuser = Adldap::search()->where(env('ADLDAP_USER_ATTRIBUTE'), '=', $username)->first();
        if (!$ldapuser) {
            // log error
            return false;
        }

        $ldapuser_attrs = null;

        $attrs = [];

        foreach (config('adldap_auth.sync_attributes') as $local_attr => $ldap_attr) {
            if ($local_attr == 'username') {
                continue;
            }

            $method = 'get' . $ldap_attr;
            if (method_exists($ldapuser, $method)) {
                $attrs[$local_attr] = $ldapuser->$method();
                continue;
            }

            if ($ldapuser_attrs === null) {
                $ldapuser_attrs = self::accessProtected($ldapuser, 'attributes');
            }

            if (!isset($ldapuser_attrs[$ldap_attr])) {
                // an exception could be thrown
                $attrs[$local_attr] = null;
                continue;
            }

            if (!is_array($ldapuser_attrs[$ldap_attr])) {
                $attrs[$local_attr] = $ldapuser_attrs[$ldap_attr];
            }

            if (count($ldapuser_attrs[$ldap_attr]) == 0) {
                // an exception could be thrown
                $attrs[$local_attr] = null;
                continue;
            }

            $attrs[$local_attr] = $ldapuser_attrs[$ldap_attr][0];
            //$attrs[$local_attr] = implode(',', $ldapuser_attrs[$ldap_attr]);
        }

        return $attrs;
    }

    protected static function accessProtected($obj, $prop)
    {
        $reflection = new \ReflectionClass($obj);
        $property = $reflection->getProperty($prop);
        $property->setAccessible(true);
        return $property->getValue($obj);
    }

    public function sendEmail($thisUser,$password)
    {
        /*
        Mail::to($thisUser->email)
            ->send(new verifyEmail($thisUser));
        */
        //dd($password);
        $message ="User register :".$thisUser->username.",office:".$thisUser->office;
        $message .=", name:".$thisUser->name.",email:".$thisUser->email;


        Log::info($message);
        event(new Registered($thisUser,$password));
        //dispatch((new SendEmailJob($thisUser,$password))->delay(Carbon::now()->addSeconds(3)));
    }
}
