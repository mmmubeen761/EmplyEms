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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

</head>

<body class="bg-info">
    <?php
    require_once('php/connection.php');

    $sql_select = 'SELECT * FROM  project_details ORDER BY id DESC';

    $sql_run = mysqli_query($conn, $sql_select);


    if (mysqli_num_rows($sql_run) > 0) {
        // output data of each row
        echo '
  
        <div class="container mt-2">
        <div class="row">
        <div class="col-md-12 text-center">
        
        <table class="table table-dark ">
        <tbody>
        <tr>
        <th scope="col">Project Id</th>
    <th scope="col">Title</th>
    <th scope="col" class="text-center">Timer</th>
    <th scope="col">Assign Project</th>
    </tr>
    ';


        while ($row = mysqli_fetch_assoc($sql_run)) {
            $date2 = $row["date"];
            $id = $row["id"];

            echo '
        <input type="hidden" id="date' . $id . '" value="' . $date2 . '">
          <tr>
          <td scope="row">' . $row["project_id"] . ' </td>
            <td>' . $row["title"] . '</td>
            <td id="data' . $id . '" class="text-center"></td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNotificationList" >Assign Project</button></td>
            </tr>
            </tbody>
            
        
            </div>
            </div>
            </div>
            ';
    ?>

        <?php
        }
    } else {
        echo "0 results";
    }


    $sql = 'SELECT * FROM  project_details ORDER BY id DESC';

    $sql_r = mysqli_query($conn, $sql);

    if (mysqli_num_rows($sql_r) > 0) {

        while ($roww = mysqli_fetch_assoc($sql_r)) {
            $date2 = $roww["date"];
            $idd = $roww["id"];




        ?>


            <div class="container">




                <div class="d-none" id="currentTime"></div>
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
                <script>
                    function func() {
                        var dateValue = document.getElementById("date<?php echo $idd; ?>").value;

                        var date = Math.abs((new Date().getTime() / 1000).toFixed(0));
                        var date2 = Math.abs((new Date(dateValue).getTime() / 1000).toFixed(0));

                        var diff = date2 - date;
                        var days = Math.floor(diff / 86400);
                        var hours = Math.floor(diff / 3600) % 24;
                        var minutes = Math.floor(diff / 60) % 60;
                        var seconds = diff % 60;

                        var daysStr = days;
                        if (days < 10) {
                            daysStr = "0" + days;
                        }

                        var hoursStr = hours;
                        if (hours < 10) {
                            hoursStr = "0" + hours;
                        }


                        var minutesStr = minutes;
                        if (minutes < 10) {
                            minutesStr = "0" + minutes;
                        }

                        var secondsStr = seconds;
                        if (seconds < 10) {
                            secondsStr = "0" + seconds;
                        }
                        if (days < 0 && hours < 0 && minutes < 0 && seconds < 0) {
                            daysStr = "00";
                            hoursStr = "00";
                            minutesStr = "00";
                            secondsStr = "00";

                            console.log("close");
                            if (typeof interval !== "undefined") {
                                clearInterval(interval);
                            }
                        }

                        document.getElementById("data<?php echo $idd; ?>").innerHTML = daysStr + " days, " + hoursStr + ":" + minutesStr + ":" + secondsStr;
                    }

                    func();
                    var interval = setInterval(func, 1000);
                </script>

        <?php
        }
    }
        ?>
</body>

</html>



<?php

$conn = mysqli_connect("localhost", "root", "", "db_user_system");

$sql_selec = 'SELECT * FROM  users ORDER BY id DESC';

$sql_ru = mysqli_query($conn, $sql_selec);
?>

<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="modal fade" id="modalNotificationList">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        All User Requests
                        <span class="close" data-dismiss="modal" style="cursor: pointer;">&times;</span>
                    </div>
                    <ul class="list-group list-group-flush " id="fstNotification">
                        <li class="list-group-item bg-light " style="background-color: #f8f8f8; ">
                            <div class="input-group input-group-lg form-group text-center">
                                <div class="form-control rounded-0">
                                    <select name="" id="type" class="form-control rounded-0 w-100">
                                        <option value="" selected hidden> -- Select to Assign-- </option>
                                        <option></option>
                                    </select>
                                    <button class="btn btn-primary">Assign</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php

    $conn = mysqli_connect("localhost", "root", "", "db_user_system");

    $sql_selec = 'SELECT * FROM  users ORDER BY id DESC';

    $sql_ru = mysqli_query($conn, $sql_selec);
    ?>

    <script>
        $(document).ready(function() {
            var type = [
                <?php
                if (mysqli_num_rows($sql_ru) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($sql_ru)) {

                        if ($row["name"] != "admin") {

                            echo '"';
                            echo '' . $row["name"] . '';
                            echo '"';
                            echo ',';
                        }
                    }
                }
                ?>
            ];
            $("#type").select2({
                data: type
            });
        });
    </script>
    <?php
    ?>






</body>

</html>