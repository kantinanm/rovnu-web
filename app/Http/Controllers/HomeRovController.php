<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\User;
use App\Player;
use App\Participant;
use Illuminate\Support\Arr;
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
        $teamActive=User::where('active', '=', 1)
            ->whereIn('users.register_completed', [0])
            ->whereNotIn('users.id', [1,2,3,4,7,17,18,19])
            ->get()->count();

        $playerConfirmTeam= User::join('players', 'players.team_id', '=', 'users.id')->where('users.register_completed', '>=', '1')
            ->whereIn('users.active', [1])
            ->whereNotIn('users.id', [1,2,3,4,7,17,18,19])
            ->get()->count();
        $teamConfirm=User::where('register_completed', '>=', 1)
            ->whereIn('users.active', [1])
            ->whereNotIn('users.id', [1,2,3,4,7,17,18,19])
            ->get()->count();
        //$teamActive =$all_active-$teamConfirm;
        $playerPaticipant=User::join('players', 'players.team_id', '=', 'users.id')->where('users.register_completed', '=', '0')
            ->whereIn('users.active', [1])
            ->whereNotIn('users.id', [1,2,3,4,7,17,18,19])
            ->get()->count();

        $participant=Participant::where('p_id', '>', 0)->get()->count();

        return view('pages.home')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('teamActive',$teamActive))
            ->with(compact('playerConfirmTeam',$playerConfirmTeam))
            ->with(compact('teamConfirm',$teamConfirm))
            ->with(compact('playerPaticipant',$playerPaticipant))
            ->with(compact('participant',$participant))
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

    public function schedule()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        Log::warning("Request schedule");

        return view('pages.schedule')->with(compact('allowTeamRegister',$allowTeamRegister))
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

    public function overallTeam()
    {
        $allowTeamRegister =Config::get('app.allow_team_register');
        $allowPaticipantRegister =Config::get('app.allow_paticipant_register');
        $allowSponsorRegister =Config::get('app.allow_sponsor_register');
        Log::info("Request overall-team-list");

        $teamListConfirm=User::where('register_completed', '>=', 1)
            ->whereIn('users.active', [1])
            ->whereNotIn('users.id', [1,2,3,4,7,17,18,19])
            ->get();

        return view('pages.team_approve')->with(compact('allowTeamRegister',$allowTeamRegister))
            ->with(compact('allowPaticipantRegister',$allowPaticipantRegister))
            ->with(compact('teamListConfirm',$teamListConfirm))
            ->with(compact('allowSponsorRegister',$allowSponsorRegister));
    }
    protected function getTeamDetail(Request $request)
    {
        $data = $request->json()->all();

        $exitsPlayer =Player::Where(['team_id'=>$data["team_id"]])->get();
        $teamInfo=User::where('id', '=', $data["team_id"])->first();

        $result["teamname"]=$teamInfo->teamname;
        $result["detail"]=$teamInfo->name.", ".$teamInfo->mobilephone.", ".$teamInfo->email;
        $result["institution"]=$teamInfo->institution;
        $result["facebook"]=$teamInfo->facebook_id;

        $result["member"]= array();

        foreach($exitsPlayer as $player){
            $data = array();
            $data["name"]=$player->firstname." ".$player->lastname;
            $data["studentid"]=$player->studentid;
            $data["faculty"]=$player->faculty;
            $data["rov_id"]=$player->player_name;
            $data["verify"]=true;

            array_push($result["member"], $data);
        }

        //$result["member"]=$data;

        if($teamInfo==null){

            $result["status"]=0;

        }else{
            $result["status"]=1;

        }

        return response()->json($result);
    }

    public function participantList(){
        $listParticipant=Participant::get();
        return view('pages.participant')->with(compact('listParticipant',$listParticipant));
    }

    public function getParticipant($token){

        $objParticipant=Participant::where('unique_id', '=', $token)->first();

        if($objParticipant==null){
            $result["status"]=0;

        }else {
            $result["status"]=1;
            $result["pid"] = $objParticipant->p_id;
            $result["fullname"] = $objParticipant->fullname;
            $result["email"] = $objParticipant->email;
            $result["unique_id"] = $objParticipant->unique_id;
            $result["garena_id"] = $objParticipant->garena_id;
            if ($objParticipant->member_type == 0) {
                $result["member_type"] = "นิสิต / นักศึกษา";
            } elseif ($objParticipant->member_type == 1) {
                $result["member_type"] = "บุคลากรสายวิชาการ";
            } elseif ($objParticipant->member_type == 2) {
                $result["member_type"] = "บุคลากรสายสนับสนุน";
            } elseif ($objParticipant->member_type == 3) {
                $result["member_type"] = "นักเรียน";
            } elseif ($objParticipant->member_type == 4) {
                $result["member_type"] = "บุคคลทั่วไป";
            }
        }

        return response()->json($result);
    }

    public function approveParticipant(Request $request){

        $data = $request->json()->all();

        $objParticipant=Participant::where('unique_id', '=', $data->token)->first();

        if($objParticipant==null){
            $result["status"]=0;

        }else {

            if($data->action=="join"){
                $objParticipant->is_join=1;
            }else{
                $objParticipant->is_join=0;
            }

            $objParticipant->save();

            $result["status"]=1;
            $result["pid"] = $objParticipant->p_id;
            $result["fullname"] = $objParticipant->fullname;
            $result["email"] = $objParticipant->email;
            $result["unique_id"] = $objParticipant->unique_id;
            $result["garena_id"] = $objParticipant->garena_id;
            if ($objParticipant->member_type == 0) {
                $result["member_type"] = "นิสิต / นักศึกษา";
            } elseif ($objParticipant->member_type == 1) {
                $result["member_type"] = "บุคลากรสายวิชาการ";
            } elseif ($objParticipant->member_type == 2) {
                $result["member_type"] = "บุคลากรสายสนับสนุน";
            } elseif ($objParticipant->member_type == 3) {
                $result["member_type"] = "นักเรียน";
            } elseif ($objParticipant->member_type == 4) {
                $result["member_type"] = "บุคคลทั่วไป";
            }
        }

        return response()->json($result);
    }
}
