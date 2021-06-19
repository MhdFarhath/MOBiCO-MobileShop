<?php
    include_once('../../dbh/config.php');
    $id = $_GET['id'];
    mysqli_query($con,"UPDATE product SET STOCK = 0 WHERE ID = '$id'");
    mysqli_close($con);
    header("Location: stocks.php");
    ?> 