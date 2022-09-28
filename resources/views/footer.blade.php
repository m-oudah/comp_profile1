
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-2">
            <div class="col-lg-3 col-md-6 mb-2">
            <h4 class="text-uppercase text-light mb-4">{{__('trans.About')}} </h4>
            <p class="mb-2">About Us About Us About Us About Us About Us About Us About Us About Us About Us About Us About Us </p>

                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">{{__('trans.Usefull Links')}}</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="{{route('about',$lang)}}"><i class="fa fa-angle-right text-white mr-2"></i>{{__('trans.About')}}</a>
                    <a class="text-body mb-2" href="{{route('services',$lang)}}"><i class="fa fa-angle-right text-white mr-2"></i>{{__('trans.Services')}}</a>
                    <a class="text-body mb-2" href="{{route('about',$lang)}}"><i class="fa fa-angle-right text-white mr-2"></i>{{__('trans.Blog')}}</a>
                    <a class="text-body mb-2" href="{{route('ourImages',$lang)}}"><i class="fa fa-angle-right text-white mr-2"></i>{{__('trans.Galleries')}}</a>
                    <a class="text-body mb-2" href="{{route('ourVideos',$lang)}}"><i class="fa fa-angle-right text-white mr-2"></i>{{__('trans.Videos')}}</a>
                    <a class="text-body mb-2" href="{{route('contact',$lang)}}"><i class="fa fa-angle-right text-white mr-2"></i>{{__('trans.Contact')}}</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">

                <h4 class="text-uppercase text-light mb-4">{{__('trans.Get In Touch')}}</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>{{__('trans.Address')}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>info@example.com</p>

            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">{{__('trans.Newsletter')}}</h4>
                <p class="mb-4">{{__('trans.SUBSCRIBE OUR NEWSLETTER')}}</p>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="{{__('trans.Email')}}">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">{{__('trans.Sign Up')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-6 text-right"><p class="mb-2">{{__('trans.copyright')}} &copy; <a href="#">Your Site Name </a></p></div>
            <div class="col-6 text-left"> <p class="mb-2">{{__('trans.Developed By')}} <a href="https://c-web20.com/" target="_blank">C-Web </a></p></div>    
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>