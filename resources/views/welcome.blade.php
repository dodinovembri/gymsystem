<!DOCTYPE html>
<html>
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <title>Gym Center System Palembang</title> 

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Gym Center">
        <meta name="author" content="">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/animate/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/layers.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/navigation.css') }}">
        
        <!-- Demo CSS -->
        <link rel="stylesheet" href="{{ asset('css/demos/demo-education.css') }}">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('css/skins/skin-education.css') }}"> 

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Head Libs -->
        <script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>

    </head>
    <body>

        <div class="body">
            <header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 52, 'stickySetTop': '-52px'}">
                <div class="header-body border-top-0 bg-dark box-shadow-none">
                    <div class="header-top header-top-borders header-top-light-borders">
                        <div class="container h-100">
                            <div class="header-row h-100">
                                <div class="header-column justify-content-start">
                                    <div class="header-row">
                                        <nav class="header-nav-top">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                                                    <span class="ws-nowrap text-light pl-0"><span class="opacity-7">Phone:</span> <a class="text-light" href="tel:+1234567890">+62822-1144-8407</a></span>
                                                </li>
                                                <li class="nav-item nav-item-borders py-2">
                                                    <span class="ws-nowrap text-light"><span class="opacity-7">Email:</span> <a class="text-light" href="mailto:info@porto.com">gym-info@gmail.com</a></span>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="header-column justify-content-end">
                                    <div class="header-row">
                                        <nav class="header-nav-top">
                                                <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                                                    <a href="{{ route('login') }}" class="text-light"><i class="far fa-user p-relative" style="top: 0;"></i> Login</a>
                                                </li>                                                
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-container header-container-height-sm container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-logo">
                                        <a href="{{ route('fe') }}">
                                            <img alt="Porto" width="100" height="48" src="{{ asset('img/logo/logo.png') }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                        <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li>
                                                        <a class="nav-link active" href="#home">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="#popular-gym">
                                                            Popular Gym
                                                        </a>
                                                    </li>                                                    
                                                    <li>
                                                        <a class="navav-link" href="#about-us">
                                                            About Us
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="#news">
                                                            News
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                            <i class="fas fa-bars"></i>
                                        </button>
                                    </div>
                                    <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                        <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                            <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                            <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                                <form role="search" action="#" method="get">
                                                    <div class="simple-search input-group">
                                                        <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                        <span class="input-group-append">
                                                            <button class="btn" type="submit">
                                                                <i class="fa fa-search header-nav-top-icon"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div role="main" class="main">
                
                <div class="slider-container rev_slider_wrapper" style="height: 740px;" id="home">
                    <div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
                        <ul>
                            <?php foreach ($home as $key => $value) { ?>
                                <li data-transition="fade">
                                    <img src="{{ asset('img') }}/{{ $value->image }}"  
                                        alt=""
                                        data-bgposition="center center" 
                                        data-bgfit="cover" 
                                        data-bgrepeat="no-repeat" 
                                        data-kenburns="on" 
                                        data-duration="20000" 
                                        data-ease="Linear.easeNone" 
                                        data-scalestart="110" 
                                        data-scaleend="100" 
                                        data-offsetstart="250 100" 
                                        class="rev-slidebg">
                                    
                                    <h1 class="tp-caption font-weight-bold text-color-light text-center"
                                        data-x="center"
                                        data-y="center" data-voffset="['10','10','10','10']"
                                        data-width="['770','770','770','350']"
                                        data-start="1000"
                                        data-fontsize="['45','45','45','35']"
                                        data-lineheight="['56','56','50','40']"
                                        data-transform_in="y:[100%];opacity:0;s:500;"
                                        data-transform_out="opacity:0;s:500;"
                                        style="white-space: normal;">{{ $value->text }}</h1>
                                </li>                                
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <section class="section bg-color-tertiary border-0 my-0" id="popular-gym">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2 class="font-weight-bold text-center appear-animation" data-appear-animation="fadeInUpShorter">Popular Gym</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-5">
                            <?php for ($i=0; $i < $jumlah_alternative; $i++) { if ($i == 8) {
                                break;
                            } ?>                              
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                    <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                                        <div class="thumb-info-wrapper">
                                            <?php $image = App\Models\AlternativeModel::where('id', $alt_id[$i])->first(); ?>
                                            <a href="{{ route('fe.gym.show', $alt_id[$i]) }}"><img src="{{ asset('img') }}/{{ $image->image }}" class="img-fluid" alt=""></a>
                                            <div class="thumb-info-price bg-color-secondary font-weight-semibold">
                                                <span>Ranking: {{ number_format($ranking_sum[$i], 2) }}</span>
                                            </div>
                                        </div>
                                        <div class="thumb-info-caption">
                                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-courses-detail.html" class="custom-link-color-dark">{{ $gym_alt[$i] }}</a></h3>
                                            <p>{{ substr($description[$i], 0, 100) }} ...</p>
                                        </div>
                                        <div class="thumb-info-footer">
                                            <ul class="nav text-1">
                                                <li><i class="far fa-user text-color-primary"></i> {{ $image->ket }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>                                
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <a href="{{ route('fe.gym.index') }}" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold">VIEW ALL</a>
                            </div>
                        </div>                        
                    </div>
                </section>
                <section class="section bg-color-light border-0 my-0" id="about-us">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-10 text-center">
                                <h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">About Us</h2>
                                <p class="text-color-dark pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1700">{{ empty($about_us->about) ? '' : $about_us->about }}</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section bg-color-tertiary border-0 my-0" id="news">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">Latest News</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-5">
                            <?php foreach ($news as $key => $value) { if ($key == 3) {
                                break;
                            } ?>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                    <article class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1 h-100">
                                        <div class="thumb-info-wrapper">
                                            <a href="demo-education-blog-detail.html"><img src="{{ asset('img') }}/{{ $value->image }}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="thumb-info-caption">
                                            <span class="date d-block text-color-primary font-weight-semibold text-3 mb-3">{{ $value->date }}</span>
                                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-blog-detail.html" class="custom-link-color-dark">{{ $value->title }}</a></h3>
                                            <p>{{ substr($value->description, 0, 150) }} ...</p>
                                        </div>
                                    </article>
                                </div>                                
                            <?php } ?>                        
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <a href="{{ route('fe.news.index') }}" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                </section>
            <footer id="footer" class="bg-color-quaternary border-top-0 mt-0">
                <div class="footer-copyright bg-color-quaternary border-top-0">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="text-center">© Copyright 2019. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Vendor -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
        <script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/common/common.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
        <script src="{{ asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('vendor/vide/jquery.vide.min.js') }}"></script>
        <script src="{{ asset('vendor/vivus/vivus.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('js/theme.js') }}"></script>
        
        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

        

        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('js/views/view.contact.js') }}"></script>

        <!-- Demo -->
        <script src="{{ asset('js/demos/demo-education.js') }}"></script>
        
        <!-- Theme Custom -->
        <script src="{{ asset('js/custom.js') }}"></script>
        
        <!-- Theme Initialization Files -->
        <script src="{{ asset('js/theme.init.js') }}"></script>




        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
            ga('create', 'UA-12345678-1', 'auto');
            ga('send', 'pageview');
        </script>
         -->



    </body>
</html>