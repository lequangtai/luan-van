<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DMMonan extends Model
{
    protected  $table ='lv2_dmmonan';
    protected $guarded =[];
    public function monan (){
    	return $this->hasMany('App\Models\Monan','DMMA_id','id');
    }
}
