<!doctype html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>ITC Group | @yield('title')</title>
        <link rel="icon" href="{{ URL::asset('assets/img/logo/favicon.png') }}" type="image/x-icon"/>
        <style>
            #gtx-trans{
                display: none;
            }

            h1{
                font-size: x-small;
                font-weight: bold;
            }
            #presoh1,#presoh2,#presoh3{
                color:#000000;
                margin-bottom: 2%;
                margin-top: 5%;
            }

            /*ce style est pour les LI de TinyCME */
            .divtextcss .persoimage ul, .divtextcss .persoimage ol, .divtextcss .persoimage li{
                list-style-type: none;
                margin-left: 0;
                margin-right: 0;
                margin-bottom: 0;
                padding-left: 30px;
                /*padding: 36px 0 36px 84px;*/
                background-image: url('{{asset('assets/img/logo/small-logo.png')}}');
                background-repeat: no-repeat;
                background-position: left center;
                background-size: 20px;
            }
            .persoimage ul{margin-top: 3%;}

            .divtextcss .monpa, .divtextcss p {
                margin-top: 3px;
                margin-bottom: 0px;
                margin-right: 0px;
                margin-left: 0px;
                padding: 0px 0px 0px 0px;
            }

            /*Code lightboxe image dans services*/

            @font-face {
                font-family: 'lg';
                src: url("{{asset('assets')}}/fonts/lg.ttf?22t19m") format("truetype"), url("{{asset('assets')}}/fonts/lg.woff?22t19m") format("woff"), url("{{asset('assets')}}/fonts/lg.svg?22t19m#lg") format("svg");
                font-weight: normal;
                font-style: normal;
                font-display: block;
            }


            .demo-gallery > ul {
                margin-bottom: 0;
            }
            .demo-gallery > ul > li {
                float: left;
                margin-bottom: 15px;
                margin-right: 20px;
                width: 200px;
            }
            .demo-gallery > ul > li a {
                border: 3px solid #FFF;
                border-radius: 3px;
                display: block;
                overflow: hidden;
                position: relative;
                float: left;
            }
            .demo-gallery > ul > li a > img {
                -webkit-transition: -webkit-transform 0.15s ease 0s;
                -moz-transition: -moz-transform 0.15s ease 0s;
                -o-transition: -o-transform 0.15s ease 0s;
                transition: transform 0.15s ease 0s;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                height: 100%;
                width: 100%;
            }
            .demo-gallery > ul > li a:hover > img {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
                opacity: 1;
            }
            .demo-gallery > ul > li a .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.1);
                bottom: 0;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                -webkit-transition: background-color 0.15s ease 0s;
                -o-transition: background-color 0.15s ease 0s;
                transition: background-color 0.15s ease 0s;
            }
            .demo-gallery > ul > li a .demo-gallery-poster > img {
                left: 50%;
                margin-left: -10px;
                margin-top: -10px;
                opacity: 0;
                position: absolute;
                top: 50%;
                -webkit-transition: opacity 0.3s ease 0s;
                -o-transition: opacity 0.3s ease 0s;
                transition: opacity 0.3s ease 0s;
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .justified-gallery > a > img {
                -webkit-transition: -webkit-transform 0.15s ease 0s;
                -moz-transition: -moz-transform 0.15s ease 0s;
                -o-transition: -o-transform 0.15s ease 0s;
                transition: transform 0.15s ease 0s;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                height: 100%;
                width: 100%;
            }
            .demo-gallery .justified-gallery > a:hover > img {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
                opacity: 1;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.1);
                bottom: 0;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                -webkit-transition: background-color 0.15s ease 0s;
                -o-transition: background-color 0.15s ease 0s;
                transition: background-color 0.15s ease 0s;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
                left: 50%;
                margin-left: -10px;
                margin-top: -10px;
                opacity: 0;
                position: absolute;
                top: 50%;
                -webkit-transition: opacity 0.3s ease 0s;
                -o-transition: opacity 0.3s ease 0s;
                transition: opacity 0.3s ease 0s;
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .video .demo-gallery-poster img {
                height: 48px;
                margin-left: -24px;
                margin-top: -24px;
                opacity: 0.8;
                width: 48px;
            }
            .demo-gallery.dark > ul > li a {
                border: 3px solid #04070a;
            }
            .home .demo-gallery {
                padding-bottom: 80px;
            }
            /*Code lightboxe image dans services*/



        </style>



        <link rel="stylesheet" href="{{asset('assets/css/all-stylesheets.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/moncss.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/headings.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/buttons.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/preloader.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/projects/projects.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/animation.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/custom-layout.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/special-classes.css')}}" type="text/css" />




        <link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/fonts/font-awesome/css/font-awesome.css')}}" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" type="text/css" />


        <link rel="stylesheet" href="{{asset('assets/css/typography.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/owl-carousel/css/owl.carousel.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/owl-carousel/css/owl.theme.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/owl-carousel/css/owl.transitions.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/owl-carousel/css/animate.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/css/mobile.css')}}" type="text/css" />

        <link href="{{asset('assets')}}/lightgallery.css" rel="stylesheet">


    </head>


    <body class="home-page">



{{--    @section('loadingpage')
        @include('template.loading')
    @show--}}

    @section('bannerview')
        @include('template.bannerview')
    @show


    @section('menubarre')
        @include('template.menup')
    @show



@yield('datacontent')








<!--=====================================-->
<!--============== Footer ===============-->
<!--=====================================-->
<div class="darkBlueBg paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="container">
        <div class="row">
            <div class="footer col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <aside class="newsletter col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h5>newsletter</h5>
                    <div class="form-group pull-left">
                        <input type="email" class="form-control" placeholder="Enter your email" name="letter-email" id="letter-email">
                    </div>
                    <button type="submit" class="btn btn-default pull-left">Go</button>
                    <div class="clearfix"></div>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i> 17, Plaza 41, rue Lamarre, Pétion-Ville,
                        </li>
                        <li>
                            <i class="fa fa-phone"></i> +509 3711.5990
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@fcgroup.com">info@fcgroup.com</a>
                        </li>
                    </ul>
                    <!--newsletter-->
                </aside>
                <aside class="sitemap col-lg-2 col-md-3 col-sm-6 col-xs-12">
                    <h5>partnership</h5>
                    <ul>
                        <li style="background: url({{asset('assets/img/icons/li-icon.png')}}) no-repeat left 7px;">
                            <a href="#">NTPsams Technology</a>
                        </li>
                        <li style="background: url({{asset('assets/img/icons/li-icon.png')}}) no-repeat left 7px;">
                            <a href="#">Rapahel Tech</a>
                        </li>
                        <li style="background: url({{asset('assets/img/icons/li-icon.png')}}) no-repeat left 7px;">
                            <a href="#">ITC call center</a>
                        </li>
                        <li style="background: url({{asset('assets/img/icons/li-icon.png')}}) no-repeat left 7px;">
                            <a href="#">Sam fotografi</a>
                        </li>
                        <li style="background: url({{asset('assets/img/icons/li-icon.png')}}) no-repeat left 7px;">
                            <a href="#">Event pa'm</a>
                        </li>
                    </ul>
                    <!--sitemap-->
                </aside>
                <aside class="twitter-feeds col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h5>Facebook Feeds</h5>
                    <ul>
                        <li>
                            <i class="fa fa-facebook"></i>
                            <a href="#">Jean Samuel Jules CEO at www.ntpsams.com and developer Lionel W. Andre Pierreonel from jacmel at Haitinumerique conference ...<span class="tweet-link">https://facebook.com/itcgrouphaiti</span><span class="tweet-date">October , 18, 2017</span></a>
                        </li>
                        <li>
                            <i class="fa fa-facebook"></i>
                            <a href="#">Go confidently in the direction of your dreams. Live the life you've imagined ...<span class="tweet-link">https://facebook.com/itcgrouphaiti</span><span class="tweet-date">May , 14, 2014</span></a>
                        </li>
                    </ul>
                    <!--twitter-feeds-->
                </aside>
                <aside class="copyright-section col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="logo pull-left">
                        <a href="{{route('home')}}">
                            <img src="{{asset('assets/img/logo/footer-logo.png')}}" alt="logo" />
                        </a>
                    </div>
                    <ul>
                        <li>Copyright © FC Group 2020.</li>
                        <li>All rights reserved.</li>
                        <li>Created by:
                            <a href="#">NTPSAMS</a>
                        </li>
                    </ul>
                    <div class="social-icons">
                        <ul>
                            <li>
                                <a href="https://facebook.com/itcgrouphaiti" class="fa fa-facebook" target="blank"></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/itcgrouphaiti" class="fa fa-twitter" target="blank"></a>
                            </li>
                            <!--// <li><a href="#" class="fa fa-linkedin"></a></li> //-->
                            <li>
                                <a href="https://www.instagram.com/itcgrouphaiti" class="fa fa-google-plus" target="blank"></a>
                            </li>

                            <li><a href="{{route('loginpage')}}"><i class="fa fa-lock" style="color: goldenrod;font-size: 20px;"></i></a></li>

                        </ul>
                        <!--social-icons-->
                    </div>
                    <!--copyright-section-->

                </aside>
                <!--footer-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!--darkBlueBg-->
</div>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('assets/js/jquery-1.12.3.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
    <!-- Counter -->
    <script src="{{asset('assets/js/counter/counter.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('assets/owl-carousel/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/projects/isotope.js')}}"></script>
    <!-- LAZY EFFECTS Scripts -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.unveilEffects.js')}}"></script>
    <!-- Custom Scripts -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets')}}/lightgallery_1.js"></script>
<script src="{{asset('assets')}}/lg-zoom.js"></script>
<script>
    lightGallery(document.getElementById('lightgallery'));
</script>






    </body>
</html>
