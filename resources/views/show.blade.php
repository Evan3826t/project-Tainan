@extends('layouts.guest')

@section('content')


<div id="portfolio" class="p-5 d-flex justify-content-center align-items-center" style="background-color: #f8f8f8;">
  <h1 class="d-flex align-items-center text-center">作品案例 - 老宅翻新</h1>
</div>

<!-- 卡片 -->

<div>
  <div class="container mt-5 mb-5">
    <h4>{{ $showContent['text'][0] }}</h4>
    <h5 class="text-secondary">{{ $showContent['text'][1] }}</h5>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @for ($i = 1; $i <= $showContent['count']; $i++)
      <div class="col">
        <div class="card">
          <img src="{{ asset('show/showIcon' . $show . '-' . $i . '.jpg') }}" onclick="carouselToggle({{$i}})" class="card-img-top card-show" alt="...">
        </div>
      </div>
      @endfor
    </div>
  </div>
</div>

<div class="p-3" id="project-show">
  <div class="text-white text-end"> <button type="button" class="btn btn-light" onclick="carouselToggle()">X</button></div>
  <div class="container p-5">
    <div class="slider responsive-for">
      @for ($i = 1; $i <= $count; $i++)
      <div>
        <img src="{{ asset('show/show' . $show . '-' . $i . '.jpg') }}" alt="" class="rounded mx-auto d-block responsive-for-image">
      </div>
      @endfor
    </div>
    <br>
    <div class="slider responsive-nav">
      @for ($j = 1; $j <= $count; $j++)
      <div>
        <img src="{{ asset('show/show' . $show . '-' . $j . '.jpg') }}" alt="" class="rounded mx-auto d-block responsive-nav-image">
      </div>
      @endfor
    </div>
  </div>
</div>
@endsection

@section('scripts')

<script type="text/javascript">
  $(function() {
    $('.responsive-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.responsive-nav'
    });
    $('.responsive-nav').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: '.responsive-for',
      dots: true,
      centerMode: true,
      focusOnSelect: true
    });
  })


  function carouselToggle() {
    var x = document.getElementById("project-show");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>


@endsection