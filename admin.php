<?php

session_start();
if (!isset($_SESSION['userid'])) {
    header("Location:index.php");
};

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <!-- Bootstrap 4 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="dark">
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="dark-mode.css">

</head>

<body>
    <div class="main">
        <div class="navbar-side">
            <h6>
                <span class="icon"><i class="fas fa-code"></i></span>
                <span class="link-text">Admin Panel</span>
            </h6>
            <ul>
                <li><a href="#" class="link-active" title="Dashboard">
                        <span class="icon"><i class="fas fa-chart-bar"></i></span>
                        <span class="link-text">Dashboard</span>
                    </a></li>
                <li>
                    <a href="#" class="myBtn2" data-toggle="collapse" data-target="#my-sub" title="Post" aria-expanded="false">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="link-text">Employ</span>
                        <span class="ml-auto myCaret"></span>
                    </a>
                    <div id="my-sub" class="collapse bg-secondary">
                        <a href="createUser.php" title="All Post">
                            <span class="icon"><i class="fas fa-copy"></i></span>
                            <span class="link-text">Create Record</span>
                        </a>
                        <a href="allusers.php" title="Add Post">
                            <span class="icon"><i class="fas fa-pen-fancy"></i></span>
                            <span class="link-text">View Record</span>
                        </a>
                    </div>
                </li>
                <li><a href="profile.php" title="Profile">
                        <span class="icon"><i class="fas fa-user-circle"></i></span>
                        <span class="link-text">Profile</span>
                    </a></li>
                <li><a href="logout.php" title="Sign Out">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="link-text">Sign Out</span>
                    </a></li>
            </ul>
        </div>
        <div class="content">
            <nav class="navbar navbar-dark bg-dark py-1">

                <a href="#" id="navBtn">
                    <span id="changeIcon" class="fa fa-bars text-light"></span>
                </a>

                <div class="d-flex">
                    <a class="nav-link text-light pb-0 mb-0" href="#"><i >
                        <div class="custom-control custom-switch pt-4">
                            <input type="checkbox" class="custom-control-input " id="darkSwitch">
                            <label class="custom-control-label " for="darkSwitch"></label>
                        </div>
                    </i></a>
                    <a class="nav-link text-light px-2 pt-4" href="#"><i class="fas fa-search"></i></a>
                    <a class="nav-link text-light px-2 pt-4" href="#"><i class="fas fa-bell"></i></a>
                    <a class="nav-link text-light px-2 pt-4" href="#"><i class="fas fa-sign-out-alt"></i></a>
                </div>

            </nav>
            <div class="container-fluid ">
                <div class="row p-5">

                    <div class="col-lg-6 col-md-6 p-2">
                        <div class="card border-primary rounded mx-5">
                            <div class="card-header bg-info rounded-0 py-4" style="cursor:pointer">
                                <h5 class="card-title text-white mb-1 text-center"><a class="text-white" href="createUser.php"> Add Record  </a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 p-2">
                        <div class="card border-success rounded mx-5">
                            <div class="card-header bg-info rounded-0 py-4" style="cursor:pointer">
                                <h5 class="card-title text-white mb-1 text-center"><a class="text-white" href="allusers.php"> View Record </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 p-2">
                        <div class="card border-primary rounded mx-5">
                            <div class="card-header bg-info rounded-0 py-4" style="cursor:pointer">
                                <h5 class="card-title text-white mb-1 text-center"><a class="text-white" href=""> Report </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 p-2">
                        <div class="card border-primary rounded mx-5">
                            <div class="card-header bg-info rounded-0 py-4" style="cursor:pointer">
                                <h5 class="card-title text-white mb-1 text-center"><a class="text-white" href=""> Create User </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <script src="dark-mode-switch.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
</body>

</html>