<?php
    include_once('../../dbh/config.php');
    $id = $_GET['id'];
    mysqli_query($con,"DELETE FROM product WHERE ID ='$id'");
    mysqli_close($con);
    header("Location: Product.php");
    ?> 