<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $fillable = [
        'firstname', 'lastname', 'studentid', 'rov_id', 'player_name', 'mobilephone'
    ];
}
