<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog using PHP & MySQL</title>
</head>
<body>
<div class="text-white py-3" style="background-color: #0A2558;">
        <h1>&nbsp;&nbsp;Blogs</h1>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="../index.php" class="navbar-brand">&nbsp;&nbsp;
         
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../index.php" class="nav-link" >
                        <i class="fas fa-chart-bar"></i> Dashboard
                    </a>
                </li> 
        </div>
        </div>

   <div class="container mt-5">
        <form method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Blog Title" class="form-control my-3 bg-light text-black text-center" name="title">
            <textarea name="content" class="form-control my-3 bg-light text-black" cols="30" rows="10"></textarea>
            Add image : <input type="file" name="file" > <br> <br>
            <button class="btn btn-dark" name="new_post">Add Post</button>
        </form>
   </div>
   <?php 
    include("../../dbh/config.php");
                      
        if($_SERVER['REQUEST_METHOD'] == "POST"){
                
                $title = $_POST['title'];
                $content = $_POST['content'];
        
                $PIC = $_FILES['file']['name'];
              
                    //Save to Databaseif (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	                $img_name = $_FILES['file']['name'];
	                $img_size = $_FILES['file']['size'];
	                $tmp_name = $_FILES['file']['tmp_name'];
	                $error = $_FILES['file']['error'];

	                if ($error === 0) {
                        echo "<br>error if";
		                if ($img_size > 125000) {
			                $em = "Sorry, your file is too large.";
		                }else {
			                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			                $img_ex_lc = strtolower($img_ex);

			                $allowed_exs = array("jpg", "jpeg", "png"); 

			                if (in_array($img_ex_lc, $allowed_exs)) {
				            $new_img_name = $img_name;
				            $img_upload_path = '../images/'.$new_img_name;
				            move_uploaded_file($tmp_name, $img_upload_path);

				            // Insert into Database
                            $query = "INSERT INTO data(title,content,images) VALUES  ('$title','$content','$PIC')";
                            mysqli_query($con,$query);  

                            header("Location: index.php?info=added");
                            exit();
				           
			                }else {
				            $em = "You can't upload files of this type";
		                    // header("Location: index.php?error=$em");
                            
                            }
		                }
	                }else {
		                $em = "unknown error occurred!";
	
	                }
                    die;
                    
                }
                else{
                    // echo "<script>alert('Fill all inputs');</script>";
                }

              
                
    ?>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>