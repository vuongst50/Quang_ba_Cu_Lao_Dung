<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../../plugins/fontawesome-free/css/all.min.css"
    />
    <!-- DataTables -->
    <link
      rel="stylesheet"
      href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css"
    />
    <!-- summernote -->
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="../../plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="../../plugins/codemirror/theme/monokai.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="../../plugins/simplemde/simplemde.min.css">
    <style type="text/css">
        .card-body .note-editable{
          height: 300px;
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
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Tất cả bài viết</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Tất cả bài viết</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <form action="{{url('add_post')}}" method="post" enctype="multipart/form-data">

                @csrf
                
                <div class="card card-outline card-info">
                  <div class="card-header">
                    <h3 class="card-title">
                      Summernote
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="row mb-4">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                          <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề">
                        </div>
                      </div>

                      <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Phân loại</label>
                          <div class="form-group">
                            <select name="post_type" class="form-control">
                              <option selected>Chọn loại</option>
                              <option value="Ẩm thực">Ẩm thực</option>
                              <option value="Tin tức">Tin tức</option>
                              <option value="Điểm đến">Điểm đến</option>
                              <option value="Nghỉ dưỡng">Nghỉ dưỡng</option>
                            </select>
                          </div>                  
                        </div>
                      </div>                  
                    </div>                    
                    <textarea name="description1" id="summernote"></textarea>
                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
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
    <script>
      $(function () {
        // Summernote
        $('#summernote').summernote()
        
      })
    </script>
  </body>
</html>