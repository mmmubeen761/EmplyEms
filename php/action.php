<?php

require_once 'auth.php';
$user = new Auth();

// Handle REgister  Ajax Request
if (isset($_POST['action']) && $_POST['action'] == 'register') {
    $name = $user->test_input($_POST['name']);
    $email = $user->test_input($_POST['email']);
    $reg_num = $user->test_input($_POST['reg_num']); 
    $father_name = $user->test_input($_POST['father_name']); 
    $cnic = $user->test_input($_POST['cnic']); 
    $gender = $user->test_input($_POST['gender']); 
    $phone = $user->test_input($_POST['phone']); 
    $address = $user->test_input($_POST['address']); 
    $joining_date = $user->test_input($_POST['joining_date']); 
    $leaving_date = $user->test_input($_POST['leaving_date']); 
    $job_status = $user->test_input($_POST['job_status']); 

    // $hpass = password_hash($password, PASSWORD_DEFAULT);

    if ($user->user_exist($email)) {
        echo $user->showMessage('warning', 'This E-mail is already registerd!');
    } else {
        if ($user->register($name, $email, $reg_num,$father_name,$gender,$cnic,$phone,$address,$joining_date,$leaving_date,$job_status)) {
            echo 'register';
            $_SESSION['user'] = $email;
        } else {
            echo $user->showMessage('danger', 'Something went wrong! try again later!');
        }
    }
}

// // Handle login  Ajax Request

// if (isset($_POST['action']) && $_POST['action'] == 'login') {
//     $email = $user->test_input($_POST['email']);
//     $pass = $user->test_input($_POST['password']);

//     $loggedInUser = $user->login($email);

//     if ($loggedInUser !== null) {
//         if (password_verify($pass, $loggedInUser['password'])) {
//             // if (!empty($_POST['rem'])) {
//             //     setcookie("email", $email, time() + (30 * 24 * 60 * 60), '/');
//             //     setcookie("password", $pass, time() + (30 * 24 * 60 * 60), '/');
//             // } else {
//             //     setcookie("email", "", 1, '/');
//             //     setcookie("password", "", 1, '/');
//             // }
//             echo 'login';
//             $_SESSION['user'] = $email;
//         } 
//         else {
//             echo $user->showMessage('danger', 'Password is incorect!');
//         }
//     } 
//     else {
//         echo $user->showMessage('danger', 'User not found !');
//     }
// }

// 
