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

    $conn = mysqli_connect("localhost", "root", "", "db_user_system");

    $sql_selec = 'SELECT * FROM  users ORDER BY id DESC';

    $sql_ru = mysqli_query($conn, $sql_selec);


    if (mysqli_num_rows($sql_ru) > 0) {
        // output data of each row
        echo '
  
    <div class="container mt-2">
    <div class="row">
    <div class="col-md-12 text-center">
    <table class="table table-dark mt-2">
    <tbody>
    <tr>
    <th scope="col">Reg. No.</th>
    <th scope="col">Employ Name</th>
    <th scope="col">CNIC</th>
    <th scope="col">Phone</th>
    <th scope="col">Employ Email</th>
    <th scope="col">Joining Date</th>
    <th scope="col">Employ Status</th>
    <th scope="col">Job Status</th>
    <th scope="col">All Details</th>
    </tr>
    ';

        while ($row = mysqli_fetch_assoc($sql_ru)) {


            if ($row["name"] != "admin") {


                echo '
            <tr>
            <td scope="row">' . $row["reg_num"] . ' </td>
            <td>' . $row["name"] . '</td>
            <td>' . $row["cnic"] . '</td>
            <td>' . $row["phone"] . '</td>
            <td>' . $row["email"] . '</td>
            <td>' . $row["joining_date"] . '</td>
            <td>In Office</td>
            <td>' . $row["job_status"] . '</td>
            <td><button type="button" class="btn btn-primary view-btn" data-toggle="modal" data-id=' . $row["id"] . ' data-target=".bd-example-modal-lg" id="' . $row["id"] . '"><i class="fas fa-eye"></i></button></td>
            </tr>
            </tbody>
            </div>
            </div>
            </div>
            
            ';
            }
        }
    } else {
        echo "0 results";
    }


    ?>

    <div class="modal fade bd-example-modal-lg"  id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">All Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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
        $(document).ready(function() {
            $(document).on("click", ".view-btn", function() {
                var id = $(this).data("id");
                $.ajax({
                    url: "loademploydata.php",
                    type: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $(".modal-body").html(data)
                    }
                })
            });
        });
    </script>


</body>

</html>