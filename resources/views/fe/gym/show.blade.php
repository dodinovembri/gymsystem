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
            
            <section class="section section-default border-0 my-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750">
                <div class="container py-4">

                    <div class="row align-items-center">
                        <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                            <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                                <div>
                                    <img alt="" class="img-fluid" src="{{ asset('img/background-image-2.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress-bars">
                                <?php foreach ($gym as $key => $value) { ?>
                                    <div class="progress-label">
                                        <span class="text-1">{{ $value->name }} - {{ $value->description }}</span>
                                    </div>
                                    <div class="progress mb-2">
                                        <?php $result = $value->value_criteria / 5 * 100; ?>
                                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="{{ $result }}%">
                                            <span class="progress-bar-tooltip">Value {{$result}}</span>
                                        </div>
                                    </div>                                    
                                <?php } ?>                            
                            </div>
                        </div>
                    </div>

                </div>
            </section>

                <div class="container">

                    <div class="row mt-5 py-3">
                        <div class="col-md-6">
                            <div class="toggle toggle-primary toggle-simple m-0" data-plugin-toggle>
                                <section class="toggle active mt-0">
                                    <label>{{ $information->name }}</label>
                                    <div class="toggle-content">
                                        <p>{{$information->description}}</p>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                    <h4>Locations</h4>
                                    <iframe src="{{$information->location}}" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-4">
                            <hr class="solid">
                        </div>
                    </div>

                </div>            

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