<?php

// $host = "localhost";
// $dbusername = "root";
// $dbpassword = "";
// $dbname = "project_details";


// //connection
// $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


// $id = mysqli_real_escape_string($conn, $_POST['id']);
// $title = mysqli_real_escape_string($conn, $_POST['title']);
// $discription = mysqli_real_escape_string($conn, $_POST['discription']);
// $date = mysqli_real_escape_string($conn, $_POST['date']);
// $currdate = date("Y-m-d");


// if (!empty($id)) {
//     if (!empty($title)) {
//         $host = "localhost";
//         $dbusername = "root";
//         $dbpassword = "";
//         $dbname = "project_details";


//         //connection
//         $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

//         if (mysqli_connect_error()) {
//             die('Connection Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
//         } else {
//             $sql = "INSERT INTO details(id,title,discription,duedate,currdate) 
//             values('$id','$title','$discription','$date','$currdate')";
//             if ($conn->query($sql)) {
//                 header("Location:../admin.php");
//             } else {
//                 echo "Error:" . $sql . "<br>" . $conn->error;
//             }
//             $conn->close();
//         }
//     } else {
//         echo "title should not be empty";
//     }
// } else {
//     echo "id should not be empty";
//     die();
// }
// ?>