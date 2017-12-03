@extends('admin.app')
@section('title','Thêm tag')
@section('content')
<section class="content">
  @include('admin.block.error')
@include('admin.block.flash')
<form action="" method="POST">
{{ csrf_field() }}
  <div class="row">
    <div class="box-body"></div>
    <div class="col-xs-3"></div>
      <div class="col-xs-6">
        <div class="box box-danger">
            <button type="submit" name="btnSaveNew" value="btnSaveNew" class="btn btn-primary margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-plus-square"></i></b>Save & New</button> 
            <button type="submit" name="btnSaveClose" value="btnSaveClose" class="btn btn-success margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-save"></i></b>Save & Close</button>
            <a href="{{ route('danh-sach-tag') }}" class="btn btn-danger margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-close"></i></b>Close</a>
        </div>
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Thêm Tag</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-4 control-label">Tên tag:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="txtCateName" >
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-12 control-label">Mô tả tag:</label>
                <div class="col-sm-12">
                <textarea name="txtdes" rows="5" class="textbox" value="" ></textarea>
                  <script type="text/javascript">
                    var editor = CKEDITOR.replace('txtdes', {
                      language:'vi',
                      filebrowserImageBrowseUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/ckfinder.html?Type=Images',
                      filebrowserFlashBrowseUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/ckfinder.html?Type=Flash',
                      filebrowserImageUploadUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                      filebrowserFlashUploadUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                    });
                  </script>
              </div>
          </div>
        </div>
      </div>
  </div>
  </form>
</section>
@endsection  
  