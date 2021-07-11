<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <style>
       
    </style>
</head>
<body>
<div class="container m-4 p-4 border rounded">
    <!-- <h1 class="font-weight-bold text-dark"> <i class="fab fa-apple m-1 fa-1x"> </i> Apple Phones</h1> <br>     -->
    <div class="row ">
    <?php 
        $sql = "SELECT * FROM product where BNAME = 'Apple' && CATEGORY = 'mobile'  limit 4";
        $res = $con->query($sql);

        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<div class="col-md-3 text-center">
                <img src="images/'.$row['PIC'].'" alt="" class="image-responsive " height="70%" width="110%"> <br><br>
                <p><strong>'.$row['PNAME'].'</strong></p>
                <h5>Rs. '.$row['PRICE'].'</h5>
                <p><a href="view.php?id='.$row['ID'].'" class="btn btn-dark form-control" style="background-color:#0A2558;">View Item</a></p>
                </div>';
        }
    }
    ?>
    </div> <br> <br>
    <!-- <h1 class="">Samsung Phones</h1>  -->
    <div class="row">
        
    <?php 
        $sql = "SELECT * FROM product where BNAME = 'Samsung' && CATEGORY = 'mobile' LIMIT 4";
        $res = $con->query($sql);

        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<div class="col-md-3 text-center">
                <img src="images/'.$row['PIC'].'" alt="" class="image-responsive" height="70%" width="110%"> <br><br>
                <p><strong>'.$row['PNAME'].'</strong></p>
                <h6>Rs. '.$row['PRICE'].'</h6>
                <p><a href="view.php?id='.$row['ID'].'" class="btn btn-dark form-control mb-5" style="background-color:#0A2558;">View Item</a></p> 
                </div>';
        }
    }
    ?><br><br>
    </div> <br> <br>
    <!-- <h1 class=""> Mobile Accessories </h1> -->
    <div class="row">
    <?php 
        $sql = "SELECT * FROM product where BNAME = 'Redmi' && CATEGORY = 'mobile' LIMIT 4";
        $res = $con->query($sql);

        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<div class="col-md-3 text-center">
                <img src="images/'.$row['PIC'].'" alt="" class="image-responsive" height="70%" width="110%"> <br><br>
                <p><strong>'.$row['PNAME'].'</strong></p>
                <h6> Rs. '.$row['PRICE'].'</h6>
                <p><a href="view.php?id='.$row['ID'].'" class="btn btn-dark form-control mb-5" style="background-color:#0A2558;">View Item</a></p> 
                </div>';
        }
    }
    ?>
    </div>
    <div class="row">
    <?php 
        $sql = "SELECT * FROM product where BNAME = 'Huawei' && CATEGORY = 'mobile' LIMIT 4";
        $res = $con->query($sql);

        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<div class="col-md-3 mt-4 text-center">
                <img src="images/'.$row['PIC'].'" alt="" class="image-responsive" height="70%" width="110%" > <br><br>
                <p><strong>'.$row['PNAME'].'</strong></p>
                <h6> Rs. '.$row['PRICE'].'</h6>
                <p><a href="view.php?id='.$row['ID'].'" class="btn btn-dark form-control mb-5" style="background-color:#0A2558;">View Item</a></p> 
                </div>';
        }
    }
    ?>
    </div>
    <br>
    <label for="Accessories"> <h1>Accessories</h1></label>
    <div class="row">
    
    <?php 
        $sql = "SELECT * FROM product WHERE CATEGORY != 'mobile' LIMIT 8";
        $res = $con->query($sql);

        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<div class="col-md-3 mt-5  text-center">
                <img src="images/'.$row['PIC'].'" alt="" class="image-responsive " height="55%" width="65%" > <br><br>
                <p><strong>'.$row['PNAME'].'</strong></p>
                <h5>Rs . '.$row['PRICE'].'</h5>
                <p><a href="view.php?id='.$row['ID'].'" class="btn btn-dark form-control" style="background-color:#0A2558;">View Item</a></p>
            </div>';
        }
    }
    ?>
    </div>
    

</div>