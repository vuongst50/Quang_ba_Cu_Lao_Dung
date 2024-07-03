<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/public">
  <link rel="stylesheet" href="css/gioithieu.css">
  @include('home.homecss', ['title' => 'Giới thiệu'])
  
</head>

<body class="flex-wrapper">

  @include('home.header')

  @include('home.banner', ['title' => 'GIỚI THIỆU', 'link' => url('/gioithieu')])

  <div class="gt-content">
    <div class="container py-md-4">
      <div class="content-title">
        <h2>Giới Thiệu</h2>
      </div>

      <div class="text">
        <p style="font-style:italic">Cù Lao Dung là nơi mang đậm vẻ đẹp miền Tây sông nước với đất đai trù phú, cây trái
          miệt vườn um tùm cùng kênh rạch chằng chịt. Vẻ đẹp thanh bình, hiền hòa của huyện cù lao này tạo nên sức hút
          mà bạn không nên bỏ lỡ khi có dịp lịch Sóc Trăng.</p>
        <p>Huyện Cù Lao Dung được bao bọc bởi sông ngòi chằng chịt cùng hệ sinh thái đa dạng. Phía Đông giáp với tỉnh
          Trà Vinh, phía Tây giáp huyện Long Phú và Trần Đề, phía Nam giáp biển Đông, phía Bắc giáp huyện Kế Sách. Cù
          Lao Dung được thành lập vào năm 2002, tách ra từ huyện Long Phú. Diện tích huyện vào khoảng 26.143,22 ha và
          dân số đạt 64.452 người.</p>
        <figure class="figure my-md-5">
          <img
            src="{{ asset('images/kham-pha-cu-lao-dung-voi-ca-tom-tru-phu-cay-trai-ngot-lanh-7-1665528323.jpg') }}"
            class="figure-img img-fluid rounded" alt="...">
          <figcaption class="figure-caption text-center">Cù Lao Dung là nơi có không gian làng quê rất thanh bình, giản
            dị</figcaption>
        </figure>
        <p>Với địa thế tự nhiên được bao bọc bởi hai cửa sông là Định An và Trần Đề, ngoài ra còn có đường bờ biển dài
          17km nên huyện Cù Lao Dung sở hữu không khí rất trong lành, mát mẻ, hệ sinh thái phong phú. Nơi đây có các
          loại thực vật, động vật nước ngọt, nước mặn và nước lợ.</p>
        <p>Bên cạnh đó, đất đai được phù sa bồi đắp cũng tạo điều kiện để người dân Cù Lao Dung phát triển hệ thống
          vườn cây ăn trái rộng lớn. Các hộ dân ven biển thì có thể xây đầm nuôi tôm, nghêu, cua, đầu tư tàu đánh cá.
          Chạy dọc đường bờ biển là 1.200 ha rừng phòng hộ cùng hàng chục ngàn hecta bãi bồi, tạo điều kiện thuận lợi
          để địa phương phát triển du lịch sinh thái, nghỉ dưỡng cùng các hoạt động vui chơi giải trí hấp dẫn khác.
        </p>
        <div class="row">
          <div class="col-6">
            <figure class="figure my-md-5">
              <img
                src="{{ asset('images/kham-pha-cu-lao-dung-voi-ca-tom-tru-phu-cay-trai-ngot-lanh-2-1665528322.jpg') }}"
                class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption text-center">Khung cảnh làng quê giữa màu xanh mướt của cây cối, sông
                ngòi dày đặc</figcaption>
            </figure>
          </div>
          <div class="col-6">
            <figure class="figure my-md-5">
              <img
                src="{{ asset('images/kham-pha-cu-lao-dung-voi-ca-tom-tru-phu-cay-trai-ngot-lanh-3-1665528322.jpg') }}"
                class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption text-center">Nhiều hộ gia đình tại đây sống bằng nghề làm đầm tôm, đầm
                cá</figcaption>
            </figure>
          </div>
        </div>
        <p>Người dân Cù Lao Dung rất hiền hòa, chất phát, thật thà và đặc biệt là rất hiếu khách. Đến nhà nào, bạn cũng
          sẽ được mời những đặc sản có trong vườn nhà như một trái dừa mát ngọt, một rổ cam hay một chùm nhãn…Ngồi nghe
          những lão nông tri điền kể chuyện ngày xưa khẩn hoang, be bờ, mở đất, chuyện đánh Tây bằng tầm vông, mã tấu,
          chuyện đánh Mỹ bằng cách đóng cọc, căng dây thép bắt “bo bo”… Chính những điều giản dị, đơn sơ ấy níu bước
          chân du khách chẳng muốn rời đi!</p>
      </div>
    </div>


  </div>

  @include('home.footer')


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

<script>

</script>

</html>