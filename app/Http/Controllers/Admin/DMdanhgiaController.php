<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DMdanhgiaAddRequest;
use App\Http\Requests\DMdanhgiaEditRequest;
use App\Models\DMDanhgia;
use DateTime;

class DMdanhgiaController extends Controller
{
    public function getDMdanhgiaAdd(){
      return view('admin.module.danhmucdanhgia.add');
    }
    public function postDMdanhgiaAdd(DMdanhgiaAddRequest $request){
      $cate = new DMDanhgia;
      $cate->ten_DMDG = $request->txtCateName;
      $cate->created_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('them-danh-muc-danh-gia')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-danh-muc-danh-gia')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } 
    }
    public function getDMdanhgiaList(){
        $data = DMDanhgia::select('id','ten_DMDG')->get();
      return view('admin.module.danhmucdanhgia.list',['data'=> $data]);
    }

    public function getDMdanhgiaEdit($id){
      $data = DMDanhgia::findOrFail($id)->toArray();
      // $parent = DMTinh::select('id','tentinhthanh')->get()->toArray();
      return view('admin.module.danhmucdanhgia.edit', ['data'=> $data]);
    }
    public function postdanhgiaEdit(DMdanhgiaEditRequest $request, $id){
      $cate = DMDanhgia::find($id);
      $cate->ten_DMDG = $request->txtCateName;
      $cate->updated_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('getDMdanhgiaEdit',['id' => $id])->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-danh-muc-danh-gia')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        }  
    }
    public function getDMdanhgiaDel($id){
                $cate = DMDanhgia::find($id);
                $cate ->delete();
                 return redirect()->route('danh-sach-danh-muc-danh-gia')->with(['flash_level'=>'success','flash_message'=> 'Xóa thành công']);
    }
  }
