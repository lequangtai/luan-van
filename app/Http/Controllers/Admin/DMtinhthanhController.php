<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DMTinhAddRequest;
use App\Http\Requests\DMTinhEditRequest;
use App\Models\DMTinh;
use DateTime;

class DMtinhthanhController extends Controller
{
    public function getDMtinhAdd(){
      return view('admin.module.danhmuctinh.add');
    }
    public function postDMtinhAdd(DMTinhAddRequest $request){
      $cate = new DMTinh;
      $cate->tentinhthanh = $request->txtCateName;
      $cate->created_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('them-tinh-thanh')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-tinh-thanh')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } 
    }
    public function getDMtinhList(){
        $data = DMTinh::select('id','tentinhthanh')->get();
      return view('admin.module.danhmuctinh.list',['data'=> $data]);
    }

    public function getDMtinhEdit($id){
      $data = DMTinh::findOrFail($id)->toArray();
      // $parent = DMTinh::select('id','tentinhthanh')->get()->toArray();
      return view('admin.module.danhmuctinh.edit', ['data'=> $data]);
    }
    public function postCateEdit(DMTinhEditRequest $request, $id){
      $cate = DMTinh::find($id);
      $cate->tentinhthanh = $request->txtCateName;
      $cate->updated_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('getDMtinhEdit',['id' => $id])->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-tinh-thanh')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        }  
    }
    public function getDMtinhDel($id){
                $cate = DMTinh::find($id);
                $cate ->delete();
                 return redirect()->route('danh-sach-tinh-thanh')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    }
  }
