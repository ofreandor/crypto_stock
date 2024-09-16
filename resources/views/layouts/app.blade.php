<!doctype html>
<html lang="en">

<head>
    <title>Cryptofx | Stock Investment</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/typography.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- apexchart CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/apexcharts.css') }}">
    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="#" data-style="styles">
    <link rel="stylesheet" href="{{ asset('frontend/css/style-customizer.css') }}">
    <!-- swiper -->
    <link rel="stylesheet" href="{{ asset('frontend/swiper/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/swiper/swiper.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">


    <script src="{{ asset('frontend/gsap/gsap.min.js') }}"></script>

    <script src="{{ asset('frontend/swiper/swiper.min.js') }}"></script>

    <script async="" src="../../../gtag/js?id=UA-113778816-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-113778816-1');

    </script>
    <script data-cfasync="false" src="#"></script>
    <style type="text/css">
        .mgm {
            border-radius: 7px;
            position: fixed;
            z-index: 90;
            bottom: 45%;
            right: 50px;
            background: #fff;
            padding: 10px 27px;
            box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
        }

        .mgm a {
            font-weight: 700;
            display: block;
            color: #1c8e51;
        }

        .mgm a,
        .mgm a:active {
            transition: all .2s ease;
            color: #1c8e51;
        }
    </style>
    </p>

    <div class="mgm" style="display: none;">
        <div class="txt" style="color:black;"></div>
    </div>

    <script data-cfasync="false" src="#"></script>
    <script type="text/javascript">
        var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'South Africa', 'Australia',
            'South Africa', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'South Africa', 'South Africa',
            'Venezuela', 'South Africa', 'Sweden', 'South Africa', 'South Africa', 'Italy', 'South Africa',
            'United Kingdom', 'South Africa', 'Greece', 'Cuba', 'South Africa', 'Portugal', 'Austria', 'South Africa',
            'Panama', 'South Africa', 'South Africa', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'
        ];
        var listPlans = ['$500', '$1,500', '$1,000', '$10,000', '$2,000', '$3,000', '$4,000', '$600', '$700', '$2,500'];
        var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];
        let interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var run = setInterval(request, interval);

        function request() {
            clearInterval(run);
            let interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
            var country = listCountries[Math.floor(Math.random() * listCountries.length)];
            var transtype = transarray[Math.floor(Math.random() * transarray.length)];
            var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
            var msg = 'Someone from <b>' + country + '</b> ' + transtype +
                ' <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + '</a>';
            $(".mgm .txt").html(msg);
            $(".mgm").stop(true).fadeIn(300);
            window.setTimeout(function() {
                $(".mgm").stop(true).fadeOut(300);
            }, 10000);
            run = setInterval(request, interval);
        }
    </script>

</head>

