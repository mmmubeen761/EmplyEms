<?php

session_start();
if (!isset($_SESSION['userid'])) {
    header("Location:index.php");
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Login, Registration & Forgot Form Design</title>
    <!-- Bootstrap 4 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <!-- Selection cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="dark-mode.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

</head>

<body class="bg-info">
    <div class="container">

        <!-- Registration Form Start -->
        <div class="row justify-content-center wrapper" id="register-box">
            <div class="col-lg-12 my-auto ">
                <div class="row">
                    <div class="col-lg-12 mx-auto bg-white px-4">
                        <h5 class="text-center font-weight-bold text-primary"><span><a href="admin.php" class="btn btn-primary float-left"><i class=" fas fa-arrow-left"></i></a></span> Add Record <span>
                                <div class="custom-control custom-switch float-right">
                                    <input type="checkbox" class="custom-control-input" id="darkSwitch">
                                    <label class="custom-control-label" for="darkSwitch"></label>
                                </div>
                            </span></h5>
                        <hr class="my-3" />
                        <form action="#" method="post" class="px-3" id="register-form">
                            <div class="" id="regAlert"></div>
                            <div class="row">
                                <div class="input-group input-group-lg form-group col-md-6">
                                    <i class=" fas fa-registered fa-lg fa-fw pt-3 pr-4"></i><span>
                                        <input type="text" id="reg_num" name="reg_num" class="" value="<?php echo uniqid() ?>" placeholder="Full Name" required />
                                    </span>
                                    <!-- <input type="text" id="reg_num" disabled /> -->
                                </div>
                                <div class="input-group input-group-lg form-group col-md-6">
                                    <i class=" far fa-user fa-lg fa-fw pt-3 pr-4"></i> <span>
                                        <input type="text" id="name" name="name" class="" placeholder="Full Name" required />
                                    </span>
                                </div>
                            </div>
                            <div class="row">

                                <div class="input-group input-group-lg form-group col-md-6">
                                    <div class="input-group-prepend">
                                        <span class=" rounded-0"><i class=" fas fa-user fa-lg fa-fw pt-3 pr-4"></i></span>
                                    </div>
                                    <input type="text" id="father_name" name="father_name" class="" placeholder="Father Name" required />
                                </div>
                                <div class="input-group input-group-lg form-group col-md-6">
                                    <div class="input-group-prepend">
                                        <span class=" rounded-0"><i class=" far fa-id-card fa-lg fa pt-3 pr-4-fw"></i></span>
                                    </div>
                                    <input type="text" id="cnic" name="cnic" class="" placeholder="Candidate CNIC" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-lg form-group col-md-6">
                                    <div class="input-group-prepend">
                                        <span class=" rounded-0"><i class=" far fa-id-card fa-lg fa pt-3 pr-4-fw"></i></span><span class=" rounded-0">Gender</span>
                                    </div>&nbsp&nbsp&nbsp&nbsp
                                    <span class=" rounded-0"> <input type="radio" id="gender" name="gender" value="male" class="" class=" rounded-0">&nbsp Male</span>&nbsp&nbsp
                                    <span class=" rounded-0"> <input type="radio" id="gender" name="gender" value="female" class="" class=" rounded-0">&nbsp Female</span>
                                </div>
                                <div class="input-group input-group-lg form-group col-md-6">
                                    <div class="input-group-prepend">
                                        <span class=" rounded-0"><i class=" fas fa-mobile fa-lg fa- pt-3 pr-4fw"></i></span>
                                    </div>
                                    <input type="text" id="phone" name="phone" class=" py-4" placeholder="Phone Number" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-lg form-group col-md-6">
                                    <div class="input-group-prepend">
                                        <span class=" rounded-0"><i class=" far fa-envelope fa-lg f pt-3 pr-4a-fw"></i></span>
                                    </div>
                                    <input type="email" id="remail" name="email" class="" placeholder="E-Mail" required />
                                </div>
                                <div class="input-group input-group-lg form-group col-md-6">
                                    <div class="input-group-prepend">
                                        <span class=" rounded-0"><i class=" far fa-map fa-lg fa-fw" pt-3 pr-4></i></span>
                                    </div>
                                    <input type="text" id="address" name="address" class="" placeholder="Address" required />
                                </div>
                            </div>
                            <h4 class="text-center mt-0 font-weight-bold text-primary">Information</h4>
                            <hr class="my-1" />
                            <div class="row">
                                <div class="input-group input-group-lg form-group col-md-6">
                                    <div class="input-group-prepend">
                                        <span class=" rounded-0">Joining Date</span>
                                    </div>
                                    <input type="date" id="joining_date" value="date" name="joining_date" class="" required />
                                </div>
                                <div class="input-group input-group-lg form-group col-md-6">
                                    <div class="input-group-prepend">
                                        <span class=" rounded-0">Leaving Date</span>
                                    </div>
                                    <input type="date" id="leaving_date" value="date" name="leaving_date" class="" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class=" nav-item">
                                            <span class=" rounded-0"> <input type="radio" id="job_status" name="job_status" value="Front End" class="" class=" rounded-0">&nbsp Front End</span>
                                        </li>&nbsp&nbsp
                                        <li>
                                            <span class=" rounded-0"> <input type="radio" id="job_status" name="job_status" value="Back End" class="" class=" rounded-0">&nbsp Back End</span>
                                        </li>&nbsp&nbsp
                                        <li>
                                            <span class=" rounded-0"> <input type="radio" id="job_status" name="job_status" value="Full Stack" class="" class=" rounded-0">&nbsp Full Stack</span>
                                        </li>&nbsp&nbsp
                                    </ul>
                                    <div class="tab-content " id="myTabContent">
                                        <div class="tab-pane fade show active text-center" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="pt-2  btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp HTML </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp CSS </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp Bootstrap </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp JavaScript </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp TypeScript </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp Material Ui </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp React </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp Angular </label> &nbsp&nbsp
                                                <!-- <div class="input-group mx-auto input-group-lg form-group p-4 btn-group-toggle" data-toggle="buttons"> -->
                                                <br>
                                                <br>
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp MySql </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp mongoDB </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp Java </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp Node Js </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp Python </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp Php </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp .Net </label> &nbsp&nbsp
                                                <label class="btn btn-info"><input type="checkbox" autocomplete="off">&nbsp laravel </label> &nbsp&nbsp
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" id="register-btn" value="Create User" class="btn btn-primary btn-lg btn-block myBtn w-100" />
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- Registration Form End -->

    </div>






    <!-- Selcetion Box Script & data-->
    <script>
        $(document).ready(function() {


            //Create User Ajax
            $("#register-btn").click(function(e) {
                if ($("#register-btn")[0].checkValidity()) {
                    e.preventDefault();
                    $("#register-btn").val('Please Wait...');
                    if ($("#rpassword").val() != $("#cpassword").val()) {
                        $("#passError").text('* Password did not matched!')
                        $("#register-btn").val('Create User');
                    } else {
                        $("#passError").text('');
                        $.ajax({
                            url: 'php/action.php',
                            method: 'post',
                            data: $("#register-form").serialize() + '&action=register',
                            success: function(response) {
                                $("#register-btn").val('Create User');
                                if (response === 'register') {
                                    window.location = 'allusers.php';
                                } else {
                                    $("#regAlert").html(response);
                                }
                            }
                        })
                    }
                }
            })
        });
    </script>

    <script src="dark-mode-switch.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- js links -->
    <script src="script.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>