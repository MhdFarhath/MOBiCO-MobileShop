
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php');?>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Header Section -->
<?php //include('headerpage.php');?>
<?php include('navbar.php');?>
    <!-- Body Section   -->
    <div class="row ">
        <div class="col-md-2 bg-secondary   ">
           <H1>This is my Side Bar Panel</H1> 
        </div>
        <div class="col-md-10">
            <div class="container">
                <?php include_once('MobilePhone/mobile.php')?>
            </div>
        </div>
        
    </div>

<!-- <h1 class="text-center">Add to cart in PHP</h1>  <hr> -->
<!-- Body Section -->

</body>
</html>