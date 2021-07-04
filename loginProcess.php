<?php
session_start();
include('dbh/config.php');
 
if(isset($_POST['submit'])){
     $email = mysqli_real_escape_string($con, $_POST['email']);
     $password = $_POST['password'];
    
     $sql = "SELECT * FROM customer WHERE email='$email' ";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
      $dbStoredPASSWORD = $row['password'];

    if (password_verify ($password, $dbStoredPASSWORD)) {
        $_SESSION['customer'] = $email;
        $_SESSION['customerid'] = $row['id'];
        header('location:index.php');
      } else {
         header('location:login.php?message=1');
//    $message =  'incorrect Credentials';
  }
  


   
    
}




?>