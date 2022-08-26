<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">{{__('trans.Our Media Library')}}</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a>
        </h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">{{__('trans.Our Media Library')}}</h6>
    </div>
</div>
<!-- Page Header Start -->


<!-- About Start -->
<div class="container-fluid py-3">
    <div class="container pt-5 pb-3">
        <h2 class="display-5 text-uppercase text-center mb-5">{{__('trans.Explore Our Library of Media')}}</h2>

        <div class="row">

            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- About End -->






@endsection