<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MonanAddRequest;
use App\Http\Requests\MonanEditRequest;
use App\Models\DMMonan;
use App\Models\Diadiem;
use App\Models\Monan;
use Auth,DateTime,File;
class MonanController extends Controller
{
    public function getMonanAdd()
    {
        $dmmonan = DMMonan::select()->get()->toArray();
        $diadiem = Diadiem::select()->get()->toArray();
        return view('admin.module.monan.add',['dmmonan'=>$dmmonan,'diadiem'=>$diadiem]); 

    }
     public function postMonanAdd(MonanAddRequest $request)
    {
        $news = new Monan;
        $file = $request->file('newsImg');
        $news->tenmonan = $request->txtTitle;
        $news->slug = str_slug($request->txtTitle,"-");
        $news->dongia =$request->txtdongia;
        $news->gioithieu =$request->txtgioithieu;

        if(strlen($file) > 0){
            $fImageCurrent = $request ->fImageCurrent;
            $filename = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news/';
            $file->move($destinationPath, $filename);
            $news->hinhanh = $filename;

        }
        $news->DMMA_id =$request->sltCate;
        $news->ddiem_id =$request->sltCate1;
        $news->created_at =new DateTime();
        $news->save();
        if ($request->btnSaveNew) {
            return redirect()->route('them-mon-an')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm thành công']);
        } else {
            return redirect()->route('danh-sach-mon-an')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm thành công']);
        }
      
    }
    public function getMonanList()
    {
        $news = Monan::select('id','tenmonan','dongia','gioithieu','hinhanh','DMMA_id','ddiem_id','created_at')->orderBy('id', 'DESC')->get()->toArray();
        $dmmonan = DMMonan::select()->get()->toArray();
        $diadiem = Diadiem::select()->get()->toArray();
        return view('admin.module.monan.list', ['news'=>$news,'dmmonan'=>$dmmonan,'diadiem'=>$diadiem]); 
    }
    public function getMonanDel($id){
        $news = Monan::findOrFail($id);
        if(file_exists(public_path().'/uploads/news/'.$news->hinhanh)){
            File::delete(public_path().'/uploads/news/'.$news->hinhanh);
        }
        $news->delete();
         return redirect()->route('danh-sach-mon-an')->with(['flash_level'=>'success','flash_message'=> 'Xóa thành công']);
    }
     public function getMonanEdit($id){
        $news =Monan::findOrFail($id);
        $cate =DMMonan::select()->get()->toArray();
        return view('admin.module.monan.edit',["data_news"=>$news,'data_cate'=>$cate]);
    }
     public function postMonanEdit(MonanEditRequest $request,$id){
        $news =Monan::findOrFail($id);
        $file = $request->file('newsImg');
        $news->tenmonan = $request->txtTitle;
        $news->dongia =$request->txtdongia;
        $news->gioithieu =$request->txtgioithieu;

        if(strlen($file) > 0){
            $fImageCurrent = $request ->fImageCurrent;
            if(file_exists(public_path().'/uploads/news/'. $fImageCurrent))
            {
            File::delete(public_path().'/uploads/news/'. $fImageCurrent);
             }
            $filename = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news/';
            $file->move($destinationPath, $filename);
            $news->hinhanh = $filename;

        }
        $news->DMMA_id =$request->sltCate;
         $news->ddiem_id =$request->sltCate1;
        $news->updated_at =new DateTime();
         if ($request->btnSaveNew) {
            return redirect()->route('them-mon-an')->with(['flash_level'=>'success','flash_message'=>'Bạn đã sửa thành công']);
        } else {
            return redirect()->route('danh-sach-mon-an')->with(['flash_level'=>'success','flash_message'=>'Bạn đã sửa thành công']);
        }
    }

}
