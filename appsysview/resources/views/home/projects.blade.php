@extends('template.tmpitcg')

@section('title', 'Projects')

@section('bannerpage')

@show



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
                                <h1>projects </h1>
                                <p>They are all satisfied with our achievements. Take a look.</p>
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





        <!--=====================================-->
        <!--========== Our Latest Work ==========-->
        <!--=====================================-->
        <div class="paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row text-center">
                    <h2 class="black-font">Our Latest Work</h2>
                    <p>Find our latest achievements, in all areas such as:
                        security, data management, installation etc.
                        <br>Our customers are all over the country.</p>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <!--paddingBox-->
        </div>

        <!--=====================================-->
        <!--========== Our Latest Work ==========-->
        <!--=====================================-->
        <div class="paddingBox greyBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row text-center">
                    <div id="project-filter-box" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="project-filter-links current" id="all">All</div>
                        <div class="project-filter-links" id="insurance">Installation</div>
                        <div class="project-filter-links" id="debit">Web development</div>
                        <div class="project-filter-links" id="invoice">Security</div>
                        <div class="project-filter-links" id="report">Data management</div>
                        <!--project-filter-box-->
                    </div>
                    <div id="gallery-content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="gallery-content-center">
                            <ul>
                                <li class="all insurance col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="project-details text-left col-lg-12 col-md-12 co-sm-12 col-xs-12">
                                        <figure><img src="{{asset('assets/img/logo/project-img1.jpg')}}" alt="project-img1" />
                                        </figure>
                                        <div>
                                            <h3 class="black-color">Anual Company Growth</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim aquis nostrud
                                                exercitatio ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <!--project-details-->
                                    </div>
                                    <!--all-->
                                </li>
                                <li class="all debit col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="project-details text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <figure><img src="{{asset('assets/img/logo/project-img2.jpg')}}" alt="project-img2" /></figure>
                                        <div>
                                            <h3 class="black-color">Estelle Solution</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim aquis nostrud
                                                exercitatio ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <!--project-details-->
                                    </div>
                                    <!--all-->
                                </li>

                                <li class="all invoice col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="project-details text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <figure><img src="{{asset('assets/img/logo/project-img3.jpg')}}" alt="project-img3" />
                                        </figure>
                                        <div>
                                            <h3 class="black-color">Insurance</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim aquis nostrud
                                                exercitatio ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <!--project-details-->
                                    </div>
                                    <!--all-->
                                </li>

                                <li class="all insurance col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="project-details text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <figure><img src="{{asset('assets/img/logo/project-img4.jpg')}}" alt="project-img4" /></figure>
                                        <div>
                                            <h3 class="black-color">Estelle Solution</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim aquis nostrud
                                                exercitatio ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <!--project-details-->
                                    </div>
                                    <!--all-->
                                </li>

                                <li class="all report col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="project-details text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <figure><img src="{{asset('assets/img/logo/project-img5.jpg')}}" alt="project-img5" /></figure>
                                        <div>
                                            <h3 class="black-color">Business Insurance</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim aquis nostrud
                                                exercitatio ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <!--project-details-->
                                    </div>
                                    <!--all-->
                                </li>

                                <li class="all invoice col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="project-details text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <figure><img src="{{asset('assets/img/logo/project-img6.jpg')}}" alt="project-img6" /></figure>
                                        <div>
                                            <h3 class="black-color">business commitment</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim aquis
                                                nostrud exercitatio ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.</p>
                                        </div>
                                        <!--project-details-->
                                    </div>
                                    <!--all-->
                                </li>
                            </ul>
                            <!--gallery-content-center-->
                        </div>
                        <!--gallery-content-->
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
