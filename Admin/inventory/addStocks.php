
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!---bootstrap cdn----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!---fontawsome cdn----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Header -->
    <div class="text-white py-3" style="background-color: #0A2558;">
        <h1>&nbsp;&nbsp;Add Stocks</h1>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">&nbsp;&nbsp;
         
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
                <a href="stocks.php" class="nav-link">
                            <i class="fas fa-box"></i> Stocks
                        </a>
                    <!-- <div class="dropdown">
                       
                        <div class="dropdown-menu">
                         <a href="stocks.php" class="dropdown-item">Stocks</a>
                            <a href="addstocks.php" class="dropdown-item"> Add Stocks</a>
                             <a href="updatestocks.php" class="dropdown-item"> Update Stocks</a>
                            <a href="deletestocks.php" class="dropdown-item"> Delete Stocks</a> 
                        </div>
                    </div> -->
                </li>
                
            </ul>
            <!-- <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>               
            </ul> -->
        </div>
    </nav>
    </div>
<!-- Header End -->

    
     
    <!----Card---->
    <div class="card card-body">
    <h4 class="card-header">Stock Details</h4><br>
        <form  method="post" >
            <div class="card-text">
                <div class="form-group row">
                    <label for="productName" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="PNAME" class="form-control" id="productName" required>
                    </div>
                </div>
            </div>
            <div class="card-text">
                <div class="form-group row">
                    <label for="productID" class="col-sm-2 col-form-label">Product ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="PID" class="form-control" id="productID" required>
                    </div>
                </div>
            </div>
            
            <div class="card-text">
                <div class="form-group row">
                    <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                        <input type="number" name="STOCK" class="form-control" id="quantity" required>
                    </div>
                </div>
            </div>
<?php include("../../dbh/config.php");
      include("../../dbh/function.php");
   
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $PNAME = $_POST['PNAME'];
            $PID = $_POST['PID'];
            $STOCK = $_POST['STOCK'];
       
        
            if(!empty($PNAME) && !empty($PID) && !empty($STOCK)){
                //Save to Database
                // $userId = RandomNum(20);
                $query = "UPDATE product SET STOCK = '$STOCK' WHERE ID = '$PID'";
                mysqli_query($con,$query);

                header("Location: stocks.php");
                echo "<script>alert('Success');</script>";
                die;
            }
            else{
                echo "<script>alert('Fill all inputs');</script>";
                }

       }
       else{
       
       }
    ?>
            <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" value="Update" class="btn btn-success btn-sm form-control">
            </div>
        </form>

    </div>

    
    
<!---javaScript cdn----->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>