<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DMDanhgia extends Model
{
    protected  $table ='lv2_dmdanhgia';
    protected $guarded =[];
    public function danhgia (){
    	return $this->hasMany('App\Models\danhgia','DMDG_id','id');
    }
    public function diadiem (){
    	return $this->hasMany('App\Models\danhgia','diadiem_id','id');
    }
     public function users (){
    	return $this->hasMany('App\Models\danhgia','diadiem_id','id');
    }
}
