@extends('admin.app')
@section('title','Thông tin loại tin')
@section('content')
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <div class="box-tools pull-right">
                <button  data-widget="collapse"><i class="fa fa-minus"></i></button>
                 <a href="">
                <button class="btn-info" ><i class="fa  fa-plus-square"></i></button></a>
                <a href="{{ url('admin')}}">
                <button class="btn-danger" ><i class="fa fa-remove"></i></button></a>
              </div>
                  <h3 class="box-title">Danh sách loại tin</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  @include('admin.block.error')
                  @include('admin.block.flash')
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="thead">
                      <tr>
                        <th style="text-align: center;">STT</th>
                        <th style="text-align: center;">Tên Quận</th>
                        <th style="text-align: center;">Tên Tỉnh Thành</th>
                        <th style="text-align: center;">Ngày Tạo</th>
                        <th style="text-align: center;">Quản lý</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($datatinh as $tinh)
                       @foreach($dataquan as $quan)
                       @if($quan['DMTT_id'] == $tinh['id'])
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $quan["tenquan"] }}</td>
                      <td>{{ $tinh["tentinhthanh"] }}</td>
                       <td class="list_td aligncenter">{!! \Carbon\Carbon::createFromTimeStamp(strtotime($quan['created_at']))->diffForHumans() !!}</td>
                        <td>
                        <a href="{!!route('getDMquanEdit', ['id'=>$quan["id"]])!!}"><i class="fa  fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="{!!route('getDMquanDel', ['id'=>$quan["id"]])!!}"onclick = "return xacnhanxoa ('Bạn có muốn xóa không?')"><i class="fa  fa-trash-o"></i></a>
                        </td>
                    </tr>@endif
                  @endforeach
                   @endforeach
                     
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@endsection