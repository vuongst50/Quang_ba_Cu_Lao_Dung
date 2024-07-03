      <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
  <div class="header">
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>
    <nav class="navbar fixed-top navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand me-5" href="{{url('')}}">
          <img src="images/logo-removebg-preview.png" alt="description of myimage"
            class="logo">
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <a class="navbar-brand me-auto" href="">
              <img src="images/logo-removebg-preview.png" alt="description of myimage"
                class="logo">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">

              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="gioithieu">GIỚI THIỆU</a>
              </li>

              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="tintuc&sukien">TIN TỨC & SỰ KIỆN</a>
              </li>

              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="vanhoa&lichsu">VĂN HÓA - LỊCH SỬ</a>
              </li>

              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="amthuc">ẨM THỰC</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link caret-off mx-lg-2" href="diemden" role="button"
                   aria-expanded="false">
                  ĐIỂM ĐẾN
                </a>
                <ul class="dropdown-menu mx-lg-3">
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="dulichsinhthai">DU LỊCH
                      SINH THÁI</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="dulichvanhoa">DU
                      LỊCH VĂN HÓA - LỊCH
                      SỬ</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link caret-off mx-lg-2" href="nghiduong" role="button"
                   aria-expanded="false">
                  NGHỈ DƯỠNG
                </a>
                <ul class="dropdown-menu mx-lg-3">
                  <li><a class="dropdown-item" href="khachsan">KHÁCH SẠN</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="homestay">HOMESTAY</a>
                  </li>
                </ul>
              </li>
            </ul>
            
            @if (Route::has('login'))
            @auth
            <ul class="navbar-nav d-flex align-items-center">
                <x-app-layout>
                </x-app-layout>              
            </ul>    
            @endauth
            @endif
     
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </div>