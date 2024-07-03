<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.homecss', ['title' => $post->title])
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
</head>

<body class="flex-wrapper">
  @include('home.header')
  @php
    $post_type = $post->post_type; // Lấy từ URL hoặc dữ liệu, giả sử là tintuc trong ví dụ này

    switch ($post_type) {
        case 'Tin tức':
            $title = 'Tin tức & Sự kiện';
            $link = url('tintuc&sukien');
            break;
        case 'Giới thiệu':
            $title = 'Giới thiệu';
            $link = url('gioithieu');
            break;
        case 'Điểm đến':
            $title = 'Điểm đến';
            $link = url('diemden');
            break;
        case 'Ẩm thực':
            $title = 'Ẩm thực';
            $link = url('amthuc');
            break;
        default:
            $title = 'Trang chủ';
            $link = url('');
    }
  @endphp
  @include('home.banner', ['title' => $title, 'link' => $link])

  <div class="tt-sk-content">
    <div class="container py-md-4">
      <div class="row">
        @include('home.details.main_content')
        
        @include('home.details.side_content')
      </div>
    </div>
  </div>

  @include('home.footer')
</body>

<script>

</script>

</html>