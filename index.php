<?php include('dbh/config.php');
 ?>

<?php session_start()
?>
<?php
$_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>MOBiCO</title>
    <?php include('head.php');?>
    <link rel="stylesheet" href="css/main.css">
        <style>
            .mainNav {
                /* background-color: #0A2558; */
                margin-top:24px;
                
            }
            body{
                /* background-color:#f5f5f5 !important; */
            }
           
        </style>
    </head>
<body> 
    <!-- Header Section -->
    <?php include('headerpage.php');?>
    <?php include('navbar.php');?>
<!-- Body Section   -->
    <?php //include('sideBar.php');?>
<!-- //Column One End -->
<!-- <a href="login.php" class="btn btn-dark btn-sm ml-5">Account</a> -->
<div class="container clearfix d-flex justify-content-center flex-fill bd-highlight">
    <div class="row">
            <div class="col-md-2">
            <?php include('cat.php')?>
            </div>
            <div class="col-md-10">
            <?php include('MobilePhone/mobile.php')?>
            </div>
    </div>
</div>
<div class="container">

</div>
    

<!-- <h1 class="text-center">Add to cart in PHP</h1>  <hr> -->
<!-- Body Section -->
<?php include_once('footer.php'); ?>
</body>
</html>


