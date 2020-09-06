@extends('layouts.fe')
@section('content')

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
                                                <a href="{{ route('fe') }}" class="text-light"> Home</a>
                                            </li>
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
            </div>
        </header>

        <div role="main" class="main">
            
            <section class="section bg-color-tertiary border-0 my-0" id="popular-gym">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="font-weight-bold text-center appear-animation" data-appear-animation="fadeInUpShorter">Popular Gym</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <?php for ($i=0; $i < $jumlah_alternative; $i++) { ?>                              
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                                    <div class="thumb-info-wrapper">
                                        <a href="{{ route('fe.gym.show', $alt_id[$i]) }}"><img src="{{ asset('img/background-image-2.jpg') }}" class="img-fluid" alt=""></a>
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
                                            <li><i class="far fa-user text-color-primary"></i> Gym System</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                                
                        <?php } ?>
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

@endsection