@extends('layouts.guest')

@section('content')


<div id="portfolio" class="p-5 d-flex justify-content-center align-items-center" style="background-color: #f8f8f8;">
  <h1 class="d-flex align-items-center text-center">作品總覽</h1>
</div>

<!-- 卡片 -->

<div>
  <div class="container mt-5 mb-5">
    <!-- <h4>室內設計作品 - 居家空間</h4>
    <h5 class="text-secondary">團隊項目由建築新增到室內設計。兼具您要的安全、舒適、美觀，期許給到業主、客戶更加全面的服務</h5> -->
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <a href="/portfolio/project/1">
          <div class="card d-flex">
            <img src="{{ asset('show/showIcon1-1.jpg') }}" class="card-img-top card-show" alt="...">
            <div class="show-me text-secondary p-3">台南市中西區 ‧ 水療美容中心</div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="/portfolio/project/2">
          <div class="card">
            <img src="{{ asset('show/showIcon2-1.jpg') }}" class="card-img-top card-show" alt="...">
            <div class="show-me text-secondary p-3">台南市永康區 ‧ 浴室翻新</div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="/portfolio/project/3">
          <div class="card">
            <img src="{{ asset('show/showIcon3-1.jpg') }}" class="card-img-top card-show" alt="...">
            <div class="show-me text-secondary p-3">台南市南區 ‧ 老宅翻新</div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
  $(function() {})
</script>


@endsection