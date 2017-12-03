<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('User.master');
// });
// Route::get('blade', function () {
//     return view('child');
// });
Route::group(['prefix'=>'/', 'namespace' =>'Users'], function(){
		// Route::get('/', ['uses'=>'MainController@getIndex'])->name('index');
		// Route::get('basic-slider','MainController@getbasicslider')->name('getbasicslider');
		// Route::get('accordion-slider','MainController@getaccordionslider')->name('getaccordionslider');
		// Route::get('thumb-slider','MainController@getthumbslider')->name('getthumbslider');
		// Route::get('nivo-slider','MainController@getnivoslider')->name('getnivoslider');
		// Route::get('right-slider','MainController@getrightslider')->name('getrightslider');
		// Route::get('recipes','MainController@getrecipes')->name('getrecipes');
		// Route::get('single-sb','MainController@getsinglesb')->name('getsinglesb');
		// Route::get('single-full','MainController@getsinglefull')->name('getsinglefull');
		// Route::get('services','MainController@getservices')->name('getservices');
		// Route::get('blog','MainController@getblog')->name('getblog');
		// Route::get('single','MainController@getsingle')->name('getsingle');
		// Route::get('page','MainController@getpage')->name('getpage');
		// Route::get('faq','MainController@getfaq')->name('getfaq');
		// Route::get('features','MainController@getfeatures')->name('getfeatures');
		
		
		// Route::get('maps','MainController@getmaps')->name('getmaps');
		// Route::get('singin','MainController@getsingin')->name('getsingin');
		
		// Route::get('them-dia-diem','DiadiemController@getdiadiemAdd')->name('them-dia-diem');
		// Route::post('them-dia-diem','DiadiemController@postdiadiemAdd')->name('postdiadiemAdd');
		
		
		// Route::group(['prefix'=>'thongtintaikhoan'], function(){
		// 	Route::get('dangky', 'RegisterController@getRegister')->name('dang-ky');
		// 	Route::post('dangky', 'RegisterController@postRegister')->name('postRegister');
		// 	Route::get('dangnhap', 'RegisterController@getsingin')->name('dang-nhap');
		// 	Route::post('dangnhap', 'RegisterController@postsingin')->name('postsingin');
		// 	Route::get('logout', 'RegisterController@getDangxuat')->name('getDangxuat');
			
		// });
		// Route::group(['prefix'=>'contact'], function(){
		// Route::get('gopy','GopyController@getgopyAdd')->name('them-gop-y');
		// Route::post('gopy','GopyController@postgopyAdd')->name('postUserAdd');
		// });
		
	});
/*------------------người dùng mới--------------------------*/

