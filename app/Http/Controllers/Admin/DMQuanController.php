<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DMQuanAddRequest;
use App\Http\Requests\DMQuanEditRequest;
use App\Models\DMTinh;
use App\Models\DMQuan;
use DateTime;

class DMQuanController extends Controller
{
    public function getDMquanAdd(){
      $data = DMTinh::select('id','tentinhthanh')->get();
      return view('admin.module.danhmucquan.add',['dataquan' =>$data]);
    }
    public function postDMquanAdd(DMQuanAddRequest $request){
      $cate = new DMQuan;
      $cate->tenquan = $request->txtCateName;
      $cate->DMTT_id = $request->sltCate;
      $cate->created_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('them-quan')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-quan')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } 
    }
    public function getDMquanList(){
        $dataquan = DMQuan::select()->get()->toArray();
        $datatinh = DMTinh::select()->get()->toArray();
      return view('admin.module.danhmucquan.list',['dataquan'=> $dataquan,'datatinh'=>$datatinh]);
    }

    public function getDMquanEdit($id){
      $quan = DMQuan::findOrFail($id)->toArray();
      $tinh = DMTinh::select()->get()->toArray();
      return view('admin.module.danhmucquan.edit', ['quan'=> $quan,'tinh'=>$tinh]);
    }
    public function postquanEdit(DMQuanEditRequest $request, $id){
      $cate = DMQuan::find($id);
      $cate->tenquan = $request->txtCateName;
      $cate->DMTT_id = $request->sltCate;
      $cate->updated_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('getDMquanEdit',['id' => $id])->with(['flash_level'=>'success','flash_message'=>'Bạn đã sửa danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-quan')->with(['flash_level'=>'success','flash_message'=>'Bạn đã sửa danh mục thành công']);
        }  
    }
    public function getDMquanDel($id){
                $cate = DMQuan::find($id);
                $cate ->delete();
                 return redirect()->route('danh-sach-quan')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    }
  }
