<?php session_start();
    include("../dbh/config.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin role</title>
    <!---bootstrap cdn----->
    <link rel="stylesheet" href="‪C:\Users\pcz\Desktop\project\style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!---fontawsome cdn----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootswatch CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous"><body>
</head>

<body>  
    <div class="text-white py-3" style="background-color: #0A2558;">
        <h1>&nbsp;&nbsp;Admin Roles And Details</h1>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">&nbsp;&nbsp;
         
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="fas fa-chart-bar"></i> Dashboard
                    </a>
                </li>
               

            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>  
        </div> <br> 



<!-- Table Contents -->
    <div class="table-responsive">
 <table class="table table-bordered">
<!-- On rows -->
<tr>

<th class="table-dark">Admin ID </th>
<th class="table-dark">Admin Name </th>
<th class="table-dark">Admin role </th>
<th class="table-dark">Email Address</th>


</tr>
<?php  $sql = "SELECT * FROM adminDetails";
        $res = $con->query($sql);
        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<tr>
                
                <td class="table-secondary">'.$row['UID'].'</td>
                <td class="table-success">'.$row['username'].'</td>
                <td class="table-danger">'.$row['email'].'</td>
                <td class="table-warning">'.$row['role'].'</td>
                
                
        </tr>';
        }
    }
?>
<!-- On cells (`td` or `th`) -->

</tr>


</table>

</div>
</body>
</html>