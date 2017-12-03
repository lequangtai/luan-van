<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DMQuan extends Model
{
    protected  $table ='lv2_dmquan';
    protected $guarded =[];

    public function dmtinh(){
    	return $this->belongsTo('App\Models\DMTinh','DMTT_id');
    }
    public function diadiem (){
    	return $this->hasMany('App\Models\Diadiem','DMQ_id','id');
    }
}
