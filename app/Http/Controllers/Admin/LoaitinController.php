<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoaitinAddRequest;
use App\Http\Requests\LoaitinEditRequest;
use App\Models\Loaitin;
use DateTime;

class LoaitinController extends Controller
{
    public function getCateAdd(){
        $data = Loaitin::select('id','tenloaitin','id_cha')->get();
      return view('admin.module.loaitin.add',['dataCate' =>$data]);
    }
    public function postCateAdd(LoaitinAddRequest $request){
      $cate = new Loaitin;
      $cate->tenloaitin = $request->txtCateName;
      $cate->id_cha = $request->sltCate;
      $cate->created_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('them-loai-tin')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-loai-tin')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } 
    }
    public function getCateList(){
        $data = Loaitin::select('id', 'tenloaitin', 'id_cha')->get();
      return view('admin.module.loaitin.list',['data'=> $data]);
    }

    public function getCateEdit($id){
      $data = Loaitin::findOrFail($id)->toArray();
      $parent = Loaitin::select('id','tenloaitin','id_cha')->get()->toArray();
      return view('admin.module.loaitin.edit', ['data'=> $data, 'parent' =>$parent]);
    }
    public function postCateEdit(LoaitinEditRequest $request, $id){
      $cate = Loaitin::find($id);
      $cate->tenloaitin = $request->txtCateName;
      $cate->id_cha = $request->sltCate;
      $cate->updated_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('getCateEdit',['id' => $id])->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-loai-tin')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        }  
    }
    public function getCateDel($id){
            $parent = Loaitin::where('id_cha', $id)->count();
            if($parent ==0){
                $cate = Loaitin::find($id);
                $cate ->delete($id);
                 return redirect()->route('danh-sach-loai-tin')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
            }
            else{
               return redirect()->route('danh-sach-loai-tin')->with(['flash_level'=>'success','flash_message'=> 'Không thể xóa danh mục này']);   
            }
    }
}
