<div class="container text-center  mb-5 mb-sm-5 mb-md-5 new-and-event-content">
    <div class="title-content my-md-3 my-sm-3">
    <div class="row">
        <div class="col-6 d-flex justify-content-row">
        <h2>Tin tức và sự kiện</h2>
        </div>
        <div class="col-6 d-flex flex-row-reverse">
        <div class="view-more">
            <a href="{{url('tintuc&sukien')}}">
            <h3>Xem thêm <i class="fa-solid fa-right-long"></i></h3>
            </a>
        </div>
        </div>
    </div>
    </div>

    <div class="NAE-content">
    <div class="row">
        <div class="col-lg-6 col-sm-12 d-flex flex-column">
        <ul class="text-start" style="list-style-type: disc;">
            @foreach ($newsPosts as $newsPostsTitle )
            <li class="li-title mb-4"><a href="{{url('post_details',$newsPostsTitle->id)}}">{{$newsPostsTitle->title}}</a></li>
            @endforeach
        </ul>
        </div>
        <div class="col-lg-6 col-sm-12 slide-show-side">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($newsPosts as  $index => $newsPosts )
                            
                <div class="carousel-item @if ($index == 0) active @endif">
                    <img src="/postimage/{{$newsPosts->main_image}}" class="card-img-top" alt="...">
                    <div class="carousel-caption">
                    <a href="{{url('post_details',$newsPostsTitle->id)}}"><h5>{{$newsPosts->title}}</h5></a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
        </div>
    </div>
    </div>
</div>