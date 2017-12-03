<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $guarded =[];
     // protected $guarded =[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function danhgia(){
        return $this->hasMany('App\Models\danhgia','users_id','id');
    }
     public function gopy(){
        return $this->hasMany('App\Models\gopy','users_id','id');
    }
     public function binhluan(){
        return $this->hasMany('App\Models\Binhluan','users_id','id');
    }
    public function diadiem(){
        return $this->hasMany('App\Models\Diadiem','diadiem_id','id');
    }
}
