        <div class="col-12 col-md-4 side-news mt-4">
          <div class="hottest-news pb-5">
              <div class="side-tittle">
                <h4>Bài viết nổi bật</h4>
              </div>
              @foreach ($hotpost as $hotpost )
              <div class="row justify-content-center">
                <div class="card mb-3 p-0">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="/postimage/{{$hotpost->main_image}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <a href="{{url('post_details',$hotpost->id)}}"
                          style="text-decoration: none; color:black">
                          <h5 class="card-title">{{$hotpost->title}}</h5>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>              
              @endforeach
          </div>          
          <div class="latest-news pb-5">
            <div class="side-tittle">
              <h4>Bài viết mới nhất</45>
            </div>
            @foreach ($newpost as  $newpost)
            <div class="row justify-content-center">
              <div class="card mb-3 p-0">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="/postimage/{{$newpost->main_image}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="{{url('post_details',$newpost->id)}}"
                        style="text-decoration: none; color:black">
                        <h5 class="card-title">{{$newpost->title}}</h5>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            @endforeach

          </div>

          @if (Request::is('post_details/*'))
            <div class="latest-news pb-5">
              <div class="side-tittle">
                <h4>Bài viết cùng chuyên mục</45>
              </div>
              @foreach ($relatepost as  $relatepost)
              <div class="row justify-content-center">
                <div class="card mb-3 p-0">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="/postimage/{{$relatepost->main_image}}" class="img-fluid rounded-start side-image" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <a href="{{url('post_details',$relatepost->id)}}"
                          style="text-decoration: none; color:black">
                          <h5 class="card-title">{{$relatepost->title}}</h5>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>            
              @endforeach
            </div>
          @endif

        </div>