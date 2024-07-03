<div class="container destination-content mt-md-5">
    <div class="title-content my-md-3 my-sm-3">
    <div class="row position-relative">
        <div class="col-6 d-flex justify-content-row">
        <h2>Điểm đến</h2>
        </div>
        <div class="col-6 d-flex flex-row-reverse">
        <div class="view-more">
            <a href="/diemden">
            <h3>Xem thêm <i class="fa-solid fa-right-long"></i></h3>
            </a>
        </div>
        </div>
    </div>
    </div>
    <div class="container p-0">
    <div class="row">
        @foreach($destinationPosts as $index => $post)
        @if($index === 0)
        <div class="col-md-4 col-sm-12 mb-4 mb-md-4 pe-3">
        <div class="content">
            <div class="content-overlay"></div>
            <img src="/postimage/{{$post->main_image}}" alt="" class="content-image"
            style="height: 524px">
            <div class="content-details fadeIn-bottom">
            <a href="{{ url('post_details', $post->id) }}">
                <h3 class="content-title">{{$post->title}}</h3>
            </a>
            <p class="content-text"><i class="fa fa-map-marker"></i> </p>
            </div>
        </div>
        </div>
        @endif
        @endforeach

        <div class="col-md-8 mb-sm-4 mb-4 mb-md-4">
        <div class="row ">
            @foreach($destinationPosts as $index => $post)
            @if($index === 1)
            <div class="col-md-8 mb-sm-4 mb-4 mb-md-4">
            <div class="content">
                <div class="content-overlay"></div>
                <img src="/postimage/{{$post->main_image}}" alt="" class="content-image"
                style="height: 250px">
                <div class="content-details fadeIn-bottom">
                <a href="{{ url('post_details', $post->id) }}">
                    <h3 class="content-title">{{$post->title}}</h3>
                </a>
                <p class="content-text"><i class="fa fa-map-marker"></i> </p>
                </div>
            </div>
            </div>
            @endif
            @endforeach

            @foreach($destinationPosts as $index => $post)
            @if($index === 2)
            <div class="col-md-4 mb-sm-4 mb-4 mb-md-4">
            <div class="content">
                <div class="content-overlay"></div>
                <img src="/postimage/{{$post->main_image}}" alt="" class="content-image"
                style="height: 250px">
                <div class="content-details fadeIn-bottom">
                <a href="{{ url('post_details', $post->id) }}">
                    <h3 class="content-title">{{$post->title}}</h3>
                </a>
                <p class="content-text"><i class="fa fa-map-marker"></i> </p>
                </div>
            </div>
            </div>
            @endif
            @endforeach
        </div>

        <div class="row">
            @foreach($destinationPosts as $index => $post)
            @if($index === 3)
            <div class="col-md-4 mb-sm-4 mb-4 mb-md-4">
            <div class="content">
                <div class="content-overlay"></div>
                <img src="/postimage/{{$post->main_image}}" alt="" class="content-image"
                style="height: 250px">
                <div class="content-details fadeIn-bottom">
                <a href="{{ url('post_details', $post->id) }}">
                    <h3 class="content-title">{{$post->title}}</h3>
                </a>
                <p class="content-text"><i class="fa fa-map-marker"></i> </p>
                </div>
            </div>
            </div>
            @endif
            @endforeach

            @foreach($destinationPosts as $index => $post)
            @if($index === 4)
            <div class="col-md-8 mb-sm-4 mb-4 mb-md-4">
            <div class="content">
                <div class="content-overlay"></div>
                <img src="/postimage/{{$post->main_image}}" alt="" class="content-image"
                style="height: 250px">
                <div class="content-details fadeIn-bottom">
                <a href="{{ url('post_details', $post->id) }}">
                    <h3 class="content-title">{{$post->title}}</h3>
                </a>
                <p class="content-text"><i class="fa fa-map-marker"></i> </p>
                </div>
            </div>
            </div>
            @endif
            @endforeach
        </div>
        </div>
        
    </div>
    </div>
</div>