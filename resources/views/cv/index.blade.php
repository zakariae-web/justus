<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/ens.png" type="image/x-icon">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
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
                    <li class="nav-item pe-3"><a class="nav-link active" href="{{('')}}">see all profiles</a></li>
                    <li class="nav-item pe-3"><a class="nav-link active" href="#" target="_blank">about us</a></li>
                    <li class="nav-item pe-3"><a class="nav-link active" href="#contact">contact</a></li>
                </ul>
            </div>
        </div> 
    </nav>
    @if(count($cv) > 0)
    <section class="pt-5">
        <div class="container">
            <div class="row">
                    @foreach ($cv as $cv)
                    <div class="col-3 m-0 p-0 mt-5">
                        <div class="card mb-5 me-5">
                            <div class="blob"></div>
                            <span class="img" style="background-image:url('images/me.png');background-size:cover;"></span>
                            <h2><span>{{$cv['lastname']}}</span></h2>
                            <p>
                                <a href="{{$cv['twitter']}}" target="_blanc">
                                    <svg height="35" width="35" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024" class="icon">
                                        <path d="M962.267429 233.179429q-38.253714 56.027429-92.598857 95.451429 0.585143 7.972571 0.585143 23.990857 0 74.313143-21.723429 148.260571t-65.974857 141.970286-105.398857 120.32-147.456 83.456-184.539429 31.158857q-154.843429 0-283.428571-82.870857 19.968 2.267429 44.544 2.267429 128.585143 0 229.156571-78.848-59.977143-1.170286-107.446857-36.864t-65.170286-91.136q18.870857 2.852571 34.889143 2.852571 24.576 0 48.566857-6.290286-64-13.165714-105.984-63.707429t-41.984-117.394286l0-2.267429q38.838857 21.723429 83.456 23.405714-37.741714-25.161143-59.977143-65.682286t-22.308571-87.990857q0-50.322286 25.161143-93.110857 69.12 85.138286 168.301714 136.265143t212.260571 56.832q-4.534857-21.723429-4.534857-42.276571 0-76.580571 53.979429-130.56t130.56-53.979429q80.018286 0 134.875429 58.294857 62.317714-11.995429 117.174857-44.544-21.138286 65.682286-81.115429 101.741714 53.174857-5.705143 106.276571-28.598857z" fill="#f0f0f0"></path>
                                    </svg>
                                </a>
                                <a href="{{$cv['github']}}" target="_blanc">
                                    <svg height="35" width="35" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024" class="icon">
                                        <path d="M950.930286 512q0 143.433143-83.748571 257.974857t-216.283429 158.573714q-15.433143 2.852571-22.601143-4.022857t-7.168-17.115429l0-120.539429q0-55.442286-29.696-81.115429 32.548571-3.437714 58.587429-10.313143t53.686857-22.308571 46.299429-38.034286 30.281143-59.977143 11.702857-86.016q0-69.12-45.129143-117.686857 21.138286-52.004571-4.534857-116.589714-16.018286-5.12-46.299429 6.290286t-52.589714 25.161143l-21.723429 13.677714q-53.174857-14.848-109.714286-14.848t-109.714286 14.848q-9.142857-6.290286-24.283429-15.433143t-47.689143-22.016-49.152-7.68q-25.161143 64.585143-4.022857 116.589714-45.129143 48.566857-45.129143 117.686857 0 48.566857 11.702857 85.723429t29.988571 59.977143 46.006857 38.253714 53.686857 22.308571 58.587429 10.313143q-22.820571 20.553143-28.013714 58.88-11.995429 5.705143-25.746286 8.557714t-32.548571 2.852571-37.449143-12.288-31.744-35.693714q-10.825143-18.285714-27.721143-29.696t-28.306286-13.677714l-11.410286-1.682286q-11.995429 0-16.603429 2.56t-2.852571 6.582857 5.12 7.972571 7.460571 6.875429l4.022857 2.852571q12.580571 5.705143 24.868571 21.723429t17.993143 29.110857l5.705143 13.165714q7.460571 21.723429 25.161143 35.108571t38.253714 17.115429 39.716571 4.022857 31.744-1.974857l13.165714-2.267429q0 21.723429 0.292571 50.834286t0.292571 30.866286q0 10.313143-7.460571 17.115429t-22.820571 4.022857q-132.534857-44.032-216.283429-158.573714t-83.748571-257.974857q0-119.442286 58.88-220.306286t159.744-159.744 220.306286-58.88 220.306286 58.88 159.744 159.744 58.88 220.306286z" fill="#f0f0f0"></path>
                                    </svg>
                                </a>
                                <a href="{{$cv['linkcv']}}" target="_blanc"><i class="fa-regular fa-address-card fa-2xl" style="color:white;"></i></a>
                            </p>
                        </div>
                    </div>
                    @endforeach
            </div>
            <a href="{{('cv/create')}}">
                <button class="icon-btn add-btn">
                    <div class="add-icon"></div>
                    <div class="btn-txt">add yours</div>
                </button>
            </a>
        </div>
    </section>
    @else
    <section class="pt-5">
        <div class="container">
            <div class="row">
            <div class="col-3 m-0 p-0 mt-5">
                <div class="row">
                    <a href="{{('cv/create')}}">
                    <button class="icon-btn add-btn">
                        <div class="add-icon"></div>
                        <div class="btn-txt">add yours</div>
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @endif
</body>
</html>