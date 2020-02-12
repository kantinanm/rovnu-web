<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
use App\Mail\verifyEmail;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\Permission;
use App\Jobs\SendEmailJob;
use Carbon\Carbon;
use Config;
use App\Events\Registered;
use Illuminate\Support\Facades\Log;
use Adldap\Laravel\Facades\Adldap;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'team_type' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'teamname' => 'required|max:255',
            'mobilephone' => 'required|max:255',
        ]);
    }


    public function register(Request $request)
    {
        // if registration is closed, deny access

        $this->validator($request->all())->validate();

        if(Adldap::auth()->attempt($request->username, $request->password)){
            Session::flash('status' ,'Registered ! but verify you email to activate you account.');
            //$getCommonName = Adldap::search()->users()->find('xxxx@nu.ac.th');
            //dd($getCommonName);
            if($request->team_type=="pink_level"){
                $colorAbbr="pink";
                $color="สีชมพู (กลุ่มวิทยาศาสตร์สุขภาพ)";
            }else if($request->team_type=="violet_level"){
                $colorAbbr="violet";
                $color="สีม่วง (กลุ่มวิทยาศาสตร์และเทคโนโลยี)";
            }else if($request->team_type=="cyan_level"){
                $colorAbbr="cyan";
                $color="สีฟ้า (กลุ่มมนุษยศาสตร์และสังคมศาสตร์)";
            }else if($request->team_type=="green_level"){
                $colorAbbr="green";
                $color="สีเขียว (กลุ่มสำนักงานอธิการบดี)";
            }

            $user= [
                'username' => $request->username,
                'teamname' => $request->teamname,
                'name' => '',
                'email' => '',
                'password'=> '',
                'verify_token' => Str::random(40),
                'team_type' => $request->team_type,
                'institution' => $colorAbbr,
                'color' => $color,
                'mobilephone' => $request->mobilephone,
            ];

            $user = User::create($user);

            $sync_attrs = $this->retrieveSyncAttributes($request->username);
            foreach ($sync_attrs as $field => $value) {
                $user->$field = $value !== null ? $value : '';
            }


            $role_subscriber = Role::where("name", "subscriber")->first();
            $user->attachRole($role_subscriber);
            $user->save();

            $thisUser=User::findOrFail($user->id);
            $this->sendEmail($thisUser,$request->password);

        }else{
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors([$request->username => 'โปรดตรวจสอบ บัญชีผู้ใช้งานในเครือข่าย NU-NET และ รหัสผ่านที่ถูกต้อง.']);
        }

        //$this->create($request->all());
        //dd($request);

        return redirect(route("verifyEmail"));
    }

    public function showRegistrationForm()
    {
        $institutionList =Config::get('institution.pink');
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');


        //dd($institutionList);
        //return view('pages.register.create',compact('institutionList',$institutionList));
        return view('pages.register.create')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister))
            ->with(compact('institutionList',$institutionList));
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        Session::flash('status' ,'Registered ! but verify you email to activate you account.');
        $user= [
            'teamname' => $data['teamname'],
            'slug'=> $data['teamslug'],
            'team_type'=> $data['team_type'],
            'institution'=> $data['institution'],
            'facebook_id'=> $data['facebook_id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'mobilephone'=> $data['mobilephone'],
            'verify_token' => Str::random(40)
        ];

        //dd($user);

        $role_subscriber = Role::where("name", "subscriber")->first();



        $user = User::create($user);
        $user->attachRole($role_subscriber);

        $thisUser=User::findOrFail($user->id);
        $this->sendEmail($thisUser,$data['password']);


    }


    public function verifyEmail()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');

       // return view('email.verifyEmail');
        return view('email.verifyEmail')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }

    public function sendEmail($thisUser,$password)
    {
        /*
        Mail::to($thisUser->email)
            ->send(new verifyEmail($thisUser));
        */
        //dd($password);
        $message ="User register :".$thisUser->teamname.",username:".$thisUser->username;
        $message .=", name:".$thisUser->name.",email:".$thisUser->email;
        $message .=", office:".$thisUser->office.",mobilephone:".$thisUser->mobilephone;

        Log::info($message);
        event(new Registered($thisUser,$password));
        //dispatch((new SendEmailJob($thisUser,$password))->delay(Carbon::now()->addSeconds(3)));
    }

    public function sendEmailDone($email,$verify_token)
    {

        $verifyUser =User::Where(['email'=>$email,'verify_token'=>$verify_token])->first();
        //if($user){
        if(isset($verifyUser) ){
            // update & reurn view something auth login from confidential

            if(!$verifyUser->active) {
                $verifyUser->active = 1;
                $verifyUser->verify_token = NULL;
                $verifyUser->save();
                $info = "บัญชีของคุณถูก Activate แล้ว . คุณสามารถเพิ่มรายชื่อผู้เล่นในทีมคุณได้เลยภายหลังการ login";
            }else{
                $info = "Your e-mail is already verified. You can now login.";
            }

            //$user= User::Where(['email'=>$email,'verify_token'=>$verify_token])->update(['active'=>1,'verify_token'=>NULL]);


            //  return redirect('dashboard')->with('status', 'Account activated. !!!');

        }else{
            $allowTeamRegister =Config::get('app.allow_team_register');
            $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
            $allowSponsorRegister =Config::get('app.allow_sponsor_register');

            return redirect('/login')->with('info', "Sorry your email cannot be identified.")
                ->with(compact('allowTeamRegister',$allowTeamRegister))
                ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
                ->with(compact('allowSponsorRegister',$allowSponsorRegister));
        }

        //return redirect('/login')->with('info', $info);
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');

        return redirect('/login')->with('info', $info)
            ->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }

    public function listInstitution(Request $request)
    {
            //return json
        $data = $request->json()->all();

        $institutionList =Config::get('institution.'.$data["institution_type"]);

        foreach ($institutionList as $key => $value) {
            $result[$key]['optionValue']=$value;
            $result[$key]['optionDisplay']=$value;
        }

        return response()->json($result);
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
}
