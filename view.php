<?php 
session_start();
include('dbh/config.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php');?>
    <style>
          .quantity {
            display: flex;
            /* justify-content: center; */
        }

        .quantity button {
            width: 45px;
            height: 45px;
            border: 1px solid black;
            border-radius: 1px;
            color: black;
            background: #fff;

        }

        .quantity input {
            width: 45px;
            border: none;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-radius: 1px;
            color: black;
            text-align: center;
            font-size: 20px;
            font-weight: 400;

        }
       
    </style>
</head>
<body>
<!-- navBar Start -->
<div class="text-white py-3 row" style="background-color: #0A2558;">
        <div class="col-md-6">
            <h1>&nbsp;&nbsp;Product Details</h1>
        </div>        
        <div class="col-md-6 ">
            <a href="index.php" class="btn btn-dark btn-md m-2 float-right"><i class='bx bx-home' style='color:#ffffff'  ></i> </a> 
            <a href="viewcart.php" class="btn btn-warning btn-md m-2 float-right"><i class='bx bx-cart' style='color:#ffffff'  >
                    <?php 
                    
                    // count products in cart
                    $cart_count=count($_SESSION['cart']);
                    ?>
                    <span class="badge badge-light badge-pill ml-3 align-middle"> <?php echo $cart_count; ?></span> 
                    </i>
                    </a>
            <a class=" text-light btn btn-danger btn-md float-right m-2" href="show-wishlist.php"> <i class='bx bx-heart'></i> Wish List </a>
                    
        </div>
    </div>
    
    <a href="index.php" class="btn btn-warning btn-md mt-5 ml-5"><i class='bx bx-home'   ></i> Purchase More Items</a> 
    <a href='wishlist.php?id=<?php echo $_GET['id']?>' class='btn btn-warning btn-md mt-5 '><i class='far fa-heart'></i> Add to  WishList</a>
        <!-- navBar End -->


<!-- <h1 class="text-center">Add to cart</h1> <hr>  -->

    
    
    <!-- <a href="index.php">Home</a> -->
    <?php 
    if(isset($_POST["addCart"])){
        if(isset($_SESSION["cart"])){
            $pid_array = array_column($_SESSION["cart"],'pid');
            if(!in_array($_GET['id'],$pid_array)){
                $index = count($_SESSION["cart"]);
                $item = array(
                    'pid' => $_GET['id'],
                    'pname' => $_POST['pname'],
                    'price' => $_POST['price'],
                    'qty' => $_POST['qty']
                );
    
                $_SESSION["cart"][$index] = $item; 
                echo "<script>alert('Product Added');</script>";
                header("location: viewcart.php");

            }
            else{
                    echo "<script>alert('Already Added');</script>";
            }
        }
        
    
        else{
            $item = array(
                'pid' => $_GET['id'],
                'pname' => $_POST['pname'],
                'price' => $_POST['price'],
                'qty' => $_POST['qty']
            );

            $_SESSION["cart"][0] = $item; 
            echo "<script>alert('Product Added');</script>";
            header("location: viewcart.php");

        }
    }

    if(isset($_GET['id'])){
        $sql = "SELECT * FROM product where ID='{$_GET["id"]}'";
        $res = $con->query($sql);

        if($res -> num_rows > 0){
                $row = $res->fetch_assoc();
               echo "<div class='row d-flex justify-content-center'>
               <div class='col-md-5 mt-1'>
               <img src='images/{$row['PIC']}' alt='Phone' class='image-responsive' width='100%' height='90%' >
               </div>
               <div class='col-md-7 mt-5'>
               <form action='{$_SERVER["REQUEST_URI"]}' method='post'>
                   <ul style='list-style-type: none;'>
                        <li><strong>{$row["BNAME"]}</strong> </li>
                        <li class=> <h2> <strong>{$row["PNAME"]}</strong></h2> </li>
                        <li>Price : <strong>Rs. {$row["PRICE"]}.00 </strong></li>
                        <br>
                       
                        <li><i class='bx bxs-camera'></i> {$row["CAMERA"]} Megapixels</li>
                        <li><i class='bx bxs-memory-card' ></i> {$row["STORAGE"]} GB</li>
                        <li> <i class='bx bx-memory-card' ></i> {$row["RAM"]}GB</li>
                        <li><i class='bx bxs-battery-charging'></i> {$row["BATTERY"]}mAh </li>
                        <li><i class='bx bx-fullscreen'></i> {$row["DISPLAY"]}    </li>
                        <br>
                        <li>
                            <div class='quantity'>
                                <button class='btn minus-btn disabled' type='button'>-</button>
                                <input type='text' name='qty' id='quantity' value='1'  required>
                                <button class='btn plus-btn' type='button'>+</button>
                            </div>
                            <input type='hidden' value='{$row["PNAME"]}' name='pname'>
                            <input type='hidden' value='{$row["PRICE"]}' name='price'>    
                        </li>
                        <li><span class='text-danger mt-5' id='stock' value='{$row["STOCK"]}'>Available : <span id='stQty'>{$row["STOCK"]}</span> Items</span> </li>
                        <li><input type='submit' value='Add to Cart' name='addCart' class='btn btn-primary mt-2'></li>

                    </ul>
                    </form>
               </div>
            </div>
            <div class='row'>
                    <div class='col-lg-11 ml-5'>
                        <h3><strong>Product Description</strong></h3>
                        <p class='ml-5'>{$row['PRODESC']}</p>
                    </div>
            </div>
            ";
               
        }
        else{
            header("location: index.php");
        }
    }
    else{
        header("location: index.php");
    }
    
    
    ?>
<br> <br> <hr>
<script>
        //Setting Minus Button Disabled
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
        // Get the Value
        var valueCount = 1;
        // var stockCount ;
        var stockCount = document.getElementById("stQty").innerHTML;
        stockCount = parseInt(stockCount);

        //Plus btn - increment
        document.querySelector(".plus-btn").addEventListener("click", function () {
            valueCount = document.getElementById("quantity").value;
            
            valueCount++;
                
                document.getElementById("quantity").value = valueCount;
               

                if (valueCount > 1  ) {
               document.querySelector(".minus-btn").removeAttribute("disabled");
               document.querySelector(".minus-btn").classList.remove("disabled");
                }

                if( valueCount>= stockCount){
                    document.querySelector(".plus-btn").setAttribute("disabled", "disabled");
                
                }
                

                 
        })
        //Minus btn decrement
        document.querySelector(".minus-btn").addEventListener("click", function () {
            valueCount = document.getElementById("quantity").value;

            valueCount--;

            document.getElementById("quantity").value = valueCount;

            if (valueCount == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            }

            if( valueCount<= stockCount){
                document.querySelector(".plus-btn").removeAttribute("disabled");
                document.querySelector(".plus-btn").classList.remove("disabled");
                 }
        })
    </script>

    <!-- Footer Section -->
    <?php include_once('footer.php'); ?>

