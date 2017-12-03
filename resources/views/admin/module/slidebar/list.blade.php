@extends('admin.app')
@section('title','Thông tin slidebar')
@section('content')
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              

              <div class="box">
                <div class="box-header">
                <div class="box-tools pull-right">
                <button  data-widget="collapse"><i class="fa fa-minus"></i></button>
                 <a href="{{ route('them-tin-tuc')}}">
                <button class="btn-info" ><i class="fa  fa-plus-square"></i></button></a>
                <a href="{{ url('admin')}}">
                <button class="btn-danger" ><i class="fa fa-remove"></i></button></a>
              </div>
                  <h3 class="box-title">Danh sách slidebar</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  @include('admin.block.error')
                  @include('admin.block.flash')
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="thead"> 
                      <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>
                         <th>Mô Tả</th>
                        <th>Ngày tạo</th>
                        <th>Quản lý?</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($slide as $sl)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                         <td><img src="../public/uploads/news/{!!$sl["tenslidebar"]!!}" width="60px" height="60px"/></td>
                         <td>{!!$sl["mota"]!!}</td>
                      
                       <td class="list_td aligncenter">{!! \Carbon\Carbon::createFromTimeStamp(strtotime($sl['created_at']))->diffForHumans() !!}</td>
                        <td>
                <a href="{!!route('getSlidebarEdit', ['id'=>$sl["id"]])!!}"><i class="fa  fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="{!!route('getSlidebarDel', ['id'=>$sl["id"]])!!}"onclick = "return xacnhanxoa ('Bạn có muốn xóa không?')"><i class="fa  fa-trash-o"></i></a>
                </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@endsection