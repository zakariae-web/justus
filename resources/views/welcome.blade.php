<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/ens.png" type="image/x-icon">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <title>cle-info</title>
</head>
<body style="background-image:url('images/fond.jpg'); background-size: cover;">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ps-4" href="#"><img src="images/logoens.png" style="width:250px; height: 60px;" class="ms-2"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pe-3"><a class="nav-link active" href="{{('/')}}">Home</a></li>
                    <li class="nav-item pe-3"><a class="nav-link active" href="{{('cv/create')}}">add your profile</a></li>
                    <li class="nav-item pe-3"><a class="nav-link active" href="{{('cv')}}">see all profiles</a></li>
                    <li class="nav-item pe-3"><a class="nav-link active" href="https://www.justus.epizy.com" target="_blank">about us</a></li>
                    <li class="nav-item pe-3"><a class="nav-link active" href="#contact">contact</a></li>
                </ul>
            </div>
        </div> 
    </nav> 
    <section id="home" >
        <div class="row">
            <div class="col">
                <h1 class="pt-5 mt-5">Welcome to Cle-info</h1>
                <h3>Add your cv from here : </h3>
                <a href="{{('cv/create')}}" class="ms-5">
                <button class="learn-more  ms-5">
                    <span class="circle" aria-hidden="true">
                    <span class="icon arrow"></span></span>
                    <span class="button-text">add mine</span>
                </button>
                </a>
            </div>
            <div class="col">
                <img src="images/profile.png" alt="">
            </div>
        </div>

    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <h2 class="section-heading pt-5">Let's Get In Touch!</h2>
                    <hr class="my-4">
                    <p class="mb-5">if you have any idea to ameliorate the website dont hesitate to contact me</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center ms-auto"><i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                    <p> +212 615486000</p>
                </div>
            <div class="col-lg-4 text-center me-auto"><i class="fa-solid fa-envelope fa-3x" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                <p><a href="mailto:zakariaeblouadif@gmail.com">zakariaebelouadif@gmail.com</a></p>
            </div>
            <a href="#"><i class="fa-sharp fa-solid fa-arrow-up fa-3x fa-bounce" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i></a>    
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>