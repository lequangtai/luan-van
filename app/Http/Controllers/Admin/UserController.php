<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersAddRequest;
use App\Http\Requests\UsersEditRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Diadiem;
use App\Models\gopy;
use App\Models\Binhluan;
use App\Models\Danhgia;
use DateTime;
use DB,File;
use Illuminate\Support\Facades\Input;
class UserController extends Controller
{
    public function getUserAdd()
    {
        $user=User::select()->get()->toArray();
    	return view('admin.module.user.add',['user'=>$user]); 
    }
    public function postUserAdd(UsersAddRequest $request)
    {
        $user           = new User;
        $file           = $request->file('newsImg');
        $user->tenusers    = $request->txtTen;
        $user->tendangnhap = $request->tendn;
       $user->password     =bcrypt($request->txtPass);
        $user->gioitinh = $request->rdoGioitinh;
        $user->diachi   = $request->txtDiachi;
        $user->email    = $request->txtEmail;
        $user->dienthoai      = $request->txtSDT;
        if(strlen($file) > 0){
            $fImageCurrent   = $request ->fImageCurrent;
            $filename        = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news/';
            $file->move($destinationPath, $filename);
            $user->hinhanh   = $filename;
        }
        $user->level    =$request->rdoTrangthai;
        $user->created_at   =new DateTime();
        $user->save();
            
        if ($request->btnSaveNew) {
            return redirect()->route('them-nguoi-dung')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm users thành công']);
        } else {
            return redirect()->route('danh-sach-nguoi-dung')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm users thành công']);
        }

        
    }
    public function getUserList()
    {
        $users=User::select()->get()->toArray();       
        return view('admin.module.user.list',['users'=>$users]); 
     
    }
    public function getUserDel($id){
        $user = User::findOrFail($id);
        $user->delete();
         return redirect()->route('danh-sach-nguoi-dung')->with(['flash_level'=>'success','flash_message'=> 'Xóa thành công']);
    }
     public function getUserEdit($id){
        $user =User::findOrFail($id);
        return view('admin.module.user.edit',['user'=>$user]);
    }
     public function postUserEdit(UsersEditRequest $request,$id){
        $user             =User::findOrFail($id);
        $file           = $request->file('newsImg');
        $user->tenusers    = $request->txtTen;
        $user->tendangnhap = $request->tendn;
       // $user->matkhau     =bcrypt($request->txtPass);
        $user->gioitinh = $request->rdoGioitinh;
        $user->diachi   = $request->txtDiachi;
        $user->email    = $request->txtEmail;
        $user->dienthoai      = $request->txtSDT;
        if(strlen($file) > 0){
            $fImageCurrent   = $request ->fImageCurrent;
            $filename        = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news/';
            $file->move($destinationPath, $filename);
            $user->hinhanh   = $filename;
        }
        $user->level    =$request->rdoTrangthai;
        $user->created_at   =new DateTime();
        $user->save();
        if ($request->btnSaveNew) {
            return redirect()->route('getUserEdit',['id' => $id])->with('success','Bạn đã sửa danh mục thành công');
        } else {
            return redirect()->route('danh-sach-nguoi-dung')->with('success','Bạn đã sửa danh mục thành công');
        }
        
    }

}
