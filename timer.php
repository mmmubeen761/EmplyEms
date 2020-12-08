<?php

session_start();
if (!isset($_SESSION['userid'])) {
    header("Location:index.php");
};

?>


<?php


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "users";


//connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


$id = mysqli_real_escape_string($conn, $_POST['P_ID']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$discription = mysqli_real_escape_string($conn, $_POST['P_description']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
// $currdate = date("Y-m-d");

// echo $ddate= $date;
// echo $currdate;
// echo $done = substr($date,0,2);
// echo $dtwo = substr($currdate,0,2);


$date2 = $date;
?>
<input type="hidden" id="date" value="<?php echo $date2; ?>">

<?php

// $date = "2020-12-07 ";

if (!empty($id)) {
    if (!empty($title)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "users";


        //connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connection Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
        } else {
            $sql = "insert into test (Project_Id,Project_Title,Project_Description,date) values('$id','$title','$discription','$date')";
            if ($conn->query($sql)) {
                echo '
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
    <link rel="stylesheet" href="../style.css" />
    <!-- Selection cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

</head>
<body class="bg-info">
    <div class="container">
 <div id=""></div>
        <!-- Registration Form Start -->
        <div class="row justify-content-center wrapper" id="register-box">
            <div class="col-lg-12 my-auto myShadow">
                <div class="row">

                    <div class="col-lg-12 bg-white p-4">
                        <h1 class="text-center font-weight-bold text-primary">Project Details</h1>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="w-25">ID</th>
                                    <td style="font-weight: bold;">' . $id . '</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Project Details</th>
                                    <td>' . $title . '</td>
                                </tr>
                                <tr>
                                    <th>Project Description</th>
                                    <td>' . $discription . '</td>
                                </tr>
                                <tr>
                                <th class="align-middle">Remaning Time</th>
                                <td>
                                <div class="row text-center">
                                <div  class="col-lg-3">
                                <span id="days">daysStr</span><b> : </b><br />
                                <span id="D-span">Days</span>
                                </div>
                                <div  class="col-lg-3">
                                <span id="hours">hoursStr </span><br />
                                <span id="h-span">hours</span> 
                                </div>
                                <div  class="col-lg-3">
                                <span id="mins">minutesStr</span><br />
                                <span id="m-span">Mins</span> 
                                </div>
                                <div  class="col-lg-3">
                                <span id="secs">secondsStr</span><br />
                                <span id="s-span">Sec</span> 
                                </div>
                                </div>
                                
                                </td>
                            </tr>
                            
                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration Form End -->

    </div>
  
 




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
        var dateValue = document.getElementById("date").value;
 
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
 
        document.getElementById("days").innerHTML = daysStr;
        document.getElementById("hours").innerHTML = hoursStr;
        document.getElementById("mins").innerHTML = minutesStr;
        document.getElementById("secs").innerHTML = secondsStr;
    }
 
    func();
    var interval = setInterval(func, 1000);
</script>
</body>

</html>

';
            } else {
                echo "Error:" . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    } else {
        echo "title should not be empty";
    }
} else {
    echo "id should not be empty";
    die();
}
