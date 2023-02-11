@extends('layouts.guest')

@section('content')


<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('image/upload/banner.jpeg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<div class="container mt-5 mb-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="https://picsum.photos/200/200/?random=2" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">標題</h5>
          <p class="card-text">簡述</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://picsum.photos/200/200/?random=2" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">標題</h5>
          <p class="card-text">簡述</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://picsum.photos/200/200/?random=2" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">標題</h5>
          <p class="card-text">簡述</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container p-5">
  <div class="slider responsive">
    <div>
      <img src="https://picsum.photos/200/200/?random=1" alt="" class="rounded mx-auto d-block">
    </div>
    <div>
      <img src="https://picsum.photos/200/200/?random=1" alt="" class="rounded mx-auto d-block">
    </div>
    <div>
      <img src="https://picsum.photos/200/200/?random=1" alt="" class="rounded mx-auto d-block">
    </div>
    <div>
      <img src="https://picsum.photos/200/200/?random=1" alt="" class="rounded mx-auto d-block">
    </div>
    <div>
      <img src="https://picsum.photos/200/200/?random=1" alt="" class="rounded mx-auto d-block">
    </div>
    <div>
      <img src="https://picsum.photos/200/200/?random=1" alt="" class="rounded mx-auto d-block">
    </div>
  </div>
</div>

<div id="CProfile">
  <div class="Jsesbox">
    <section>
      <div>
        <h2>工程訂製流程<b class="subbtitle">PROCESSES</b></h2>
      </div>
      <div class="jJGbox">
        <p class="titlle">設計訂製流程</p>
        <div class="commJJ">
          <div class="boox"><img src="{{ asset('image/icon/icon01.svg') }}">
            <p>初步洽談</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/icon02.svg') }}">
            <p>實地勘查</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/icon03.svg') }}">
            <p>設計提議</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/icon04.svg') }}">
            <p>工程委託</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/icon05.svg') }}">
            <p>工期安排</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/icon06.svg') }}">
            <p>工程施作</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/icon07.svg') }}">
            <p>雙方檢核</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/icon08.svg') }}">
            <p>圓滿結案</p>
          </div>
        </div>
      </div>
      <!-- <div class="jJGbox">
        <p class="titlle">工程訂製流程</p>
        <div class="commJJ">
          <div class="boox"><img src="{{ asset('image/icon/baba01.png') }}">
            <p>工程委託</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/baba02.png') }}">
            <p>預排工期</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/baba03.png') }}">
            <p>勘驗防護</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/baba04.png') }}">
            <p>工程施作</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/baba05.png') }}">
            <p>施作品管</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/baba06.png') }}">
            <p>檢核優化</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/baba07.png') }}">
            <p>圓滿結案</p>
          </div>
        </div>
      </div> -->
    </section>
  </div>
</div>

<div id="contact" class="pt-3 pb-5">
  <div class="container mt-3 p-5">
    <h1 class="text-center mb-5">聯絡我們</h1>
    <form class="row g-3">
      <div class="col-md-6">
        <label for="inputName" class="form-label">姓名</label>
        <input type="text" class="form-control" id="inputName">
      </div>
      <div class="col-md-6">
        <label for="inputGender" class="form-label">稱謂</label>
        <select id="inputGender" class="form-select">
          <option selected>請選擇</option>
          <option>先生</option>
          <option>小姐</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputPhone" class="form-label">電話</label>
        <input type="number" class="form-control" id="inputPhone">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">地址</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="col-md-6">
        <label for="inputAmount" class="form-label">工程預算</label>
        <select id="inputAmount" class="form-select">
          <option selected>請選擇</option>
          <option value="50-70萬">50-70萬</option>
          <option value="70-90萬">70-90萬</option>
          <option value="90-120萬">90-120萬</option>
          <option value="120-150萬">120-150萬</option>
          <option value="150-180萬">150-180萬</option>
          <option value="180-210萬">180-210萬</option>
          <option value="210-240萬">210-240萬</option>
          <option value="240-270萬">240-270萬</option>
          <option value="270-300萬">270-300萬</option>
          <option value="300-350萬">300-350萬</option>
          <option value="350-400萬">350-400萬</option>
          <option value="400-450萬">400-450萬</option>
          <option value="450-500萬">450-500萬</option>
          <option value="500萬以上">500萬以上</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputGender" class="form-label">哪裡得知{{ config('app.name', 'Laravel') }}</label>
        <select id="inputGender" class="form-select">
          <option selected>請選擇</option>
          <option>先生</option>
          <option>小姐</option>
        </select>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-success btn-lg">確認送出</button>
      </div>
    </form>
  </div>
</div>


<!-- <div id="service">
  <section>
    <div id="contact">
      <h3>Inquiry Form</h3><br />
      <div class="ccsJ">
        <h3 class="two">免費諮詢表單</h3>
        <h3 class="rred">標示 * 為必填欄位</h3>
      </div>
      <div class="contact-form">
        <fieldset>
          <div class="item col_4">
            <p><label><i class="fa fa-circle" aria-hidden="true"></i> 姓名<b class="rred">*</b></label><input type="text" id="Name" name="Name" /></p>
          </div>
          <div class="item col_4">
            <p>
              <label><i class="fa fa-circle" aria-hidden="true"></i> 稱謂<b class="rred">*</b></label>
              <font>
                <span><input type="radio" id="Sex" name="Sex" value="先生" /> 先生</span>
                <span><input type="radio" id="Sex" name="Sex" value="小姐" /> 小姐</span>
              </font>
            </p>
          </div>
          <div class="item col_4">
            <p><label><i class="fa fa-circle" aria-hidden="true"></i> 手機/市話<b class="rred">*</b></label><input type="text" id="Mobile" name="Mobile" /></p>
          </div>
          <div class="item col_4">
            <p><label><i class="fa fa-circle" aria-hidden="true"></i> Email</label><input type="text" id="Email" name="Email" /></p>
          </div>
          <div class="item col_4">
            <p>
              <label><i class="fa fa-circle" aria-hidden="true"></i> 空間性質<b class="rred">*</b></label>
              <select name="Title" id="Title">
                <option value="" selected>請選擇</option>
                <option value="預售屋">預售屋</option>
                <option value="新成屋">新成屋</option>
                <option value="自地自建">自地自建</option>
                <option value="商業空間">商業空間</option>
                <option value="全室翻新">全室翻新</option>
                <option value="其他">其他</option>
              </select>
            </p>
          </div>
          <div class="item col_4">
            <p>
              <label><i class="fa fa-circle" aria-hidden="true"></i> 室內坪數<b class="rred">*</b></label>
              <select name="LevelGround" id="LevelGround">
                <option value="" selected>請選擇</option>
                <option value="40坪以下">40坪以下</option>
                <option value="40~80坪">40~80坪</option>
                <option value="80~120坪">80~120坪</option>
                <option value="120~160坪">120~160坪</option>
                <option value="160~200坪">160~200坪</option>
                <option value="200坪以上">200坪以上</option>
              </select>
            </p>
          </div>
          <div class="item col_4">
            <p><label><i class="fa fa-circle" aria-hidden="true"></i> 建案名稱<b class="rred">*</b></label><input type="text" id="Company" name="Company" /></p>
          </div>
          <div class="item col_4">
            <p><label><i class="fa fa-circle" aria-hidden="true"></i> 建案地址<b class="rred">*</b></label><input type="text" id="Address" name="Address" /></p>
          </div>
          <div class="item col_4">
            <p>
              <label><i class="fa fa-circle" aria-hidden="true"></i> 可動工時間<b class="rred">*</b></label>
              <select name="AvailableTime" id="AvailableTime">
                <option value="" selected>請選擇</option>
                <option value="可立即動工">可立即動工</option>
                <option value="半年內">半年內</option>
                <option value="一年以上">一年以上</option>
              </select>
            </p>
          </div>
          <div class="item col_2">
            <p>
              <label><i class="fa fa-circle" aria-hidden="true"></i> 工程預算<b class="rred">*</b></label>
              <select name="Budget" id="Budget">
                <option value="" selected>請選擇</option>
                <option value="50-70萬">50-70萬</option>
                <option value="70-90萬">70-90萬</option>
                <option value="90-120萬">90-120萬</option>
                <option value="120-150萬">120-150萬</option>
                <option value="150-180萬">150-180萬</option>
                <option value="180-210萬">180-210萬</option>
                <option value="210-240萬">210-240萬</option>
                <option value="240-270萬">240-270萬</option>
                <option value="270-300萬">270-300萬</option>
                <option value="300-350萬">300-350萬</option>
                <option value="350-400萬">350-400萬</option>
                <option value="400-450萬">400-450萬</option>
                <option value="450-500萬">450-500萬</option>
                <option value="500萬以上">500萬以上</option>
              </select>
            </p>
          </div>
          <div class="item col_10 how">
            <p>
              <label><i class="fa fa-circle" aria-hidden="true"></i> 從何處得知萬寶隆<b class="rred">*</b><span class="nanaban">請於其他處填寫由何管道得知(FB、Google、IG...等)</span></label>
              <font>
                <span><input type="radio" id="How1" name="How" value="網路資訊" /> 網路資訊</span>
                <span><input type="radio" id="How2" name="How" value="廣播媒體" /> 廣播媒體</span>
                <span><input type="radio" id="How3" name="How" value="工地現場" /> 工地現場</span>
                <span><input type="radio" id="How32" name="How" value="建案/代銷" /> 建案/代銷</span>
                <span><input type="radio" id="How6" name="How" value="路過門市" /> 路過門市</span>
                <span class="other"><input type="radio" id="How4" name="How" value="親友推薦" /> 親友推薦：<input type="text" id="ParentesHow" name="ParentesHow" /></span>
                <span class="other"><input type="radio" id="How5" name="How" value="其他" /> 其他：<input type="text" id="OtherHow" name="OtherHow" /></span>
              </font>
            </p>
          </div>
          <div class="item col_12 bigg">
            <p style="position:relative;">
              <label><i class="fa fa-circle" aria-hidden="true"></i> 上傳喜好風格照片 </label>
              <input type="file" id="Image" accept="image/jpeg, image/jpg" multiple>
            </p>
            <div class="up_box">
              <div id="previewImgs"></div>
              <span id="noKB" class="noKB"></span>
              <input type="hidden" id="TotalImg" value="0">
            </div>
          </div>
          <div class="item col_12 big">
            <p><label>留言內容</label><textarea name="Content" id="Content" cols="45" rows="5"></textarea></p>
          </div>
          <div class="item col_6 check_box">
            <div class="formset g-recaptcha" data-sitekey="6LedXVcjAAAAAI5mG70jC0hwSt2YSHT4T3XJwWvk"></div>
          </div>
          <div class="item col_6 sent">
            <p class="send"><a id="btnOK">確認送出 <i class="fa fa-chevron-right" aria-hidden="true"></i></a></p>
          </div>
        </fieldset>
      </div>
    </div>
  </section>
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
  var $nowWw = $(window).width();
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

  $(function() {

    $('#btnOK').click(function() {
      let errorMsg = '';
      if ($('#Name').val() == '') {
        errorMsg += "請輸入姓名!\r";
        $('#Name').focus();
      }
      if ($("input:radio[name='Sex']:checked").size() == 0) {
        errorMsg += '請選擇您的稱謂!\r';
      }
      if ($('#Mobile').val() == '') {
        errorMsg += '請輸入手機/市話!\r';
        $('#Mobile').focus();
      } else {
        var rePhone = /^09\d{2}(\d{6}|-\d{6}|-\d{3}-\d{3})|(0\d{1,2}-?|\(\d{2,3}\))\d{3,4}-?\d{4}$/;
        if (!rePhone.test($('#Mobile').val())) {
          errorMsg += '請輸入正確的手機/市話!\r';
          $('#Mobile').focus();
        }
      }
      if ($('#Title').val() == '') {
        errorMsg += '請選擇空間性質!\r';
        $('#Title').focus();
      }
      if ($('#LevelGround').val() == '') {
        errorMsg += '請選擇室內坪數!\r';
        $('#LevelGround').focus();
      }
      if ($('#Company').val() == '') {
        errorMsg += '請輸入建案名稱!\r';
        $('#Company').focus();
      }
      if ($('#Address').val() == '') {
        errorMsg += '請輸入建案地址!\r';
        $('#Address').focus();
      }
      if ($('#AvailableTime').val() == '') {
        errorMsg += '請選擇可動工時間!\r';
        $('#AvailableTime').focus();
      }
      if ($('#Budget').val() == '') {
        errorMsg += '請選擇工程預算!\r';
        $('#Budget').focus();
      }
      if ($("input:radio[name='How']:checked").size() == 0) {
        errorMsg += '請選擇從何處得知萬寶隆!\r';
      }
      var val2 = $('input:radio[name="How"]:checked').val();
      if (val2 == '親友推薦' && $('#ParentesHow').val() == '') {
        errorMsg += '請填寫親友姓名';
        $('#ParentesHow').focus();
      }
      if (val2 == '其他' && $('#OtherHow').val() == '') {
        errorMsg += '請填寫其他';
        $('#OtherHow').focus();
      }
      if ($('#g-recaptcha-response').val() == '') {
        errorMsg += '請先驗證!\r';
      }
      if (errorMsg != '') {
        alert(errorMsg)
        return false;
      }
      $('#form1').submit();
    });

    $('#closePop').click(function() {
      $('#popupBox').css('display', 'none');
    });
  });

  $("#Image").change(function() {
    //$("#previewImgs").html(""); // 清除預覽
    $("#noKB").html("");

    if ($('#TotalImg').val() >= 10) {
      alert('照片最多只能上傳10張!');
    } else {
      readURL(this);
    }
  });

  function readURL(input) {
    if (input.files && input.files.length >= 0) {
      if (input.files.length > 10) {
        $("#previewImgs").append("<span class='noKB'>最多只能上傳10張</div>");
      }
      var maxSize = 500 * 1024;
      var total = 0;
      for (i = 0; i < input.files.length; i++) {
        if (i < 5) {
          var reader = new FileReader();
          reader.onload = function(e) {
            if (e.total < maxSize) {
              var p = $("<p></p>").css('background-image', 'url(' + e.target.result + ')');
              var img = $("<img>").attr('src', '/images/img-memberBg.png');
              var inputh = $("<input type='hidden' name='Images[]'>").val(e.target.result);
              var a = $("<a></a>").attr('href', 'javascript:void(0);').attr('onclick', 'removeImg($(this));').html('<i class="fa fa-times"></i>');
              p.append(img).append(inputh).append(a);
              $("#previewImgs").append(p);
              $('#TotalImg').val(parseInt($('#TotalImg').val()) + 1);
            } else {
              alert("上傳的圖片不可以超過500KB!");
              $("#noKB").text("上傳的圖片不可以超過500KB!");
            }
          }
          reader.readAsDataURL(input.files[i]);
        }
      }
      if ($("#noKB").text() > 0) {
        $("#noKB").text("上傳的圖片不可以超過800KB!");
      }
    }
  }

  function removeImg(a) {
    a.parent().remove();
    $('#TotalImg').val(parseInt($('#TotalImg').val()) - 1);
  }

  function wordsTotal() {
    var countMax = 500;
    var thisValueLength = $('#Content').val().length;
    var total = countMax - thisValueLength;
    $('#totalTxt').text(total);
  }
  wordsTotal();
</script>


@endsection