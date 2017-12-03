<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BinhluanAddRequest;
use App\Http\Requests\BinhluanEditRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Diadiem;
use App\Models\Binhluan;
use App\Models\DMMonan;
use App\Models\Monan;
use DateTime,File;
class BinhluanController extends Controller
{
   
     public function postbinhluanAdd($id,Request $request)
    {
        
        $diadiem_id=$id;
        $diadiem=Diadiem::find($id);
        $news = new Binhluan;
        $news->noidung =$request->txtnoidung;
        $news->users_id =Auth::user()->id;
        $news->diadiem_id=$diadiem_id;
        $news->created_at =new DateTime();
        $news->save();
            return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Bạn đã gửi bình luận thành công']);

    }
    public function getbinhluanList()
    {
        $binhluans = Binhluan::with('diadiem')->orderBy('id', 'DESC')->get()->toArray();
        $diadiems = Diadiem::select()->orderBy('id', 'DESC')->get()->toArray();
        $users = User::select()->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.module.binhluan.list', ['binhluans'=>$binhluans,'diadiems'=>$diadiems,'users'=>$users]); 
    }
   
    public function getbinhluanDel($id){
        $news = Binhluan::findOrFail($id);
        $news->delete();
         return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    }
    // public function gettkdiadiemAdd()
    // {
    //      if(!Auth::check())
    //     {
    //          return redirect()->route('dang-nhap')->with(['flash_level'=>'success','flash_message'=>'Mời bạn đăng nhập để thực hiện chức năng!']);
    //     }else
    //     {
           
    //          $data = Diadiem::select()->get()->toArray();
    //     return view('User.page.link.timdiadiem',['data'=>$data]); 
    // }

    // }
    //  public function posttkdiadiemAdd()
    // {
    //   return view('User.page.link.timdiadiem');
      
    // }
    // public function timkh(Request $request){
    //   $tukhoa = $request->tukhoa;
    //   $tukhoa1 = $request->sltQuan;
    //   $tukhoa2 = $request->phuong;
    //   $data = Khachhang::where('tenkh', 'like', "%$tukhoa%")->where('quan', 'like', "%$tukhoa1%")->where('phuong', 'like', "%$tukhoa2%")->get();
    //   return view('admin.module.tracuu.tckhachhang.dstim',['data'=>$data]);
    // }

}
