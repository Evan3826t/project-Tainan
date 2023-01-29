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
        <h2>服務流程<b class="subbtitle">PROCESSES</b></h2>
      </div>
      <div class="jJGbox">
        <p class="titlle">設計訂製流程</p>
        <div class="commJJ">
          <div class="boox"><img src="{{ asset('image/icon/sa01.png') }}">
            <p>初步洽談</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/sa02.png') }}">
            <p>實地放樣</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/sa03.png') }}">
            <p>設計提案</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/sa04.png') }}">
            <p>預算控管</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/sa05.png') }}">
            <p>設計委託</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/sa06.png') }}">
            <p>細部設計</p>
          </div>
          <div class="boox"><img src="{{ asset('image/icon/sa07.png') }}">
            <p>設計定稿</p>
          </div>
        </div>
      </div>
      <div class="jJGbox">
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
      </div>
    </section>
  </div>
</div>

<div id="service">
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
</div>
@endsection

@section('scripts')


@endsection