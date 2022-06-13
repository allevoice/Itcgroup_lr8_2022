@extends('template.tmpitcg')

@section('title', 'services')

@section('bannerview')

@endsection

@section('datacontent')



    <div class="main-contentbox">


        <!--=====================================-->
        <!--============== Banner ===============-->
        <!--=====================================-->
        <div class="sub-banner-con darkBlueBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="container-fluid">
                    <div class="row">
                        <div class="sub-banner-text darkBlueBg regular-font col-lg-6 col-md-5 col-sm-12 col-xs-12" >
                            <div style="padding-left:10%;">
                                @foreach (dataviewhead('3','a') as $show)
                                    <h1>{{$show->title}}</h1>
                                    <p class="regular-font">{{$show->description}}</p>
                                @endforeach
                            </div>
                            <!--sub-banner-text-->
                        </div>
                        <!--row-->
                    </div>
                    <!--container-->
                </div>
                <div class="sub-banner-img col-lg-6 col-md-7 col-sm-12 col-xs-12">
                   @include('template.bannerpage')
                </div>
                <!--row-->
            </div>
            <!--col-lg-12-->
        </div>


        <!--================================================-->
        <!--============== We offer Services ===============-->
        <!--================================================-->
        <div class="paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row text-center">
                    @foreach (dataviewhead('3','b') as $show)
                        <h2 class="black-font">{{$show->title}}</h2>
                        <p class="regular-font">{{$show->description}}</p>
                    @endforeach

                    <div class=" text-center" style="height:auto;padding-top: 2%;padding-bottom: 2%;">
                        {{ $serviceoffert->links('pagination::bootstrap-4') }}
                    </div>
                    <div class="spacer"></div>


                    @if (count($serviceoffert) > 0)
                        @foreach ($serviceoffert as $liste)
                        <aside class="services-plans col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 2%">


                            <figure>
                                @if ($liste->img1 !=Null)
                                    <img src="{{asset('assets/img/services/')}}/{{$liste->img1}}" alt="" height="200"/>
                                @else
                                    <img src="{{asset('assets/img/services/default/services-img1.jpg')}}" alt="" height="200"/>
                                @endif
                            </figure>
                            <div class="service-innerbox greyBg">
                                <div class="icon-holder BlueBg" data-effect="helix">
                                    @if($liste->whiteicone !=NULL)
                                        <span><img src="{{asset('assets/img/services')}}/{{$liste->whiteicone}}" alt="invest-img2" /></span>
                                    @else
                                        <span><img src="{{asset('assets/img/services/defaultlight.png')}}" alt="invest-img2" /></span>
                                    @endif
                                </div>
                                <h4>{{limitemtxt($liste->title,10)}}</h4>
                                <p>{{limitemtxt($liste->titleinfo,25)}}</p>
                                <!--service-innerbox-->
                                <a href="{{route('service_details',$liste->codeservice)}}" class="btn btn-sm btn-primary">More</a>
                            </div>
                            <!--services-plans-->
                        </aside>
                    @endforeach
                    @endif







                    <!--row-->
                </div>
                <div class=" text-center" style="height:auto;padding-top: 2%;padding-bottom: 2%;">
                    {{ $serviceoffert->links('pagination::bootstrap-4') }}
                </div>
                <!--container-->
            </div>
            <!--paddingBox-->
        </div>



        <!--=====================================-->
        <!--========= Bringing new look =========-->
        <!--=====================================-->
        <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <aside class="business-imagebox col-lg-4 col-md-4 col-sm-7 col-xs-12 ">
                    <div class="row">
                        <figure>
                            <img alt="business-quality" src="{{asset('assets/img/logo/business-quality.jpg')}}">
                        </figure>
                        <h3 class="caption-heading">quality</h3>
                        <div class="caption">
                            <div class="caption-text">
                                <h3>quality</h3>
                                <p class="regular-font">We provide quality services, of an international standard. Our work is carried out with perfect measurements.</p>
                                <!-- // <div class="transparent-btn"><a href="#">Read More</a></div> //-->
                                <!-- caption-text-->
                            </div>
                            <!--caption-->
                        </div>
                        <!--row-->
                    </div>
                    <!--business-imagebox-->
                </aside>
                <aside class="business-imagebox col-lg-4 col-md-4 col-sm-7 col-xs-12 ">
                    <div class="row">
                        <figure>
                            <img alt="commitment" src="{{asset('assets/img/logo/commitment.jpg')}}">
                        </figure>
                        <h3 class="caption-heading">commitment</h3>
                        <div class="caption">
                            <div class="caption-text">
                                <h3>commitment</h3>
                                <p class="regular-font">We take your projects to heart. We respect our commitments and work quickly. You can count on us.</p>
                                <!-- // <div class="transparent-btn"><a href="#">Read More</a></div> //-->
                                <!-- caption-text-->
                            </div>
                            <!-- caption-->
                        </div>
                        <!--row-->
                    </div>
                    <!--business-imagebox-->
                </aside>
                <aside class="business-imagebox col-lg-4 col-md-4 col-sm-7 col-xs-12 ">
                    <div class="row">
                        <figure>
                            <img alt="business-success" src="{{asset('assets/img/logo/business-success.jpg')}}">
                        </figure>
                        <h3 class="caption-heading">swiftness</h3>
                        <div class="caption">
                            <div class="caption-text">
                                <h3>swiftness</h3>
                                <p class="regular-font">Quick result? it's us. Our services are offered within short periods, to save you time.</p>
                                <!-- // <div class="transparent-btn"><a href="#">Read More</a></div> //-->
                                <!--caption-text-->
                            </div>
                            <!--caption-->
                        </div>
                        <!--row-->
                    </div>
                    <!--business-imagebox-->
                </aside>
                <!--row-->
            </div>
            <!--text-center-->
        </div>


        <!--====================================-->
        <!--========= Business Meeting =========-->
        <!--====================================-->
        <div class="paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="logo-background">
                            <figure class="business-meeting-img">
                                <img src="{{asset('assets/img/logo/business-meeting.png')}}" alt="business-meeting" />
                            </figure>
                            <!--logo-background-->
                        </div>
                        <!--text-center-->
                    </div>
                    <div class="business-box col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h1 class="light-blue-color">Bringing new look to your business!</h1>
                        <h2 class="black-font">WE Helping small business</h2>
                        <p>We have packages for successful businesses. Go ahead and make you known everywhere. Find your needs among our services. </p>
                        <p class="blue-color regular-font">Trust us. We are the ideal partner to help you grow well and quickly. Join us now for services such as:</p>
                        <ul>
                            <li style="background: url({{asset('assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Web development. </li>
                            <li style="background: url({{asset('assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Equipments. </li>
                            <li style="background: url({{asset('assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Security. </li>
                            <li style="background: url({{asset('assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Guidance. </li>
                        </ul>
                        <div class="transparent-btn pull-left">
                            <a href="{{route('contact')}}">Contact Us</a>
                        </div>
                        <!--business-box-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <!--paddingBox-->
        </div>
        <!--main-contentbox-->
    </div>

@endsection
