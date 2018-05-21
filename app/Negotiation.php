<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negotiation extends Model
{
    //
    protected $fillable = [
        'date','time','schedule_id','team_id_a','team_id_b','request_from'
    ];

    public function schedule()
    {
        return $this->belongsTo('App\Schedule', 'schedule_id','schedule_id');
    }

    public function team_a()
    {
        return $this->belongsTo('App\User', 'id','team_id_a');
    }

    public function team_b()
    {
        return $this->belongsTo('App\User', 'id','team_id_b');
    }

    public function request_from()
    {
        return $this->belongsTo('App\User', 'id','request_from');
    }


}
