@extends('layouts.guest')

@section('content')

<!-- 首頁圖 -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div data-bs-interval="5000" class="carousel-item active">
      <!-- <img src="{{ asset('image/icon/banner.jpeg') }}" class="d-block w-100" alt="..."> -->
      <!-- <img src="{{ asset('icon/banner01.jpg') }}" class="d-block w-100" alt="..."> -->
      <!-- <img src="{{ asset('image/icon/icon07.svg') }}"> -->
      <picture>
        <source srcset="{{ asset('icon/banner01.jpg') }}" media="(min-width: 992px)">
        <img src="{{ asset('icon/banner01-s.jpg') }}" class="d-block w-100" alt="...">
      </picture>
    </div>
    <div data-bs-interval="5000" class="carousel-item">
      <picture>
        <source srcset="{{ asset('icon/banner02.jpg') }}" media="(min-width: 992px)">
        <img src="{{ asset('icon/banner02-s.jpg') }}" class="d-block w-100" alt="...">
      </picture>
    </div>
    <div data-bs-interval="5000" class="carousel-item">
      <picture>
        <source srcset="{{ asset('icon/banner03.jpg') }}" media="(min-width: 992px)">
        <img src="{{ asset('icon/banner03-s.jpg') }}" class="d-block w-100" alt="...">
      </picture>
    </div>
    <div data-bs-interval="5000" class="carousel-item">
      <picture>
        <source srcset="{{ asset('icon/banner04.jpg') }}" media="(min-width: 992px)">
        <img src="{{ asset('icon/banner04-s.jpg') }}" class="d-block w-100" alt="...">
      </picture>
    </div>
    <div data-bs-interval="5000" class="carousel-item">
      <picture>
        <source srcset="{{ asset('icon/banner05.jpg') }}" media="(min-width: 992px)">
        <img src="{{ asset('icon/banner05-s.jpg') }}" class="d-block w-100" alt="...">
      </picture>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- 關於我們 -->
<div id="aboutUs" class="p-5" style="background-color: #f8f8f8;">
  <dev class="aboutBackground"></dev>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-center">關於我們</h1>
        <br>
        <p class="fs-4 text-center">詠櫟山團隊的土水師傅於台南為起點開始進行<span class="fs-4" style="font-weight:bold;">老屋翻修、公寓翻修套房、自地自建、屋內局部翻新</span>等……大小建案</p>
        <p class="fs-4 text-center" style="font-style:italic;">累積至今20年專業經驗！獲得業主們的口碑相傳！</p>
        <br>
        <p class="fs-4 text-center">子承衣缽，更是將團隊項目由建築新增到室內設計，兼具您要的安全、舒適、美觀，</p>
        <p class="fs-4 text-center">期許給到業主、客戶更加全面的服務，下一代的我們秉持著上一代的精神及技術，規格再升級！</p>
        <p class="fs-4 text-center">為了客戶在完工階段看見心目中理想畫面就在眼前的一張笑臉、一聲稱讚、一則回饋。</p>
        <br>
        <p class="fs-4 text-center">詠櫟山做事實在，選擇我們給您牢靠穩健的服務！</p>
      </div>
    </div>
  </div>
