<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class img_monan extends Model
{
    protected  $table ='lv2_img_monan';
    protected $guarded =[];

    public function dmmonan(){
    	return $this->belongsTo('App\Models\Monan','monan_id');
    }
}
