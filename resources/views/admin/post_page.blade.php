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
    <style type="text/css">
        .card-body .note-editable{
          min-height: 300px;
        }
    </style> 
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
                <h1>Thêm bài viết</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                  <li class="breadcrumb-item active">Thêm bài viết</li>
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

                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="row mb-4">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                          <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề" required>
                        </div>
                      </div>

                      <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Phân loại</label>
                          <div class="form-group">
                            <select name="post_type" id="post_type" class="form-control" required>
                              <option selected value="Ẩm thực">Ẩm thực</option>
                              <option value="Tin tức">Tin tức</option>
                              <option value="Điểm đến">Điểm đến</option>
                              <option value="Nghỉ dưỡng">Nghỉ dưỡng</option>
                            </select>
                          </div>                  
                        </div>
                      
                        <div class="form-group custom-radio-container" id="custom-radio-container">
                            
                        </div>

                      </div>       
                              
                    </div>
                    <div class="row mb-4">
                      <div class="col-12">
                        <div class="div_center">
                            <label for="">Thêm ảnh chính</label>
                            <br>
                            <!-- <input type="file" name="main_image" id=""> -->
                            <input type="file" name="main_image" id="main_image" accept="image/*" required>
                            <br><br>
                            <img id="preview" src="#" alt="" style="align:center, display: none; width: 150px; height: 150px;">
                        </div>                        
                      </div>
                    </div>           
                    <textarea name="description1" id="summernote" placeholder="Nhập nội dung"></textarea>
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

      const imageInput = document.getElementById('main_image');
      const previewImage = document.getElementById('preview');

      // Lắng nghe sự kiện thay đổi trên input file
      imageInput.addEventListener('change', function(event) {
        // Kiểm tra xem có tệp nào đã được chọn không
        const file = event.target.files[0];
        if (file) {
            // Tạo URL từ tệp đã chọn
          const reader = new FileReader();

            // Khi FileReader đọc xong tệp
          reader.onload = function(e) {
                // Đặt src của ảnh là URL vừa tạo
              previewImage.src = e.target.result;
              previewImage.style.display = 'block';
          };

            // Đọc tệp dưới dạng Data URL
          reader.readAsDataURL(file);
        }
      });

        document.addEventListener('DOMContentLoaded', function() {
        // Lấy giá trị ban đầu của select
        var selectValue = document.getElementById('post_type').value;
        // Hiển thị radio options ban đầu dựa trên giá trị select ban đầu
        showRadioOptions(selectValue);

        // Gắn sự kiện change cho select
        document.getElementById('post_type').addEventListener('change', function() {
            var selectValue = this.value;
            showRadioOptions(selectValue);
        });

        // Hàm để hiển thị radio options dựa trên giá trị của select
        function showRadioOptions(selectValue) {
            var radioContainer = document.getElementById('custom-radio-container');
            // Xóa các radio options hiện tại
            while (radioContainer.firstChild) {
                radioContainer.removeChild(radioContainer.firstChild);
            }

            // Tạo radio options mới tùy thuộc vào giá trị của select box
            if (selectValue === 'Nghỉ dưỡng') {
                var radioHotel = document.createElement('div');
                radioHotel.classList.add('custom-control', 'custom-radio');
                radioHotel.innerHTML = `
                    <input class="custom-control-input" type="radio" id="radioHotel" name="customRadio" value="Khách sạn" required>
                    <label for="radioHotel" class="custom-control-label">Khách sạn</label>`;
                radioContainer.appendChild(radioHotel);

                var radioHomestay = document.createElement('div');
                radioHomestay.classList.add('custom-control', 'custom-radio');
                radioHomestay.innerHTML = `
                    <input class="custom-control-input" type="radio" id="radioHomestay" name="customRadio" value="Homestay" required>
                    <label for="radioHomestay" class="custom-control-label">Homestay</label>`;
                radioContainer.appendChild(radioHomestay);
            } else if (selectValue === 'Điểm đến') {
                var radioEcoTourism = document.createElement('div');
                radioEcoTourism.classList.add('custom-control', 'custom-radio');
                radioEcoTourism.innerHTML = `
                    <input class="custom-control-input" type="radio" id="radioEcoTourism" name="customRadio" value="Du lịch sinh thái" required>
                    <label for="radioEcoTourism" class="custom-control-label">Du lịch sinh thái</label>`;
                radioContainer.appendChild(radioEcoTourism);

                var radioCulturalTourism = document.createElement('div');
                radioCulturalTourism.classList.add('custom-control', 'custom-radio');
                radioCulturalTourism.innerHTML = `
                    <input class="custom-control-input" type="radio" id="radioCulturalTourism" name="customRadio" value="Du lịch văn hóa" required>
                    <label for="radioCulturalTourism" class="custom-control-label">Du lịch văn hóa</label>`;
                radioContainer.appendChild(radioCulturalTourism);
            }
        }
    });
    </script>
  </body>
</html>