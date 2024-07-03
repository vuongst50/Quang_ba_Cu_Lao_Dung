<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <base href="{{ asset('') }}">
    @include('admin.css')
    <!-- summernote -->
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
      <style type="text/css">
        .card-body .note-editable{
          min-height: 300px;
        }
      </style>  
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
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
      <!-- Header -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Chỉnh sửa bài viết</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('home')}}">Trang chủ</a></li>
                  <li class="breadcrumb-item active">Chỉnh sửa bài viết</li>
                  </ol>
              </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      
      <!-- Main Content -->
      <div class="row m-3">
        <div class="col-12">
          <div class="card card-primary">
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
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{$post->title}}">
                      </div>
                    </div>


                      <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Phân loại</label>
                          <div class="form-group">
                            <select id="post_type" name="post_type" class="form-control">
                              <option selected>{{$post->post_type}}</option>
                              @if($post->post_type != 'Ẩm thực')
                                  <option value="Ẩm Thực">Ẩm thực</option>
                              @endif
                              @if($post->post_type != 'Tin tức')
                                  <option value="Tin tức">Tin tức</option>
                              @endif
                              @if($post->post_type != 'Điểm đến')
                                  <option value="Điểm đến">Điểm đến</option>
                              @endif
                              @if($post->post_type != 'Nghỉ dưỡng')
                                  <option value="Điểm đến">Nghỉ dưỡng</option>
                              @endif                       
                            </select>
                          </div>                  
                        </div>
                      
                        <div class="form-group custom-radio-container" id="custom-radio-container">
                            
                        </div>

                      </div>                        

                    <!-- <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Phân loại</label>
                        <div class="form-group">
                          <select id="post_type" name="post_type" class="form-control">
                            <option selected>{{$post->post_type}}</option>
                            @if($post->post_type != 'Ẩm thực')
                                <option value="Ẩm Thực">Ẩm thực</option>
                            @endif
                            @if($post->post_type != 'Tin tức')
                                <option value="Tin tức">Tin tức</option>
                            @endif
                            @if($post->post_type != 'Điểm đến')
                                <option value="Điểm đến">Điểm đến</option>
                            @endif
                            @if($post->post_type != 'Nghỉ dưỡng')
                                <option value="Điểm đến">Nghỉ dưỡng</option>
                            @endif                       
                          </select>
                        </div>            
                      </div>

                      <div class="form-group custom-radio-container" id="custom-radio-container">
                        Placeholder for radio buttons, to be populated dynamically
                      </div>-->
                    </div>                
                  </div>
                  <div class="row mb-4">
                    <div class="col-6">
                      <div class="div_center">
                          <label for="">Ảnh cũ</label>
                          <br>
                          <img id="" src="/postimage/{{$post->main_image}}" alt="" style="align:center, display: none; width: 210px; height: 210px;">
                      </div>                        
                    </div>
                    <div class="col-6">
                      <div class="div_center">
                          <label for="">Thêm ảnh chính</label>
                          <br>
                          <!-- <input type="file" name="main_image" id=""> -->
                          <input type="file" name="main_image" id="main_image" accept="image/*">
                          <br><br>
                          <img id="preview" src="#" alt="" style="align:center, display: none; width: 150px; height: 150px;">
                      </div>                        
                    </div>
                  </div>                                        
                  <textarea name="description1" id="summernote" placeholder="Nhập nội dung">{{$post->description1}}</textarea>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>



    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin.categories.script')
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <script>
      const imageInput = document.getElementById('main_image');
        const previewImage = document.getElementById('preview');
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

      $(function () {
        bsCustomFileInput.init();
      });

      $(function () {
        // Summernote
        $('#summernote').summernote()
        
      })
      
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

            // Kiểm tra giá trị từ CSDL và tự động chọn radio tương ứng
            var postChildType = '{{$post->child_type}}'; // Thay đổi theo cách bạn truy xuất giá trị child_type từ CSDL trong Laravel
            if (postChildType === 'Khách sạn') {
                document.getElementById('radioHotel').checked = true;
            } else if (postChildType === 'Homestay') {
                document.getElementById('radioHomestay').checked = true;
            }

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

            // Kiểm tra giá trị từ CSDL và tự động chọn radio tương ứng
            var postChildType = '{{$post->child_type}}'; // Thay đổi theo cách bạn truy xuất giá trị child_type từ CSDL trong Laravel
            if (postChildType === 'Du lịch sinh thái') {
                document.getElementById('radioEcoTourism').checked = true;
            } else if (postChildType === 'Du lịch văn hóa') {
                document.getElementById('radioCulturalTourism').checked = true;
            }
        }
    }
});
    </script>
</body>
</html>
