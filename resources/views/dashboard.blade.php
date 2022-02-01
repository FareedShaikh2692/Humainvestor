<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/homepage.css" />
    <link href="./bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>Humainvestor</title>
</head>

<body class="homepage">
@include('header') 
    
    <div class="main">
        <div class="container">
            <div class="row inner">
                <div class="col-md-3 bor1">
                    <p class="cardTitle">Show me</p>
                    <div class="card">
                        <label class="label">categories</label>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        sport
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        contractor
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        artists
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="card">
                        <label class="label">Filter</label>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Texts
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Photos
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Videos
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Podcast
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 bor2">
                    <div class="card">
                        <div class="data">
                            <div class="first">
                                <div class="">
                                    <a href="#" class="user">
                                        <img class="userImg" src="./Images/user.png" />
                                    </a>
                                </div>
                                <input type="email" class="form-control" id="Email" placeholder="Writing Content">
                            </div>
                            <div class="second">
                                <div class="photoOuter">
                                    <div class="">
                                        <i class="fa fa-camera"></i>
                                    </div>
                                    <label>Photo</label>
                                </div>
                                <div class="videoOuter">
                                    <div class="">
                                        <i class="fa fa-video"></i>
                                    </div>
                                    <label>Video</label>
                                </div>
                                <div class="podcastOuter">
                                    <div class="">
                                        <i class="fa fa-podcast"></i>
                                    </div>
                                    <label>Podcast</label>
                                </div>
                                <div class="btnOuter">
                                    <button class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="data">
                            <div class="first">
                                <div class="">
                                    <a href="#" class="user">
                                        <img class="userImg" src="./Images/user.png" />
                                    </a>
                                </div>
                                <p class="label name">Abhijit Patil</p>
                                <p class="label">Trip</p>
                                <p class="label">20/20/2022</p>
                            </div>
                            <lable>Writing Content</lable><br>
                            <div class="second">
                                <!-- <p>Content</p> -->
                              
                                <textarea class="text"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 bor3">
                    <p class="cardTitle">Ranking</p>
                    <div class="card">
                        <label class="label">Trade Volume (24 Hours)</label>
                        <ul>
                            <li>
                                <span class="name">Abhijit Patil</span>
                                <span class="activity">MRF</span>
                            </li>
                            <li>
                                <span class="trade buy">BUY</span>
                                <span class="volume">100</span>
                            </li>
                        </ul>
                    </div>

                    <div class="card">
                        <label class="label">Most Popular</label>
                        <ul>
                            <li>
                                <span class="name">Abhijit Patil</span>
                                <span class="activity">TATA motors</span>
                            </li>
                            <li>
                                <span class="trade sell">SELL</span>
                                <span class="volume">200</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>