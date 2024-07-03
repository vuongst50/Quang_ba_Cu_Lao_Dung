        <div class="col-12 col-md-7 me-5 tt-sk-menu">
          <div class="title my-3">
            <h2>{{$post->title}}</h2>
            <div class="row title-icon my-3">
              <div class="col-3">
                <h5>
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                  <span>{{$post->created_at->format('d/m/Y')}}</span>
                </h5>
              </div>

              <div class="col-3">
                <h5>
                  <i class="fa-solid fa-eye"></i>
                  <span>999</span>
                </h5>
              </div>
            </div>
          </div>
          <div class="red-horizontal-line"></div>

          <div class="detail-content text-center">
              {!!$post->description1!!}
      
            <div class="socialbtns mt-5">
              <ul>
                <li><span>
                    <h5>Chia sẻ</h5>
                  </span></li>
                <li><a href="#" class="fa fa-lg fa-facebook"></a></li>
                <li><a href="#" class="fa fa-lg fa-twitter"></a></li>
                <li><a href="#" class="fa fa-lg fa-telegram"></a></li>
                <li><a href="#" class="fa fa-lg fa-pinterest"></a></li>
                <li><a href="#" class="fa fa-lg fa-instagram"></a></li>
              </ul>
            </div>
          </div>
        </div>