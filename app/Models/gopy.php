<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gopy extends Model
{
    protected  $table ='lv2_gopy';
    protected $guarded =[];

    public function users(){
    	return $this->belongsTo('App\Models\User','users_id');
    }
}