Route::group(['prefix'=>'/', 'namespace' =>'Users'], function(){
		Route::get('/', ['uses'=>'MainController@getIndex'])->name('index');
		Route::get('memu','MainController@getmenu')->name('getmenu');
		Route::get('aboutus','MainController@getaboutus')->name('getaboutus');
		Route::get('monan','MainController@getmonan')->name('getmonan');
		Route::get('page-sidebar','MainController@getpagesidebar')->name('getpagesidebar');
		Route::get('portfolio-2-column','MainController@getportfolio2')->name('getportfolio2');
		Route::get('portfolio-3-column','MainController@getportfolio3')->name('getportfolio3');
		Route::get('chi-tiet-dia-diem/{id}/{slug}','MainController@getportfolio4')->where('id','[0-9]+');
		Route::get('chi-tiet-mon-an/{id}/{slug}','MainController@getchitietmonan')->where('id','[0-9]+');
		Route::get('blog','MainController@getblog')->name('getblog');
		Route::get('portfolio-post','MainController@getportfoliopost')->name('getportfoliopost');
		Route::get('menu-post','MainController@getmenupost')->name('getmenupost');
		Route::get('mon-an','MainController@getddmonan')->name('getddmonan');
		Route::get('mon-an','MainController@gettintuc')->name('gettintuc');
		
		
		
		Route::get('maps','MainController@getmaps')->name('getmaps');
		Route::get('singin','MainController@getsingin')->name('getsingin');

		Route::get('them-dia-diem','DiadiemController@getdiadiemAdd')->name('them-dia-diem');
		Route::post('them-dia-diem','DiadiemController@postdiadiemAdd')->name('postdiadiemAdd');
			
		
		Route::group(['prefix'=>'thongtintaikhoan'], function(){
			Route::get('dangky', 'RegisterController@getRegister')->name('dang-ky');
			Route::post('dangky', 'RegisterController@postRegister')->name('postRegister');
			Route::get('dangnhap', 'RegisterController@getsingin')->name('dang-nhap');
			Route::post('dangnhap', 'RegisterController@postsingin')->name('postsingin');
			Route::get('logout', 'RegisterController@getDangxuat')->name('getDangxuat');
			
		});
		Route::group(['prefix'=>'contact'], function(){
		Route::get('gopy','GopyController@getgopyAdd')->name('them-gop-y');
		Route::post('gopy','GopyController@postgopyAdd')->name('postUserAdd');
		});
		// Route::get('binh-luan/{id}','BinhluanController@getbinhluanAdd');
		Route::post('binh-luan/{id}','BinhluanController@postbinhluanAdd');
		Route::get('delete/{id}','BinhluanController@getbinhluanDel')->name('getbinhluanDel');
		Route::get('tim-kiem-dia-diem','BinhluanController@gettkdiadiemAdd')->name('tim-kiem-dia-diem');
		Route::post('tim-kiem-dia-diem','BinhluanController@posttkdiadiemAdd')->name('posttkdiadiemAdd');
		Route::get('tin-tuc','TintucController@getTintuc')->name('tin-tuc-dia-diem');
		Route::post('tin-tuc','TintucController@postTintuc')->name('postTintuc');
		Route::get('loai-tuc/{id}','TintucController@getLoaiTintuc');
		
	});

/*------------------LOGIN NÈ--------------------------*/
Route::get('login', 'LoginController@getLogin')->name('getLogin');
Route::post('login', 'LoginController@postLogin')->name('postLogin');
Route::get('logout', 'LoginController@getLogout')->name('getLogout');

