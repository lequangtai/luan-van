<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diadiem extends Model
{
    protected  $table ='lv2_diadiem';
    protected $guarded =[];

    public function dmquan(){
    	return $this->belongsTo('App\Models\DMQuan','DMQ_id');
    }
    public function monan (){
    	return $this->hasMany('App\Models\Monan','ddiem_id','id');
    }
    public function img_diadiem (){
    	return $this->hasMany('App\Models\img_diadiem','diadiem_id','id');
    }
    public function binhluan (){
    	return $this->hasMany('App\Models\Binhluan','diadiem_id','id');
    }
    public function danhgia (){
    	return $this->hasMany('App\Models\danhgia','diadiem_id','id');
    }
    public function cttag_diadiem (){
    	return $this->hasMany('App\Models\CT_tag_diadiem','diadiem_id','id');
    }
     public function tintuc(){
        return $this->hasMany('App\Models\Tintuc','diadiem_id','id');
    }
    public function users(){
        return $this->belongsTo('App\Models\User','users_id');
    }
}
