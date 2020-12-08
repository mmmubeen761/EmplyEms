<?php 
$id = $_POST["id"];

$conn = mysqli_connect("localhost", "root", "", "db_user_system");

$sql_selec = 'SELECT * FROM  users WHERE id = '.$id.' ORDER BY id DESC';

$sql_ru = mysqli_query($conn, $sql_selec);


if (mysqli_num_rows($sql_ru) > 0) {
    // output data of each row

    while ($row = mysqli_fetch_assoc($sql_ru)) {

            echo '
            
                    <h5 class="input-group-text rounded-0">Registration No.: <span class="h5">' . $row["reg_num"] . '</span> </h5>
                    <h5 class="input-group-text rounded-0">Full Name:<span class="h5">' . $row["name"] . '</span> </h5>
                    <h5 class="input-group-text rounded-0">Father Name: <span class="h5">' . $row["father_name"] . '</span> </h5>
                    <h5 class="input-group-text rounded-0">Candidate CNIC: <span class="h5">' . $row["cnic"] . '</span> </h5>
                    <h5 class="input-group-text rounded-0">Phone No.: <span class="h5">' . $row["phone"] . '</span> </h5>
                    <h5 class="input-group-text rounded-0">Email: <span class="h5">' . $row["email"] . '</span> </h5>
                    <h5 class="input-group-text rounded-0">Address: <span class="h5">' . $row["address"] . '</span> </h5>
                    <h5 class="input-group-text rounded-0">Gender: <span class="h5">' . $row["gender"] . '</span> </h5>
                    <h5 class="input-group-text rounded-0">Gender: <span class="h5">' . $row["job_status"] . '</span> </h5>
                    <hr>
                    <h5 class="input-group-text rounded-0">Joining Date: <span class="h5">' . $row["joining_date"] . '</span> </h5>
                    <h5 class="input-group-text rounded-0">Leaving Date: <span class="h5">' . $row["leaving_date"] . '</span> </h5>
                    
                    ';
                }
            } else {
                echo "0 results";
            }
            // <h5 class="input-group-text rounded-0">Status: <span class="h5">' . $row["status"] . '</span> </h5>