<body>
    <!-- loading -->
    {{-- <div id="loading">
        <div id="loading-center">
            <img src="{{ asset('frontend/images/loader.gif') }}" alt="loder">
        </div>
    </div> --}}

    <header class="transparent">
        <div class="topbar">
            <div class="container-fuild">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-6">
                        <div class="topbar-left">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <select id="language-select">
                                        <option value="" disabled selected>Select Language</option>
                                        <option value="af">Afrikaans</option>
                                        <option value="sq">Albanian</option>
                                        <option value="am">Amharic</option>
                                        <option value="ar">Arabic</option>
                                        <option value="hy">Armenian</option>
                                        <option value="az">Azerbaijani</option>
                                        <option value="eu">Basque</option>
                                        <option value="be">Belarusian</option>
                                        <option value="bn">Bengali</option>
                                        <option value="bs">Bosnian</option>
                                        <option value="bg">Bulgarian</option>
                                        <option value="ca">Catalan</option>
                                        <option value="ceb">Cebuano</option>
                                        <option value="ny">Chichewa</option>
                                        <option value="zh-CN">Chinese (Simplified)</option>
                                        <option value="zh-TW">Chinese (Traditional)</option>
                                        <option value="co">Corsican</option>
                                        <option value="hr">Croatian</option>
                                        <option value="cs">Czech</option>
                                        <option value="da">Danish</option>
                                        <option value="nl">Dutch</option>
                                        <option value="en">English</option>
                                        <option value="eo">Esperanto</option>
                                        <option value="et">Estonian</option>
                                        <option value="tl">Filipino</option>
                                        <option value="fi">Finnish</option>
                                        <option value="fr">French</option>
                                        <option value="fy">Frisian</option>
                                        <option value="gl">Galician</option>
                                        <option value="ka">Georgian</option>
                                        <option value="de">German</option>
                                        <option value="el">Greek</option>
                                        <option value="gu">Gujarati</option>
                                        <option value="ht">Haitian Creole</option>
                                        <option value="ha">Hausa</option>
                                        <option value="haw">Hawaiian</option>
                                        <option value="he">Hebrew</option>
                                        <option value="hi">Hindi</option>
                                        <option value="hmn">Hmong</option>
                                        <option value="hu">Hungarian</option>
                                        <option value="is">Icelandic</option>
                                        <option value="ig">Igbo</option>
                                        <option value="id">Indonesian</option>
                                        <option value="ga">Irish</option>
                                        <option value="it">Italian</option>
                                        <option value="ja">Japanese</option>
                                        <option value="jw">Javanese</option>
                                        <option value="kn">Kannada</option>
                                        <option value="kk">Kazakh</option>
                                        <option value="km">Khmer</option>
                                        <option value="rw">Kinyarwanda</option>
                                        <option value="ko">Korean</option>
                                        <option value="ku">Kurdish (Kurmanji)</option>
                                        <option value="ky">Kyrgyz</option>
                                        <option value="lo">Lao</option>
                                        <option value="la">Latin</option>
                                        <option value="lv">Latvian</option>
                                        <option value="lt">Lithuanian</option>
                                        <option value="lb">Luxembourgish</option>
                                        <option value="mk">Macedonian</option>
                                        <option value="mg">Malagasy</option>
                                        <option value="ms">Malay</option>
                                        <option value="ml">Malayalam</option>
                                        <option value="mt">Maltese</option>
                                        <option value="mi">Maori</option>
                                        <option value="mr">Marathi</option>
                                        <option value="mn">Mongolian</option>
                                        <option value="my">Myanmar (Burmese)</option>
                                        <option value="ne">Nepali</option>
                                        <option value="no">Norwegian</option>
                                        <option value="or">Odia</option>
                                        <option value="ps">Pashto</option>
                                        <option value="fa">Persian</option>
                                        <option value="pl">Polish</option>
                                        <option value="pt">Portuguese</option>
                                        <option value="pa">Punjabi</option>
                                        <option value="ro">Romanian</option>
                                        <option value="ru">Russian</option>
                                        <option value="sm">Samoan</option>
                                        <option value="gd">Scots Gaelic</option>
                                        <option value="sr">Serbian</option>
                                        <option value="st">Sesotho</option>
                                        <option value="sn">Shona</option>
                                        <option value="sd">Sindhi</option>
                                        <option value="si">Sinhala</option>
                                        <option value="sk">Slovak</option>
                                        <option value="sl">Slovenian</option>
                                        <option value="so">Somali</option>
                                        <option value="es">Spanish</option>
                                        <option value="su">Sundanese</option>
                                        <option value="sw">Swahili</option>
                                        <option value="sv">Swedish</option>
                                        <option value="tg">Tajik</option>
                                        <option value="ta">Tamil</option>
                                        <option value="tt">Tatar</option>
                                        <option value="te">Telugu</option>
                                        <option value="th">Thai</option>
                                        <option value="tr">Turkish</option>
                                        <option value="tk">Turkmen</option>
                                        <option value="uk">Ukrainian</option>
                                        <option value="ur">Urdu</option>
                                        <option value="ug">Uyghur</option>
                                        <option value="uz">Uzbek</option>
                                        <option value="vi">Vietnamese</option>
                                        <option value="cy">Welsh</option>
                                        <option value="xh">Xhosa</option>
                                        <option value="yi">Yiddish</option>
                                        <option value="yo">Yoruba</option>
                                        <option value="zu">Zulu</option>
                                    </select>
                                    <div id="google_translate_element" style="display:none;"></div>

                                </li>
                                <li class="list-inline-item">
                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.60995 9.39382C11.9342 12.7171 12.6883 8.87243 14.8049 10.9875C16.8454 13.0275 18.0182 13.4362 15.4329 16.0208C15.109 16.281 13.0515 19.412 5.82067 12.1832C-1.41107 4.9535 1.71815 2.89387 1.97847 2.57012C4.57005 -0.0216324 4.97171 1.15798 7.01224 3.19794C9.1288 5.31391 5.28571 6.07051 8.60995 9.39382Z"
                                            stroke="#FE1744" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg> +447397062353
                                </li>
                                <li class="list-inline-item">
                                    <svg width="16" viewbox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.9188 6.37598L11.2161 9.38684C10.5165 9.94184 9.5322 9.94184 8.83262 9.38684L5.09863 6.37598"
                                            stroke="#FE1744" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.0906 16.5C16.625 16.507 18.3332 14.4246 18.3332 11.8653V6.14168C18.3332 3.58235 16.625 1.5 14.0906 1.5H5.90912C3.37466 1.5 1.6665 3.58235 1.6665 6.14168V11.8653C1.6665 14.4246 3.37466 16.507 5.90912 16.5H14.0906Z"
                                            stroke="#FE1744" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg> info@cryptofxstocks.org
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="topbar-right text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <ul class="list-inline iq-left">
                                        <li class="list-inline-item d-flex"><a href="{{ route('login') }}">

                                            <svg width="16" class="me-2" viewbox="0 0 17 18"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.1772 9.01823H1.14307" stroke="#FE1744"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M8.7373 6.58838L11.1773 9.01838L8.7373 11.4484"
                                                        stroke="#FE1744" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M5.08691 5.15756V4.38006C5.08691 2.68423 6.46108 1.31006 8.15775 1.31006H12.2277C13.9194 1.31006 15.2902 2.68089 15.2902 4.37256V13.6559C15.2902 15.3517 13.9152 16.7267 12.2194 16.7267H8.14858C6.45775 16.7267 5.08691 15.3551 5.08691 13.6642V12.8792"
                                                        stroke="#FE1744" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>Login </a>
                                            <a href="{{ route('register') }}"> / Register</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                {{-- <img id="logo_img" class="img-fluid"
                                    src="{{ asset('frontend/images/logo-white.png')}}" alt="logo"></a> --}}
                                    <span style="font-weight:700">CryptoFx Stock</span>
                        </div>
                        <nav> <a id="resp-menu" class="responsive-menu" href="#"><i
                                    class="fa fa-reorder"></i> </a>
                            <ul class="menu text-end">
                                <li><a class="active" href="{{ url('/') }}">Home</a>

                                </li>
                                <li><a href="#about-us">About us</a>
                                </li>
                                <li><a href="#services">Our Services</a>
                                </li>
                                <li><a href="#howitworks">How it works</a>
                                </li>
                                <li><a href="#investment">Investment Plans</a>
                                </li>
                                <li><a href="#">Legal</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Contact</a>

                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide justify-content-around align-items-center">
                <div class="ban1-bgimg">
                    <img class="img-fluid banner-bg" src="{{ asset('frontend/revslider/assets/slide2.jpg') }}"
                        alt="">
                </div>
                <div class="banner-header py-2">
                    <div class="iq-mb-20 py-4">
                        <h3 class="d-flex mt-2" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50"
                            data-iq-duration="1" data-iq-delay=".7" style="font-weight: 800; font-family: 'Poppins'; padding-top:10px;">Latest Commodities and Forex Trading</h3>
                        <h3 class="banner-title d-flex" data-iq-gsap="onStart" data-iq-position-x="0"
                            data-iq-position-y="50" data-iq-duration="1" data-iq-delay=".7" style="font-weight: 1000; font-family: 'Comfortaa SemiBold'; padding-top:10px;">Reports and Analysis</h3>
                    </div>
                    <small data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1"
                        data-iq-delay=".8" class="banner-dec my-5 iq-mt-25">
                            <span style="font-family: 'Comfortaa SemiBold'; font-size:15px; font-weight: 500">Explore a wide range of currency pairs including EUR/USD, GBP/JPY, USD/JPY, and more at your fingertips.</span>
                        </small>
                    <div class="iq-mt-20 d-flex banner-button" data-iq-gsap="onStart" data-iq-position-x="0"
                        data-iq-position-y="50" data-iq-duration="1" data-iq-delay="1.3">
                        <a href="#" class="button  iq-mt-10"><span class="button-inner-box">
                                <span class="icon-one icon">

                                </span>
                                <span class="text-btn">View More</span>
                                <span class="icon-two icon">

                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="banner-img-1">
                    {{-- <img data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50"
                        data-iq-duration="1.2" data-iq-delay="1.5" src="" alt="image"> --}}
                </div>
            </div>

            <div class="swiper-slide d-flex justify-content-around align-items-center">
                <div class="ban1-bgimg">
                    <img class="img-fluid banner-bg" src="{{ asset('frontend/revslider/assets/slide2.jpg') }}" alt="">
                </div>
                <div class="banner-header-3">
                    <div class="banner-title-3 iq-mb-20">
                        <h2 data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1"
                            data-iq-delay=".7" class="d-flex" style="font-weight: 1000; font-family: 'Comfortaa SemiBold'; padding-top:10px;">Be Ready to fly with</h2>
                        <h2 data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1"
                            data-iq-delay=".7" class="banner-title d-flex" style="font-weight: 1000; font-family: 'Comfortaa SemiBold'; padding-top:10px;">CryptoFx Stock.</h2>
                    </div>
                    <small class=" banner-dec h5" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50"
                        data-iq-duration="1" data-iq-delay="1"><span style="font-family: 'Comfortaa SemiBold'; font-size:15px; font-weight: 500">The most safe and secured trading investment platform .</span>
                        </small>
                    <div class="d-flex iq-mt-20 banner-button" data-iq-gsap="onStart" data-iq-position-x="0"
                        data-iq-position-y="50" data-iq-duration="1.2" data-iq-delay="2">
                        <a href="#" class="button">
                            <span class="button-inner-box">

                                <span class="text-btn">View More</span>

                            </span>
                        </a>
                    </div>
                </div>
                <div class="banner-img-2">
                    <img data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="2" data-iq-delay="1"
                        src="{{ asset('frontend/images/banner/coin.png') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!-- Banner End -->

    <!-- Topbar Chart -->
    <div class="topbar-chart iq-chart">
        <div class="container-fluid">
            <div class="row">
                <script>
                    baseUrl = "https://widgets.cryptocompare.com/";
                    var scripts = document.getElementsByTagName("script");
                    var embedder = scripts[scripts.length - 1];
                    var cccTheme = {
                        "General": {
                            "background": "#000",
                            "priceText": "#fff"
                        },
                        "Currency": {
                            "color": "#fff"
                        }
                    };
                    (function() {
                        var appName = encodeURIComponent(window.location.hostname);
                        if (appName == "") {
                            appName = "local";
                        }
                        var s = document.createElement("script");
                        s.type = "text/javascript";
                        s.async = true;
                        var theUrl = baseUrl + 'serve/v1/coin/scroller?fsyms=BTC,ETH,USDT,BUSD,CFX,XRP,SOL&tsyms=USD';
                        s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                        embedder.parentNode.appendChild(s);
                    })();

                </script>
            </div>
        </div>
    </div>

    <!-- Topbar Chart End -->

    <!-- Main Content -->
    <div class="contain-all">
        @yield('content')


    </div>

    <!-- Main Content End -->
    <!--=================================
