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

        $overNotificationDate =Config::get('over_notification_date');
        if($overNotificationDate){
            return view('pages.register.myteam');
        }else{
            return view('pages.register.team-video');
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

        //$overNotificationDate=false;
        //$temp =Config::get('app.over_notification_date');

/*

            if($temp==="true"){
                $overNotificationDate=true;
            }else{
                $overNotificationDate=false;
            }
*/

        return view('pages.register.myteam')->with(compact('overNotificationDate',$overNotificationDate));

        //example
        //$players=Player::where('team_id',Auth::user()->id)->get();
        //return view('pages.register.member')->with(compact('players',$players))
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
