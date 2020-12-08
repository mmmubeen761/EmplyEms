<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "db_user_system");
//LOGIN
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //Check If User Already Exists
    $check_sql = "SELECT * FROM users WHERE email = '$email' ";
    $check_run = mysqli_query($conn, $check_sql);
    if (mysqli_num_rows($check_run) > 0) {

        //Login
        $login_sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $login_run = mysqli_query($conn, $login_sql);
        // $get2 = mysqli_fetch_assoc($login_run);
        // $id = $get2['id'];
        // echo $id;

        if (mysqli_num_rows($login_run) > 0) {
            //Starting Sessions
            $login_id = mysqli_fetch_array($login_run)['id'];
            $_SESSION['email'] = $email;
            $_SESSION['userid'] = $login_id;

            if ($email === "admin@gmail.com") {
                header("Location: admin.php?id=$login_id");
            } else {
                header("Location: admin.php");
            }
        } else {
            $error = 'Wrong Password';
        }
    } else {
        $error = 'Username does not match our records';
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap 4 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>Devzu Project Management</title>

</head>

<body class="bg-info">

    <div class="container">
        <!-- Login Form  -->
        <div class="row justify-content-center wrapper" id="login-box">
            <div class="col-lg-10 my-auto myShadow">
                <div class="row">
                    <div class="col-lg-7 bg-white p-4">
                        <h1 class="text-center font-weight-bold text-primary">Sign in to Account</h1>
                        <hr class="my-3" />
                        <form action="#" method="post" class="px-3" id="login-form">
                            <div id="loginAlert"></div>
                            <div class="input-group input-group-lg form-group" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg fa-fw"></i></span>
                                    <input type="email" id="email" name="email" class="form-control rounded-0" placeholder="E-Mail" required style="width: 100%;"/>
                                </div>
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                                    <input type="password" id="password" name="password" class="form-control rounded-0" minlength="5" placeholder="Password" required autocomplete="off" style="width: 100%;"/>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <div class="custom-control custom-checkbox float-left mt-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="rem" />
                                    <label class="custom-control-label" for="customCheck">Remember me</label>
                                </div>
                                <div class="forgot float-right mt-4">
                                    <a href="#" id="forgot-link">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="login-btn" name="login" value="Sign In" class="btn btn-primary btn-lg btn-block myBtn" />
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">NASTECH</h1>
                        <hr class="my-3 bg-light myHr" />
                        <p class="text-center font-weight-bolder text-light lead">A Quantum Leap </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form End -->





        <!-- <script>
            $(document).ready(function() {
                //Login Ajax
                $("#login-btn").click(function(e) {
                    if ($("#login-form")[0].checkValidity()) {
                        e.preventDefault();
                        $("#login-btn").val('Please Wait...');
                        $.ajax({
                            url: 'php/action.php',
                            method: 'post',
                            data: $("#login-form").serialize() + '&action=login',
                            success: function(response) {
                                $("#login-btn").val('Sign In');
                                if (response === 'login') {
                                    window.location = 'admin.php';
                                } else {
                                    $("#loginAlert").html(response);
                                }
                            }
                        });
                    }
                });
            });
        </script> -->


        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- jQuery CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- js links -->
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>