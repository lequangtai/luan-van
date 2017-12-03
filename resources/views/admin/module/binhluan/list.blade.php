@extends('admin.app')
@section('title','Thông tin bình luận')
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
                  <h3 class="box-title">Danh Sách bình luận</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  @include('admin.block.error')
                  @include('admin.block.flash')
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="thead">
                      <tr>
                        <th style="text-align: center;">STT</th>
                        <th style="text-align: center;width: 500px">Nội Dung</th>
                        <th style="text-align: center;">Địa Điểm</th>
                         <th style="text-align: center;">Users</th>
                        <th style="text-align: center;">Ngày Tạo</th>
                        <th style="text-align: center;">Quản lý</th>
                      </tr>
                    </thead>
                    <tbody>
                  @foreach ($binhluans as $bl)
                  @foreach ($users as $us)
                   @foreach ($diadiems as $dd)
                    @if($bl['users_id']==$us['id'])
                    @if($bl['diadiem_id']==$dd['id'])
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $bl["noidung"] }}</td>
                       <td>{!! $dd['tendiadiem'] !!}</td>
                      <td>{!! $us['tenusers'] !!}</td>
                     
                       <td class="list_td aligncenter">{!! \Carbon\Carbon::createFromTimeStamp(strtotime($bl['created_at']))->diffForHumans() !!}</td>
                        <td style="text-align: center;">
                       
                        <a href="{!!route('getbinhluanDel', ['id'=>$bl["id"]])!!}"onclick = "return xacnhanxoa ('Bạn có muốn xóa không?')"><i class="fa  fa-trash-o"></i></a>
                        </td>
                    </tr>
                   
                 @endif
                 @endif
                   @endforeach
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