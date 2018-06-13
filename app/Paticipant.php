<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paticipant extends Model
{
    //
    protected $fillable = [
        'fullname', 'email', 'garena_id', 'gender', 'age','provice','member_type','choice1' ,'choice2','choice3','choice4','choice5','choiceetc','nuchoice1' ,'nuchoice2','nuchoice3','nuchoice4','nuchoice5','nuchoiceetc'
    ];

    protected $primaryKey = 'p_id';
}
