<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">{{__('trans.Contact Us')}}</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a>
        </h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">{{__('trans.Contact Us')}}</h6>
    </div>
</div>
<!-- Page Header Start -->



<!-- Contact Start -->
<div class="container-fluid py-3">
    <div class="container pt-2 pb-3">
        <h4 class="display-4 text-primary text-center mb-4">{{__('trans.Get In Touch')}}</h4>
        <!-- <h1 class="display-4 text-uppercase text-center mb-5">Don’t Hesite Feel Free To Contact With us</h1> -->
        <div class="row">
            <div class="col-lg-7 mb-2">
                <div class="contact-form bg-light mb-4" style="padding: 30px;">
                    <form>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="{{__('trans.Your Name')}}"
                                    required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="email" class="form-control p-4" placeholder="{{__('trans.Your Email')}}"
                                    required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control p-4" placeholder="{{__('trans.Subject')}}"
                                required="required">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control py-3 px-4" rows="5" placeholder="{{__('trans.Message')}}"
                                required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5"
                                type="submit">{{__('trans.Send Message')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-2">
                <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 420px;">
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">{{__('trans.Head Office')}}</h5>
                            <p>123 Street, New York, USA</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-phone-alt text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">7/24 {{__('trans.Support')}}</h5>
                            <p>0097622225511</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">{{__('trans.Customer Service')}}</h5>
                            <p>customer@example.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">{{__('trans.Return & Refund')}}</h5>
                            <p class="m-0">refund@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



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