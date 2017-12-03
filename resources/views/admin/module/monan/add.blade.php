@extends('admin.app')
@section('title','Thêm Món Ăn')
@section('content')
<section class="content">
@include('admin.block.error')
@include('admin.block.flash')
<form action="" method="POST" enctype="multipart/form-data" style="width: 850px; margin-left: 100px">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <fieldset>
  <div class="row">
    <div class="box-body"></div> 
      <div class="col-xs-12">
        <div class="box box-danger">
          
            <button type="submit" name="btnSaveNew" value="btnSaveNew" class="btn btn-primary margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-plus-square"></i></b>Save & New</button> 
            <button type="submit" name="btnSaveClose" value="btnSaveClose" class="btn btn-success margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-save"></i></b>Save & Close</button>
            <a href="{{ route('danh-sach-mon-an') }}" class="btn btn-danger margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-close"></i></b>Close</a>
          
    </div>
  </div>
    <div class="col-xs-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Cập nhật Món Ăn</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <div class="box-body">
<!--  <div class="box-body"> -->
    <legend>Thêm Món Ăn</legend>
    <div class="form-group ">
        <label class="col-sm-2" >DM Món Ăn</label>
        <select class="col-sm-4 select2" name="sltCate">
          <option value="0">Thuộc danh mục món ăn</option>
          <?php menuMulti5($dmmonan) ?>
        </select>
    </div>
     <div class="form-group ">
        <label class="col-sm-2" >Thuộc địa điểm</label>
        <select class="col-sm-4 select2" name="sltCate1">
          <option value="0">Thuộc địa điểm</option>
          <?php menuMulti13($diadiem) ?>
        </select>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Tên món ăn</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="txtTitle" placeholder="Nhập tên" value="{!!old('txtTitle')!!}">
        </div>
      </div>
       <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Đơn Giá</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="txtdongia" placeholder="Nhập tên" value="{!!old('txtdongia')!!}">
        </div>
      </div>
           
         <div class="form-group">
          <label class="col-sm-12 control-label">Giới Thiệu:</label>
            <div class="col-sm-12">
            <textarea name="txtgioithieu" rows="5" class="textbox" value="{!!old('txtgioithieu')!!}" ></textarea>
              <script type="text/javascript">
                var editor = CKEDITOR.replace('txtgioithieu', {
                  language:'vi',
                  filebrowserImageBrowseUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/ckfinder.html?Type=Images',
                  filebrowserFlashBrowseUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/ckfinder.html?Type=Flash',
                  filebrowserImageUploadUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                  filebrowserFlashUploadUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                });
              </script>
          </div>
       </div>
           <!--  </div> -->
    
    <div class="form-group ">
        <label class="col-sm-2" >Hình ảnh</label>
        <span class="form_item">
      <input type="file" name="newsImg" class="textbox" />
    </span><br />
   </div>
    </div>
      </div>
 <!--  </div> -->
<!--  </div> -->
  </fieldset>
</form>
</section>
@endsection  
  