<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{{ asset('') }}">
    @include('admin.css')
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../../plugins/fontawesome-free/css/all.min.css"/>
  </head>
  <body class="hold-transition dark-mode sidebar-mini">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('admin.navbar')

        @include('admin.sidebar')

      <div class="content-wrapper">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color: black;">x</button>
                {{session()->get('message')}}
            </div>
        @endif        
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
                <form action="{{url('update_post', $post->id)}}" method="post" enctype="multipart/form-data">
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
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{$post->title}}" required>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Phân loại</label>
                            <div class="form-group">
                                <select id="post_type" name="post_type" class="form-control" required>
                                <option selected>{{$post->post_type}}</option>
                                @if($post->post_type != 'Homestay')
                                    <option value="Homestay">Homestay</option>
                                @endif
                                @if($post->post_type != 'Khách sạn')
                                    <option value="Khách sạn">Khách sạn</option>
                                @endif
                                </select>
                            </div>                  
                            </div>
                        
                            <div class="form-group custom-radio-container" id="custom-radio-container">
                                
                            </div>

                        </div> 
                        </div>

                        <div class="row mb-4">
                        <div class="col-8">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text" name="location" class="form-control" id="exampleInputEmail1" value="{{$post->location}}" required>
                            </div>
                        </div> 

                        <div class="col-4">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" value="{{$post->phone}}" required>
                            </div>
                        </div> 
                        </div>

                        <div class="row mb-4">
                        <div class="col-6">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="{{$post->email}}" required>
                            </div>
                        </div> 

                        <div class="col-6">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Website</label>
                            <input type="text" name="website" class="form-control" id="exampleInputEmail1" value="{{$post->website}}" required>
                            </div>
                        </div> 
                        </div>
                        
                        <div class="row mb-4">
                        <div class="col-12">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Vị trí trên Google Maps</label>
                            <input type="text" name="ggmap" class="form-control" id="exampleInputEmail1" value="{{$post->ggmap}}" required>
                            </div>
                        </div> 
                        </div>

                        <div class="row mb-2">
                            <div class="col-4">
                                <div class="div_center">
                                    <label for="">Ảnh chính cũ</label>
                                    <br>
                                    <img id="" src="/postimage/{{$post->main_image}}" alt="" style="align:center, display: none; width: 210px; height: 210px;">
                                </div>   
                            </div>

                            <div class="col-4">
                                <div class="div_center">
                                    <label for="">Ảnh phụ 1 cũ</label>
                                    <br>
                                    <img id="" src="/postimage/{{$post->image1}}" alt="" style="align:center, display: none; width: 210px; height: 210px;">
                                </div>   
                            </div>

                            <div class="col-4">
                                <div class="div_center">
                                    <label for="">Ảnh phụ 2 cũ</label>
                                    <br>
                                    <img id="" src="/postimage/{{$post->image2}}" alt="" style="align:center, display: none; width: 210px; height: 210px;">
                                </div>   
                            </div>
                        </div>

                        <div class="row mb-4">
                        <div class="col-4">
                            <div class="div_center">
                                <label for="">Thêm ảnh chính</label>
                                <br>
                                <!-- <input type="file" name="main_image" id=""> -->
                                <input type="file" name="main_image" id="main_image" accept="image/*">
                                <br><br>
                                <img id="preview" src="#" alt="" style="align:center, display: none; width: 150px; height: 150px;">
                            </div>                        
                        </div>

                        <div class="col-4">
                            <div class="div_center">
                                <label for="">Thêm ảnh phụ 1</label>
                                <br>
                                <!-- <input type="file" name="main_image" id=""> -->
                                <input type="file" name="image1" id="sub_image1" accept="image/*">
                                <br><br>
                                <img id="preview1" src="#" alt="" style="align:center, display: none; width: 150px; height: 150px;">
                            </div>                        
                        </div>

                        <div class="col-4">
                            <div class="div_center">
                                <label for="">Thêm ảnh phụ 2</label>
                                <br>
                                <!-- <input type="file" name="main_image" id=""> -->
                                <input type="file" name="image2" id="sub_image2" accept="image/*">
                                <br><br>
                                <img id="preview2" src="#" alt="" style="align:center, display: none; width: 150px; height: 150px;">
                            </div>                        
                        </div>
                        </div>

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

       document.addEventListener('DOMContentLoaded', function() {
            // Mapping input IDs to preview image IDs
            const fileInputMapping = [
                { inputId: 'main_image', previewId: 'preview' },
                { inputId: 'sub_image1', previewId: 'preview1' },
                { inputId: 'sub_image2', previewId: 'preview2' }
            ];

            fileInputMapping.forEach(({ inputId, previewId }) => {
                const inputElement = document.getElementById(inputId);
                const previewElement = document.getElementById(previewId);

                // Check if inputElement and previewElement exist
                if (inputElement && previewElement) {
                    inputElement.addEventListener('change', function(event) {
                        const file = event.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                previewElement.src = e.target.result;
                                previewElement.style.display = 'block';
                            };
                            reader.readAsDataURL(file);
                        }
                    });
                } else {
                    console.error(`Element not found for inputId: ${inputId}, previewId: ${previewId}`);
                }
            });
        });
    </script>
  </body>
</html>