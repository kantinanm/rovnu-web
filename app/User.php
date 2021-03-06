<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','teamname','facebook_id','team_type','institution','mobilephone','slug','verify_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function players() {
        return $this->hasMany('App\Player');
    }

    public function schedules() {
        return $this->hasMany('App\Schedule');
    }

    public function negotiations() {
        return $this->hasMany('App\Negotiation');
    }


}