/*------------------ADMIN NÈ--------------------------*/
Route::group(['middleware'=>'adminlogin'], function()
{
	Route::group(['prefix'=>'admin', 'namespace' =>'Admin'], function(){
		
		Route::get('/', 'TrangchuController@getshow')->name('getshow');
		});
	Route::group(['prefix'=>'loaitin'], function(){
			Route::get('add','Admin\LoaitinController@getCateAdd')->name('them-loai-tin');
			Route::post('add','Admin\LoaitinController@postCateAdd')->name('postCateAdd');
			Route::get('list','Admin\LoaitinController@getCateList')->name('danh-sach-loai-tin');
			Route::get('delete/{id}','Admin\LoaitinController@getCateDel')->name('getCateDel');
			Route::get('edit/{id}','Admin\LoaitinController@getCateEdit')->name('getCateEdit');
			Route::post('edit/{id}','Admin\LoaitinController@postCateEdit')->name('postCateEdit');
		});
	Route::group(['prefix'=>'tintuc'], function(){
			Route::get('add','Admin\TintucController@getNewsAdd')->name('them-tin-tuc');
			Route::post('add','Admin\TintucController@postNewsAdd')->name('getNewsAdd');
			Route::get('list','Admin\TintucController@getNewsList')->name('danh-sach-tin-tuc');
			Route::get('delete/{id}','Admin\TintucController@getNewsDel')->name('getNewsDel');
			Route::get('edit/{id}','Admin\TintucController@getNewsEdit')->name('getNewsEdit');
			Route::post('edit/{id}','Admin\TintucController@postNewsEdit')->name('postNewsEdit');
		});
	Route::group(['prefix'=>'tinhthanh'], function(){
			Route::get('add','Admin\DMtinhthanhController@getDMtinhAdd')->name('them-tinh-thanh');
			Route::post('add','Admin\DMtinhthanhController@postDMtinhAdd')->name('postDMtinhAdd');
			Route::get('list','Admin\DMtinhthanhController@getDMtinhList')->name('danh-sach-tinh-thanh');
			Route::get('delete/{id}','Admin\DMtinhthanhController@getDMtinhDel')->name('getDMtinhDel');
			Route::get('edit/{id}','Admin\DMtinhthanhController@getDMtinhEdit')->name('getDMtinhEdit');
			Route::post('edit/{id}','Admin\DMtinhthanhController@postCateEdit')->name('postCateEdit');
		});
	Route::group(['prefix'=>'quan'], function(){
			Route::get('add','Admin\DMQuanController@getDMquanAdd')->name('them-quan');
			Route::post('add','Admin\DMQuanController@postDMquanAdd')->name('postDMtinhAdd');
			Route::get('list','Admin\DMQuanController@getDMquanList')->name('danh-sach-quan');
			Route::get('delete/{id}','Admin\DMQuanController@getDMquanDel')->name('getDMquanDel');
			Route::get('edit/{id}','Admin\DMQuanController@getDMquanEdit')->name('getDMquanEdit');
			Route::post('edit/{id}','Admin\DMQuanController@postquanEdit')->name('postquanEdit');
		});
	Route::group(['prefix'=>'danhmucdanhgia'], function(){
			Route::get('add','Admin\DMdanhgiaController@getDMdanhgiaAdd')->name('them-danh-muc-danh-gia');
			Route::post('add','Admin\DMdanhgiaController@postDMdanhgiaAdd')->name('postDMtinhAdd');
			Route::get('list','Admin\DMdanhgiaController@getDMdanhgiaList')->name('danh-sach-danh-muc-danh-gia');
			Route::get('delete/{id}','Admin\DMdanhgiaController@getDMdanhgiaDel')->name('getDMdanhgiaDel');
			Route::get('edit/{id}','Admin\DMdanhgiaController@getDMdanhgiaEdit')->name('getDMdanhgiaEdit');
			Route::post('edit/{id}','Admin\DMdanhgiaController@postdanhgiaEdit')->name('postdanhgiaEdit');
		});
	Route::group(['prefix'=>'tag'], function(){
			Route::get('add','Admin\TagController@gettagAdd')->name('them-tag');
			Route::post('add','Admin\TagController@posttagAdd')->name('postDMtinhAdd');
			Route::get('list','Admin\TagController@gettagList')->name('danh-sach-tag');
			Route::get('delete/{id}','Admin\TagController@gettagDel')->name('gettagDel');
			Route::get('edit/{id}','Admin\TagController@gettagEdit')->name('gettagEdit');
			Route::post('edit/{id}','Admin\TagController@posttagEdit')->name('posttagEdit');
		});
	Route::group(['prefix'=>'danhmucmonan'], function(){
			Route::get('add','Admin\DMmonanController@getDMmonanAdd')->name('them-danh-muc-mon-an');
			Route::post('add','Admin\DMmonanController@postDMmonanAdd')->name('postDMtinhAdd');
			Route::get('list','Admin\DMmonanController@getDMmonanList')->name('danh-sach-danh-muc-mon-an');
			Route::get('delete/{id}','Admin\DMmonanController@getDMmonanDel')->name('getDMmonanDel');
			Route::get('edit/{id}','Admin\DMmonanController@getDMmonanEdit')->name('getDMmonanEdit');
			Route::post('edit/{id}','Admin\DMmonanController@postmonanEdit')->name('postmonanEdit');
		});
	Route::group(['prefix'=>'user'], function(){
			Route::get('add','Admin\UserController@getUserAdd')->name('them-nguoi-dung');
			Route::post('add','Admin\UserController@postUserAdd')->name('postUserAdd');
			Route::get('list','Admin\UserController@getUserList')->name('danh-sach-nguoi-dung');
			Route::get('delete/{id}','Admin\UserController@getUserDel')->name('getUserDel');
			Route::get('edit/{id}','Admin\UserController@getUserEdit')->name('getUserEdit');
			Route::post('edit/{id}','Admin\UserController@postUserEdit')->name('postUserEdit');
		});
	Route::group(['prefix'=>'gopy'], function(){
			Route::get('list','Users\GopyController@getgopyList')->name('danh-sach-gop-y');
			Route::get('delete/{id}','Users\GopyController@getgopyDel')->name('getgopyDel');
			
		});
	Route::group(['prefix'=>'binhluan'], function(){
			Route::get('list','Users\BinhluanController@getbinhluanList')->name('danh-sach-binh-luan');
			Route::get('delete/{id}','Users\BinhluanController@getbinhluanDel')->name('getbinhluanDel');
			
		});
	Route::group(['prefix'=>'monan'], function(){
			Route::get('add','Admin\MonanController@getMonanAdd')->name('them-mon-an');
			Route::post('add','Admin\MonanController@postMonanAdd')->name('getMonanAdd');
			Route::get('list','Admin\MonanController@getMonanList')->name('danh-sach-mon-an');
			Route::get('delete/{id}','Admin\MonanController@getMonanDel')->name('getMonanDel');
			Route::get('edit/{id}','Admin\MonanController@getMonanEdit')->name('getMonanEdit');
			Route::post('edit/{id}','Admin\MonanController@postMonanEdit')->name('postMonanEdit');
		});
	Route::group(['prefix'=>'hinhanhmonan'], function(){
			Route::get('add','Admin\ImgMonanController@getImgMonanAdd')->name('them-hinh-anh-mon-an');
			Route::post('add','Admin\ImgMonanController@postImgMonanAdd')->name('getMonanAdd');
			Route::get('list','Admin\ImgMonanController@getImgMonanList')->name('danh-sach-hinh-anh-mon-an');
			Route::get('delete/{id}','Admin\ImgMonanController@getImgMonanDel')->name('getImgMonanDel');
			Route::get('edit/{id}','Admin\ImgMonanController@getImgMonanEdit')->name('getImgMonanEdit');
			Route::post('edit/{id}','Admin\ImgMonanController@postImgMonanEdit')->name('postImgMonanEdit');
		});
	Route::group(['prefix'=>'hinhanhdiadiem'], function(){
			Route::get('add','Admin\ImgDiadiemController@getImgDiadiemAdd')->name('them-hinh-anh-dia-diem');
			Route::post('add','Admin\ImgDiadiemController@postImgDiadiemAdd')->name('getDiadiemAdd');
			Route::get('list','Admin\ImgDiadiemController@getImgDiadiemList')->name('danh-sach-hinh-anh-dia-diem');
			Route::get('delete/{id}','Admin\ImgDiadiemController@getImgDiadiemDel')->name('getImgDiadiemDel');
			Route::get('edit/{id}','Admin\ImgDiadiemController@getImgDiadiemEdit')->name('getImgDiadiemEdit');
			Route::post('edit/{id}','Admin\ImgDiadiemController@postImgDiadiemEdit')->name('postImgDiadiemEdit');
		});
	Route::group(['prefix'=>'slidebar'], function(){
			Route::get('add','Admin\SlidebarController@getSlidebarAdd')->name('them-slidebar');
			Route::post('add','Admin\SlidebarController@postSlidebarAdd')->name('postSlidebarAdd');
			Route::get('list','Admin\SlidebarController@getSlidebarList')->name('danh-sach-slidebar');
			Route::get('delete/{id}','Admin\SlidebarController@getSlidebarDel')->name('getSlidebarDel');
			Route::get('edit/{id}','Admin\SlidebarController@getSlidebarEdit')->name('getSlidebarEdit');
			Route::post('edit/{id}','Admin\SlidebarController@postSlidebarEdit')->name('postSlidebarEdit');
		});
	Route::group(['prefix'=>'location'], function(){
			Route::get('list','Admin\DiadiemController@getdiadiemList')->name('danh-sach-dia-diem');
			
		});

	
 });


