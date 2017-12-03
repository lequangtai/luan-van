<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quyen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
class TrangchuController extends Controller
{
    public function getshow(){
    	$stas_user   = DB::table('users')->count();
		$stas_ddiem  = DB::table('lv2_diadiem')->count();
		$stas_gopy = DB::table('lv2_gopy')->count();
		$stas_tintuc = DB::table('lv2_tintuc')->count();
		$stas_quan = DB::table('lv2_dmquan')->count();
		$stas_tinh = DB::table('lv2_dmtinhthanh')->count();
		$stas_monan = DB::table('lv2_monan')->count();
		$stas_dmmonan = DB::table('lv2_dmmonan')->count();
		
    	return view('admin.module.dashboard.main',['stas_user'=>$stas_user,'stas_ddiem'=>$stas_ddiem,'stas_gopy'=>$stas_gopy,'stas_tintuc'=>$stas_tintuc,'stas_quan'=>$stas_quan,'stas_tinh'=>$stas_tinh,'stas_monan'=>$stas_monan,'stas_dmmonan'=>$stas_dmmonan]);
    }
}
