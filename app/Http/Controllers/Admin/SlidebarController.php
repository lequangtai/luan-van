<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SlidebarAddRequest;
use App\Http\Requests\SlidebarEditRequest;
use App\Models\slidebar;
use Auth,DateTime,File;
class SlidebarController extends Controller
{
    public function getSlidebarAdd()
    {
        return view('admin.module.slidebar.add'); 

    }
     public function postSlidebarAdd(SlidebarAddRequest $request)
    {
        $news = new slidebar;
        $file = $request->file('newsImg');

        if(strlen($file) > 0){
            $fImageCurrent = $request ->fImageCurrent;
            $filename = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news/';
            $file->move($destinationPath, $filename);
            $news->tenslidebar = $filename;

        }
        $news->trangthai =$request->rdoPublic;
        $news->mota =$request->txtmota;
        $news->created_at =new DateTime();
        $news->save();
        if ($request->btnSaveNew) {
            return redirect()->route('them-slidebar')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm thành công']);
        } else {
            return redirect()->route('danh-sach-slidebar')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm thành công']);
        }
      
    }
    public function getSlidebarList()
    {
        $slide = slidebar::select()->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.module.slidebar.list', ['slide'=>$slide]); 
    }
    public function getSlidebarDel($id){
        $news = slidebar::findOrFail($id);
        if(file_exists(public_path().'/uploads/news/'.$news->tenslidebar)){
            File::delete(public_path().'/uploads/news/'.$news->tenslidebar);
        }
        $news->delete();
         return redirect()->route('danh-sach-slidebar')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    }
     public function getSlidebarEdit($id){
        $slide =slidebar::findOrFail($id);
        return view('admin.module.slidebar.edit',['slide'=>$slide]);
    }
     public function postSlidebarEdit(SlidebarEditRequest $request,$id){
        $news =slidebar::findOrFail($id);
        $file = $request->file('newsImg');

        if(strlen($file) > 0){
            $fImageCurrent = $request ->fImageCurrent;
            if(file_exists(public_path().'uploads/news/'. $fImageCurrent))
            {
            File::delete(public_path().'uploads/news/'. $fImageCurrent);
             }
            $filename = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news/';
            $file->move($destinationPath, $filename);
            $news->tenslidebar = $filename;

        }
        $news->trangthai =$request->rdoPublic;
        $news->mota =$request->txtmota;
        $news->updated_at =new DateTime();
        $news->save();
         if ($request->btnSaveNew) {
            return redirect()->route('them-slidebar')->with(['flash_level'=>'success','flash_message'=>'Bạn đã sửa thành công']);
        } else {
            return redirect()->route('danh-sach-slidebar')->with(['flash_level'=>'success','flash_message'=>'Bạn đã sửa thành công']);
        }
    }

}
