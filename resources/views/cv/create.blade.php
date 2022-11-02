<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/ens.png" type="image/x-icon">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/create.css">
    <title>cle-info</title>
</head>
<body style="background-image:url('/images/fond.jpg'); background-size: cover; background-repeat: no-repeat;">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ps-4" href="#"><img src="/images/logoens.png" style="width:250px; height: 60px;" class="ms-2"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pe-3"><a class="nav-link active" href="{{('/')}}">Home</a></li>
                    <li class="nav-item pe-3"><a class="nav-link active" href="{{('')}}">add your profile</a></li>
                    <li class="nav-item pe-3"><a class="nav-link active" href="{{('../cv')}}">see all profiles</a></li>
                    <li class="nav-item pe-3"><a class="nav-link active" href="#" target="_blank">about us</a></li>
                    <li class="nav-item pe-3"><a class="nav-link active" href="#contact">contact</a></li>
                </ul>
            </div>
        </div> 
    </nav> 
    <section>
        <div class="container">
            <br><br><br>
            <div class="row"> 
                <div class="col">
                    <form action="{{route('cv.store')}}" method="POST">
                        @CSRF
                        <input type="text" name="lastname" id="lastname" class="input" placeholder="Full name"   required=""><br>
                        <input type="text" name="twitter" id="twitter" class="input" placeholder="your twitter link : "   required=""  pattern="https?://www.+" title="Include https://www.example.com"><br>
                        <input type="text" name="github" id="github" class="input" placeholder="your github link : "   required=""  pattern="https?://www.+" title="Include https://www.example.com"><br>
                        <input type="text" name="linkcv" id="linkcv" class="input" placeholder="your portfolio link : "   required=""  pattern="https?://www.+" title="Include https://www.example.com"><br>
                        <button>
                            <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                    </svg>
                                </div>
                            </div>
                            <span>Send</span>
                        </button>
                    </form>
                </div>  
                <div class="col">
                    <img src="/images/welcome.png" alt=""> 
                </div>
            </div> 
        </div>
    </section>
</body>
</html>