Footer -->
    <footer class="iq-footer dark-bg iq-footer-2">
        <div class="footer-top iq-bg-fixed ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 iq-mtb-90">
                        <div class="logo">
                                <h4>CryptoFx <span style="color: #FE1744">Stock</span></h4>
                            <div class="text-white iq-mt-25 ">With CryptoFx Stock, you can buy, sell, trade, and earn
                                through Forex trade and manage your Transaction most efficiently and securely.</div>
                            <ul class="iq-media-blog iq-mt-30 float-start">
                                <li><a href="#" class="rounded"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="rounded"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="rounded"><i class="fa fa-google"></i></a></li>
                                <li><a href="#" class="rounded"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 iq-contact iq-mtb-90  footer-menu-list">
                        <h5 class="small-title text-white widget-title">USE FULL LINK</h5>
                        <div class="d-flex align-items-center text-white flex-wrap">
                            <ul class="iq-pl-0 ">
                                <li><a href="#"><i class="fa fa-angle-right me-2"
                                            aria-hidden="true"></i>Home</a></li>
                                <li><a href="#"><i class="fa fa-angle-right me-2"
                                            aria-hidden="true"></i>About Us</a></li>
                                <li><a href="#"><i class="fa fa-angle-right me-2"
                                            aria-hidden="true"></i>Our Services</a></li>
                                <li><a href="#"><i class="fa fa-angle-right me-2"
                                            aria-hidden="true"></i>How it Works</a></li>
                                <li><a href="#"><i class="fa fa-angle-right me-2"
                                            aria-hidden="true"></i>Plan</a></li>
                            </ul>
                            <ul class="ms-5">
                                <li><a href="#"><i class="fa fa-angle-right me-2"
                                            aria-hidden="true"></i>Legal</a></li>
                                <li><a href="#"><i class="fa fa-angle-right me-2"
                                            aria-hidden="true"></i>Terms </a></li>
                                <li><a href="#"><i class="fa fa-angle-right me-2"
                                            aria-hidden="true"></i>FAQs</a></li>
                                <li><a href="#"><i class="fa fa-angle-right me-2"
                                            aria-hidden="true"></i>Contact Us</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6   iq-mtb-90">
                        <h5 class="small-title text-white widget-title">RECENT POSTS</h5>
                        <ul class="iq-post">
                            <li>
                                <div class="post-img"> <img src="{{ asset('frontend/images/blog/01.jpg') }}" alt="#">
                                </div>
                                <div class="iq-font-yellow iq-date" id="currentDate"></div>
                                <div class="post-blog"> <a href="#">How One Fund Used the Carry Trade
                                        to Beat Bitcoin.</a>

                                </div>
                            </li>
                            <li>
                                <div class="post-img"> <img src="{{ asset('frontend/images/blog/02.jpg') }}" alt="#">
                                </div>
                                <div class="iq-font-yellow iq-date" id="currentDate"></div>
                                <div class="post-blog"> <a href="#">The Best Set and Forget Strategies
                                        for Investing in Bitcoin.</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-white iq-contact iq-mtb-90">
                        <h5 class="small-title widget-title">CONTACT</h5>
                        <div class="iq-mb-30 ">
                            <div class="blog"><i class="ion-ios-telephone-outline"></i>
                                <div class="content ">
                                    <div class=" title ">Phone</div> +0123 456 789
                                </div>
                            </div>
                        </div>
                        <div class="iq-mb-30">
                            <div class="blog "><i class="ion-ios-email-outline"></i>
                                <div class="content ">
                                    <div class=" title ">Mail</div> info@cryptofx.com
                                </div>
                            </div>
                        </div>
                        <div class="blog"><i class="ion-ios-location-outline"></i>
                            <div class="content ">
                                <div class=" title ">Address</div> International House, 36-38 Cornhill,<br> London EC3V 3NG, United Kingdom
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom iq-ptb-20 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="iq-copyright iq-mt-10 text-white">Copyright <span id="copyright">
                                <script>
                                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))

                                </script>
                            </span> <a href="#">CoinEx</a> All Rights Reserved </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer-nav-menu">
                            <li class=""><a class="text-white" href="#">About Us</a></li>
                            <li class=""><a class="text-white" href="#">Privacy policy</a></li>
                            <li class=""><a class="text-white" href="#">Customer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade iq-login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title text-dark">Login</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="recipient-name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="recipient-password" placeholder="Password">
                        </div>
                        <a class="button iq-mtb-10" href="#">
                            <span class="button-inner-box">
                                <span>Sign In</span>
                            </span>
                        </a>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-end">
                                <a href="#" class="iq-font-yellow">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div> Don't Have an Account? <a href="#" class="iq-font-yellow">Register Now</a>
                    </div>
                    <ul class="iq-media-blog iq-mt-20">
                        <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                        <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                        <li><a href="# "><i class="fa fa-google "></i></a></li>
                        <li><a href="# "><i class="fa fa-github "></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