</div>
<!-- 關於我們 -->
<div id="aboutUsPhone" class="pt-5 pb-5" style="background-color: #f8f8f8;">

      <div class="col-lg-12">
        <h1 class="text-center">關於我們</h1>
        <br>
        <p class="fs-4 text-center aboutUsPhoneText m-0">詠櫟山團隊的土水師傅於台南為起點</p>
        <p class="fs-4 text-center aboutUsPhoneText m-0">開始進行<span class="fs-4" style="font-weight:bold;">老屋翻修、公寓翻修套房、</span></p>
        <p class="fs-4 text-center aboutUsPhoneText m-0"><span class="fs-4" style="font-weight:bold;">自地自建、屋內局部翻新</span>等……大小建案</p>
        <br>
        <p class="fs-4 text-center aboutUsPhoneText m-0" style="font-style:italic;">累積至今20年專業經驗！</p>
        <p class="fs-4 text-center aboutUsPhoneText m-0" style="font-style:italic;">獲得業主們的口碑相傳！</p>
        <br>
        <p class="fs-4 text-center aboutUsPhoneText m-0">子承衣缽</p>
        <p class="fs-4 text-center aboutUsPhoneText m-0">更是將團隊項目由建築新增到室內設計</p>
        <p class="fs-4 text-center aboutUsPhoneText m-0">兼具您要的安全、舒適、美觀</p>
        <p class="fs-4 text-center aboutUsPhoneText m-0">期許給到業主、客戶更加全面的服務</p>
        <p class="fs-4 text-center aboutUsPhoneText m-0">下一代的我們秉持著上一代的精神及技術</p>
        <p class="fs-4 text-center aboutUsPhoneText m-0">規格再升級！</p>
        <p class="fs-4 text-center aboutUsPhoneText m-0">為了客戶在完工階段看見心目中理想畫面</p>
        <p class="fs-4 text-center aboutUsPhoneText m-0">就在眼前的一張笑臉、一聲稱讚、一則回饋。</p>
        <br>
        <p class="fs-4 text-center aboutUsPhoneText m-0"><span class="fs-4" style="font-weight:bold;">詠櫟山做事實在，選擇我們給您牢靠穩健的服務！</span></p>
        <p class="fs-4 text-center aboutUsPhoneText m-0"><span class="fs-4" style="font-weight:bold;">選擇我們給您牢靠穩健的服務！</span></p>
      </div>
</div>

<!-- 卡片 -->
<div class="container mt-5 mb-5">
  <h1 class="text-center">作品瀏覽</h1>
  <br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <a class="card-title-link" href="/portfolio/project/1">
        <div class="card">
          <img src="{{ asset('show/showIcon1-1.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">台南市中西區 ‧ 水療美容中心</h5>
            <!-- <p class="card-text">桑拿間及淋浴間翻修裝潢，光線充足、品質優良且一致！</p> -->
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a class="card-title-link" href="/portfolio/project/2">
        <div class="card">
          <img src="{{ asset('show/showIcon2-4.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">台南市永康區 ‧ 浴室翻新</h5>
            <!-- <p class="card-text">挑選自己喜愛的壁磚及木工，讓老屋裡陳舊的浴室、廁所煥然一新，提高生活品質的水平，即便使用起來只是短暫的時間，也要讓生活的每一分、每一秒感受到舒適、愉悅。</p> -->
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a class="card-title-link" href="/portfolio/project/3">
        <div class="card">
          <img src="{{ asset('show/showIcon3-1.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">台南市南區 ‧ 老宅翻新</h5>
            <!-- <p class="card-text">小家庭新入住，三十年老宅整棟翻新，廚房壁磚貼合考驗師傅技術，陽台花磚、浴室壁磚及地磚、廚房櫥具，由我們與屋主一同精心挑選、商量，完工後的成品在燈光的照映之下，一角一隅的角落盡能展現出居住的精緻、歡心以及舒適。</p> -->
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<!-- 施工紀錄 -->
<div class="container constructionPC">
  <h1 class="text-center">施工紀錄</h1>
  <br>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="w-100 pb-5 row">
          <div class="col-md-4 p-4">
            <img src="{{ asset('icon/show1.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">打除工程</h3>
          </div>
          <div class="col-md-4 p-4">
            <img src="{{ asset('icon/show2.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">地磚施作</h3>
          </div>
          <div class="col-md-4 p-4">
            <img src="{{ asset('icon/show3.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">更換頂樓鐵厝</h3>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="w-100 pb-5 row">
          <div class="col-md-4 p-4">
            <img src="{{ asset('icon/show4.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">施作抿石子</h3>
          </div>
          <div class="col-md-4 p-4">
            <img src="{{ asset('icon/show5.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">浴室防水施作</h3>
          </div>
          <div class="col-md-4 p-4">
            <img src="{{ asset('icon/show6.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">壁磚施工</h3>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>

