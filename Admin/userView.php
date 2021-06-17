
<!DOCTYPE html>
<html>
<head>
    <?php //include('head.php');?>
    <!-- <link rel="stylesheet" href="css/main.css"> -->

    <style>
        .ExitLine{
            background-color : black;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
<?php include('../headerpage.php');?>
<?php //include('navbar.php');?>
    <!-- Body Section   -->
    <div class="ExitLine">
        <a href="index.php">
            <button class="btn btn-light m-2">Exit</button>
        </a>
       
    </div>
    <div class="row ">
        <div class="col-md-10">
            <div class="container">
                <?php include_once('mobileUview.php')?>
            </div>
        </div>
        
    </div>

<!-- <h1 class="text-center">Add to cart in PHP</h1>  <hr> -->
<!-- Body Section -->

</body>
</html>