<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table='lv2_tag';
    protected $guarded=[];
    public function ct_tag_diadiem(){
    	return $this->HasMany('App\Models\CT_tag_diadiem','tag_id','id');
    }
}
