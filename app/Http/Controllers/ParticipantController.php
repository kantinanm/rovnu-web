<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Role;
use App\Permission;
use App\Participant;
use App\User;
use Illuminate\Support\Facades\Auth;
use Config;
use App\Events\TeamConfirmed;
use Dirape\Token\Token;
use Storage;
use File;
use Carbon\Carbon;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;

class ParticipantController extends Controller
{
    //
    protected function index()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        $provice =Config::get('proviceList.provice');

        return view('pages.paticipant.register')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister))
            ->with(compact('provice',$provice));
    }

    protected function create(Request $request)
    {
        //$this->validator($request->all())->validate();

        // Auth()->
        $participant= [
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'unique_id'=>  (new Token())->Unique('participant', 'unique_id', 40),
            'garena_id'=> $request->input('garenaid'),
            'gender'=> $request->input('gender'),
            'age' => $request->input('age'),
            'provice' => $request->input('provice'),
            'member_type' => $request->input('membertype'),
            'choice1'=> $request->input('choice1'),
            'choice2'=> $request->input('choice5'),
            'choice3'=> $request->input('choice3'),
            'choice4'=> $request->input('choice4'),
            'choice5'=> $request->input('choice5'),
            'choice6'=> $request->input('choice6'),
            'choiceetc'=> $request->input('nuchoiceetc'),
            'nuchoice1'=> $request->input('nuchoice1'),
            'nuchoice2'=> $request->input('nuchoice5'),
            'nuchoice3'=> $request->input('nuchoice3'),
            'nuchoice4'=> $request->input('nuchoice4'),
            'nuchoice5'=> $request->input('nuchoice5'),
            'nuchoice6'=> $request->input('nuchoice6'),
            'nuchoiceetc'=> $request->input('nuchoiceetc')
        ];

        $participant = Participant::create($participant);
        $token=$participant->unique_id;
        $p_id=$participant->p_id;
        $qrcode = new BaconQrCodeGenerator;
        ;

        $upload_dir = public_path('images/qrcode/');
        //$img = str_replace('data:image/png;base64,', '', base64_encode($qrcode->format('png')->size(300)->color(0,51,170)->generate($token)));
        //$img = str_replace(' ', '+', $img);
        $data = base64_decode(base64_encode($qrcode->format('png')->size(300)->color(0,51,170)->generate($token)));
        $file = $upload_dir . "qrcode-".$p_id."-".Carbon::now('Asia/Bangkok')->format('Y-m-d').".png";
        file_put_contents($file, $data);

        //Storage::put('file.png', $data);
        //File::put(public_path('uploads'));
        //Storage::disk('local')->putFile('images', $file);



        $info="ลงทะเบียนเรียบร้อยแล้ว";
        $notification_date =Config::get('app.notification_date');
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');

        return view('pages.paticipant.complete')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister))
            ->with(compact('notification_date',$notification_date))
            ->with(compact('token',$token))
            ->with('info',$info);
        
    }
}
