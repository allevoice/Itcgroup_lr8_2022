@extends('therme.public')

@section('title', 'Blog')



@section('syscontent')

    @include('therme.menup')





    <!--=====================================-->
    <!--============== Banner ===============-->
    <!--=====================================-->
    <div class="main-contentbox">

        <div class="sub-banner-con darkBlueBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="sub-banner-text darkBlueBg regular-font col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div>
                                <h1>blog</h1>
                                <p>Meet the CEO : Jean Samuel Jules</p>

                            </div>
                            <!--sub-banner-text-->
                        </div>
                        <!--row-->
                    </div>
                    <!--container-->
                </div>
                <div class="sub-banner-img blog-banner col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <!--banner-img-->
                </div>
                <!--row-->
            </div>
            <!--col-lg-12-->
        </div>

    </div>
    <!--===================================-->
    <!--============== Blog ===============-->
    <!--===================================-->
    <div class="paddingBox greyBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <!--//
                    <form method="get" id="searchform" action="#">
                      <div>
                        <input type="text" value="Search..." name="s" id="s" />
                        <button type="submit" id="searchsubmit" class="fa  fa-search"></button>
                      </div>
                    </form>
                    //-->
                    <aside class="sidebar catagories col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!--//
                        <div class="row">
                          <h3>Services</h3>
                          <ul class="regular-font">
                            <li><a href="#">Financial Investment</a></li>
                            <li><a href="#">Company Growth</a></li>
                            <li><a href="#">Taxes and Accounting</a></li>
                            <li><a href="#">Financial modeling and planning</a></li>
                            <li><a href="#">Profits & Wealth</a></li>
                            <li><a href="#">Investments in Bonds</a></li>
                          </ul>
                          --row--
                        </div>
                        --sidebar--
                      </aside>

                      <aside class="sidebar recent-posts col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                          <h3>Recent Posts</h3>
                          <ul class="regular-font">
                            <li>
                              <figure><img src="images/blog/recent-post-img1.jpg" alt="recent-post-img1" /></figure>
                              <p><span>Suspendisse</span>Gorem ipsum dolor sit...</p>
                              <a href="#">read more</a> </li>
                            <li>
                              <figure><img src="images/blog/recent-post-img2.jpg" alt="recent-post-img1" /></figure>
                              <p><span>Suspendisse</span>Gorem ipsum dolor sit...</p>
                              <a href="#">read more</a> </li>
                            <li>
                              <figure><img src="images/blog/recent-post-img3.jpg" alt="recent-post-img1" /></figure>
                              <p><span>Suspendisse</span>Gorem ipsum dolor sit...</p>
                              <a href="#">read more</a> </li>
                          </ul>
                          --row--
                        </div>
                        --sidebar--
                      </aside>
                      //-->
                        <aside class="sidebar tags col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <h3>Experience</h3>
                                <a href="#">Pixel Haïti</a> <a href="#">Atalou Micro System</a> <a href="#">Manutech INC</a> <a href="#">Digicel Haïti</a> <a href="#">Accesshaiti</a> <a href="#">Plaza Hotel</a> <a href="#">NTPSams -Technology & ITC-GROUP</a>
                                <!--row-->
                            </div>
                            <!--sidebar-->
                        </aside>
                        <!--//
                        <aside class="sidebar subscribe col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="row">
                            <h3>Subscribe</h3>
                            <form class="form-inline">
                              <div class="form-group">
                                <input type="text" class="form-control" name="my-name" id="my-name" placeholder="Name:">
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control" id="my-email" name="my-email" placeholder="Email:">
                              </div>
                              <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                            --row--
                          </div>
                          --sidebar--
                        </aside>
                        <aside class="sidebar meet-advisors col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="row">
                            <figure><img src="images/blog/blog-advisor-team.jpg" alt="blog-advisor-team" /></figure>
                            <h3>Meet Our Advisor</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                            <div class="blue-btn pull-left"><a href="#">contact</a></div>
                            --row--
                          </div>
                          --sidebar--
                        </aside>
                        --col-lg-3--
                        //-->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <aside class="blog-post-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <figure class="post-img"> <img src="assets/images/blog/post-img1.jpg" alt="post-img1" /> <span class="date-tag semibold-font">12 <br>
                AUGUST 2020</span>
                                <!--post-img-->
                            </figure>
                            <div class="blog-post-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="meta">
                                    <!--//
                                    <ul>
                                      <li><i class="fa fa-user"></i> <a href="#">Admin </a>/</li>
                                      <li><i class="fa fa-comment"></i> <a href="#">20 Comments </a>/</li>
                                      <li><i class="fa fa-eye"></i> 155 Views</li>
                                    </ul>
                                    //-->
                                    <!--meta-->
                                </div>
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="https://web.facebook.com/jsjulessam/" class="fa fa-facebook"></a></li>
                                        <li><a href="https://twitter.com/jsjulessam" class="fa fa-twitter"></a></li>
                                        <!--// <li><a href="#" class="fa fa-instagram"></a></li> //-->
                                    </ul>
                                    <!--social-icons-->
                                </div>
                                <div class="blog-text col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h3>Jean Samuel JULES’s Biography </h3>
                                    <p>JEAN SAMUEL JULES, S.E. SYSTEM ENGINEER
                                        CEO. CHIEF EXECUTIVE OFFICER.
                                        <br>NTPSAMS-TECHNOLOGY & ITCGROUP Education:
                                        <br>§ 4 Years of Studies in the field of Computer Sciences at University of INUQUA
                                        <br>§ 1 Year of Master in the specialization of Network and Telecommunication the field of Computer Sciences at University of CREFIMA) (Licence in Computer Sciences / INUQUA / CREFIMA)
                                        <br>§ Has attended several seminaries on self performance for Certifications in specific fields such as:  Networking, Telecom, Entrepreneurship, Law of work, Project Management and Programming Systems at ESIH, AUF, INUQUA, UNIQ, PACT respectively.(Certificates/ESIH( Ecole Superieur en Informatique d’Haiti, INUQUA(Institut Universitaire Quisqueya D'AMÉRIQUE), AUF(Agence Universitaire Francophone), UNIQ (Universite Quisqueya), CPLA (Cabinet Patrick Laurent) PACT (Progress & Accelerated Change Through Technology))
                                        <br><br>Affiliations
                                        <br>§ Member of AHTIC (L’Association Haïtienne pour les Technologies de l’Information et de la Communication).
                                        Summary:
                                        <br>§ Has worked as an IT Consultant and Sales Engineering for the past 10 years always available and passionate in bringing the assistance needed to his Customers and Enterprises like; NGOs, UN locally and Internationally as well as the general population in these specific lists of services.
                                        <br>For more information please follow these links:
                                        (http://www.ntpsams.com https://itcgrouphaiti.com/blog
                                        <br><br>Experience:
                                        <br>- Pixel Haïti, IT Technicien, in the Cabling System for Both Building Hainet at Darguin Street, Petion-Ville.
                                        <br>- Manutech INC, IT Consultant for the Local and International Company Managing the servers and taking care of the maintenance in the help desk department.
                                        <br>- Digicel Haïti, CCTECH Agent in Help Desk Department.
                                        <br>- Accesshaiti, IT Assistant IN NOC Department.
                                        <br>- PLAZA HOTEL, IT Consultant, Translator, Driver and Logistic Supervisor in Chef for the Hotel and the CNN Staff Journalist. Since The earthquake.
                                        <br>- ATALOU Micro System, Sales and System Engineer Manager and Marketing Agent. Etc…
                                        <br>- NTPSAMS-TECHNOLOGY & ITCGROUP, CEO since 2011. </p>
                                    <!--blog-text-->
                                </div>
                                <!--blog-post-info-->
                            </div>
                            <!--row-->
                        </div>
                        <!--blog-post-box-->
                    </aside>
                    <!--//
                    <aside class="white-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <h3>Comment’s</h3>
                      <div class="border-top"></div>
                      <div class="comments-outer-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                          <div class="comments-box pull-left">
                            <figure class="pull-left"><img src="images/blog/comment-img1.jpg" alt="comment-img1" /></figure>
                            <div class="pull-right">
                              <h5>Did you visit our gallery post type?</h5>
                              <p>Quisque ligulas ipsum euismod atras vulputate iltricies etri elit. class aptent taciti sociosqu ad litora torquent per cnostra inceptos himenaeos. Nulla nunc dui tristique in semper vel congue sed ligula.</p>
                              <div class="blue-btn pull-left"><a href="#">reply</a></div>
                            </div>
                            --comments-box--
                          </div>
                          <div class="comments-box comments-reply pull-left">
                            <figure class="pull-left"><img src="images/blog/comment-img2.jpg" alt="comment-img2" /></figure>
                            <div class="pull-right">
                              <h5>Did you visit our gallery post type?</h5>
                              <p>Quisque ligulas ipsum euismod atras vulputate iltricies etri elit. class aptent taciti sociosqu ad litora torquent per cnostra inceptos himenaeos. Nulla nunc dui tristique in semper vel congue sed ligula.</p>
                              <div class="blue-btn pull-left"><a href="#">reply</a></div>
                            </div>
                            --comments-box--
                          </div>
                          --row--
                        </div>
                        --comments-outer-box--
                      </div>
                      --white-box--
                    </aside>
                    <aside class="white-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <h3>leave a comment</h3>
                      <div class="contact-form col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul>
                          <li>
                            <input type="text" placeholder="Enter your name..." id="name" name="name">
                          </li>
                          <li>
                            <input type="text" placeholder="Enter your email address..." id="email" name="email">
                          </li>
                        </ul>
                        <div class="comments">
                          <textarea placeholder="Enter your message here..." cols="10" id="comments" name="comments" rows="10"></textarea>
                          --comments--
                        </div>
                        <input type="submit" value="Submit Comment" class="submit" name="submit">
                        --contact-form--
                      </div>
                      --white-box--
                    </aside>
                    //-->
                    <!--col-lg-9-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--paddingBox-->
    </div>
    <!--main-contentbox-->
    </div>



    <!--=====================================-->
    <!--============== Support ==============-->
    <!--=====================================-->
    <div class="support-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
            <div class="row">
                <aside class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <span class="support-heading semibold-font pull-left">If you have questions about related services ... We are Available</span>
                    <div class="transparent-btn pull-right"><a href="#">contact now</a></div>
                    <!--col-lg-12-->
                </aside>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--support-box-->
    </div>



@endsection
