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
<th class="table-dark">NO</th>
<th class="table-dark">User ID </th>
<th class="table-dark">User Name </th>
<th class="table-dark">Product Name</th>
<th class="table-dark">Contact number</th>
<th class="table-dark">Qty</th>
<th class="table-dark"></th>


</tr>
<!-- On cells (`td` or `th`) -->

    <tr>
        <td class="table-secondary">01</td>
        <td class="table-secondary">0125 </td>
        <td class="table-secondary">Afraj </td>
        <td class="table-secondary">Iphone 7+</td>
        <td class="table-secondary">07686569</td>
        <td class="table-secondary">11</td>
        <td class="table-secondary">
            <button type="button" class="btn btn-danger float-right">Remove</button>
            
        </td>
        
</tr>
<tr>
    <td class="table-secondary">02</td>
    <td class="table-secondary">0126 </td>
    <td class="table-secondary">Farhath </td>
    <td class="table-secondary">POCO M3 </td>
    <td class="table-secondary">0778255</td>
    <td class="table-secondary">12</td>
    <td class="table-secondary">
        <button type="button" class="btn btn-danger float-right">Remove</button>
    
    </td>
    
</tr>
<tr>
    <td class="table-secondary">03</td>
    <td class="table-secondary">0127 </td>
    <td class="table-secondary">Amas</td>
    <td class="table-secondary">Note 10 </td>
    <td class="table-secondary">0759382</td>
    <td class="table-secondary">12</td>
    <td class="table-secondary">
        <button type="button" class="btn btn-danger float-right">Remove</button>
     
    </td>
    
</tr>
<tr>
    <td class="table-secondary">04</td>
    <td class="table-secondary">0128 </td>
    <td class="table-secondary">Nawrin </td>
    <td class="table-secondary">Note 10</td>
    <td class="table-secondary">0716570</td>
    <td class="table-secondary">10</td>
    <td class="table-secondary">
        <button type="button" class="btn btn-danger float-right">Remove</button>
    
    </td>
    
    
</tr>
</table>

</div>
</body>
</html>