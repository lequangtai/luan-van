<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="{{ asset('public/lv17_admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/lv17_admin/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/lv17_admin/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/lv17_admin/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/lv17_admin/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/lv17_admin/plugins/iCheck/flat/blue.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('public/lv17_admin/css/css.css')}}">
    <script type="text/javascript" src ="{!!asset('public\lv17_admin\dist\js\ckeditor/ckeditor.js')!!}"></script>

  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
         
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <span class="logo-lg"><b>Admin</b> Quản lý website Tìm kiếm địa điểm ăn uống</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          </a>
           
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
               @php 
                    $user=App\Models\User::select()->get()->toArray();
                  @endphp
                @if(Auth::check())
                <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Xin chào <b style="color: red">
                    {{ Auth::user()->tendangnhap }}
                  </b></span>
                </a>
              </li>
              @endif
              <li class="dropdown notifications-menu">
                <a href="{!! url('logout') !!}"><i class="fa  fa-power-off"></i> </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
         
              <div class="pull-left image">
              <img src="{{ asset('public/uploads/icon_admin.png')}}" class="img-circle" alt="User Image" width="50px" height="50px" />
            </div>
           
           <!--  <div class="pull-left image">
              <img src="{!! asset('public/uploads/news/1494951313.ahihi.jpg" class="img-circle" alt="User Image" width="50px" height="50px" />
            </div> -->
           
            <div class="pull-left info">
              <p>{{ Auth::user()->tendangnhap }}</p>
            </div>
          
         
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..." />
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="active treeview">
              <a href="{{ route('getshow') }}">
                <i class="fa fa-dashboard"></i> <span>Trang chủ</span> </i>
              </a>
            </li>
        
            <li class="treeview">
              <a href="">
                <i class="fa fa-users"></i>
                <span> Quản lý tài khoản</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('danh-sach-nguoi-dung') }}"><i class="fa fa-star-half-o"></i> Danh sách tài khoản</a></li>
                <li><a href="{{ route('them-nguoi-dung') }}"><i class="fa fa-star-half-o"></i> Thêm tài khoản</a></li>
              </ul>
            </li>
           
            <li class="treeview" >
              <a href="#">
                <i class="fa fa-list-ol"></i>
                <span> Quản lý địa diểm</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
              <ul class="treeview-menu">
                <li ><a  href="{{ route('danh-sach-dia-diem') }}"><i class="fa fa-star-half-o"></i> Danh sách địa điểm</a></li>
                <li><a  href="{{ route('danh-sach-tinh-thanh') }}"><i class="fa fa-star-half-o"></i> Danh sách tỉnh thành</a></li>
                <li><a  href="{{ route('danh-sach-quan') }}"><i class="fa fa-star-half-o"></i>Danh sách quận</a></li>
                <li><a  href="{{ route('danh-sach-tag') }}"><i class="fa fa-star-half-o"></i>Danh sách tag</a></li>
                <li><a  href="{{ route('them-tinh-thanh') }}"><i class="fa fa-star-half-o"></i>Thêm tỉnh thành</a></li>
                <li><a  href="{{ route('them-quan') }}"><i class="fa fa-star-half-o"></i>Thêm quận</a></li>
                <li><a  href="{{ route('them-tag') }}"><i class="fa fa-star-half-o"></i>Thêm tag</a></li>
              </ul>
            </li>
       
            <li class="treeview">
              <a href="">
                <i class="fa fa-user-md"></i>
                <span> Quản lý món ăn</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li><a href="{{ route('danh-sach-danh-muc-mon-an') }}"><i class="fa fa-circle-o"></i> Danh sách danh mục món ăn</a></li>
                <li><a href="{{ route('danh-sach-mon-an') }}"><i class="fa fa-circle-o"></i> Danh sách món ăn</a></li>
                <li><a href="{{ route('them-danh-muc-mon-an') }}"><i class="fa fa-circle-o"></i> Thêm danh mục món ăn</a></li>
                <li><a href="{{ route('them-mon-an') }}"><i class="fa fa-circle-o"></i> Thêm món ăn</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-user"></i> <span>Quản lý bình luận </span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('danh-sach-binh-luan') }}"><i class="fa fa-star-half-o"></i> Danh sách bình luận</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-user"></i>
                <span> Quản lý dánh giá</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('danh-sach-danh-muc-danh-gia') }}"><i class="fa fa-star-half-o"></i> Danh sách danh mục dánh giá</a></li>
                 <li><a href="#"><i class="fa fa-star-half-o"></i> Danh sách dánh giá</a></li>
                <li><a href="{{ route('them-danh-muc-danh-gia') }}"><i class="fa fa-star-half-o"></i> Thêm danh mục đánh giá</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-university"></i>
                <span> Quản lý góp ý</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('danh-sach-gop-y') }}"><i class="fa fa-star-half-o"></i> Danh sách góp ý</a></li>
                <!-- <li><a href="#"><i class="fa fa-star-half-o"></i> Thêm lớp học</a></li> -->
              </ul>
            </li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-th-large"></i>
                <span> Quản lý hình ảnh</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('danh-sach-hinh-anh-dia-diem') }}"><i class="fa fa-star-half-o"></i> Danh sách hình ảnh địa điểm</a></li>
                <li><a href="{{ route('danh-sach-hinh-anh-mon-an') }}"><i class="fa fa-star-half-o"></i> Danh sách hình ảnh món ăn</a></li>
                 <li><a href="{{ route('danh-sach-slidebar') }}"><i class="fa fa-star-half-o"></i> Danh sách hình ảnh món ăn</a></li>
                <li><a href="{{ route('them-hinh-anh-dia-diem') }}"><i class="fa fa-star-half-o"></i> Thêm hình ảnh địa điểm</a></li>
                <li><a href="{{ route('them-hinh-anh-mon-an') }}"><i class="fa fa-star-half-o"></i> Thêm hình ảnh món ăn</a></li>
                 <li><a href="{{ route('them-slidebar') }}"><i class="fa fa-star-half-o"></i> Thêm slidebar</a></li>
              </ul>
            </li>
            <li class="treeview">
            <a>
                <i class="fa fa-th"></i>
                <span> Quản lý loại tin</span>
                <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ route('danh-sach-loai-tin') }}"><i class="fa fa-star-half-o"></i> Danh sách loại tin</a></li>
                <li><a href="{{ route('them-loai-tin') }}"><i class="fa fa-star-half-o"></i> Thêm loại tin</a></li>
              </ul>
            </li>
            <li class="treeview">
            <a>
                <i class="fa fa-file-text"></i>
                <span > Quản lý tin tức</span>
                <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a  href="{{ route('danh-sach-tin-tuc') }}"><i class="fa fa-star-half-o"></i> Danh sách tin tức</a></li>
                <li><a  href="{{ route('them-tin-tuc') }}"><i class="fa fa-star-half-o"></i> Thêm tin tức</a></li>
              </ul>
            </li>
           
           


          
         
             
      
        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
 <div style="clear: both;"></div>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><i class="fa fa-dashboard"></i>
            Quản lý website Tìm kiếm địa điểm ăn uống
          </h1>
        </section>
             @yield('content')
       </div><!-- /.content-wrapper -->
       <div style="clear: both;"></div>
      <footer class="main-footer" style="font-family: all;font-size: 15px; line-height: 0.6; text-align: center;background-color: #BAB8B8;">
        <p>Copyright &copy; 2017 </p>
          <p>Trường Đại Học Công NGhệ Sài Gòn</p>
          <p>Khoa Công Nghệ Thông Tin</p>
          <p><a href="http://localhost:8080/laravel-luanvan/">website Tìm kiếm địa điểm ăn uống</a></p>
     
      </footer>

     
    </div><!-- ./wrapper -->
 
    <script src="{{ asset('public/lv17_admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('public/lv17_admin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/lv17_admin/dist/js/app.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/lv17_admin/plugins/select2/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/lv17_admin/plugins/datatables/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/lv17_admin/plugins/datatables/dataTables.bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/lv17_admin/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/lv17_admin/function/function.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/lv17_admin/jquery/myscript.js')}}"></script>
    <script src="{{ url('public/lv17_admin/jquery/myscrip.js') }}"></script>
    <script type="text/javascript">
      $(function () {
        $(".select2").select2();
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
      $(document).ready(function(){
    $("#selecctall").change(function(){
      $(".checkbox1").prop('checked', $(this).prop("checked"));
      });
});
    </script>
 
   </body>
</html>