<!DOCTYPE html>
<html>
<head>
    <?php include('../head.php');?>

</head>
<!-- navbarStart -->
<div class="text-white py-3 row" style="background-color: #0A2558;">
        
    <div class="col-md-6">
    <h1>&nbsp;&nbsp;All Mobile Phones</h1>
    </div>
    <div class="col-md-6"> 
        <a href="../index.php" class="btn btn-dark btn-sm float-right m-2 "><i class='bx bx-home' style='color:#ffffff'  ></i> Home</a> 
        <a href="../ProductCat.php" class="btn btn-dark btn-sm m-2 float-right "><i class='bx bx-category'></i> Product Categories </a> 
    </div>
</div>
        
<!-- navBar End -->
<br>
<div class="row"> 
<?php include('../dbh/config.php');
        $sql = "SELECT * FROM product where CATEGORY = 'mobile'";
        $res = $con->query($sql);

        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<div class="col-md-3 border mt-5 text-center">
                <img src="../images/'.$row['PIC'].'" alt="" class="image-responsive " height="70%" width="110%"> <br><br>
                <p><strong>'.$row['PNAME'].'</strong></p>
                <h5>Rs. '.$row['PRICE'].'.00</h5>
                <p><a href="../view.php?id='.$row['ID'].'" class="btn btn-dark form-control" style="background-color:#0A2558;">View Item</a></p>
            </div>';
        }
    }
    ?>
</div>