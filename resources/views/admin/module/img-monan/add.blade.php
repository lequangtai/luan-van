@extends('admin.app')
@section('title','Thêm Hình ảnh món ăn')
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
            <a href="{{ route('danh-sach-hinh-anh-mon-an') }}" class="btn btn-danger margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-close"></i></b>Close</a>
          
    </div>

    <legend>Thông Tin Hình ảnh món ăn</legend>
    <div class="form-group ">
        <label class="col-sm-2" >Thuộc Món Ăn</label>
        <select class="col-sm-4 select2" name="sltCate">
          <option value="0">Thuộc Món Ăn</option>
          <?php menuMulti6($imgmonan); ?>
        </select>
    </div>
    
    <div class="form-group ">
        <label class="col-sm-2" >Hình ảnh</label>
        <span class="form_item">
      <input type="file" name="newsImg" class="textbox" />
    </span><br />
   </div>
  </fieldset>
</form>
</section>
@endsection  
  