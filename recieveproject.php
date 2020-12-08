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
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="main">
        <div class="navbar-side">
            <h6>
                <span class="icon"><i class="fas fa-code"></i></span>
                <span class="link-text">Staff Panel</span>
            </h6>
            <ul>
                <li><a href="#" class="link-active" title="Dashboard">
                        <span class="icon"><i class="fas fa-chart-bar"></i></span>
                        <span class="link-text">Dashboard</span>
                    </a></li>
                <li>
                    <a href="#" class="myBtn2" data-toggle="collapse" data-target="#my-sub" title="Post" aria-expanded="false">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="link-text">Projects</span>
                        <span class="ml-auto myCaret"></span>
                    </a>
                    <div id="my-sub" class="collapse bg-secondary">
                        <a href="" title="All Post">
                            <span class="icon"><i class="fas fa-copy"></i></span>
                            <span class="link-text">All Projects</span>
                        </a>
                        <a href="#" title="Add Post">
                            <span class="icon"><i class="fas fa-pen-fancy"></i></span>
                            <span class="link-text">Pending Projects</span>
                        </a>
                    </div>
                </li>
                <li><a href="#" title="Category">
                        <span class="icon"><i class="fas fa-list-alt"></i></span>
                        <span class="link-text">Recieve Projects</span>
                    </a></li>
                <li><a href="#" title="Profile">
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
                    <a class="nav-link text-light px-2" href="#"><i class="fas fa-search"></i></a>
                    <a class="nav-link text-light px-2" href="#"><i class="fas fa-bell"></i></a>
                    <a class="nav-link text-light px-2" href="#"><i class="fas fa-sign-out-alt"></i></a>
                </div>

            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center col-lg-10 mx-auto mt-2">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="bg-success text-light p-2 rounded" aria-hidden="true">Accept</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>



            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <script src="script.js"></script>
</body>

</html>