<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DirapeToken;

class Participant extends Model
{
    //
    public $table = "participant";

    protected $DT_Column='unique_id'; //['type' => DT_Unique, 'size' => 40, 'special_chr' => false]
    Const DT_UniqueStr = 'UniqueString';

    protected $fillable = [
        'fullname', 'email','unique_id', 'garena_id', 'gender', 'age','provice','member_type','choice1' ,'choice2','choice3','choice4','choice5','choice6','choiceetc','nuchoice1' ,'nuchoice2','nuchoice3','nuchoice4','nuchoice5','nuchoice6','nuchoiceetc','is_join'
    ];

    protected $primaryKey = 'p_id';
}
