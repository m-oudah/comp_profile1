<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">{{__('trans.Our Video Library')}}</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a>
        </h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">{{__('trans.Our Video Library')}}</h6>
    </div>
</div>
<!-- Page Header Start -->


<!-- About Start -->
<div class="container-fluid py-3">
    <div class="container pt-5 pb-3">
        <h2 class="display-5 text-uppercase text-center mb-5">{{__('trans.Explore Our Library of Videos')}}</h2>

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
        </div>

    </div>
</div>
<!-- About End -->






@endsection