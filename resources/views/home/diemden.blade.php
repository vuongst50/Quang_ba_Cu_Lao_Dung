<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <link rel="stylesheet" href="css/tintuc&sukien.css">
    @include('home.homecss', ['title' => 'Điểm đến'])
</head>

<body class="flex-wrapper">

    @include('home.header')

    @include('home.banner', ['title' => 'ĐIỂM ĐẾN', 'link' => url('/diemden')])

  <!-- CONTENT -->
  <div class="diemden-content">
    <div class="container py-md-4">
      <div class="title">
        <h2>Điểm đến</h2>
      </div>

      <div class="diemden-menu">
        <div class="row">
          <div class="col-12 col-md-7 me-5">
            <div class="dl-sinhthai mt-3 mb-5">
                <div class="dl-title mb-3 p-1 ps-4">
                    <span>Du lịch sinh thái</span>
                </div>
                    
                @foreach ($dlst_Posts as $post)
                  <div class="first-news mb-3">
                      <div class="card">
                      <div class="row g-0">
                          <div class="col-lg-4 col-md-12">
                          <img src="/postimage/{{$post->main_image}}" class="img-fluid rounded-start"
                              alt="..." style="width:100%;">
                          </div>
                          <div class="col-lg-8">
                          <div class="card-body">
                              <a href="{{ url('post_details', $post->id) }}"
                              style="text-decoration: none; color:black">
                              <h5 class="card-title">{{$post->title}}</h5>
                              </a>
                              <div class="card-text">{!! ($post->description1) !!}</div>
                              <p class="card-text">
                              <small class="text-body-secondary">
                                  <i class="fa fa-calendar" aria-hidden="true"></i>
                                  06/06/2024
                              </small>
                              </p>
                          </div>
                          </div>
                      </div>
                      </div>
                  </div>                
                @endforeach

              <a class="link-primary d-flex flex-row-reverse m-4"
                href="{{ url('dulichsinhthai') }}">
                <span>Xem thêm</span>
              </a>
            </div>

            <div class="dl-vhls my-5">
              <div class="dl-title mb-3 p-1 ps-4">
                <span>Du lịch văn hóa - lịch sử</span>
              </div>
                @foreach ($dlvh_Posts as $post)
                  <div class="first-news mb-3">
                      <div class="card">
                      <div class="row g-0">
                          <div class="col-lg-4 col-md-12">
                          <img src="/postimage/{{$post->main_image}}" class="img-fluid rounded-start"
                              alt="...">
                          </div>
                          <div class="col-lg-8">
                          <div class="card-body">
                              <a href="{{ url('post_details', $post->id) }}"
                              style="text-decoration: none; color:black">
                              <h5 class="card-title">{{$post->title}}</h5>
                              </a>
                              <div class="card-text">{!! ($post->description1) !!}</div>
                              <p class="card-text">
                              <small class="text-body-secondary">
                                  <i class="fa fa-calendar" aria-hidden="true"></i>
                                  06/06/2024
                              </small>
                              </p>
                          </div>
                          </div>
                      </div>
                      </div>
                  </div>                
                @endforeach

              <a class="link-primary d-flex flex-row-reverse m-4"
                href="{{ url('dulichvanhoa') }}">
                <span>Xem thêm</span>
              </a>
            </div>
          </div>

          @include('home.details.side_content')
        </div>
      </div>
    </div>

  </div>
  <!-- END CONTENT -->


  @include('home.footer')

</body>

<script>

</script>

</html>