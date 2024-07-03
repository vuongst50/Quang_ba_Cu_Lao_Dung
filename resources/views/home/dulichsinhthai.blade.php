<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <link rel="stylesheet" href="css/tintuc&sukien.css">
    @include('home.homecss', ['title' => 'Du lịch sinh thái'])
</head>

<body class="flex-wrapper">

    @include('home.header')

    @include('home.banner', ['title' => 'ĐIỂM ĐẾN', 'link' => url('/diemden')])

  <!-- CONTENT -->
  <div class="tt-sk-content">
    <div class="container py-md-4">
      <div class="title">
        <h2>Du lịch sinh thái</h2>
      </div>

      <div class="tt-sk-menu mt-3">
        <div class="row">
          <div class="col-12 col-md-7 me-5">
            @php $firstPost = $newsPosts->first(); @endphp
            <div class="first-news mb-3">
              <div class="card">
                <div class="row g-0">
                  <div class="col-lg-8 col-md-12">
                    <img src="/postimage/{{$firstPost->main_image}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-lg-4">
                    <div class="card-body">
                      <a href="{{ url('post_details', $firstPost->id) }}"
                        style="text-decoration: none; color:black">
                        <h5 class="card-title">{{$firstPost->title}}</h5>
                      </a>
                      <div class="card-text card-description">{!! ($firstPost->description1) !!}</div>
                      <p class="card-text">
                        <small class="text-body-secondary">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                          {{$firstPost->created_at->format('d/m/Y')}}
                        </small>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="second-news mb-3">
              <div class="row">

                 @foreach($newsPosts->slice(1, 2) as $post)
                  <div class="col-md-6 mb-2">
                    <div class="card">
                      <img src="/postimage/{{$post->main_image}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="{{ url('post_details', $post->id) }}" style="text-decoration: none; color:black">
                          <h5 class="card-title">{{$post->title}}</h5>
                        </a>
                        <div class="card-text"> {!! ($post->description1) !!}</div>
                      </div>
                    </div>
                  </div>               
                 @endforeach

              </div>
            </div>

            <div class="third-news mb-3">
              <div class="row">
                @foreach($newsPosts->slice(3, 3) as $post)
                  <div class="col-md-4">
                    <div class="card">
                      <img src="/postimage/{{$post->main_image}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="{{ url('post_details', $post->id) }}"
                          style="text-decoration: none; color:black">
                          <h5 class="card-title">{{$post->title}}</h5>
                        </a>
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
                <li class="page-item"><a class="page-link" href="{{ url('tintuc&sukien/page2') }}">2</a></li>
                <li class="page-item">
                  <a class="page-link" href="{{ url('tintuc&sukien/page2') }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
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

</html>i