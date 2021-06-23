

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->

    <!-- Font San Serrif -->
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Open+Sans&display=swap" rel="stylesheet">
    <title>MOBiCO</title>
<style>
body{
    font-family: 'Open Sans', sans-serif;
    
    color:white;
}

form{
    background-color : #0A2558; 
    font-family: 'Open Sans', sans-serif;
    color:fff;
    border : 1px solid grey;
    border-radius: 1rem;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}

.form-head{
    font-weight:1000;
    font-size:200%;
    text-align: center;
    margin-left: 50px; 
}



</style>
</head>
<body>
<?php //include_once("headerpage.php")?>
<!-- <div class="row header">
    <div class="col-2">
    <br>
        <img src="img/logo.jpg" alt="MOBiCO" height= "70%" width="70%" class = "ml-4">
    </div> 
    <div class="col-10">
        <p>
            <h1 class="heading ">MOBiCO</h1> 
            <hr>
            <h5 style="font-family : courier,arial,helvetica;" >Ruwanwella,Sri Lanka</h5>
        </p>
  </div>
</div> -->
<br> <br>
<div class="row">
<div class ="col-md-4 "> </div>
<!-- //LoginForm -->
<div class="col-md-4">
<form action="login.php" name="myForm" method="post" class = "mt-5 login p-4" onsubmit="return validateForm()" > <br>
    <fieldset>
        <div class="form-group">
            <label for="Heading" class="form-head ">Admin Dashboard</label>
        </div>
        <div class="form-group">
            <label for="UserName" class = "text-light"> User Name : </label> 
            <input type="text" name="userName" id="" placeholder = " User Name " class="input form-control ">
        </div>
         <div class="form-group">
            <label for="Password" class = "text-light ml-0"> Password :</label> 
            <input type="password" name="password" id="" placeholder = " Password" class="input form-control">
         </div>

    
        
<!-- //PHP CODE  -->
<?php 
session_start();
    include("../dbh/config.php");
    include("../dbh/function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
       $userName = mysqli_real_escape_string($con,$_POST['userName']);
       $password = md5($_POST['password']);

       $userName = stripslashes($userName);  
       $password = stripslashes($password);



       if(!empty($userName) && !empty($password) && !is_numeric($userName)){
            //Read to Database
            $query = "SELECT * FROM adminDetails WHERE username =  '$userName'";

            $result = mysqli_query($con,$query);
            if($result){
                if($result && mysqli_num_rows($result) > 0 ){
                    
                    $userData = mysqli_fetch_assoc($result);
                    
                    if($userData['password'] == $password){
                        $_SESSION['user_id'] =  $userData['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo '<h5 style="font-size: 15px" class="text-danger text-center">Invalid Password</h5>';
       }
       else{
           echo '<h5 style="font-size: 15px" class="text-danger text-center">Please enter user name and password</h5>';
       }
    }
    
?>
        <div class="form-group">
             <input type="submit" value="Log In " class= "btn btn-danger btn-sm form-control" > 
        </div>
    </fieldset> 
</form>
    </div> <!-- Div4Close -->
</div> <!-- div row close-->

<script>
function validateForm() {
  let x = document.forms["myForm"]["userName"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}

</script>

    
</body>
</html>