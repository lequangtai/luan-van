<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImgDiadiemAddRequest;
use App\Http\Requests\ImgDiadiemEditRequest;
use App\Models\img_diadiem;
use App\Models\Diadiem;
use Auth,DateTime,File;
class ImgDiadiemController extends Controller
{
    public function getImgDiadiemAdd()
    {
        $imgdiadiem = Diadiem::select()->get()->toArray();
        return view('admin.module.img-diadiem.add',['imgdiadiem'=>$imgdiadiem]); 

    }
     public function postImgDiadiemAdd(ImgDiadiemAddRequest $request)
    {
        $news = new img_diadiem;
        $file = $request->file('newsImg');

        if(strlen($file) > 0){
            $fImageCurrent = $request ->fImageCurrent;
            $filename = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news/';
            $file->move($destinationPath, $filename);
            $news->images = $filename;

        }
        $news->diadiem_id =$request->sltCate;
        $news->created_at =new DateTime();
        $news->save();
        if ($request->btnSaveNew) {
            return redirect()->route('them-hinh-anh-dia-diem')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm thành công']);
        } else {
            return redirect()->route('danh-sach-hinh-anh-dia-diem')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm thành công']);
        }
      
    }
    public function getImgDiadiemList()
    {
        $imgdiadiem = img_diadiem::select()->orderBy('id', 'DESC')->get()->toArray();
        $diadiem = Diadiem::select()->get()->toArray();
        return view('admin.module.img-diadiem.list', ['imgdiadiem'=>$imgdiadiem,'diadiem'=>$diadiem]); 
    }
    public function getImgDiadiemDel($id){
        $news = img_diadiem::findOrFail($id);
        if(file_exists(public_path().'/uploads/news/'.$news->hinhanh)){
            File::delete(public_path().'/uploads/news/'.$news->hinhanh);
        }
        $news->delete();
         return redirect()->route('danh-sach-hinh-anh-dia-diem')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    }
     public function getImgDiadiemEdit($id){
        $imgdiadiem =img_diadiem::findOrFail($id);
        $diadiem =Diadiem::select()->get()->toArray();
        return view('admin.module.img-diadiem.edit',["imgdiadiem"=>$imgdiadiem,'diadiem'=>$diadiem]);
    }
     public function postImgDiadiemEdit(ImgDiadiemEditRequest $request,$id){
        $news =img_diadiem::findOrFail($id);
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
        $news->diadiem_id =$request->sltCate;
        $news->updated_at =new DateTime();
        $news->save();
         if ($request->btnSaveNew) {
            return redirect()->route('them-hinh-anh-dia-diem')->with(['flash_level'=>'success','flash_message'=>'Bạn đã sửa thành công']);
        } else {
            return redirect()->route('danh-sach-hinh-anh-dia-diem')->with(['flash_level'=>'success','flash_message'=>'Bạn đã sửa thành công']);
        }
    }

}
