<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monan extends Model
{
    protected  $table ='lv2_monan';
    protected $guarded =[];

    public function dmmonan(){
    	return $this->belongsTo('App\Models\DMMonan','DMMA_id');
    }
    public function diadiem(){
    	return $this->belongsTo('App\Models\Diadiem','ddiem_id');
    }
     public function img_monan(){
    	return $this->hasMany('App\Models\img_monan','monan_id','id');
    }
}
