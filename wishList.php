<?php
session_start();
include('dbh/config.php');
if(!isset($_SESSION['customerid'])){
    
header('location:login.php');
}else{
 $c_id = $_SESSION['customerid']; 
 $p_id = $_GET['id'];

 $sql_Check = "SELECT * FROM wishlist where pid = $p_id AND uid = $c_id";
 $result_check = mysqli_query($con, $sql_Check);

 if (mysqli_num_rows($result_check) == 1) { 
    echo '<script>  alert("product already exist in wishlist");  </script>'; 
    header('location:show-wishlist.php');
    
 }else{
    $insertWishlist = "INSERT INTO wishlist (pid, uid) VALUES ('$p_id', '$c_id')";   
	if(mysqli_query($con, $insertWishlist)){
        header('location:show-wishlist.php');

    }

 }

}

?>