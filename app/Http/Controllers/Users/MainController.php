<?php

 namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Diadiem;
use App\Models\Monan;
use App\Models\DMMonan;
use App\Models\Binhluan;
use App\Models\User;

use DB;

class MainController extends Controller
{
    public function getIndex(){
        $diadiem=Diadiem::paginate(9);
        // $diadiem=Diadiem::orderBy('id','DESC')->get()->toArray();
        $user=User::where('level','=',0)->get()->toArray();
        return view('User.page.index',['diadiem'=>$diadiem,'user'=>$user]);
    }
      public function getmenu(){
        return view('User.page.link.menu');
    }
     public function getaboutus(){
        return view('User.page.link.about');
    }
     public function getmonan(){
        return view('User.page.link.wines');
    }
     public function getpagesidebar(){
        return view('User.page.link.page-sidebar');
    }
      public function getportfolio2(){
        return view('User.page.link.portfolio-2-column');
    }
     public function getportfolio3(){
        return view('User.page.link.portfolio-3-column');
    }
     public function getportfolio4($id){
        $diadiem=Diadiem::where('id',$id)->first()->toArray();
        $dmmonan=DMMonan::orderBy('id','DESC')->get()->toArray();
        $monan=Monan::orderBy('id','DESC')->get()->toArray();
        $ddma = Monan::where('ddiem_id',$id)->paginate(12);
        $dmma = Monan::where('DMMA_id',$id)->paginate(12);
        $users=User::select()->get()->toArray();
        $binhluan=Binhluan::where('diadiem_id',$id)->get()->toArray();
        return view('User.page.link.portfolio-4-column',['diadiem'=>$diadiem,'dmmonan'=>$dmmonan,'monan'=>$monan,'ddma'=>$ddma,'dmma'=>$dmma,'users'=>$users,'binhluan'=>$binhluan]);
    }
     public function getchitietdmmonan($id){
        
        $dmma = DB::table('lv2_dmmonan')
            ->join('lv2_monan', 'lv2_dmmonan.id', '=', 'lv2_monan.DMMA_id')
            ->join('lv2_diadiem', 'lv2_diadiem.id', '=', 'lv2_monan.ddiem_id')
            ->select('lv2_monan.*', 'lv2_diadiem.*', 'lv2_dmmonan.*')
            ->get();
        return view('User.page.link.portfolio-4-column',['dmma'=>$dmma]);
    }
     public function getblog(){
        return view('User.page.link.blog');
    }
     public function getcontact(){
        return view('User.page.link.contact');
    }
    public function getportfoliopost(){
        return view('User.page.link.portfolio-post');
    }
    public function getmenupost(){
        return view('User.page.link.menu-post');
    }
    public function getddmonan(){
        return view('User.page.link.monan');
    }
    public function getchitietmonan($id){
        $diadiem=Diadiem::where('id',$id)->first()->toArray();
        $monantc=Monan::where('id',$id)->first()->toArray();
        $dmmonan=DMMonan::orderBy('id','DESC')->get()->toArray();
        $monan=Monan::select()->orderBy('id','DESC')->get()->toArray();
        $ddma = Monan::where('ddiem_id',$id)->paginate(12);
        $dmma = Monan::where('DMMA_id',$id)->paginate(12);
        return view('User.page.link.chitietmonan',['diadiem'=>$diadiem,'monantc'=>$monantc,'dmmonan'=>$dmmonan,'monan'=>$monan,'ddma'=>$ddma,'dmma'=>$dmma]);
    }
   
   

    

}

