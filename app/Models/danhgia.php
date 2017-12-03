<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class danhgia extends Model
{
   protected  $table ='lv2_danhgia';
    protected $guarded =[];

    public function dmdanhgia(){
    	return $this->belongsTo('App\Models\DMDanhgia','DMDG_id');
    }
     public function diadiem(){
    	return $this->belongsTo('App\Models\Diadiem','diadiem_id');
    }
     public function users(){
    	return $this->belongsTo('App\Models\Users','users_id');
    }
}
