<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DiadiemAddRequest;
// use App\Http\Requests\DiadiemEditRequest;
use App\Models\DMQuan;
use App\Models\DMTinh;
use App\Models\Diadiem;
use Auth,DateTime,File;
class DiadiemController extends Controller
{
   
    public function getdiadiemList()
    {
        $diadiem = Diadiem::select()->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.module.diadiem.list', ['diadiem'=>$diadiem]); 
    }
    public function getdiadiemDel($id){
        $news = Diadiem::findOrFail($id);
        $news->delete();
         return redirect()->route('danh-sach-dia-diem')->with(['flash_level'=>'success','flash_message'=> 'Xóa thành công']);
    }
   
}
