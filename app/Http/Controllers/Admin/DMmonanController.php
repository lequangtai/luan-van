<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DMMonanAddRequest;
use App\Http\Requests\DMMonanEditRequest;
use App\Models\DMMonan;
use DateTime;

class DMmonanController extends Controller
{
    public function getDMmonanAdd(){
      return view('admin.module.danhmucmonan.add');
    }
    public function postDMmonanAdd(DMMonanAddRequest $request){
      $cate = new DMMonan;
      $cate->ten_DMMA = $request->txtCateName;
      $cate->created_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('them-danh-muc-mon-an')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-danh-muc-mon-an')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } 
    }
    public function getDMmonanList(){
        $data = DMMonan::select('id','ten_DMMA')->get();
      return view('admin.module.danhmucmonan.list',['data'=> $data]);
    }

    public function getDMmonanEdit($id){
      $data = DMMonan::findOrFail($id)->toArray();
      return view('admin.module.danhmucmonan.edit', ['data'=> $data]);
    }
    public function postmonanEdit(DMMonanEditRequest $request, $id){
      $cate = DMMonan::find($id);
      $cate->ten_DMMA = $request->txtCateName;
      $cate->updated_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('getDMmonanEdit',['id' => $id])->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-danh-muc-mon-an')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        }  
    }
    public function getDMmonanDel($id){
                $cate = DMMonan::find($id);
                $cate ->delete();
                 return redirect()->route('danh-sach-danh-muc-mon-an')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    }
  }
