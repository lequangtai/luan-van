<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DiadiemAddRequest;
// use App\Http\Requests\DiadiemEditRequest;
use App\Models\DMQuan;
use App\Models\DMTinh;
use App\Models\Diadiem;
use Auth,DateTime,File;
class DiadiemController extends Controller
{
    public function getdiadiemAdd()
    {
         if(!Auth::check())
        {
             return redirect()->route('dang-nhap')->with(['flash_level'=>'success','flash_message'=>'Mời bạn đăng nhập để thực hiện chức năng!']);
        }else
        {
       $diadiem = Diadiem::select()->get()->toArray();
        $tinh = DMTinh::select()->get()->toArray();
         $quan = DMQuan::with('dmtinh')->get()->toArray();
         // echo "<pre>";
         // print_r($quan);
         // echo "</pre>";
        return view('User.page.link.location',['diadiem'=>$diadiem,'tinh'=>$tinh,'quan'=>$quan]); 
    }
           

    }
     public function postdiadiemAdd(DiadiemAddRequest $request)
    {
        
            $news = new Diadiem;
            $file = $request->file('newsImg');
            $news->tendiadiem = $request->txttendiadiem;
            $news->slug = str_slug($request->txttendiadiem,"-");
            $news->diachi =$request->txtdiachi;
            $news->dienthoai =$request->txtdienthoai;
            $news->email = $request->email;
            $news->mota =$request->txtmota;
             if(strlen($file) > 0){
                $fImageCurrent = $request ->fImageCurrent;
                $filename = time().'.'.$file->getClientOriginalName();
                $destinationPath = 'public/uploads/news/';
                $file->move($destinationPath, $filename);
                $news->hinhanh = $filename;

            }
            $news->tinhthanh =$request->sltCate1;
            $news->giathapnhat = $request->txtgiatn;
            $news->giacaonhat =$request->txtgiacn;
            $news->giomocua =$request->txtgiomc;
            $news->giodongcua = $request->txtgiodc;
            $news->DMQ_id =$request->sltCate2;
            $news->users_id =Auth::user()->id;
            $news->created_at =new DateTime();
            $news->save();
            if ($request->btnSaveNew) {
                return redirect()->route('them-dia-diem')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm thành công']);
            } else {
                return redirect()->route('danh-sach-dia-diem')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm thành công']);
            }
    
      
    }
    // public function getdiadiemList()
    // {
    //     $diadiem = Diadiem::select()->orderBy('id', 'DESC')->get()->toArray();
    //     return view('admin.module.gopy.list', ['diadiem'=>$diadiem]); 
    // }
    // public function getdiadiemDel($id){
    //     $news = Diadiem::findOrFail($id);
    //     $news->delete();
    //      return redirect()->route('danh-sach-dia-diem')->with('success', 'Xóa thành công');
    // }
    //  public function getdiadiemEdit($id){
    //     $diadiem =Diadiem::findOrFail($id);
    //     $tinh =DMTinh::select()->get()->toArray();
    //     $quan =DMQuan::select()->get()->toArray();
    //     return view('admin.module.gopy.edit',["diadiem"=>$diadiem,'tinh'=>$tinh,'quan'=>$quan]);
    // }
    //  public function postdiadiemEdit(DiadiemEditRequest $request,$id){
    //     $news =Diadiem::findOrFail($id);
    //     $file = $request->file('newsImg');
    //     $news->tendiadiem = $request->txttendiadiem;
    //     $news->diachi =$request->txtdiachi;
    //     $news->dienthoai =$request->txtdienthoai;
    //     $news->email = $request->email;
    //     $news->mota =$request->txtmota;
    //      if(strlen($file) > 0){
    //         $fImageCurrent = $request ->fImageCurrent;
    //         $filename = time().'.'.$file->getClientOriginalName();
    //         $destinationPath = 'public/uploads/news/';
    //         $file->move($destinationPath, $filename);
    //         $news->hinhanh = $filename;

    //     }
    //     $news->tinhthanh =$request->sltCate1;
    //     $news->giathapnhat = $request->txtTitle;
    //     $news->giacaonhat =$request->txtFull;
    //     $news->giomocua =$request->txtgiomc;
    //     $news->giodongcua = $request->txtgiodc;
    //     $news->DMQ_id =$request->sltCate2;
    //     $news->created_at =new DateTime();
    //     $news->save();
    //     if ($request->btnSaveNew) {
    //         return redirect()->route('them-dia-diem')->with('success','Bạn đã sửa thành công');
    //     } else {
    //         return redirect()->route('danh-sach-dia-diem')->with('success','Bạn đã sửa thành công');
    //     }

}
