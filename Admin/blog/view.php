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
                <li class="nav-item">
                    <a href="index.php" class="nav-link" >
                        <i class="fas fa-chart-bar"></i> Blog Home
                    </a>
                </li> 
        </div>
        </div>
   <div class="container mt-5">
        <?php foreach($query as $q){?>
            <div class="bg-light p-5 rounded-lg text-black">
                <h1><?php echo $q['title'];?></h1>
                <img src="../images/<?php echo $q['images']?>" width="20%" height="20%">
                <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
                <div class="d-flex">
                    <a href="edit.php?id=<?php echo $q['id']?>" class="btn btn-dark btn-sm mt-2" name="edit">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                        <button class="btn btn-danger btn-sm ml-2 mt-2" name="delete">Delete</button>
                    </form>
                </div>

            </div>
           
           
        <?php } ?>    
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html> 