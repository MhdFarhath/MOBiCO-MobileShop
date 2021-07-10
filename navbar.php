<?php include_once('dbh/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- BoxInco -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<style>
  .navbar{
    background-color:#0A2558;
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.5);
  }

</style>
</head>
<body>
   
<nav class="navbar navbar-expand-sm navbar-dark  border-bottom sticky-top ">
      
 	           <!-- <div class="LogIcon">
                <i class="fas fa-mobile-alt m-2 fa-2x"></i>
                <i class="fas fa-headphones-alt m-2  mr-5 fa-2x"></i>
                </div>  -->
               
            <div class="collapse navbar-collapse" id="main_nav">
	            <ul class="navbar-nav ms-auto ">
		            <li class="nav-item "><a class="nav-link text-light btn btn-danger ml-2" href="index.php"> <i class='bx bx-home' style='color:#ffffff'  ></i> </a></li>	          
                <li class="nav-item"> 
                    <a href="viewcart.php" class="nav-link text-light btn btn-warning ml-2">
                    <i class='bx bx-cart' style='color:#ffffff'  >
                    <?php 
                    
                    // count products in cart
                    $cart_count=count($_SESSION['cart']);
                    ?>
                    <span class="badge badge-light badge-pill ml-3 align-middle"> <?php echo $cart_count; ?></span> 
                    </i>
                   
                    
                    
                    </a>
        
                </li>
                <li class="nav-item "><a class="nav-link text-light btn btn-danger ml-2" href="show-wishlist.php"> <i class="far fa-heart"></i> Wish List </a></li>	
              </ul>

            </div> 
          
            <a class="nav-link text-light btn btn-danger ml-2 float-right" href="myaccount.php"> <i class="far fa-user"></i> My Account </a>
    
    <!-- <form class="form-inline my-2 my-lg-0 ">
      <input class="form-control my-2 mr-sm-2 btn-sm " type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0 btn-sm" type="submit">Search</button>
    </form> -->
</nav>
