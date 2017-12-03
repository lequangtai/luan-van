@extends('admin.app')
@section('title','Sửa User')
@section('content')
<section class="content">
  @include('admin.block.error')
@include('admin.block.flash')
<form action="" method="POST" enctype="multipart/form-data"> 
{{ csrf_field() }}
  <div class="row">
    <div class="box-body"></div>
      <div class="col-xs-12">
        <div class="box box-danger">
            <button type="submit" name="btnSaveNew" value="btnSaveNew" class="btn btn-primary margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-plus-square"></i></b>Save & New</button> 
            <button type="submit" name="btnSaveClose" value="btnSaveClose" class="btn btn-success margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-save"></i></b>Save & Close</button>
            <a href="{{ route('danh-sach-nguoi-dung') }}" class="btn btn-danger margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-close"></i></b>Close</a>
          
        </div>
      </div>
      <div class="col-xs-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Sửa users</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <div class="box-body" style="padding-left: 200px">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Họ tên</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="txtTen" placeholder="Nhập tên" style="width: 500px" value="{!!old('txtTen', isset($user["tenusers"]) ? $user["tenusers"]:null)!!}" />
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Tên đăng nhập</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tendn" placeholder="Nhập tên" style="width: 500px" value="{!!old('tendn', isset($user["tendangnhap"]) ? $user["tendangnhap"]:null)!!}" />
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Giới tính</label>
              <div class="col-sm-10">
                <label>
                  <input type="radio" name="rdoGioitinh" value="0" class="minimal"
                    @if(old('rdoGioitinh')==0)
                      checked 
                    @endif /> Nam
                </label>
                <label>
                  <input type="radio" name="rdoGioitinh" value="1" class="minimal"
                    @if(old('rdoGioitinh')==1)
                      checked 
                    @endif /> Nữ
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="txtDiachi" placeholder="Nhập địa chỉ" style="width: 500px" value="{!!old('txtDiachi', isset($user["diachi"]) ? $user["diachi"]:null)!!}"/>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="txtEmail" placeholder="Nhập email" style="width: 500px" value="{!!old('txtEmail', isset($user["email"]) ? $user["email"]:null)!!}"/>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Điện Thoại</label>                      
              <div class="col-sm-10">
                <input type="text" class="form-control" name="txtSDT" id="inputPassword3" placeholder="SĐT" style="width: 500px" value="{!!old('txtSDT', isset($user["dienthoai"]) ? $user["dienthoai"]:null)!!}"/>
              </div>
            </div>
            
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Level</label>
              <div class="col-sm-10">
                <label>
                  <input type="radio" name="rdoTrangthai" value="0" class="minimal"
                    @if(old('rdoTrangthai')==0)
                      checked 
                    @endif />users
                </label>
                <label>
                  <input type="radio" name="rdoTrangthai" value="1" class="minimal"
                    @if(old('rdoTrangthai')==1)
                      checked 
                    @endif /> adnin
                </label>
              </div>
            </div>
             <div class="box-body"></div>
           <div class="form-group">
              <label class="col-sm-2 control-label">Hình ảnh Hiện Tại</label>
              <div class="col-sm-9">
               <img src="{!! isset($user["hinhanh"]) ? asset('public/uploads/news/'.$user["hinhanh"]) :asset('public/lv17_admin/templates/images/nophoto.png') !!}" width="100px" />
              <input type="hidden" name="fImageCurrent" value="{!! $user["hinhanh"] !!}"/>
               
              </div>
           </div>
         <!--  </div> -->
            <div class="form-group ">
                <label class="col-sm-2" >Hình ảnh</label>
                <span class="form_item">
                  <input type="file" name="newsImg" class="textbox" />
                </span><br />
           </div>
           <!--  <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="txtPass" id="inputPassword3" placeholder="Password" style="width: 500px" value="{!!old('txtTen', isset($user["tenusers"]) ? $user["matkhau"]:null)!!}">
              </div>
            </div> -->
            <!-- <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Nhập lại Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="txtRepass" id="inputPassword3" placeholder="Password">
              </div>
            </div>  -->
          </div>
        </div>
      </div>
  </div>
  </form>
</section>
@endsection  
  