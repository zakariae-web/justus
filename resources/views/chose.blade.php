<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ens-cards</title>
    <link rel="shortcut icon" href="images/moon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="{{('/')}}"><img src="assets/img/zakweb.png" style="width:140px; height: 80px;" alt=""></a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link " href="{{('/')}}">Home</a></li>
                    <li class="nav-item nav-link"><a class="nav-link active " href="{{('/chose')}}">classes</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="https://www.test-fckd.vercel.app" target="_blanc">About us</a></li>
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
    <header class="masthead" style="background-image:url('assets/img/background.jpg'); background-size: cover; background-repeat: repeat;">
        <div class="intro-body">
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1>clé-informatique</h1>
                        <p class="intro-text">chose the class you want to edit</p>
                        <a href="{{'admin'}}">
                            <button class="learn-more">
                                <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">informatique</span>
                            </button><br>
                        </a>
                        <a href="{{'admin2'}}">
                            <button class="learn-more mt-3">
                                <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">physics</span>
                            </button>
                        </a>
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