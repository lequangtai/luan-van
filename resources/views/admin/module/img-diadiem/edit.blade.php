@extends('admin.app')
@section('title','Cập nhật hình ảnh món ăn')
@section('content')
<section class="content">
@include('admin.block.error')
@include('admin.block.flash')
<form action="" method="POST">
{{ csrf_field() }}
  <div class="row">
    <div class="box-body"></div> 
      <div class="col-xs-12">
        <div class="box box-danger">
          
            <button type="submit" name="btnSaveNew" value="btnSaveNew" class="btn btn-primary margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-plus-square"></i></b>Save & New</button> 
            <button type="submit" name="btnSaveClose" value="btnSaveClose" class="btn btn-success margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-save"></i></b>Save & Close</button>
            <a href="{{ route('danh-sach-tin-tuc') }}" class="btn btn-danger margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-close"></i></b>Close</a>
          
        </div>
      </div>
      <div class="col-xs-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Cập nhật hình ảnh món ăn</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <div class="box-body">
          <div class="form-group ">
              <label class="col-sm-2" >Thuộc Địa Điểm</label>
              <select class="col-sm-6 select2" name="sltCate"><?php menuMulti7($diadiem); ?>
               
              </select>
          </div>
           
          
           <div class="box-body"></div>
           <div class="form-group">
              <label class="col-sm-2 control-label">Hình ảnh</label>
              <div class="col-sm-9">
               <img src="{!! isset($imgdiadiem["images"]) ? asset('public/uploads/news/'.$imgdiadiem["images"]) :asset('public/lv17_admin/templates/images/nophoto.png') !!}" width="100px" />
              <input type="hidden" name="fImageCurrent" value="{!! $imgdiadiem["images"] !!}">
               
              </div>
           </div>
          </div>
           <div class="box-body"></div>
           <div class="form-group">
              <label class="col-sm-2 control-label">Hình ảnh đại diện</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="newsImg">
              </div>
        	 </div>
          </div>
        </div>
      </div>
  </div>
  </form>
</section>
@endsection  
	