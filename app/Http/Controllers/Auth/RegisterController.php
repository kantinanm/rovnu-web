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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'teamname' => 'required|max:255',
        ]);
    }


    public function register(Request $request)
    {
        // if registration is closed, deny access

        $this->validator($request->all())->validate();

        $this->create($request->all());
        //dd($request);

        return redirect(route("verifyEmail"));
    }

    public function showRegistrationForm()
    {
        $institutionList =Config::get('institution.undergraduate');
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
        $message ="User register :".$thisUser->teamname.",slug:".$thisUser->slug;
        $message .=", name:".$thisUser->name.",email:".$thisUser->email;
        $message .=", facebook_id:".$thisUser->facebook_id.",mobilephone:".$thisUser->mobilephone;

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
}