<!-- 施工紀錄 手機頁面 -->
<div class="container constructionPhone">
  <h1 class="text-center">施工紀錄</h1>
  <br>
  <div id="carouselPhoneIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      @for($i = 0; $i < 6; $i++)
      <button type="button" data-bs-target="#carouselPhoneIndicators" data-bs-slide-to="{{$i}}" class="active" aria-current="true" aria-label="Slide 1"></button>
      @endfor
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="pb-5 row">
          <div class="col-md-12 p-4">
            <img src="{{ asset('icon/show1.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">打除工程</h3>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="pb-5 row">
          <div class="col-md-12 p-4">
            <img src="{{ asset('icon/show2.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">地磚施作</h3>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="pb-5 row">
          <div class="col-md-12 p-4">
            <img src="{{ asset('icon/show3.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">更換頂樓鐵厝</h3>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="pb-5 row">
          <div class="col-md-12 p-4">
            <img src="{{ asset('icon/show4.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">施作抿石子</h3>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="pb-5 row">
          <div class="col-md-12 p-4">
            <img src="{{ asset('icon/show5.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">浴室防水施作</h3>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="pb-5 row">
          <div class="col-md-12 p-4">
            <img src="{{ asset('icon/show6.jpg') }}" alt="...">
            <h3 class="text-center pt-2 pb-2" style="background-color:#f8f8f8; border-radius: 0 0 20px 20px;">壁磚施工</h3>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselPhoneIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselPhoneIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>


<!-- 小輪播 -->
<!-- <div class="container p-5">
  <div class="slider responsive">
    <div>
      <img src="{{ asset('icon/test.jpeg') }}" alt="" class="rounded mx-auto d-block">
    </div>
    <div>
      <img src="{{ asset('icon/test.jpeg') }}" alt="" class="rounded mx-auto d-block">
    </div>
    <div>
      <img src="{{ asset('icon/test.jpeg') }}" alt="" class="rounded mx-auto d-block">
    </div>
    <div>
      <img src="{{ asset('icon/test.jpeg') }}" alt="" class="rounded mx-auto d-block">
    </div>
    <div>
      <img src="{{ asset('icon/test.jpeg') }}" alt="" class="rounded mx-auto d-block">
    </div>
    <div>
      <img src="{{ asset('icon/test.jpeg') }}" alt="" class="rounded mx-auto d-block">
    </div>
  </div>
</div> -->

<!-- 施工流程 -->
<div id="CProfile">
  <div class="Jsesbox">
    <section>
      <div>
        <h2>工程訂製流程<b class="subbtitle">PROCESSES</b></h2>
      </div>
      <div class="jJGbox">
        <p class="titlle">設計訂製流程</p>
        <div class="commJJ">
          <div class="boox"><img src="{{ asset('icon/icon01.svg') }}">
            <!-- <div class="boox"><img src="{{ asset('image/icon/icon01.svg') }}"> -->
            <p><span class="CProfilePhone">1.</span>初步洽談</p>
          </div>
          <div class="boox"><img src="{{ asset('icon/icon02.svg') }}">
            <!-- <div class="boox"><img src="{{ asset('image/icon/icon02.svg') }}"> -->
            <p><span class="CProfilePhone">2.</span>實地勘查</p>
          </div>
          <div class="boox"><img src="{{ asset('icon/icon03.svg') }}">
            <!-- <div class="boox"><img src="{{ asset('image/icon/icon03.svg') }}"> -->
            <p><span class="CProfilePhone">3.</span>設計提議</p>
          </div>
          <div class="boox"><img src="{{ asset('icon/icon04.svg') }}">
            <!-- <div class="boox"><img src="{{ asset('image/icon/icon04.svg') }}"> -->
            <p><span class="CProfilePhone">4.</span>工程委託</p>
          </div>
          <div class="boox"><img src="{{ asset('icon/icon05.svg') }}">
            <!-- <div class="boox"><img src="{{ asset('image/icon/icon05.svg') }}"> -->
            <p><span class="CProfilePhone">5.</span>工期安排</p>
          </div>
          <div class="boox"><img src="{{ asset('icon/icon06.svg') }}">
            <!-- <div class="boox"><img src="{{ asset('image/icon/icon06.svg') }}"> -->
            <p><span class="CProfilePhone">6.</span>工程施作</p>
          </div>
          <div class="boox"><img src="{{ asset('icon/icon07.svg') }}">
            <!-- <div class="boox"><img src="{{ asset('image/icon/icon07.svg') }}"> -->
            <p><span class="CProfilePhone">7.</span>雙方檢核</p>
          </div>
          <div class="boox"><img src="{{ asset('icon/icon08.svg') }}">
            <!-- <div class="boox"><img src="{{ asset('image/icon/icon08.svg') }}"> -->
            <p><span class="CProfilePhone">8.</span>圓滿結案</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<!-- 聯絡我們 -->
