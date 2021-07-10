<?php
session_start();
include('dbh/config.php');
if(!isset($_SESSION['customerid'])){
    
header('location:index.php');
}else{
 $pid = $_GET['pid']; 
 $cid = $_GET['cid' ];
 

    $delWishlist = "DELETE FROM wishlist WHERE pid='$pid' AND uid='$cid'";   
	if(mysqli_query($con, $delWishlist)){
        header('location:show-wishlist.php');

    }
 









}

?>