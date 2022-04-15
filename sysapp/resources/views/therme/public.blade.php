<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ITC Group || - @yield('title')</title>

    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{asset('assets/css/all-stylesheets.css')}}" type="text/css"/>

</head>
<body class="home-page">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="SPV5FNQ3">
</script>
@include('therme.loader')

<div>
    @yield('syscontent')
</div>


</body>
</html>



</head>












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
                        <a href="#">
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

                            <li><a href="#"><i class="fa fa-lock" style="color: goldenrod;font-size: 20px;"></i></a></li>

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
<script src="{{asset('assets/js/projects/isotope.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('assets/owl-carousel/js/owl.carousel.js')}}"></script>
<!-- LAZY EFFECTS Scripts -->
<script type="text/javascript" src="{{asset('assets/js/jquery.unveilEffects.js')}}"></script>
<!-- Custom Scripts -->
<script src="{{asset('assets/js/custom.js')}}"></script>

