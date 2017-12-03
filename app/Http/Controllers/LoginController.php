<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use LaravelCaptcha\Facades\Captcha;
use App\Models\User;
class LoginController extends Controller
{
    public function getLogin()
    {
	    if(!Auth::check())
	    {
	      return view('admin.module.login.login', ['captcha' => Captcha::html()])->with(['flash_level'=>'success','flash_message'=>'Đăng nhập không thành công']);
	    } else
		    {
		      return redirect('admin');
		    }
   }
   public function postLogin(LoginRequest $request)
   {
	    $login =[
	        'tendangnhap' =>$request->txtUser,
	        'password' =>$request->txtPass,
	        'level'=>1
	       
	    ];
	    if (Auth :: attempt($login))
	    {
	        return redirect('admin');
	    }else
		    {
		        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Đăng nhập không thành công']);
		    }
	}
	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('getLogin');
	}
}
