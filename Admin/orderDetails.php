<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer role</title>
    <!---bootstrap cdn----->
    <link rel="stylesheet" href="‪C:\Users\pcz\Desktop\project\style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!---fontawsome cdn----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <!-- Header -->
  <div class="text-white py-3" style="background-color: #0A2558;">
        <h1>&nbsp;&nbsp;Order Details</h1>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">&nbsp;&nbsp;
         
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link" >
                        <i class="fas fa-chart-bar"></i> Dashboard
                    </a>
                </li>
                <!-- <li class="nav-item">
                <a href="stocks.php" class="nav-link">
                            <i class="fas fa-box"></i> Stocks
                        </a> 
                 <div class="dropdown">
                       
                        <div class="dropdown-menu">
                         <a href="stocks.php" class="dropdown-item">Stocks</a>
                            <a href="addstocks.php" class="dropdown-item"> Add Stocks</a>
                             <a href="updatestocks.php" class="dropdown-item"> Update Stocks</a>
                            <a href="deletestocks.php" class="dropdown-item"> Delete Stocks</a> 
                        </div>
                    </div>   
                </li>
                
            </ul> -->
           <!-- <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>               
            </ul>  -->
        </div>
    </nav>
    </div>
<!-- Header End -->


    <div class="table-responsive">
    <table class="table table-bordered mt-5">
<!-- On rows -->
<tr>
<th class="table-dark">Order ID</th>
<th class="table-dark">User ID </th>
<th class="table-dark">Total Price</th>
<th class="table-dark">Time</th>
<th class="table-dark">Order Status</th>
<th class="table-dark">Payment Method</th>



</tr>
<!-- On cells (`td` or `th`) -->

   
<?php include("../dbh/config.php");
      include("../dbh/function.php");
  
  $sql = "SELECT * FROM orders";
        $res = $con->query($sql);
        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<tr>  
                <td class="table-danger">'.$row['id'].'</td>
                <td class="table-primary">'.$row['userid'].'</td>
                <td class="table-secondary">Rs. '.$row['totalprice'].'/-</td>
                <td class="table-secondary">'.$row['timestamp'].'</td>
                <td class="table-secondary"> '.$row['orderstatus'].'</td>
                <td class="table-secondary">'.$row['paymentmode'].'</td>
        
                
        </tr>';
        }
    }
?>
    
    
</tr>
</table>

</div>
</body>
</html>