Login -->
    <!--=================================
Register -->
    <div class="modal fade iq-register" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title text-dark">Register</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="recipient-username" placeholder="User Name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="recipient-email" placeholder="Email">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">I Agree to the Terms and
                                Conditions</label>
                        </div>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a class="button iq-mtb-10" href="#">
                            <span class="button-inner-box">
                                <span>Sign Up</span>
                            </span>
                        </a>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div> Already Have an Account? <a href="#" class="iq-font-yellow">Login</a></div>
                    <ul class="iq-media-blog iq-mt-20">
                        <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                        <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                        <li><a href="# "><i class="fa fa-google "></i></a></li>
                        <li><a href="# "><i class="fa fa-github "></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
    </div>
    <!-- back-to-top End -->
    <!-- style-customizer -->

    <!-- style-customizer END -->
    <!-- jquery-min JavaScript -->
    <script src="{{ asset('frontend/js/jquery-min.js') }}"></script>
        @yield('scripts')
    <!-- popper JavaScript -->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Bitcoin widget JavaScript -->
    <script src="{{ asset('frontend/js/widget.js') }}"></script>
    <!-- carousel JavaScript -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- apex chart JavaScript -->
    <script src="{{ asset('frontend/js/apexcharts.min.js') }}"></script>
    <!-- All-plugins JavaScript -->
    <script src="{{ asset('frontend/js/all-plugins.js') }}"></script>
    <!-- particles JavaScript -->
    <script src="{{ asset('frontend/js/particles.js') }}"></script>
    <!-- Style Customizer -->
    <script src="{{ asset('frontend/js/style-customizer.js') }}"></script>

    <!-- Custom JavaScript -->
    <script>
        // Function to format the current date
        function formatDate(date) {
            const options = { year: 'numeric', month: 'short', day: 'numeric' };
            return new Intl.DateTimeFormat('en-US', options).format(date);
        }

        // Get the current date and display it
        document.getElementById('currentDate').textContent = formatDate(new Date());
    </script>
    <!-- <script src="swiper/swiper.css') }}"></script> -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }

            document.getElementById('language-select').addEventListener('change', function () {
                var selectedLanguage = this.value;
                var translateElement = document.querySelector('.goog-te-combo');
                if (translateElement) {
                    translateElement.value = selectedLanguage;
                    translateElement.dispatchEvent(new Event('change'));
                }
            });
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script>

    <script>
        if (typeof ScrollTrigger !== typeof undefined) {
            gsap.registerPlugin(ScrollTrigger);
        }

        const gsapAnimate = {
            getData: (elem) => {
                const option = {
                    opacity: 0,
                    scale: 1,
                    position: {
                        x: 0,
                        y: 0,
                    },
                    ease: "",
                    duration: 1,
                    delay: .4,
                    rotate: 0
                }
                if (elem !== undefined) {
                    option.position.x = gsapAnimate.validValue(elem.dataset.iqPositionX, 0)

                    option.position.y = gsapAnimate.validValue(elem.dataset.iqPositionY, 0)

                    option.rotate = gsapAnimate.validValue(elem.dataset.iqRotate, 0)

                    option.scale = gsapAnimate.validValue(elem.dataset.iqScale, 1)

                    option.opacity = gsapAnimate.validValue(elem.dataset.iqOpacity, 0)

                    option.delay = gsapAnimate.validValue(elem.dataset.iqDelay, .4)

                    option.duration = gsapAnimate.validValue(elem.dataset.iqDuration, 1.5)

                    option.ease = gsapAnimate.validValue(elem.dataset.iqEase, '')

                    const setOption = {
                        opacity: option.opacity,
                        scale: option.scale,
                        x: option.position.x,
                        y: option.position.y,
                        ease: option.ease,
                        rotate: option.rotate,
                        duration: option.duration,
                        delay: option.delay
                    }

                    if (typeof ScrollTrigger !== typeof undefined) {
                        if (elem.dataset.iqTrigger == 'scroll') {
                            const scrub = elem.dataset.iqScrollScrub === 'true' ? true : false

                            setOption.scrollTrigger = {
                                trigger: elem,
                                start: () => "top 90%",
                                end: () => "bottom 10%",
                                scrub: scrub,
                                markers: false
                            }
                        }
                    }

                    return setOption
                } else {
                    return {
                        opacity: 0
                    }
                }
            },
            onStart: (elem) => {

                const setOption = gsapAnimate.getData(elem)

                gsap.from(elem, setOption)

            },

            onEnd: (elem) => {

                const setOption = gsapAnimate.getData(elem)

                gsap.to(elem, setOption)

            },

            onStartEnd: (elem) => {

                const setOption = gsapAnimate.getData(elem)

                const setEndOption = gsapAnimate.getData(elem)

                setEndOption.opacity = 1

                setEndOption.x = 0

                setEndOption.y = 0

                setEndOption.rotate = 0

                setEndOption.scale = 1

                gsap.fromTo(elem, setOption, setEndOption)
            },
            validValue: (attr, defaultVal) => {
                if (attr !== undefined && attr !== null) {
                    return Number(attr)
                }
                return Number(defaultVal)
            }
        }


        function animationInit() {

            const gsapElem = document.querySelector('.swiper .swiper-slide-active').querySelectorAll('[data-iq-gsap="onStart"]')

            Array.from(gsapElem, (elem) => {
                gsapAnimate.onStartEnd(elem)
            })
        }

        // Init Code

    </script>

    <!-- Initialize Swiper -->
    <script src="{{ asset('frontend/swiper/swiper.js') }}"></script>

</body>

</html>
