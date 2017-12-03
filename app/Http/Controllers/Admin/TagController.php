<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagAddRequest;
use App\Http\Requests\TagEditRequest;
use App\Models\tag;
use DateTime;

class TagController extends Controller
{
    public function gettagAdd(){
      return view('admin.module.tag.add');
    }
    public function posttagAdd(TagAddRequest $request){
      $cate = new tag;
      $cate->tentag = $request->txtCateName;
       $cate->motatag = $request->txtdes;
      $cate->created_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('them-tag')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-tag')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } 
    }
    public function gettagList(){
        $data = tag::select('id','tentag','motatag')->get();
      return view('admin.module.tag.list',['data'=> $data]);
    }

    public function gettagEdit($id){
      $data = tag::findOrFail($id)->toArray();
      return view('admin.module.tag.edit', ['data'=> $data]);
    }
    public function posttagEdit(TagEditRequest $request, $id){
      $cate = tag::find($id);
      $cate->tentag = $request->txtCateName;
       $cate->motatag = $request->txtdes;
      $cate->updated_at = new DateTime();
      $cate->save();
      if ($request->btnSaveNew) {
            return redirect()->route('gettagEdit',['id' => $id])->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-tag')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        }  
    }
    public function gettagDel($id){
                $cate = tag::find($id);
                $cate ->delete();
                 return redirect()->route('danh-sach-tag')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    }
  }
