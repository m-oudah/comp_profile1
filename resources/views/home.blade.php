<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')

@include('slider')


<!-- About Start -->
<div class="container-fluid py-3">
    <div class="container pt-5 pb-3">
        <div class="row mt-3">
            <div class="col-md-6 col-12">
                <!-- <h1 class="display-1 text-primary text-center">01</h1> -->
                <h5 class="display-4 text-uppercase text-center mb-1">{{__('trans.abouttitle')}}</span></h5>
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <img class="w-75 mb-4" src="{{asset('assets/img/logo.png')}}" alt="">

                    </div>
                </div>
            </div>

            <div class="col-md-6 col-12 text-justify">
                <h6 class="display-4 text-uppercase "> {{__('trans.abouttitle2')}} </h6>

                <p>{{__('trans.aboutdetails1')}}
                </p>

            </div>

            <!-- <div class="row mt-3">
                    <div class="col-lg-4 mb-2">
                        <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-2x fa-headset text-secondary"></i>
                            </div>
                            <h4 class="text-uppercase m-0">24/7 Car Rental Support</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-2x fa-car text-secondary"></i>
                            </div>
                            <h4 class="text-light text-uppercase m-0">Car Reservation Anytime</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                            </div>
                            <h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
                        </div>
                    </div>
                </div> -->


        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h5 class="display-6 text-primary text-center">{{__('trans.What We Offer')}}</h5>
        <h1 class="display-4 text-uppercase text-center mb-5">{{__('trans.Our Services')}}</h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{asset('assets/img/serv.jpg')}}" alt="">
                    <div class="position-relative py-3">
                        <h5 class="text-uppercase"> {{__('trans.service title')}} </h5>
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-md btn-primary mx-1" href="{{route('serviceDetails',$lang)}}">{{__('trans.View')}} </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{asset('assets/img/serv.jpg')}}" alt="">
                    <div class="position-relative py-3">
                        <h5 class="text-uppercase"> {{__('trans.service title')}} </h5>
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-md btn-primary mx-1" href="{{route('serviceDetails',$lang)}}">{{__('trans.View')}} </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{asset('assets/img/serv.jpg')}}" alt="">
                    <div class="position-relative py-3">
                        <h5 class="text-uppercase"> {{__('trans.service title')}} </h5>
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-md btn-primary mx-1" href="{{route('serviceDetails',$lang)}}">{{__('trans.View')}} </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{asset('assets/img/serv.jpg')}}" alt="">
                    <div class="position-relative py-3">
                        <h5 class="text-uppercase"> {{__('trans.service title')}} </h5>
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-md btn-primary mx-1" href="{{route('serviceDetails',$lang)}}">{{__('trans.View')}} </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="py-2 text-center">
            <a class="btn btn-primary mt-2 py-3 px-5" href="{{route('services',$lang)}}">{{__('trans.View More Services')}}</a>
        </div>

    </div>
</div>

<!-- Services End -->


<!-- Portfolio Start -->
<div class="container-fluid py-3">
    <div class="container pt-5 pb-3">
        <h5 class="display-6 text-primary text-center">{{__('trans.Latest Portfolio')}}</h5>
        <h1 class="display-4 text-uppercase text-center mb-5">{{__('trans.PortfolioSub')}}</h1>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.prev work title')}}</h4>

                    <a class="btn btn-primary px-3" href="">{{__('trans.View')}} > </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item active mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv2.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.prev work title')}}</h4>
               
                    <a class="btn btn-primary px-3" href="">{{__('trans.View')}} ></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv2.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.prev work title')}}</h4>
                    <a class="btn btn-primary px-3" href="">{{__('trans.View')}} ></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.prev work title')}}</h4>
                 
                    <a class="btn btn-primary px-3" href="">{{__('trans.View')}} ></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv2.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.prev work title')}}</h4>
                    <a class="btn btn-primary px-3" href="">{{__('trans.View')}} ></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.prev work title')}}</h4>
                    <a class="btn btn-primary px-3" href="">{{__('trans.View')}} ></a>
                </div>
            </div>
        </div>
        <div class="py-2 text-center">
            <a class="btn btn-primary mt-2 py-3 px-5" href="">{{__('trans.View More Images')}}</a>
        </div>
    </div>
</div>
<!-- Portfolio End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <h5 class="display-6 text-primary text-center">{{__('trans.Our Blog')}}</h5>
        <h1 class="display-4 text-uppercase text-center mb-5">{{__('trans.Our Blog Sub')}}</h1>
        <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
            <div class="team-item">
                <img class="img-fluid w-100" src="{{asset('assets/img/serv2.jpg')}}" alt="">
                <div class="position-relative py-3">
                    <h4 class="text-uppercase"> {{__('trans.article title')}}</h4>
                    <p class="m-0">10/08/2022</p>
                    <div
                        class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <a class="btn btn-md btn-primary mx-1" href="{{route('articleDetails',$lang)}}">{{__('trans.View')}} </a>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <img class="img-fluid w-100" src="{{asset('assets/img/team-2.jpg')}}" alt="">
                <div class="position-relative py-3">
                    <h4 class="text-uppercase">{{__('trans.article title')}}</h4>
                    <p class="m-0">10/08/2022</p>
                    <div
                        class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <a class="btn btn-md btn-primary mx-1" href="{{route('articleDetails',$lang)}}">{{__('trans.View')}} </a>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <img class="img-fluid w-100" src="{{asset('assets/img/team-3.jpg')}}" alt="">
                <div class="position-relative py-3">
                    <h4 class="text-uppercase">{{__('trans.article title')}}</h4>
                    <p class="m-0">10/08/2022</p>
                    <div
                        class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <a class="btn btn-md btn-primary mx-1" href="{{route('articleDetails',$lang)}}">{{__('trans.View')}} </a>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <img class="img-fluid w-100" src="{{asset('assets/img/team-4.jpg')}}" alt="">
                <div class="position-relative py-3">
                    <h4 class="text-uppercase">{{__('trans.article title')}}</h4>
                    <p class="m-0">10/08/2022</p>
                    <div
                        class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <a class="btn btn-md btn-primary mx-1" href="{{route('articleDetails',$lang)}}">{{__('trans.View')}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Vendor Start -->
<div class="container-fluid py-5">
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





@endsection