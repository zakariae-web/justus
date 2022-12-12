<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ens-cards</title>
    <link rel="shortcut icon" href="/images/moon.png" type="image/x-icon">
    <link rel="stylesheet" href="/form/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900">
    <link rel="stylesheet" href="/form/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/form/assets/css/Features-Cards-icons.css">
    <link rel="stylesheet" href="/form/assets/css/Pretty-Registration-Form-.css">
    <link rel="stylesheet" href="/css/create.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
<nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
<div class="container"><a class="navbar-brand" href="{{('/')}}"><img src="/assets/img/zakweb.png" style="width:140px; height: 80px;" alt=""></a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link" href="{{('/')}}">Home</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="{{('/')}}">teachers</a></li>
                    <li class="nav-item dropdown pt-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Filiers</a>
                        <ul class="dropdown-menu" id="dropdwn">
                            <li><a class="dropdown-item" href="{{'../cv'}}">info</a></li>
                            <li><a class="dropdown-item" href="{{'../s3'}}">physics</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-link"><a class="nav-link" href="https://www.test-fckd.vercel.app">About us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('/assets/img/background.jpg');">
        <div class="intro-body">
            <div class="row register-form">
                <div class="col-md-8 offset-md-2" style="margin-top: 50px;">
                    <form class="custom-form" action="{{route('cv.update', ['cv' => $cv->id])}}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    @method('PUT')
                        <h1>Update Form</h1>
                        <div class="row form-group">
                            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">full name </label></div>
                            <div class="col-sm-6 input-column"><input type="text" name="lastname" id="lastname" class="input" value="{{old('lastname',$cv->lastname)}}" placeholder="Full name"   required=""></div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">twitter </label></div>
                            <div class="col-sm-6 input-column"><input type="text" name="twitter" id="twitter" class="input" value="{{old('twitter',$cv->twitter)}}" placeholder="your twitter link : "   required=""  pattern="https?://www.+" title="Include https://www.example.com"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">github </label></div>
                            <div class="col-sm-6 input-column"><input type="text" name="github" id="github" class="input" value="{{old('github',$cv->github)}}" placeholder="your github link : "   required=""  pattern="https?://www.+" title="Include https://www.example.com"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">portfolio </label></div>
                            <div class="col-sm-6 input-column"><input type="text" name="linkcv" id="linkcv" class="input" value="{{old('linkcv',$cv->linkcv)}}" placeholder="your portfolio link : "   required=""  pattern="https?://www.+" title="Include https://www.example.com"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">profile picture </label></div>
                            <div class="col-sm-6 input-column"><input type="file" name="image" id="image" class="input" value="{{old('image',$cv->image)}}" placeholder="your portfolio link : "   required=""  pattern="https?://www.+" title="Include https://www.example.com"></div>
                        </div>
                        <button class="btn btn-light submit-button" type="submit">Send</button>
                    </form>
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
    <script src="/form/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/form/assets/js/grayscale.js"></script>
</body>
</html>