<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Diadiem;
use App\Models\Tintuc;
use App\Models\Loaitin;

class TintucController extends Controller
{
     public function getTintuc(){
     	// $diadiem=Diadiem::where('id',$id)->first()->toArray();
        $loaitin=Loaitin::select()->get()->toArray();
        $tintuc=Tintuc::where('diadiem_id',$id)->paginate(12);
        // $lttintuc=Tintuc::where('loaitin_id',$id)->paginate(12);
        return view('User.page.link.blog',['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
    }
    public function getLoaiTintuc($id){
    	$diadiem=Diadiem::where('id',$id)->first()->toArray();
        $loaitin=Loaitin::select()->get()->toArray();
        $tintuc=Tintuc::where('diadiem_id',$id)->paginate(12);
        $lttintuc=Tintuc::where('loaitin_id',$id)->paginate(12);
        return view('User.page.link.blog',['loaitin'=>$loaitin,'tintuc'=>$tintuc,'lttintuc'=>$lttintuc);
    }
}
