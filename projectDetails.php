<?php

session_start();
if (!isset($_SESSION['userid'])) {
    header("Location:index.php");
};

?>


<?php

require_once('php/connection.php');
?>
<?php


if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $des = $_POST['des'];
    $date = $_POST['date'];


    $sql = "INSERT INTO project_details(project_id,title,des,date) values('$id','$title','$des','$date')";
    if (mysqli_query($conn, $sql)) {
        header("Location:admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);


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
    <link rel="stylesheet" href="style.css" />
    <!-- Selection cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

</head>

<body class="bg-info">
    <div class="container">

        <!-- Registration Form Start -->
        <div class="row justify-content-center wrapper mt-2" id="register-box">
            <div class="col-lg-10 my-auto myShadow">
                <div class="row">

                    <div class="col-lg-12 bg-white p-4">
                        <h1 class="text-center font-weight-bold text-primary">Project Details</h1>
                        <hr class="my-3" />
                        <form method="post" class="px-3" id="register-form">
                            <div class="" id="regAlert"></div>

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="far fa-user fa-lg fa-fw"></i></span>
                                </div>
                                <input type="number" min="1" id="id" name="id" class="form-control rounded-0" placeholder="ID" required />
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg fa-fw"></i></span>
                                </div>
                                <input type="text" id="title" name="title" class="form-control rounded-0" placeholder="Project Title" required />
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fas fa-info-circle fa-lg fa-fw"></i></span>
                                </div>
                                <textarea type="text" rows="5" name="des" class="form-control rounded-0" minlength="5" placeholder="Project Description" required></textarea>
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fas fa-calendar-week fa-lg fa-fw"></i></span>
                                </div>
                                <input type="date" id="date" name="date" class="form-control rounded-0" minlength="5" required value="<?php echo $date2; ?>" />
                            </div>
                            <div class="form-group">
                                <div id="passError" class="text-danger font-weight-bolder"></div>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="register-btn" name="submit" value="Add Project" class="btn btn-primary btn-lg btn-block myBtn" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration Form End -->

    </div>






    <!-- Selcetion Box Script & data-->
    <!-- <script>
        $(document).ready(function() {
            var type = [
                "Graphic Designer", "Video Editor", "Php Dev.", "Front End Dev.", "Back End Dev.", "full Stack Dev."
            ];
            $("#type").select2({
                data: type
            });


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
                                    window.location = 'admin.php';
                                } else {
                                    $("#regAlert").html(response);
                                }
                            }
                        })
                    }
                }
            })
        });
    </script> -->



    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- js links -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>