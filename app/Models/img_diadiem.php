<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class img_diadiem extends Model
{
	protected  $table ='lv2_img_diadiem';
    protected $guarded =[];
    public function diadiem(){
    	return $this->belongsTo('App\Models\Diadiem','diadiem_id');
    }
}
