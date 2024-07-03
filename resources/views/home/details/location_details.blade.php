<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
    @include('home.homecss', ['title' => $post->title])
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

<body class="flex-wrapper">

    @include('home.header')

    @include('home.banner', ['title' => 'Nghỉ dưỡng', 'link' => url('/nghiduong')])

    <!-- CONTENT -->
    <div class="khachsan-content">
        <div class="container py-md-4">
            <div class="row">
                <div class="col-12 col-md-6">
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

                <div class="col-12 col-md-6">
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

            <div class="row pt-5">
                <h2 style="font-weight:bold; font-size:30px;">ĐỊA ĐIỂM LIÊN QUAN</h2>
                <div class="row py-md-4">
                    @foreach ($relatepost as $relatepost )
                    
                   
                    <div class="col-md-6 col-lg-4 mt-1-9 mb-4 mb-md-4">
                        <div class="team-style1 text-center">
                            <img src="/postimage/{{$relatepost->main_image}}"
                                class="border-radius-5 img-fluid" alt="..." style="height:350px; width:100%">
                            <div class="team-info">
                                <h3 class="text-dark mb-1 h4">{{$relatepost->title}}</h3>
                            </div>
                            <div class="team-overlay">
                                <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle">
                                        <h3><a href="{{ url('location_details', $relatepost->id) }}" class="text-warning">Xem thêm</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->


   
    @include('home.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/nghiduongJS/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/nghiduongJS/popper.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/nghiduongJS/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/nghiduongJS/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/nghiduongJS/main.js') }}"></script>

</body>
</html>