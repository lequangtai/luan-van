<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersAddRequest;
use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\SinginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Diadiem;
use App\Models\gopy;
use App\Models\Binhluan;
use App\Models\Danhgia;
use DateTime;
use DB,File;
use Hash;

use Illuminate\Support\Facades\Input;
class RegisterController extends Controller
{
    public function getRegister()
    {
    	return view('User.page.link.register'); 
    }
    public function postRegister(UsersAddRequest $request)
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
        // $user->level    =$request->rdoTrangthai;
         $user->level    =0;
        $user->created_at   =new DateTime();
        $user->save();
            
        if ($request->btnSaveNew) {
            return redirect()->route('dang-ky')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm nguoi dung thất bại']);
        } else {
            return redirect()->route('dang-nhap')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm nguoi dung thành công']);
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
         return redirect()->route('danh-sach-nguoi-dung')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
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
            return redirect()->route('getUserEdit',['id' => $id])->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        } else {
            return redirect()->route('danh-sach-nguoi-dung')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm danh mục thành công']);
        }
        
    }

    public function getsingin(){
        
        return view('User.page.link.singin'); 
      
    }

    public function postsingin(SinginRequest $request){

        $singin=array('tendangnhap'=>$request->txttendn,'password'=>$request->pass,'level'=>0);
        if(Auth::attempt($singin)){
            return redirect()->route('index')->with(['flash_level'=>'success','flash_message'=>'Đăng nhập thành công']);
        }else {
            return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Đăng nhập không thành công']);
        }

    }
    public function getDangxuat()
    {
        Auth::logout();
        return redirect()->route('index');
    }

}
