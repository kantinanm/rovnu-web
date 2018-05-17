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
use Illuminate\Support\Facades\Auth;
use Config;

class PlayerController extends Controller
{
    //
    protected function index()
    {

        //return view('pages.register.member-add');
        $players=Player::all();
        //$players=Player::Where('team_id','=',Auth::user()->id)->first();
        //$players =Player::Where('team_id'==Auth::user()->id);

        //dd($players);
        return view('pages.register.member',compact('players',$players));
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

        $faculty =Config::get('institution.'.Auth::user()->team_type."_level");

        //dd($faculty);
        return view('pages.register.member-add',compact('faculty',$faculty));
    }
}
