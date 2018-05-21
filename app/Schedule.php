<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable = [
         'date','team_id_a','team_id_b','winner_id'
    ];

    public function team_a()
    {
        return $this->belongsTo('App\User', 'id','team_id_a');
    }

    public function team_b()
    {
        return $this->belongsTo('App\User', 'id','team_id_b');
    }

    public function winner()
    {
        return $this->belongsTo('App\User', 'id','winner_id');
    }
}
