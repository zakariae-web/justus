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
                    @if(Auth::check())
                    <li class="nav-item nav-link"><a class="nav-link active" href="{{('/')}}">Home</a></li>
                    <li class="nav-item nav-link"><a class="nav-link " href="{{('/chose')}}">classes</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="https://www.test-fckd.vercel.app" target="_blanc">About us</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="#contact">Contact</a></li>
                    @else
                    <li class="nav-item nav-link"><a class="nav-link active" href="{{('/')}}">Home</a></li>
                    <li class="nav-item nav-link"><a class="nav-link " href="{{('/chose')}}">classes</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="{{('chose')}}">login</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="https://www.test-fckd.vercel.app" target="_blanc">About us</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="#contact">Contact</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/background.jpg'); background-size: cover; background-repeat: repeat;">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                <h1>clé-info</h1>
                    <div class="col-md-6"> 
                        <div class="carousel slide carousel-fade" data-bs-ride="carousel" id="carousel1">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/img1.jpeg" alt="Slide Image" style="width:500px; height:350px;"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/img2.jpeg" alt="Slide Image" style="width:500px; height:350px;"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/img3.jpeg" alt="Slide Image" style="width:500px; height:350px; object-position: 15% 100%;"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/img4.jpeg" alt="Slide Image" style="width:500px; height:350px;"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/img5.jpeg" alt="Slide Image" style="width:500px; height:350px;"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/img6.jpeg" alt="Slide Image" style="width:500px; height:350px;"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/img7.jpeg" alt="Slide Image" style="width:500px; height:350px;"></div>
                            </div>
                            <div><a class="carousel-control-prev" href="#carousel1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carousel1" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carousel1" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carousel1" data-bs-slide-to="2"></li>
                                <li data-bs-target="#carousel1" data-bs-slide-to="3"></li>
                                <li data-bs-target="#carousel1" data-bs-slide-to="4"></li>
                                <li data-bs-target="#carousel1" data-bs-slide-to="5"></li>
                                <li data-bs-target="#carousel1" data-bs-slide-to="6"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <h2>welcome to ens-cards website</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center content-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Contact us</h2>
                    <p>if you have any idea to ameliorate the website dont hesitate to contact us</p>
                    <ul class="list-inline banner-social-buttons">  
                        <a href="https://twitter.com/BelouadifZ" target="_blanc"><li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-twitter fa-fw"></i><span class="network-name">&nbsp;Twitter</span></button></li></a>
                        <a href="https://github.com/zakariae-web" target="_blanc"><li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;github</span></button></li></a>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="map-clean"></div>
    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;zak-web 2022</p>
        </div>
    </footer>
    <script src="js/welcome.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>