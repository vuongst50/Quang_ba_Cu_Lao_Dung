  <div class="container-fluid banner p-0">
    <div class="container-fluid p-0">
      <img src="{{ asset('images/full.png') }}" class="img-fluid" alt="...">
      <div class="centered">
        <p>{{$title}}</p>
        <div class="root">
          <a href="{{ url('') }}">TRANG CHỦ</a>
          <a href="" style="pointer-events: none">/</a>
          <a href="{{ $link }}"> {{$title}}</a>
        </div>
      </div>
    </div>
  </div>