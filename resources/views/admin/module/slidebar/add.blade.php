@extends('admin.app')
@section('title','Thêm slidebar')
@section('content')
<section class="content">
@include('admin.block.error')
@include('admin.block.flash')
<form action="" method="POST" enctype="multipart/form-data" style="width: 850px; margin-left: 100px">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <fieldset>
  <div class="box box-danger">
          
            <button type="submit" name="btnSaveNew" value="btnSaveNew" class="btn btn-primary margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-plus-square"></i></b>Save & New</button> 
            <button type="submit" name="btnSaveClose" value="btnSaveClose" class="btn btn-success margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-save"></i></b>Save & Close</button>
            <a href="{{ route('danh-sach-slidebar') }}" class="btn btn-danger margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-close"></i></b>Close</a>
          
    </div>

    <legend>Thêm slidebar</legend>
    <div class="form-group ">
        <label class="col-sm-2" >Hình ảnh</label>
        <span class="form_item">
      <input type="file" name="newsImg" class="textbox" />
    </span><br />
   </div>
    <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Mô tả</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="txtmota" placeholder="Nhập mô tả" style="width: 300px; margin-right: 10px">
              </div>
    </div>
<div style="clear: both;"></div>
    <div class="form-group ">
        <label class="col-sm-2" >Trạng Thái</label>
        <span class="form_item">
      <input type="radio" name="rdoPublic" class="textbox" value="0" checked="checked" />Ẩn
       <input type="radio" name="rdoPublic" class="textbox" value="1" />Hiện
    </span><br />
   </div>
  </fieldset>
</form>
</section>
@endsection  
  