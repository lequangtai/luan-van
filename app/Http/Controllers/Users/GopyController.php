<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GopyAddRequest;
use App\Http\Requests\GopyEditRequest;
// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\gopy;
use Auth,DateTime,File;
class GopyController extends Controller
{
    public function getgopyAdd()
    {
         if(!Auth::check())
        {
             return redirect()->route('dang-nhap')->with(['flash_level'=>'success','flash_message'=>'Mời bạn đăng nhập để thực hiện chức năng!']);
        }else
        {
        return view('User.page.link.contact'); 
    }

    }
     public function postgopyAdd(GopyAddRequest $request)
    {
        $news = new gopy;
        $file = $request->file('newsImg');
        $news->hoten = $request->txtname;
        $news->noidung =$request->txtmessage;
        $news->email =$request->txtemail;
        $news->users_id =Auth::user()->id;
        $news->created_at =new DateTime();
        $news->save();
        if ($request->btnSaveNew) {
            return redirect()->route('them-gop-y')->with(['flash_level'=>'success','flash_message'=>'Bạn đã gửi ý kiến góp ý thành công']);
        } else {
            return redirect()->route('them-gop-y')->with(['flash_level'=>'success','flash_message'=>'Bạn đã gửi ý kiến góp ý thất bại']);
        }
      
    }
    public function getgopyList()
    {
        $gopy = gopy::select('id','hoten','noidung','email','users_id','created_at')->orderBy('id', 'DESC')->get()->toArray();
        $user = User::select()->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.module.gopy.list', ['gopy'=>$gopy,'user'=>$user]); 
    }
    public function getgopyDel($id){
        $news = gopy::findOrFail($id);
        $news->delete();
         return redirect()->route('danh-sach-gop-y')->with('success', 'Xóa thành công');
    }
    //  public function getgopyEdit($id){
    //     $news =gopy::findOrFail($id);
    //     $cate =User::select()->get()->toArray();
    //     return view('admin.module.gopy.edit',["data_news"=>$news,'data_cate'=>$cate]);
    // }
    //  public function postgopyEdit(GopyEditRequest $request,$id){
    //     $news =gopy::findOrFail($id);
    //     $file = $request->file('newsImg');
    //     $news->hoten = $request->txtTitle;
    //     $news->noidung =$request->txtFull;
    //     $news->email =$request->txtEmail;
    //     $news->users_id =$request->sltCate;
    //     $news->updated_at =new DateTime();
    //      if ($request->btnSaveNew) {
    //         return redirect()->route('them-gop-y')->with('success','Bạn đã sửa thành công');
    //     } else {
    //         return redirect()->route('danh-sach-gop-y')->with('success','Bạn đã sửa thành công');
    //     }
    // }

}
