<!DOCTYPE html>
<html>
<head>
    <?php include('../head.php');
        include('../dbh/config.php');
    ?>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


</head>
<body>
<!-- navbarStart -->
<div class="text-white py-3 row" style="background-color: #0A2558;">
        
    <div class="col-md-6">
    <h1>&nbsp;&nbsp;Redmi Products</h1>
    </div>
    <div class="col-md-6"> 
        <a href="../index.php" class="btn btn-dark btn-sm float-right m-2 ">
        <i class='bx bx-home' style='color:#ffffff'  ></i> Home Page</a> 
        
        <a href="ProductCat.php" 
            class="btn btn-dark btn-sm m-2 float-right ">
        <i class='bx bx-category bx-xs'></i>  Product Categories </a> 
    </div>
</div>
<!-- navBar End -->
<br>
<div class="row">
<?php 
        $sql = "SELECT * FROM product where BNAME = 'Redmi'";
        $res = $con->query($sql);

        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<div class="col-md-3 mt-5 border text-center">
                <img src="../images/'.$row['PIC'].'" alt="" class="image-responsive" height="60%" width="110%"> <br><br>
                <p><strong>'.$row['PNAME'].'</strong></p>
                <h6>USD . '.$row['PRICE'].'</h6>
                <p><a href="../view.php?id='.$row['ID'].'" class="btn btn-dark form-control mb-5 style="background-color:#0A2558 !important;"">View Item</a></p> 
            </div>';
        }
    }
    ?>

</div>
