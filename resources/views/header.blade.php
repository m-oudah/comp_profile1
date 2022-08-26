<?php $lang = app()->getLocale(); ?>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-9  mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>

                    @if ($lang=='ar')
                    <a class="btn btn-primary" href="/en">English </a>
                    @else
                    <a class="btn btn-primary" href="/ar">العربية </a>
                    @endif
                </div>
            </div>
            
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0" style="margin-bottom:-45px;">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="{{route('index',$lang)}}" class="navbar-brand">
                    <!-- <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1> -->
                    <img src="{{asset('assets/img/logo.png')}}" alt="" width="100" />
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{route('index',$lang)}}" class="nav-item nav-link active">{{__('trans.home')}}</a>
                        <a href="{{route('about',$lang)}}" class="nav-item nav-link">{{__('trans.About')}}</a>
                        <a href="{{route('services',$lang)}}" class="nav-item nav-link">{{__('trans.Services')}}</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle"
                                data-toggle="dropdown">{{__('trans.Media')}}</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{route('ourImages',$lang)}}"
                                    class="dropdown-item">{{__('trans.Galleries')}}</a>
                                <a href="{{route('ourVideos',$lang)}}" class="dropdown-item">{{__('trans.Videos')}}</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle"
                                data-toggle="dropdown">{{__('trans.Articles')}}</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{route('blog',$lang)}}" class="dropdown-item">{{__('trans.Blog')}}</a>
                                <a href="{{route('news',$lang)}}" class="dropdown-item">{{__('trans.News')}}</a>
                            </div>
                        </div>
                        <a href="{{route('contact',$lang)}}" class="nav-item nav-link">{{__('trans.Contact')}}</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->