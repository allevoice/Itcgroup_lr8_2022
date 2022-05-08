@extends('template.thermadmin')

@section('title', 'Home')

@section('admincontenent')
    <div class="col-md-12">

        <a href="#">
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">
                        Slides
                    </p>
                    <p class="text-muted">Shows</p>
                </div>
            </div>
        </div>
        </a>


        <a href="">
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Page</p>
                    <p class="text-muted">About</p>
                </div>
            </div>
        </div>
        </a>




        <a href="">
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Pages</p>
                    <p class="text-muted">Services</p>
                </div>
            </div>
        </div>
        </a>




        <a href="">
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Pages</p>
                    <p class="text-muted">Projects</p>
                </div>
            </div>
        </div>
        </a>





        <a href="">
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Pages</p>
                    <p class="text-muted">Blogs</p>
                </div>
            </div>
        </div>
        </a>





        <a href="">
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">SMS</p>
                    <p class="text-muted">Contact</p>
                </div>
            </div>
        </div>
        </a>


        <br>
        code

        <script src="{{asset('assets/js/tinymce/tinymce.min.js')}}"></script>


        <h1>TinyMCE Quick Start Guide</h1>

        <script>
            tinymce.init({
			  selector: 'textarea',  // change this value according to your HTML
			   placeholder: 'Type here...',
			});


        </script>
        </head>

        <body>


        <form action='tes.php' method="POST">
            <textarea name='salut'></textarea>
            <br/>






    </div>



@endsection
