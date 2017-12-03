@extends('admin.app')
@section('title','Thông tin góp ý')
@section('content')
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              

              <div class="box">
                <div class="box-header">
                <div class="box-tools pull-right">
                <button  data-widget="collapse"><i class="fa fa-minus"></i></button>
                 <a href="{{ url('admin')}}">
                <button class="btn-info" ><i class="fa  fa-plus-square"></i></button></a>
                <a href="{{ url('admin')}}">
                <button class="btn-danger" ><i class="fa fa-remove"></i></button></a>
              </div>
                  <h3 class="box-title">Danh sách góp ý</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  @include('admin.block.error')
                  @include('admin.block.flash')
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="thead"> 
                      <tr>
                        <th>STT</th>
                        <th>Họ Tên</th>
                        <th>Email</th>
                        <th>Nội Dung</th>
                        <th>Thuộc Users</th>
                        <th>Ngày tạo</th>
                        <th>Quản lý?</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($user as $us)
                    @foreach($gopy as $item)
                    @if($item['users_id']==$us['id'])
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item["hoten"] }}</td>
                        <td>{{ $item["email"] }}</td>
                        <td>{{ $item["noidung"] }}</td>
                        <td>{{ $us["tenusers"] }}</td>
                      
                       <td class="list_td aligncenter">{!! \Carbon\Carbon::createFromTimeStamp(strtotime($item['created_at']))->diffForHumans() !!}</td>
                        <td>
               <!--  <a href="{!!route('getNewsEdit', ['id'=>$item["id"]])!!}"><i class="fa  fa-edit"></i></a>&nbsp;&nbsp;&nbsp; -->
                <a href="{!!route('getNewsDel', ['id'=>$item["id"]])!!}"onclick = "return xacnhanxoa ('Bạn có muốn xóa không?')"><i class="fa  fa-trash-o"></i></a>
                </td>
                      </tr>
                      @endif
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