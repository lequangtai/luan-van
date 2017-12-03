<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DMTinh extends Model
{
    protected  $table ='lv2_dmtinhthanh';
    protected $guarded =[];
    public function dmquan (){
    	return $this->hasMany('App\Models\DMQuan','DMTT_id','id');
    }
}
