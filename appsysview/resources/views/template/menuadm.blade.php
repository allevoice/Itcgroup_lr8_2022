<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('adminpage')}}" style="background-color: #ffffff; margin-top: 0">
            <img src="{{asset('assets/img/logo/logo.png')}}" alt="Logo" class="img-responsive" style="margin-top: -6%">
        </a>
    </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
        <a href="#" class="btn btn-danger square-btn-adjust">Logout</a>
        <a href="#" class="btn btn-warning square-btn-adjust"><span class="fa fa-wrench"></span></a>
    </div>
</nav>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{asset('assets/assetsadm/img/profile/find_user.png')}}" class="user-image img-responsive"/>
                <span style="margin-top: 0;color:#ffffff;">rjmk27@gmail.com</span>
            </li>

            <li>
                <a  href="{{route('adminpage')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>


            <li>
                <a href="#">Home<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('listslide')}}">Slide show</a>
                    </li>
                    <li>
                        <a href="{{route('listserve')}}">Services offert</a>
                    </li>
                    <li>
                        <a href="{{route('listhowareyou')}}">How are u</a>
                    </li>

                    <li>
                        <a href="{{route('listbringing')}}">Bringing</a>
                    </li>

                    <li>
                        <a href="{{route('listhelping')}}">Helping</a>
                    </li>
                    <li>
                        <a href="{{route('listskill')}}">Skill</a>
                    </li>

                    <li>
                        <a href="{{route('listpartner')}}">Patners</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="#">About<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('listourcmg')}}">Our Compagnie</a>
                    </li>
                    <li>
                        <a href="{{route('listfounder')}}">Founder</a>
                    </li>
                    <li>
                        <a href="{{route('listadvisor')}}">Advisor</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">Project<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('listprojectdata')}}">Liste Project</a>
                    </li>
                   </ul>
            </li>




            <li>
                <a href="{{route('listblog')}}">Blog</a>
            </li>



            <li>
                <a href="#">Contact<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Contact Message</a>
                    </li>
                    <li>
                        <a href="#">Newsletter</a>
                    </li>
                   </ul>
            </li>



            <li>
                <a href="{{route('listheaderpage')}}">Header Page</a>
            </li>


            <li>
                <a href="#">Setting<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Status</a>
                    </li>
                    <li>
                        <a href="#">Contact Message</a>
                    </li>
                    <li>
                        <a href="#">Maps</a>
                    </li>
                   </ul>
            </li>















        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->
    
    
