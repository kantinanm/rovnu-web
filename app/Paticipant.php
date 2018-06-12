<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paticipant extends Model
{
    //
    protected $fillable = [
        'fullname', 'email', 'garena_id', 'gender', 'age','provice','member_type','choice1' ,'choice2','choice3','choice4','choice5','choiceetc'
    ];

    protected $primaryKey = 'p_id';
}
