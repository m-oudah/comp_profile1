<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">{{__('trans.Service Details')}}</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">{{__('trans.Service Details')}}</h6>
    </div>
</div>
<!-- Page Header Start -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="row">
            
            <div class="col-lg-8 col-12">
                <div class="">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/car-rent-1.png')}}" alt="">
                    <div class="text-justify mb-4">{{__('trans.aboutdetails1')}}</div>


                </div>
            </div>
            <div class="col-lg-4 col-12">
            <h4 class="text-uppercase text-center mb-4">{{__('trans.other services')}}</h4>

                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/car-rent-1.png')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.article title')}}</h4>

                    <a class="btn btn-primary px-3" href="">{{__('trans.View')}} > </a>
                </div>
               
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/car-rent-1.png')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.article title')}}</h4>

                    <a class="btn btn-primary px-3" href="">{{__('trans.View')}} > </a>
                </div>
            </div>
            
        </div>

    </div>
</div>
<!-- About End -->


<!-- Vendor Start -->
<div class="container-fluid py-2">
    <div class="container py-5">
        <div class="owl-carousel vendor-carousel">
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-1.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-2.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-3.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-4.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-5.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-6.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-7.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-8.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->






@endsection