<div class="food-content  mb-5 mb-sm-5 mb-md-5 ">
    <div class="food-banner bg-warning p-3">
    <div class="container text-center">
        <div class="banner-text">THƯỞNG THỨC CÁC MÓN NGON</div>

        <div class="banner-text">ĐẾN TỪ VÙNG CÙ LAO SÔNG NƯỚC</div>
    </div>
    </div>

    <div class="container food-slider">
    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                
                @foreach ($foodsPost as $post)
                
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                        <img src="/postimage/{{$post->main_image}}" alt="" class="card-img">
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">{{$post->title}}</h2>
                        <a href="{{url('post_details',$post->id)}}" class="button text-decoration-none">Xem thêm</a>
                    </div>
                </div>
                
                @endforeach               
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
    </div>
</div>