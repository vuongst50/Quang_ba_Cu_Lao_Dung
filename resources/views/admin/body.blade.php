      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <a href="{{url('show_post')}}">
                <div class="info-box">
                  <span class="info-box-icon bg-info elevation-1"><i class="fa fa-archive"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Tất cả bài viết</span>
                    <span class="info-box-number">
                      <span class="info-box-number">{{$postCount}}</span>
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </a>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <a href="{{url('manage_user')}}">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Người dùng</span>
                    <span class="info-box-number">{{$userCount}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>                
              </a>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <a href="{{url('pending_post')}}">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-secondary elevation-1"><i class="fa-solid fa-file-pen"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Bài viết chờ duyệt</span>
                    <span class="info-box-number">{{$waitPostCount}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>                
              </a>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <a href="{{url('rejected_posts')}}">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-file-circle-xmark"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Bài viết bị từ chối</span>
                    <span class="info-box-number">{{$rejectedPostCount}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>                
              </a>

              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3">
              <a href="{{url('show_resort_post')}}">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-primary elevation-1"><i class="far fa-building"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Nghỉ dưỡng</span>
                    <span class="info-box-number">{{$resortPostCount}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>                
              </a>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <a href="{{url('show_new_post')}}">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-white elevation-1"><i class="fas fa-newspaper"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Tin tức</span>
                    <span class="info-box-number">{{$newPostCount}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>                
              </a>
              <!-- /.info-box -->
            </div>

            <div class="col-12 col-sm-6 col-md-3">
              <a href="{{url('show_destination_post')}}">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fa fa-map"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Điểm đến</span>
                    <span class="info-box-number">{{$destinationPostCount}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </a>

              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <a href="{{url('show_food_post')}}">
                <div class="info-box mb-3">
                <span class="info-box-icon bg-dark elevation-1"><i class="fa fa-utensils"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Ẩm thực</span>
                  <span class="info-box-number">{{$foodPostCount}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              </a>
              
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->            
          </div>
          <!-- /.row -->


          <!-- /.row -->

          <!-- Main row -->

          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>