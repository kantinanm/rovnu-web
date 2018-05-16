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

class PlayerController extends Controller
{
    //
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'teamname' => 'required|max:255',
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
            'rov_id' => $request->input('rov_id'),
            'player_name' => $request->input('player_name'),
            'faculty' => $request->input('faculty'),
            'institution'=> $request->input('institution'),
            'mobilephone' => $request->input('mobilephone'),
            'team_id' => Auth::user()->id
        ];

        $player = Player::create($player);

        $info="เพิ่มผู้เล่นในทีมเรียบร้อยแล้ว";
        return redirect('/register/players')->with('info', $info);
    }
}
