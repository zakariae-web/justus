<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ens-info</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="images/moon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Features-Cards-icons.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/home.css">
</head>
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{('/')}}"><img src="assets/img/zakweb.png" style="width:140px; height: 80px;" alt=""></a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link " href="{{('/')}}">Home</a></li>
                    <li class="nav-item nav-link"><a class="nav-link active " href="{{('/home')}}">teachers</a></li>
                    <li class="nav-item nav-link"><a class="nav-link " href="{{'cv'}}">students</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="https://www.test-fckd.vercel.app">About us</a></li>
                    <li><a class="dropdown-item mt-3" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/background.jpg');">
    <div class="container py-4 py-xl-5">
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col-12 col-lg-3 offset-0" style="margin-top: 120px;">
                    <div class="card">
                        <div class="card-body p-4">
                            <img src="/assets/img/courses.jpg" alt="" style="width:200px;">
                            <h4 class="card-title"><span style="color: rgb(0, 0, 0);">courses</span></h4>
                            <p class="card-text"><span style="color: rgb(0, 0, 0);">publish courses for students</span></p>
                            <a href="{{'course/create'}}"><button class="btn btn-primary" type="button">add</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 offset-0" style="margin-top: 122px;">
                    <div class="card">
                        <div class="card-body p-4">
                            <img src="/assets/img/students.png" alt="" style="width:200px;">
                            <h4 class="card-title"><span style="color: rgb(0, 0, 0);">students</span></h4>
                            <p class="card-text"><span style="color: rgb(0, 0, 0);">remove or edit student informations</span></p>
                            <a href="{{'chose'}}"><button class="btn btn-primary" type="button">edit</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 offset-0" style="margin-top: 122px;">
                    <div class="card">
                        <div class="card-body p-4">
                            <img src="/assets/img/qcm.jpg" alt="" style="width:200px;">
                            <h4 class="card-title"><span style="color: rgb(0, 0, 0);">qcm</span></h4>
                            <p class="card-text"><span style="color: rgb(0, 0, 0);">create qcm</span></p>
                            <button class="btn btn-primary" type="button">will be available soon!!</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="map-clean"></div>
    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;zak-web 2022</p>
        </div>
    </footer>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>  
</body>
</html>