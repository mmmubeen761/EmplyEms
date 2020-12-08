<?php
 require_once 'config.php';

 class Auth extends Database{

    //register new user
      public function register($name,$email,$reg_num,$father_name,$gender,$cnic,$phone,$address,$joining_date,$leaving_date,$job_status){
          $sql = "INSERT INTO users(name, email,reg_num,father_name,gender,cnic,phone,address,joining_date,leaving_date,job_status) VALUES (:name, :email,:reg_num,:father_name,:gender,:cnic,:phone,:address,:joining_date,:leaving_date,:job_status)";
          $stmt = $this->conn->prepare($sql);
          $stmt->execute(['name'=>$name, 'email'=>$email,'reg_num'=>$reg_num,'father_name'=>$father_name,'gender'=>$gender,'cnic'=>$cnic,'phone'=>$phone,'address'=>$address,'joining_date'=>$joining_date,'leaving_date'=>$leaving_date,'job_status'=>$job_status]);
          return true;
      }

      // check if user already registered

      public function user_exist($email){
          $sql = "SELECT email FROM users WHERE email = :email";
          $stmt = $this->conn->prepare($sql);
          $stmt->execute(['email'=>$email]);
          $result = $stmt->fetch(PDO::FETCH_ASSOC);

          return $result;
      }

      //Login Exisiting 
      public function login($email){
          $sql = "SELECT email, password FROM users WHERE email = :email AND deleted != 0";
          $stmt = $this->conn->prepare($sql);
          $stmt->execute(['email'=>$email]);
          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          return $row;
      }


 }
