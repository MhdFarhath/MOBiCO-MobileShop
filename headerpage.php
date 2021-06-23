<?php session_start()
?>
<?php
$_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php');?>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- Add icon library -->


<!-- Add font awesome icons -->

  <!-- MainSticky-->
  <div class="row headerSide">
    <div class="col-md-1">
        <img src="images/logo.png" width="100%" alt="MOBiCO" class = " ml-3 ">
    </div> 
    <div class="col-md-11">
        <p>
            <h1 class="heading ml-4" style="font-family: 'Arial Black', cursive; color:#0A2558;">MOBiCO
            <span style="font-size : 50%; font-family: 'Limelight', cursive;" class=""> Dealers in Mobile and Accessories
            </span>
            </h1> 
            <!-- <hr> -->
        </p>
    </div>
  </div>

    <!-- LogoutFunction -->
    <!-- <div class="col-md-2" role="group" aria-label="...">
    <div class="profile-details">
        <img src="images/logo.jpg">
        <span class="admin_name">Amas MJA</span>
        <i class='bx bx-chevron-down'></i>
      </div> 
         
         <form action="">
            <fieldset>
              <div class="form-group"> 
                <a href="login.php" class="btn btn-sm btn-dark  form-control"> <i class='bx bx-log-out'></i> Log In</a> 
              </div>
              <div class="form-group">
                <a href="signup.php" class="btn btn-sm btn-dark  " > Sign Up</a> 
              </div>
              <div class="form-group">
                <a href="logout.php" class="btn btn-sm btn-dark form-control" > Log Out</a> 
              </div>
         
          
            </fieldset>
          </form> 
      
    </div> -->
