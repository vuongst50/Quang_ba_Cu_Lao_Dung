<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <link rel="stylesheet" href="css/tintuc&sukien.css">
    @include('home.homecss', ['title' => 'Ẩm thực'])
</head>

<body class="flex-wrapper">
  
    @include('home.header')

    @include('home.banner', ['title' => 'ẨM THỰC', 'link' => url('/amthuc')])


  <!-- CONTENT -->
  <div class="amthuc-content">
    <div class="container py-md-4">
      <div class="title">
        <h2>Ẩm thực</h2>
      </div>

      <div class="amthuc-menu mt-3">
        <div class="row">
          <div class="col-12">
            <div class="second-news mb-3">
              <div class="row">
                @foreach ($foodPosts as $post)
                    <div class="col-12 col-sm-6 col-md-3 p-3">
                        <div class="card border-dark-subtle">
                            <div class="team-style1 text-center">
                                <img src="/postimage/{{$post->main_image}}" class="card-img-top" alt="...">
                            <div class="team-overlay">
                                <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle">
                                        <h3><a href="{{ url('post_details', $post->id) }}" class="text-warning text-decoration-none">Xem thêm</a></h3>
                                    </div>
                                </div>
                            </div>

                            </div>
                                <div class="card-body">
                                <a href="{{ url('post_details', $post->id) }}" style="text-decoration: none; color:black">
                                    <h5 class="card-title">{{$post->title}}</h5>
                                </a>
                                <div class="card-text">{!! ($post->description1) !!}</div>
                            </div>
                        </div>
                    </div>                
                @endforeach

              </div>
            </div>

            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="">1</a></li>
                <li class="page-item"><a class="page-link" href="{{ url('amthuc/page2') }}">2</a></li>
                <li class="page-item">
                  <a class="page-link" href="{{ url('amthuc/page2') }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- END CONTENT -->


  <!-- FOOTER -->
  <div class="footer">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #23242a;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-4 p-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold">
                WEBSITE QUẢNG BÁ DU LỊCH CÙ LAO DUNG
              </h5>
              <p>Bản quyền thuộc về </p>
              <p>Đơn vị thực hiện: </p>
              <p>Chịu trách nhiệm nội dung: </p>
              <p>Giấy phép số: </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 p-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">thông tin liên hệ</h6>
              <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
              <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 p-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">theo dõi</h6>

              <!-- Facebook -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i
                  class="fab fa-facebook-f"></i></a>

              <!-- Twitter -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i
                  class="fab fa-twitter"></i></a>

              <!-- Google -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i
                  class="fab fa-google"></i></a>

              <!-- Instagram -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i
                  class="fab fa-instagram"></i></a>

              <!-- Linkedin -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i
                  class="fab fa-linkedin-in"></i></a>
              <!-- Github -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i
                  class="fab fa-github"></i></a>
            </div>
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="#">123456789</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- END FOOTER -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

<script>

</script>

</html>