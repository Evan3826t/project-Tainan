<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">

    <meta name="google-site-verification" content="iPXvAStUm0zk2LBeXIv4q2YFRJscu_jHdaqvdSW2ALw" />
    <meta name="title" content="{{ config('app.name', 'Laravel') }}" />
    <meta name="keywords" content="台南室內裝潢,空間設計,台南裝潢,台南翻修,老屋翻新,外觀拉皮,室內空間設計,浴室翻修,水電工程,抓漏防水,泥作工程,油漆工程,自地自建,套房改建" />
    <meta name="description" content="台南翻修,老屋翻新,外觀拉皮,室內空間設計,浴室翻修,水電工程,抓漏防水,泥作工程,油漆工程,自地自建,套房改建" />
    <meta name="url" content="www.yonglishan.tw" />
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:type" content="台南翻修,老屋翻新,外觀拉皮,室內空間設計,浴室翻修,水電工程,抓漏防水,泥作工程,油漆工程,自地自建,套房改建" />
    <meta property="og:url" content="www.yonglishan.tw" />
    <meta name="rating" content="general" />
    <meta name="revisit-after" content="1 DAYS" />
    <meta name="robots" content="all" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <link rel="icon" href="{{ asset('icon/logo-top.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.min.css') }}" rel="stylesheet">
    <!-- 聯絡欄 -->
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <!-- 服務流程 -->
    <link rel="stylesheet" href="{{ asset('css/CProfile.css') }}">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
    <!-- 輪播 -->
    <script src="{{ asset('js/slick.js') }}" defer></script>
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script> -->


    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/banner.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CPVFWL51C9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-CPVFWL51C9');
    </script>
</head>
<body>
    <div id="app">
        <!-- <example-component></example-component> -->
        <div class="wrapper">
            <header>
                <div id="cis">
                    <h1>
                        <a class="indexx" href="/home" title="永櫟山科技有限公司">
                            <img src="{{ asset('icon/logo-top.png') }}" alt="icon not found" style="width: 20%; height: 20%">
                        </a>
                    </h1>
                </div>
                <div id="top-nav">
                    <a href="#" title="選單 MENU" class="nav-func">
                        <img src="{{ asset('icon/meun.png') }}" alt="icon not found" title="icon" width="50" height="50">
                    </a>
                    <nav id="main-menu" class="menu">
                        <ul class="pc">
                            <li>
                                <a href="/home#aboutUs" style="text-decoration: inherit;"><b>關於我們</b></a>
                            </li>

                            <li>
                                <a href="/portfolio" style="text-decoration: inherit;"><b>作品總覽</b></a>
                            </li>

                            <li>
                                <a href="/home#CProfile" style="text-decoration: inherit;"><b>服務流程</b></a>
                            </li>
                            <li class='last'>
                                <a href="/home#footer" style="text-decoration: inherit;"><b>聯絡我們</b></a>
                                <ul class="subnav"></ul>
                            </li>

                        </ul>
                        <ul class="langsuper" style="display: none;"></ul>
                    </nav>
                </div>
            </header>
        </div>
        <main>
            @yield('content')
        </main>
        <div class="translate"><a href="javascript:goTop();" id="gotop"><img style="max-width: 60%; fill: green;" src="{{ asset('icon/whiteTop.svg') }}"></a></div>
        <footer id="footer" class="wweeb bg-dark">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <img src="{{ asset('icon/logo-footer.png') }}" alt="icon not found" width="70%">
                        </div>
                        <div class="col-md-4 align-self-center">
                            <div><img src="{{ asset('icon/line.png') }}" width="6%"> <a href="https://lin.ee/Gd7ce3v" class="text-decoration-none fw-bold text-white fs-5">{{ config('app.name', 'Laravel') }} LINE</a></div>
                            <div><img src="{{ asset('icon/instagram.png') }}" width="6%"> <a href="https://www.instagram.com/yonglishan__/" class="text-decoration-none fw-bold text-white fs-5">{{ config('app.name', 'Laravel') }} INSTAGRAM</a></div>
                            <div><img src="{{ asset('icon/facebook.png') }}" width="6%"> <a href="https://www.facebook.com/people/%E8%A9%A0%E6%AB%9F%E5%B1%B1%E5%AE%A4%E5%85%A7%E8%A3%9D%E4%BF%AE%E8%A8%AD%E8%A8%88/100090679063974/?mibextid=LQQJ4d" class="text-decoration-none fw-bold text-white fs-5">{{ config('app.name', 'Laravel') }} FACEBOOK</a></div>
                        </div>
                        <div class="col-md-12 text-center text-white fw-bold fs-5">
                            <img src="{{ asset('icon/telephone1.png') }}" width="2%"> 06 - 3586804
                            <img src="{{ asset('icon/mail.png') }}" width="3%"> yonglishan2021@gmail.com
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </div>
    <script>
        $(function() {
            function slideNav() {
                var windowWidth = $(window).width();
                if (windowWidth > 1240) {
                    $('#main-menu ul').addClass('pc');
                    $('#main-menu').show();
                } else {
                    $('#main-menu ul').removeClass('pc');
                    $('#main-menu').hide();
                }
            }
            slideNav();
            $(window).scroll(function() {
                if ($(document).scrollTop() > 0) {
                    $('header').addClass('headerTop', 800);
                } else {
                    $('header').removeClass('headerTop', 800);
                }
            });
            $(window).resize(function() {
                slideNav();
            });
            $("#main-menu ul.pc li a").hover(function() {
                $(this).animate({
                    backgroundPosition: '0 0'
                });
            }, function() {
                $(this).animate({
                    backgroundPosition: '0 -90px'
                });
            });

            $('.nav-func').click(function() {
                if ('none' == $('#main-menu').css('display') || '' == $('#main-menu').css('display')) {
                    $('#main-menu').slideDown();
                } else {
                    $('#main-menu').slideUp();
                }
                return false;
            });
        });
    </script>
    @yield('scripts')
</body>

</html>