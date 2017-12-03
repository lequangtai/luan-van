<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Binhluan extends Model
{
    protected  $table ='lv2_binhluan';
    protected $guarded =[];

     public function diadiem(){
    	return $this->belongsTo('App\Models\Diadiem','diadiem_id');
    }
     public function users(){
    	return $this->belongsTo('App\Models\User','users_id');
    }
}
