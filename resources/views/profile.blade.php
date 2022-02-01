<link rel="stylesheet" href="./css/profile.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<body class="homepage">
    @include('header')
    <div class="container-wrap row m-0">
        <div class="profile">
            <div class="profile-pic">
                <div class="profile-cover" style="background-image: url('./Images/download.jpg');"> </div>
                <div class="profile-img-div">
                    <div>
                        <img src="./Images/userprofile.jpg" alt="Profile Picture">
                        <div class="uploadimage"> <i type="file" class="fa fa-upload fa-1x" aria-hidden="true"></i> </div>
                    </div>
                </div>
            </div>
            <div class="container   row p-4">
                <div class="col-lg-3">
                    <div class="buttons-pro">
                        <button class="follow-btn">Follow <i class="fas fa-user-plus"></i></button>
                        <button class="securities-btn d-flex justify-content-center">
                            <p class="mt-2 mb-1">Securities/Stock Values</p> <i class="fas fa-analytics p-2"></i>
                        </button>
                        <button class="wallet-btn">Wallet <i class="fas fa-wallet"></i></button>
                    </div>
                    <hr />
                    <div class="info-div">
                        <p class="p-1 mb-0 join-date">
                            India - 16/04/2014 .
                        </p>
                        <div class="d-flex Subscribers">
                            <p class="p-1 mb-0">
                                Subscribers<i class="fa fa-users p-1" aria-hidden="true"></i> -
                            </p>
                            <p class="p-1 mb-0"> 5</p>
                        </div>
                    </div>
                    <hr>
                    <div class="description ">
                        <span>Description : </span>
                        <p> Manage information technology and computer systems.
                            Plan, organize, control and evaluate IT and electronic data operations.
                            Manage IT staff by recruiting, training and coaching employees,
                            communicating job expectations and appraising their performance.
                        </p>
                    </div>
                </div>

                <div id="content-div" class="col-lg-9 ">

                    <div class="title">
                        <h3>vinod porwal</h2>
                    </div>

                    <div class="dropdown" style="color:#808080">
                        <a class="btn   dropdown-toggle" id="menu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Content
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" id="menu" href="#">View All</a></li>
                            <li><a class="dropdown-item" id="menu" href="#">Texts</a></li>
                            <li><a class="dropdown-item" id="menu" href="#">Photos</a></li>
                            <li><a class="dropdown-item" id="menu" href="#">Videos</a></li>
                            <li><a class="dropdown-item" id="menu" href="#">Podcast</a></li>
                        </ul>
                    </div>

                    <hr />
                    <div class="content-box mt-3">
                        <div class="content-box-pro">
                            <div class="col-lg-11">
                                <img src="./Images/user.png" alt="PP"></img>&nbsp;&nbsp;&nbsp;
                                <span>Vinod Porwal</span>
                                <span class="activity">&nbsp; Activity-</span>
                                <span>31/01/2022</span>
                            </div>
                            <div class="float-right"><i class="fa fa-trash" aria-hidden="true"></i></div>
                        </div>
                        <div class="details">
                            <p>
                                Text Example
                            </p>
                        </div>
                    </div>
                    <div class="content-box mt-3">
                        <div class="content-box-pro">
                            <div class="col-lg-11">
                                <img src="./Images/user.png" alt="PP"></img>&nbsp;&nbsp;&nbsp;
                                <span>Vinod Porwal</span>
                                <span class="activity">&nbsp; Activity-</span>
                                <span>31/01/2022</span>
                            </div>
                            <div class="float-right"><i class="fa fa-trash" aria-hidden="true"></i></div>
                        </div>
                        <div class="details">
                            <p>
                                <img class="stock-image" src="./Images/stock1.jpg" alt="PP"></img>&nbsp;&nbsp;&nbsp;
                            </p>
                            <p>Lamborghini </p>
                        </div>
                    </div>
                    <div class="content-box mt-3">
                        <div class="content-box-pro">
                            <div class="col-lg-11">
                                <img src="./Images/user.png" alt="PP"></img>&nbsp;&nbsp;&nbsp;
                                <span>Vinod Porwal</span>
                                <span class="activity">Activity-</span>
                                <span>31/01/2022</span>
                            </div>
                            <div class="float-right"><i class="fa fa-trash" aria-hidden="true"></i></div>
                        </div>
                        <div class="details">
                            <p>
                                <img class="stock-image" src="./Images/stock3.jpg" alt="PP"></img>&nbsp;&nbsp;&nbsp;
                            </p>
                            <p>Lamborghini</p>
                        </div>
                    </div>
                    <div class="content-box mt-3">
                        <div class="content-box-pro">
                            <div class="col-lg-11">
                                <img src="./Images/user.png" alt="PP"></img>&nbsp;&nbsp;&nbsp;
                                <span>Vinod Porwal</span>
                                <span class="activity">&nbsp; Activity-</span>
                                <span>31/01/2022</span>
                            </div>
                            <div class="float-right"><i class="fa fa-trash" aria-hidden="true"></i></div>
                        </div>
                        <div class="details">
                            <p>
                                <img class="stock-image" src="./Images/stock4.jpg" alt="PP"></img>&nbsp;&nbsp;&nbsp;
                            </p>
                            <p>SUVs </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>