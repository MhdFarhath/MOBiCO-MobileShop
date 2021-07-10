
<!DOCTYPE html>
<html lang="en">
<head>
<title>MOBiCO</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootswatch CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <!-- Font Awesome CDN-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Google Font CDN -->
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Open+Sans&display=swap" rel="stylesheet">
    
<style>
body{
    font-family: 'Open Sans', sans-serif;
    color:white;
}
form{
    background-color: #0A2558;
    color : white;
    /* text-align : center; */
    border-radius : 1rem; 
}
.warning{
    color:white;
    margin: 15px;
    text-align: center;
}
.form-head{
    font-weight:1000;
    font-size:200%;
    text-align: center;
    margin : 40px;
    margin-left: 100px;

}


</style>

    
</head>
<body>
<?php //include_once("headerpage.php")?>
<br>
<div class="row m-1">
    <div class="col-4"></div>
    <div class="col-5">
        <form  method="post" class="p-4"> 
            <fieldset>
                <div class="form-group boder">
                    <a href="index.php" class="btn btn-md btn-success m-2 form-control">
                        <i class="fas fa-home"></i>Go Back To Dashboard
                    </a>
                    <label for="" class="form-head">Add New Admin</label>
                </div>
                <div class="form-group"> 
                    <label for="">User Name  </label>
                    <input type="text" name="userName" id="" placeholder = "User Name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Email Address  </label>
                    <input type="email" name="email" id="" placeholder = "Email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="txtPassword" placeholder = "Password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="cpassword" id="txtConfirmPassword" placeholder = "Password" onclick="return Validate()" class="form-control" required>
                </div>
                <select name="role" class="form-select form-select-lg mb-3 form-control"  aria-label=".form-select-lg example" required>
                        <option selected>Choose...</option>
                        <option value="Admin">Admin</option>
                        <option value="Editor">Editor</option>
                        <option value="Marketing Analysist">Marketing Analysist</option>
                        <option value="Manager">Manager</option>
                        
  
                    </select>     
                
           <!-- //PHP  -->
        
<?php session_start();
    include("../dbh/config.php");
    include("../dbh/function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
       $userName =  mysqli_real_escape_string($con,$_POST['userName']);
       $password = md5($_POST['password']);
       $cpassword = md5($_POST['cpassword']);
       $email = mysqli_real_escape_string($con,$_POST['email']);
       $role = $_POST['role'];
       
       if($password==$cpassword){ //Password Verification
            if(!empty($userName) && !empty($password) && !is_numeric($userName)){
                //Save to Database
                $userId = RandomNum(20);
                $query = "insert into adminDetails (user_id,username,password,email,role) values ('$userId','$userName','$password','$email','$role')";

                mysqli_query($con,$query);
                header("Location: adminRoles.php");
                die;
            }
            else{
                echo "<h3 class='warning'>Please enter valid info<h3>";
                }
       }
       else{
        echo "<script>alert('Passwords do not match.');</script>";
       }
       
    }
    
?>

            <div class="form-group">
                <input type="submit" value="Add new admin" class="btn btn-success btn-sm form-control">
            </div>
            <div class="form-group">
                <a href="login.php" class="btn btn-success btn-sm form-control" > Log In Page</a>
            </div>
            </fieldset>
        </form>
    </div>
</div>

<!-- <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script> -->
    
</body>
</html>