<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        .img_deg{
            height: 100px;
            width: 100px;
        }

        .card .btn_add_acc{
            margin-left:20px;
            margin-top: 20px;
            width: 150px;
        }
    </style> 
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('admin.navbar')

        @include('admin.sidebar')

      <div class="content-wrapper">
        @if(session()->has('message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color: black;">x</button>
                {{session()->get('message')}}
            </div>
        @endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Quản lý người dùng</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="home">Trang chủ</a></li>
                  <li class="breadcrumb-item active">Quản lý người dùng</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Bảng chứa tất cả tài khoản người dùng</h3>
                  </div>
                    <a href="{{url('add_user_page')}}" class="btn btn-success btn_add_acc">
                        Thêm tài khoản
                    </a>                    
                  <!-- /.card-header -->
                  <div class="card-body">                  
                    <table
                      id="example1"
                      class="table table-bordered table-striped"
                    >
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tên</th>
                          <th>Email</th>
                          <th>Quyền</th>
                          <th>Ngày cấp</th>
                          <th>Giờ cấp</th>      
                          <th>Xóa</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($post as $post )
                        <tr class="th_detail_deg">
                            <td>{{$post->id}}</td>
                            <td>{{$post->name}}</td>
                            <td>{{$post->email}}</td>
                            <td>{{$post->usertype}}</td>
                            <td>{{$post->created_at->format('d/m/Y')}}</td>
                            <td>{{$post->created_at->format('H:i:s')}}</td>
                            <td>
                                <div class="d-flex flex-column align-items-center">
                                    <a href="{{ url('delete_user', $post->id) }}" class="btn btn-danger w-75 mb-1" 
                                    onclick="confirmation(event)">
                                    <i class="fa-solid fa-trash"></i>
                                    </a>
                                    <a href="{{ url('edit_user_page', $post->id) }}" class="btn btn-success w-75">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    </a>                                    
                                </div>
                            </td>
                        </tr>                
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
        <strong
          >Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('admin.categories.script')

  </body>
</html>