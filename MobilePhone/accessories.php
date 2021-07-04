<!DOCTYPE html>
<html>
<head>
    <?php include('../head.php');
        include('../dbh/config.php');
    ?>
 

</head>
<body>
<!-- navbarStart -->
<div class="text-white py-3 row" style="background-color: #0A2558;">
    <div class="col-md-6">
    <h1>&nbsp;&nbsp;Accessories</h1>
    </div>
    <div class="col-md-6"> 
        <a href="../index.php" class="btn btn-dark btn-sm float-right m-2 "><i class='bx bx-home' style='color:#ffffff'  ></i> Home</a> 
        <a href="../ProductCat.php" class="btn btn-dark btn-sm m-2 float-right "><i class='bx bx-category bx-xs'></i>  Product Categories</a> 
    </div>
</div>
<!-- navBar End -->
<br>

<div class="row">
<?php 
        $sql = "SELECT * FROM product WHERE CATEGORY != 'mobile'";
        $res = $con->query($sql);

        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<div class="col-md-3 mt-5  text-center">
                <img src="../images/'.$row['PIC'].'" alt="" class="image-responsive " height="55%" width="65%"> <br><br>
                <p><strong>'.$row['PNAME'].'</strong></p>
                <h5>Rs . '.$row['PRICE'].'</h5>
                <p><a href="../view.php?id='.$row['ID'].'" class="btn btn-dark form-control" style="background-color:#0A2558;">View Item</a></p>
            </div>';
        }
    }
    ?>
</div>
