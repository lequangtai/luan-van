@extends('admin.app')
@section('title','Thông tin users')
@section('content')
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              

              <div class="box">
                <div class="box-header">
                <div class="box-tools pull-right">
                <button  data-widget="collapse"><i class="fa fa-minus"></i></button>
                <a href="{{ route('danh-sach-dia-diem')}}">
                <button class="btn-info" ><i class="fa  fa-plus-square"></i></button></a>
                <a href="{{ url('admin')}}">
                <button class="btn-danger" ><i class="fa fa-remove"></i></button></a>
              </div>
                  <h3 class="box-title">Danh sách địa điểm</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  @include('admin.block.error')
                  @include('admin.block.flash')
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="thead">
                      <tr>
                        <th>STT</th>
                        <th>Tên Địa Điểm</th>
                        <th>Địa Chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Giờ Mở Cửa</th>
                         <th>Giờ Đóng Cửa</th>
                          <th>Giá Thấp Nhất</th>
                         <th>Giá Cao Nhất</th>
                         <th>Hình ảnh</th>
                        <th>Quản lý</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($diadiem as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{!!$item["tendiadiem"]!!}</a></td>
                        <td>{!!$item["diachi"]!!}</td>
                        <td>{!!$item["dienthoai"]!!}</td>
                        <td>{!!$item["email"]!!}</td>
                        <td>{!!$item["giomocua"]!!}</td>
                        <td>{!!$item["giodongcua"]!!}</td>
                        <td>{!!$item["giathapnhat"]!!}</td>
                        <td>{!!$item["giacaonhat"]!!}</td>
                        <td><img src="../public/uploads/news/{!!$item["hinhanh"]!!}" width="60px" height="60px"/></td>
                        <td>
                
               <!--  <a href="{!!route('getUserDel', ['id'=>$item["id"]])!!}"onclick = "return xacnhanxoa ('Bạn có muốn xóa không?')"><i class="fa  fa-trash-o"></i></a> -->
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