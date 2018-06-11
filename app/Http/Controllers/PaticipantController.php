<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Role;
use App\Permission;
use App\Player;
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

    protected function showEditForm($player_id)
    {

        //return view('pages.register.member-edit');
        $faculty =Config::get('institution.'.Auth::user()->team_type."_level");
        $player=Player::where('player_id',$player_id)->get();


        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');

        //dd($player);

        return view('pages.register.member-edit')->with(compact('player',$player))
             ->with(compact('faculty',$faculty))
            ->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'studentid' => 'required|max:255',
            'hidGameId' => 'required|max:255',
            'player_name' => 'required|max:255'
        ]);
    }

    protected function create(Request $request)
    {
        $this->validator($request->all())->validate();

        // Auth()->
        $player= [
            'firstname' => $request->input('firstname'),
            'lastname'=> $request->input('lastname'),
            'studentid'=> $request->input('studentid'),
            'rov_id' => $request->input('hidGameId'),
            'player_name' => $request->input('player_name'),
            'faculty' => $request->input('faculty'),
            'note'=> $request->input('note'),
            'mobilephone' => $request->input('mobilephone'),
            'team_id' =>  Auth::user()->id
        ];

        //dd($player);
        //$player->team_id()
        //$player->associate(Auth::user());
        $player = Player::create($player);

        $info="เพิ่มผู้เล่นในทีมเรียบร้อยแล้ว";
        return redirect('/register/players')->with('info', $info);
    }

    protected function update(Request $request)
    {

        $editPlayer =Player::Where('player_id',$request->input('player_id'))->first();

        //dd($editPlayer);
        //dd($request->input('firstname'));
        if(isset($editPlayer) ){
            $editPlayer->firstname=$request->input('firstname');
            $editPlayer->lastname=$request->input('lastname');
            $editPlayer->studentid=$request->input('studentid');
            $editPlayer->player_name=$request->input('player_name');
            $editPlayer->rov_id=$request->input('hidGameId');
            $editPlayer->faculty=$request->input('faculty');
            $editPlayer->note=$request->input('note');
            $editPlayer->mobilephone=$request->input('mobilephone');
            $editPlayer->save();
            $info="ปรับปรุงข้อมูลเรียบร้อยแล้ว";
        }else{
            $info="เกิดข้อผิดพลาดในการปรับปรุงข้อมูล";
        }

        return redirect('/register/players')->with('info', $info);
    }

    protected function checkRovIDExits(Request $request)
    {
        $data = $request->json()->all();

        $exitsPlayer =Player::Where(['rov_id'=>$data["rov_id"]])->first();



        if($exitsPlayer!=null){
            //find meaning : exits
            $result["status"]=0;
            $result["notice"]="id is dupicated. Please use another game id.!";
        }else{
            $result["status"]=1;
            $result["notice"]="game id be can use.";
        }

        return response()->json($result);
    }

    protected function showPlayerRegisForm()
    {

        //return view('pages.register.member-add');
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        $faculty =Config::get('institution.'.Auth::user()->team_type."_level");

        //dd($faculty);
        //return view('pages.register.member-add',compact('faculty',$faculty));
        return view('pages.register.member-add')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister))
            ->with(compact('faculty',$faculty));
    }

    protected function showTeamRegisterCompleted()
    {

        //return view('pages.register.member-add');
        $user=User::find(Auth::user()->id);
        //dd($user);
        $user->register_completed = 1;
        $user->save();

        event(new TeamConfirmed($user));

        $notification_date =Config::get('app.notification_date');
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        $clip_video_url =Config::get('app.how_to_make_video_url');

        //return view('pages.register.complete',compact('notification_date',$notification_date));

        return view('pages.register.complete')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister))
            ->with(compact('notification_date',$notification_date))
            ->with(compact('clip_video_url',$clip_video_url));
    }
}