<!-- <div id="contact" class="pt-3 pb-5">
  <div class="container mt-3 p-5">
    <h1 class="text-center mb-5">聯絡我們</h1>
    <form id="contactForm" class="row g-3" onsubmit="sendMail(event)">
      <div class="col-md-3">
        <label for="inputName" class="form-label">聯絡姓名</label>
        <input required type="text" class="form-control" id="inputName" value="聯絡姓名">
      </div>
      <div class="col-md-3 pt-4">
        <div class="form-check form-check-inline">
          <input required class="form-check-input" type="radio" name="inlineRadioOptions" id="gender" value="male">
          <label class="form-check-label" for="gender">先生</label>
        </div>
        <div class="form-check form-check-inline">
          <input required class="form-check-input" type="radio" name="inlineRadioOptions" id="gender" value="female">
          <label class="form-check-label" for="gender">小姐</label>
        </div>
      </div>
      <div class="col-md-6">
        <label for="inputPhone" class="form-label">電話/手機號碼</label>
        <input required type="number" class="form-control" id="inputPhone" value="098765">
      </div>
      <div class="col-md-6">
        <label for="inputLine" class="form-label">Line ID</label>
        <input required type="text" class="form-control" id="inputLine" value="line">
      </div>
      <div class="col-md-6">
        <label for="inputEmail" class="form-label">電子信箱</label>
        <input required type="email" class="form-control" id="inputEmail" value="test@gmail.com">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">案場位置/地址</label>
        <input required type="text" class="form-control" id="inputAddress" value="案場位置">
      </div>
      <div class="col-md-6">
        <label for="inputAmount" class="form-label">理想改造</label>
        <select required id="inputAmount" class="form-select">
          <option value="">請選擇</option>
          <option selected value="oldHouse">老屋翻修</option>
          <option value="suite">改建套房</option>
          <option value="construction">自地自建</option>
          <option value="renew">局部翻新</option>
          <option value="other">其他</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="size" class="form-label">室內坪數</label>
        <select required id="size" class="form-select">
          <option value="">請選擇</option>
          <option selected value="40">40坪以下</option>
          <option value="40-80">40-80坪</option>
          <option value="80-120">80-120坪</option>
          <option value="120-160">120-160坪</option>
          <option value="160">160-200坪</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputTime" class="form-label">可聯絡時間/時段</label>
        <input required type="text" class="form-control" id="inputTime" value="123">
      </div>
      <div class="col-md-6">
        <label for="findUs" class="form-label">如何得知{{ config('app.name', 'Laravel') }}</label>
        <select required id="findUs" class="form-select">
          <option value="">請選擇</option>
          <option selected value="friends">親友介紹</option>
          <option value="advertis">網絡廣告</option>
          <option value="construction">工地現場</option>
          <option value="other">其他</option>
        </select>
      </div>

      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height:150px;" required>asdf</textarea>
        <label for="floatingTextarea">特殊/其他需求</label>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-success btn-lg">確認送出</button>
      </div>
    </form>
  </div>
</div> -->

@endsection

@section('scripts')

<script type="text/javascript">
  $(function() {
    $(".responsive").slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

  });

  function goTop() {
    $('html,body').animate({
      'scrollTop': 0
    }, 300);
  }

  $(document).ready(function() {
    var $headerheight = $('footer').height();
    $(".wrapper >.hidetext").css("height", $headerheight + "px");

  });

  function slideNav() {
    var $headerheight = $('footer').height();
    $(".wrapper >.hidetext").css("height", $headerheight + "px");
  }
  slideNav();
  $(window).resize(function() {
    slideNav();
  });

  function sendMail(e) {
    e.preventDefault();
    var form = new FormData(document.getElementById("contactForm"));

    alert(form);
  }
</script>


@endsection