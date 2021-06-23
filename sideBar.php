
<?php include_once('head.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
            a{
                text-decoration:none !important;
                color:white !important;
            }
            a:hover{
                color:#dfe0e8 !important;
            }
            .list-group-item {
                background-color: #0A2558 !important;
                border : 0px !important;
                border-radius : round;
            }
            .list-group-item:hover{
                background-color: #081d45 !important;
                border:0px !important;
                box-sizing:border-box;
            }
        
    </style>
</head>
<body>
        <div class="container clearfix d-flex justify-content-center flex-wrap">
            <ul class="list-group  list-group-horizontal m-2 ">
                <li class="list-group-item m-1 rounded">
                    <a href="ProductCat.php">
                    <i class='bx bx-category bx-xs'></i>  Product Categories
                    </a>
                </li>
                <li class="list-group-item m-1 rounded">
                    <a href="viewcart.php">
                    <i class='bx bx-cart' ></i>  Shopping Cart
                    <?php 
                    
                    // count products in cart
                    $cart_count=count($_SESSION['cart']);
                    ?>
                    
                    <span class="badge badge-light badge-pill ml-3 align-middle"> <?php echo $cart_count; ?></span> 
                    </a>
                   
                </li>
                    <li class="list-group-item m-1 rounded">
                    <a href="wishList.php">
                    <i class='bx bx-heart'></i>  Wish List
                </li>
                <li class="list-group-item m-1 rounded">
                    <a href="#">
                    <i class='bx bxs-comment-check '></i>  Latest Product Blogs and Reviews
                    </a>
                </li>
            </ul>
        </div>




