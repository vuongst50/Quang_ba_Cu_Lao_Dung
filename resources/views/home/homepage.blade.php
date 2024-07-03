<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.homecss', ['title' => 'Trang chủ'])
</head>

<body class="flex-wrapper">
  @include('home.header')
  @include('home.image_slide')
  @include('home.searchbar')

  <div class="content">
    @include('home.speech')
    @include('home.menu')
    @include('home.news-and-events')
    @include('home.food')
    @include('home.destination')
  </div>

  @include('home.footer')
</body>

<script>

</script>

</html>