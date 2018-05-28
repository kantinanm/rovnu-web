<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Config;
use App\User;

class UserController extends Controller
{
    //
    protected function index()
    {

        //return view('pages.register.team-video');

        //return view('pages.register.myteam');
        //check datetime.now() compare Date of Notification : return false if >=, return true if now() < Notification D.
        // passing value to view : bool

        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        $overNotificationDate =Config::get('over_notification_date');
        $clip_video_url =Config::get('app.how_to_make_video_url');

        if($overNotificationDate){
            //return view('pages.register.myteam');
            return view('pages.register.myteam')->with(compact('allowTeamRegister',$allowTeamRegister))
                ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
                ->with(compact('allowSponsorRegister',$allowSponsorRegister))
                ->with(compact('overNotificationDate',$overNotificationDate))
                ->with(compact('clip_video_url',$clip_video_url));
        }else{
            //return view('pages.register.team-video');
            return view('pages.register.team-video')->with(compact('allowTeamRegister',$allowTeamRegister))
                ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
                ->with(compact('allowSponsorRegister',$allowSponsorRegister))
                ->with(compact('overNotificationDate',$overNotificationDate))
                ->with(compact('clip_video_url',$clip_video_url));
        }


        // determine by compare, selected view [pages.register.team-video] or [pages.register.myteam]
    }

    protected function showInfoTeam()
    {

        //return view('pages.register.myteam');
        // For check status , Time Negotiation , Display match fixing after admin matching team

        // check datetime.now() compare Date of Notification : return false if >=, return true if now() < Notification D.
        // passing value to view : bool
        $overNotificationDate=Config::get('app.over_notification_date');

        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        $clip_video_url =Config::get('app.how_to_make_video_url');

        return view('pages.register.myteam')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister))
            ->with(compact('overNotificationDate',$overNotificationDate))
            ->with(compact('clip_video_url',$clip_video_url));


        //return view('pages.register.myteam')->with(compact('overNotificationDate',$overNotificationDate));


    }

    protected function updateVideo(Request $request)
    {

        // revieve post data
        $targetUser =User::Where(['id'=>Auth::user()->id])->first();
        $targetUser->video_link=$request->input('video_link');
        $targetUser->register_completed=2;
        $targetUser->save();

        //redirect to result view : myteam
        return redirect('myteam');
    }
}
