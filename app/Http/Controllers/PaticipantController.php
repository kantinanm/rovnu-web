<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Role;
use App\Permission;
use App\Paticipant;
use App\User;
use Illuminate\Support\Facades\Auth;
use Config;
use App\Events\TeamConfirmed;

class PaticipantController extends Controller
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
        $paticipant= [
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
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

        $paticipant = Paticipant::create($paticipant);

        $info="ลงทะเบียนเรียบร้อยแล้ว";
        return redirect('/paticipant/complete')->with('info', $info);
    }

    protected function showRegisterCompleted()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');

        return view('pages.paticipant.complete')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }
}
