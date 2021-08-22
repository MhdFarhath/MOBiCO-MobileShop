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
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="CSS/style.css">
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
            <br> <br>
            <div class="title mt-5 mb-2 " style="font-size:134%; ">Trending Products</div>
                <!-- <ul class="top-sales-details" style="list-style-type:none;"> -->
                    <?php include('dbh/config.php');
                        $sql = "SELECT * FROM product where CATEGORY = 'mobile' ORDER BY RAND() limit 8 ";
                        $res = $con->query($sql);

                        if($res->num_rows > 0){
                            while($row = $res ->fetch_assoc()){
                                echo '<li style="list-style-type:none;">
                                        <img src="images/'.$row['PIC'].'" alt="" class="image-responsive m-2 ml-0 " width="15%" height="15%">     
                                        <span class="product">'.$row['PNAME'].'</span>
                                        </li>';
                            }
                        }
                    ?>
                <!-- </ul> -->
            </div>   
        <div class="col-md-10">
            <?php include('MobilePhone/mobile.php')?>
        </div>
    </div>
    
</div>
<hr style="color:grey;">
<div class="row">
    <?php include('blog.php')?>
</div>
<hr style="color:grey;">
    

<!-- <h1 class="text-center">Add to cart in PHP</h1>  <hr> -->
<!-- Body Section -->
<?php include_once('footer.php'); ?>
</body>
</html>


