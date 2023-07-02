@extends('layouts.guest')

@section('content')


<div id="portfolio" class="p-5 d-flex justify-content-center align-items-center" style="background-color: #f8f8f8;">
  <h1 class="d-flex align-items-center text-center">作品案例 - 老宅翻新</h1>
</div>

<!-- 卡片 -->

<div>
  <div class="container mt-5 mb-5">
    <h4>台南市南區 老宅翻新</h4>
    <h5 class="text-secondary">團隊項目由建築新增到室內設計。兼具您要的安全、舒適、美觀，期許給到業主、客戶更加全面的服務</h5>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="{{ asset('show/show1-1.jpg') }}" class="card-img-top card-show" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('show/show1-2.jpg') }}" onclick="carouselToggle()" class="card-img-top card-show" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('show/show1-3.jpg') }}" onclick="carouselToggle()" class="card-img-top card-show" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('show/show1-4.jpg') }}" onclick="carouselToggle()" class="card-img-top card-show" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('show/show1-5.jpg') }}" onclick="carouselToggle()" class="card-img-top card-show" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('show/show1-6.jpg') }}" onclick="carouselToggle()" class="card-img-top card-show" alt="...">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="p-3" id="project-show">
  <div class="text-white text-end"> <button type="button" class="btn btn-light" onclick="carouselToggle()">X</button></div>
  <div class="container p-5">
    <div class="slider responsive-for">
      <div>
        <img src="{{ asset('show/show1-1.jpg') }}" alt="" class="rounded mx-auto d-block responsive-for-image">
      </div>
      <div>
        <img src="{{ asset('show/show1-2.jpg') }}" alt="" class="rounded mx-auto d-block responsive-for-image">
      </div>
      <div>
        <img src="{{ asset('show/show1-3.jpg') }}" alt="" class="rounded mx-auto d-block responsive-for-image">
      </div>
      <div>
        <img src="{{ asset('show/show1-4.jpg') }}" alt="" class="rounded mx-auto d-block responsive-for-image">
      </div>
      <div>
        <img src="{{ asset('show/show1-5.jpg') }}" alt="" class="rounded mx-auto d-block responsive-for-image">
      </div>
      <div>
        <img src="{{ asset('show/show1-6.jpg') }}" alt="" class="rounded mx-auto d-block responsive-for-image">
      </div>
    </div>
    <br>
    <div class="slider responsive-nav">
      <div>
        <img src="{{ asset('show/show1-1.jpg') }}" alt="" class="rounded mx-auto d-block responsive-nav-image">
      </div>
      <div>
        <img src="{{ asset('show/show1-2.jpg') }}" alt="" class="rounded mx-auto d-block responsive-nav-image">
      </div>
      <div>
        <img src="{{ asset('show/show1-3.jpg') }}" alt="" class="rounded mx-auto d-block responsive-nav-image">
      </div>
      <div>
        <img src="{{ asset('show/show1-4.jpg') }}" alt="" class="rounded mx-auto d-block responsive-nav-image">
      </div>
      <div>
        <img src="{{ asset('show/show1-5.jpg') }}" alt="" class="rounded mx-auto d-block responsive-nav-image">
      </div>
      <div>
        <img src="{{ asset('show/show1-6.jpg') }}" alt="" class="rounded mx-auto d-block responsive-nav-image">
      </div>
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