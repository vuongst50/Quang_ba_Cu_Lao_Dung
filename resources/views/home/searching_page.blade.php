<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <link rel="stylesheet" href="css/tintuc&sukien.css">
    @include('home.homecss', ['title' => 'Tìm kiếm'])
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }
        h2{
            color: white;
        }

        /* Search page */
        .search-content {
            margin-top: 20px;
        }

        .search-content .first-news .card-text {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis; /* Optional: Adds '...' at the end */
            line-height: 1.5; /* Adjust line-height for consistency */
            max-height: calc(1.5em * 3); /* Ensure this matches the line-clamp */
        }

        .search-content .first-news .card {
            margin: 20px 200px 20px;
            height: 200px;
        }

        .search-content .first-news img {
            height: 200px;
        }
        
    </style>
</head>

<body class="flex-wrapper">

    @include('home.header')

    @include('home.banner', ['title' => 'ĐIỂM ĐẾN', 'link' => url('/diemden')])

    <!-- CONTENT -->
     <div class="container-fluid">
    <div class="row bg-dark">
        <div class="col-6 d-flex align-items-center search-info">
            <h2>Kết quả tìm kiếm cho: "{{ $query }}"</h2>
        </div>
        <div class="col-6">
            <div class="container-fluid p-0 search-bar">
                <nav class="navbar">
                    <div class="container">
                        <a class="navbar-brand"></a>
                        <form action="{{ url('searching_page') }}" method="get" class="d-flex">
                        <input class="form-control me-2 border-2" type="search" name="search" aria-label="Search">
                        <button class="btn btn-outline-success border-2" type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    @if($post->isEmpty() || $query == "")
     <h3 class="m-3">Không tìm thấy bài viết nào phù hợp.</h3>
    @else
        <div class="row search-content">
            @foreach ($post as $post)
                <div class="first-news mb-3">
                      <div class="card">
                        <div class="row g-0">
                            <div class="col-12 col-md-4">
                            <img src="/postimage/{{$post->main_image}}" class="img-fluid rounded-start"
                                alt="..." style="width:100%;">
                            </div>
                            <div class="col-12 col-md-8">
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
        </div>
    @endif
    </div>
    <!-- END CONTENT -->
    <div style="height: 100px"></div>

    @include('home.footer')

</body>

<script>

</script>

</html>