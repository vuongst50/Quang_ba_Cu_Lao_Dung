<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
    <link rel="stylesheet" href="{{ asset('css/tintuc&sukien.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/nghiduongCSS/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nghiduongCSS/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" />
    <link rel="stylesheet" href="{{ asset('css/nghiduongCSS/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nghiduongCSS/style1.css') }}" />
    <title>Nghỉ dưỡng</title>

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Whisper' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Tapestry' rel='stylesheet'>
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <!-- FONTAWNSOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- JAVA SCRIPT -->
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
                <h1>{{$post->title}}</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="home">Trang chủ</a></li>
                  <li class="breadcrumb-item active">Xem trước</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="border border-5 border-dark m-2">
            
          <div class="tt-sk-content">
            <div class="container py-md-4">
              <div class="row">
                <div class="col-6">
                    <section class="ftco-section pt-5 pb-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-hero">
                                        <div class="featured-carousel owl-carousel">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-center justify-content-center"
                                                        style="background-image: url('{{ asset('postimage/' . $post->main_image) }}');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-center justify-content-center"
                                                        style="background-image: url('{{ asset('postimage/' . $post->image1) }}');">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-center justify-content-center"
                                                        style="background-image: url('{{ asset('postimage/' . $post->image2) }}');">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="my-5 text-center">
                                            <ul class="thumbnail">
                                                <li class="active img">
                                                    <a href="#"><img
                                                            src="/postimage/{{$post->main_image}}"
                                                            alt="Image" class="img-fluid" /></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src="/postimage/{{$post->image1}}"
                                                            alt="Image" class="img-fluid" /></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src="/postimage/{{$post->image2}}"
                                                            alt="Image" class="img-fluid" /></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-6">
                    <div class="title ftco-section pt-5 pb-0">{{$post->title}}</div>

                    <p>
                        <i class="fa-solid fa-house"></i>
                        Địa chỉ: {{$post->location}}
                    </p>
                    <p><i class="fa-solid fa-phone"></i> Điện thoại: {{$post->phone}}</p>
                    <p><i class="fa-solid fa-envelope"></i> Email: {{$post->email}}</p>
                    <p><i class="fa-solid fa-globe"></i> Website: {{$post->website}}</p>

                    <div class="card w-100 p-0 m-0">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                        </div>
                        <div class="ratio ratio-1x1">
                            {!!$post->ggmap!!} 
                        </div>
                    </div>
                </div>
            </div>
            </div>
          </div>

        </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/nghiduongJS/popper.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/nghiduongJS/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/nghiduongJS/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/nghiduongJS/main.js') }}"></script>
  </body>
</html>