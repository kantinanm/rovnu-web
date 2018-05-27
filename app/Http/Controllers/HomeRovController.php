<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class HomeRovController extends Controller
{
    //
    public function index()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        //allow_paticipant_register

        //dd($allowTeamRegister);
        //return view('pages.home',compact('allowTeamRegister',$allowTeamRegister));

        return view('pages.home')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }
}
