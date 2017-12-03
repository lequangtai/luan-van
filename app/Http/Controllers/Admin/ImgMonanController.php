<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImgMonanAddRequest;
use App\Http\Requests\ImgMonanEditRequest;
use App\Models\img_monan;
use App\Models\Monan;
use Auth,DateTime,File;
class ImgMonanController extends Controller
{
    public function getImgMonanAdd()
    {
        $imgmonan = Monan::select()->get()->toArray();
        return view('admin.module.img-monan.add',['imgmonan'=>$imgmonan]); 

    }
     public function postImgMonanAdd(ImgMonanAddRequest $request)
    {
        $news = new img_monan;
        $file = $request->file('newsImg');

        if(strlen($file) > 0){
            $fImageCurrent = $request ->fImageCurrent;
            $filename = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news/';
            $file->move($destinationPath, $filename);
            $news->images = $filename;

        }
        $news->monan_id =$request->sltCate;
        $news->created_at =new DateTime();
        $news->save();
        if ($request->btnSaveNew) {
            return redirect()->route('them-hinh-anh-mon-an')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm thành công']);
        } else {
            return redirect()->route('danh-sach-hinh-anh-mon-an')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm thành công']);
        }
      
    }
    public function getImgMonanList()
    {
        $news = img_monan::select()->orderBy('id', 'DESC')->get()->toArray();
        $imgmonan = Monan::select()->get()->toArray();
        return view('admin.module.img-monan.list', ['news'=>$news,'imgmonan'=>$imgmonan]); 
    }
    public function getImgMonanDel($id){
        $news = img_monan::findOrFail($id);
        if(file_exists(public_path().'/uploads/news/'.$news->hinhanh)){
            File::delete(public_path().'/uploads/news/'.$news->hinhanh);
        }
        $news->delete();
         return redirect()->route('danh-sach-hinh-anh-mon-an')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    }
     public function getImgMonanEdit($id){
        $imgmonan =img_monan::findOrFail($id);
        $monan =Monan::select()->get()->toArray();
        return view('admin.module.img-monan.edit',["imgmonan"=>$imgmonan,'monan'=>$monan]);
    }
     public function postImgMonanEdit(ImgMonanEditRequest $request,$id){
        $news =img_monan::findOrFail($id);
        $file = $request->file('newsImg');

        if(strlen($file) > 0){
            $fImageCurrent = $request ->fImageCurrent;
            if(file_exists(public_path().'/uploads/news/'. $fImageCurrent))
            {
            File::delete(public_path().'/uploads/news/'. $fImageCurrent);
             }
            $filename = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news/';
            $file->move($destinationPath, $filename);
            $news->images = $filename;

        }
        $news->monan_id =$request->sltCate;
        $news->updated_at =new DateTime();
        $news->save();
         if ($request->btnSaveNew) {
            return redirect()->route('them-hinh-anh-mon-an')->with(['flash_level'=>'success','flash_message'=>'Bạn đã sửa thành công']);
        } else {
            return redirect()->route('danh-sach-hinh-anh-mon-an')->with(['flash_level'=>'success','flash_message'=>'Bạn đã sửa thành công']);
        }
    }

}
