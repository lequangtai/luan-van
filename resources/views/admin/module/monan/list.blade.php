@extends('admin.app')
@section('title','Thông tin món ăn')
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
                  <h3 class="box-title">Danh sách món ăn</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  @include('admin.block.error')
                  @include('admin.block.flash')
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="thead"> 
                      <tr>
                        <th>STT</th>
                        <th>Tên Món Ăn</th>
                        <th>Thuộc Danh Mục</th>
                        <th>Thuộc Địa Điểm</th>
                        <th>Đơn giá</th>
                        <th>Giới Thiệu</th>
                        <th>Hình ảnh</th>
                        <th>Ngày tạo</th>
                        <th>Quản lý?</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($dmmonan as $dmma)
                        @foreach($diadiem as $dd)
                      @foreach($news as $item)
                      @if($item['DMMA_id'] == $dmma['id'])
                      @if($item['ddiem_id'] == $dd['id'])
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{!!$item["tenmonan"]!!}</td>
                        <td>{!!$dmma["ten_DMMA"]!!}</td>
                        <td>{!!$dd["tendiadiem"]!!}</td>
                        <td>{!!$item["dongia"]!!}</td>
                        <td>{!!$item["gioithieu"]!!}</td>
                        <td><img src="../public/uploads/news/{!!$item["hinhanh"]!!}" width="60px" height="60px"/></td>
                       <td class="list_td aligncenter">{!! \Carbon\Carbon::createFromTimeStamp(strtotime($item['created_at']))->diffForHumans() !!}</td>
                        <td>
                <a href="{!!route('getMonanEdit', ['id'=>$item["id"]])!!}"><i class="fa  fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="{!!route('getMonanDel', ['id'=>$item["id"]])!!}"onclick = "return xacnhanxoa ('Bạn có muốn xóa không?')"><i class="fa  fa-trash-o"></i></a>
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