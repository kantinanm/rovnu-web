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
use Carbon\Carbon;
use DateTime;

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
        $allowShowTeamAcceptedStepVideo =Config::get('show_team_accepted_video');
        $clip_video_url =Config::get('app.how_to_make_video_url');
        $by_pass_submit_video =Config::get('app.by_pass_submit_video');


        $year =date_format(Auth::user()->created_at,"Y"); //updated_at
        $month =date_format(Auth::user()->created_at,"m");
        $days =date_format(Auth::user()->created_at,"d");

        $dt = Carbon::createMidnightDate($year, $month, $days);

        $day_diff=$dt->diffInDays(Carbon::now('Asia/Bangkok'));
        //dd($dt->diffInDays(Carbon::now('Asia/Bangkok')));


        if($overNotificationDate){
            //return view('pages.register.myteam');



            return view('pages.register.myteam')->with(compact('allowTeamRegister',$allowTeamRegister))
                ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
                ->with(compact('allowSponsorRegister',$allowSponsorRegister))
                ->with(compact('overNotificationDate',$overNotificationDate))
                ->with(compact('allowShowTeamAcceptedStepVideo',$allowShowTeamAcceptedStepVideo))
                ->with(compact('day_diff',$day_diff))
                ->with(compact('by_pass_submit_video',$by_pass_submit_video))
                ->with(compact('clip_video_url',$clip_video_url));
        }else{
            //return view('pages.register.team-video');
            return view('pages.register.team-video')->with(compact('allowTeamRegister',$allowTeamRegister))
                ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
                ->with(compact('allowSponsorRegister',$allowSponsorRegister))
                ->with(compact('overNotificationDate',$overNotificationDate))
                ->with(compact('allowShowTeamAcceptedStepVideo',$allowShowTeamAcceptedStepVideo))
                ->with(compact('day_diff',$day_diff))
                ->with(compact('by_pass_submit_video',$by_pass_submit_video))
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
        $allowShowTeamAcceptedStepVideo =Config::get('app.show_team_accepted_video');
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        $clip_video_url =Config::get('app.how_to_make_video_url');
        $by_pass_submit_video =Config::get('app.by_pass_submit_video');


            $year =date_format(Auth::user()->created_at,"Y"); //updated_at
            $month =date_format(Auth::user()->created_at,"m");
            $days =date_format(Auth::user()->created_at,"d");

            $dt = Carbon::createMidnightDate($year, $month, $days);

            $day_diff=$dt->diffInDays(Carbon::now('Asia/Bangkok'));
            //dd($allowShowTeamAcceptedStepVideo);
            //dd($by_pass_submit_video);
            //dd($dt->diffInDays(Carbon::now('Asia/Bangkok')));




        return view('pages.register.myteam')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister))
            ->with(compact('overNotificationDate',$overNotificationDate))
            ->with(compact('allowShowTeamAcceptedStepVideo',$allowShowTeamAcceptedStepVideo))
            ->with(compact('day_diff',$day_diff))
            ->with(compact('by_pass_submit_video',$by_pass_submit_video))
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
