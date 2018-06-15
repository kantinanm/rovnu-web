<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\User;
use Illuminate\Support\Facades\Log;

class HomeRovController extends Controller
{
    //
    public function index()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        Log::info("Request Index");
        //$activeUserTeam =User::where('active', '=', 1)->get()->count();
        $teamActive =User::where('active', '=', 1)->get()->count();
        $playerConfirmTeam= User::join('players', 'players.team_id', '=', 'users.id')->where('users.register_completed', '=', '1')
            ->whereNotIn('users.id', [1,2,3,4,7,17,18,19])
            ->get()->count();
        $teamConfirm=User::where('register_completed', '=', 1)->get()->count();
        $playerPaticipant=User::join('players', 'players.team_id', '=', 'users.id')->where('users.register_completed', '=', '0')
            ->whereNotIn('users.id', [1,2,3,4,7,17,18,19])
            ->get()->count();


        return view('pages.home')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('teamActive',$teamActive))
            ->with(compact('playerConfirmTeam',$playerConfirmTeam))
            ->with(compact('teamConfirm',$teamConfirm))
            ->with(compact('playerPaticipant',$playerPaticipant))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }

    public function rewards()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        Log::info("Request rewards");

        return view('pages.reward')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }

    public function privacy()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');

        return view('pages.register.privacy')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }

    public function place()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        Log::warning("Request place");

        return view('pages.place')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }
    public function rules()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        $register_url =Config::get('app.how_to_register_url');
        $clip_video_url =Config::get('app.how_to_make_video_url');
        $register_manual=Config::get('app.how_to_register_manual');
        Log::notice("Request rewards");

        return view('pages.rules')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister))
            ->with(compact('register_url',$register_url))
            ->with(compact('clip_video_url',$clip_video_url))
            ->with(compact('register_manual',$register_manual));
    }

    public function activity()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        Log::debug("Request activity");

        return view('pages.activity')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }

    public function question()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        Log::debug("Request question");

        return view('pages.question')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }
}
