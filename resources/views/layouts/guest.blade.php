<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">

    <meta name="google-site-verification" content="iPXvAStUm0zk2LBeXIv4q2YFRJscu_jHdaqvdSW2ALw" />
    <meta name="keywords" content="台南室內裝潢,mobile01空間設計,台南裝潢" />
    <meta name="description" content="內容描述" />
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:type" content="內容描述" />
    <meta property="og:url" content="www.mb-design.com.tw/" />
    <meta name="rating" content="general" />
    <meta name="revisit-after" content="1 DAYS" />
    <meta name="robots" content="all" />
    <meta name="robots" content="INDEX, FOLLOW" />


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
</head>
<style>
    #contact{
        background-color: #e5e5e5;
    }
    #contact .container{
        background: rgba(255, 255, 255, 0.91);
        box-shadow: 0px 5px 10px -5px rgb(187 187 187 / 25%);
        border-radius: 12px;
    }
    body {
        background: #e5e5e5;
    }
</style>

<body>
    <div id="app">
        <!-- <example-component></example-component> -->
        <div class="wrapper">
            <header>
                <div id="cis">
                    <h1>
                        <a class="indexx" href="/" title="永櫟山科技有限公司">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 272 92" width="272" height="92">
                                <path fill="#EA4335" d="M115.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18C71.25 34.32 81.24 25 93.5 25s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44S80.99 39.2 80.99 47.18c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z" />
                                <path fill="#FBBC05" d="M163.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18c0-12.85 9.99-22.18 22.25-22.18s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44s-12.51 5.46-12.51 13.44c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z" />
                                <path fill="#4285F4" d="M209.75 26.34v39.82c0 16.38-9.66 23.07-21.08 23.07-10.75 0-17.22-7.19-19.66-13.07l8.48-3.53c1.51 3.61 5.21 7.87 11.17 7.87 7.31 0 11.84-4.51 11.84-13v-3.19h-.34c-2.18 2.69-6.38 5.04-11.68 5.04-11.09 0-21.25-9.66-21.25-22.09 0-12.52 10.16-22.26 21.25-22.26 5.29 0 9.49 2.35 11.68 4.96h.34v-3.61h9.25zm-8.56 20.92c0-7.81-5.21-13.52-11.84-13.52-6.72 0-12.35 5.71-12.35 13.52 0 7.73 5.63 13.36 12.35 13.36 6.63 0 11.84-5.63 11.84-13.36z" />
                                <path fill="#34A853" d="M225 3v65h-9.5V3h9.5z" />
                                <path fill="#EA4335" d="M262.02 54.48l7.56 5.04c-2.44 3.61-8.32 9.83-18.48 9.83-12.6 0-22.01-9.74-22.01-22.18 0-13.19 9.49-22.18 20.92-22.18 11.51 0 17.14 9.16 18.98 14.11l1.01 2.52-29.65 12.28c2.27 4.45 5.8 6.72 10.75 6.72 4.96 0 8.4-2.44 10.92-6.14zm-23.27-7.98l19.82-8.23c-1.09-2.77-4.37-4.7-8.23-4.7-4.95 0-11.84 4.37-11.59 12.93z" />
                                <path fill="#4285F4" d="M35.29 41.41V32H67c.31 1.64.47 3.58.47 5.68 0 7.06-1.93 15.79-8.15 22.01-6.05 6.3-13.78 9.66-24.02 9.66C16.32 69.35.36 53.89.36 34.91.36 15.93 16.32.47 35.3.47c10.5 0 17.98 4.12 23.6 9.49l-6.64 6.64c-4.03-3.78-9.49-6.72-16.97-6.72-13.86 0-24.7 11.17-24.7 25.03 0 13.86 10.84 25.03 24.7 25.03 8.99 0 14.11-3.61 17.39-6.89 2.66-2.66 4.41-6.46 5.1-11.65l-22.49.01z" />
                            </svg>
                        </a>
                    </h1>
                </div>
                <div id="top-nav">
                    <a href="#" title="選單 MENU" class="nav-func">
                        <img src="{{ asset('image/icon/meun.png') }}" alt="icon not found" title="icon" width="50" height="50">
                    </a>
                    <nav id="main-menu" class="menu">
                        <ul class="pc">

                            <li>
                                <a href="/show" style="text-decoration: inherit;"><b>最新消息</b></a>
                            </li>

                            <li>
                                <a href="aboutdesign-recommended.html" style="text-decoration: inherit;"><b>業主推薦</b></a>
                            </li>

                            <li>
                                <a href="worksdesign.html" style="text-decoration: inherit;"><b>作品總覽</b></a>
                            </li>

                            <li class='last'>
                                <a href="askdesign.html" style="text-decoration: inherit;"><b>聯絡我們</b></a>
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
        <div class="translate"><a href="javascript:goTop();" id="gotop"><img style="max-width: 60%; fill: green;" src="{{ asset('image/icon/whiteTop.svg') }}"></a></div>
        <footer class="wweeb bg-dark">
            <section>
                <div class="wweeb">
                    <p>© Copyright All Rights Reserved</p>
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