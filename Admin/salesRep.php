<?php include('../head.php') ?>
 <title>Monthly Sales Report</title>
 <div class="text-white py-3" style="background-color: #0A2558;">
        <h1>&nbsp;&nbsp;Sales Report</h1>
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
</div>
</div>
<br><br>
 <h3>
 <?php include('../dbh/config.php');
              $sql = "SELECT SUM(totalprice) as ttp FROM orders where MONTH(timestamp)= MONTH(NOW())";
              $res = mysqli_query($con, $sql);
              $time = date('d-m-Y', time());
              $Curmonth =  date('F');
              if ($res)
              {
                  // it return number of rows in the table.
                  $row = mysqli_fetch_assoc($res);
                    
                     if ($row)
                        {
                            echo "<span style='text-decoration:underline; font-size:50px; margin-left:50;'>  Monthly Report of {$Curmonth}</span>";
                            echo "<span style='text-decoration:underline; font-size:20px; margin-left:450px;'>Today  : {$time}</span>";
                        // printf("" . $row);
                          echo "<h4 style='margin-left:100px;'>Total amount of sales for this month : Rs. {$row['ttp']} </h4>" ;
                        }
                      
              }
            ?>
 </h3>
 <h3>
           <?php
             $sql = "SELECT totalprice as ttp FROM orders where MONTH(timestamp)= MONTH(NOW())";
             $res = mysqli_query($con, $sql);
            
             if ($res)
             {
                 // it return number of rows in the table.
                 $rowcount = mysqli_num_rows($res);
                 if ($rowcount)
                    {
                    // printf("" . $row);
                      echo "<h6 style='margin-left:100px;'> Number of Orders added this month : {$rowcount} Orders</h6>";
                    }
                  }      
                    
              ?>
</h3>
 <h3>
      
 <?php
             $sql = "SELECT DISTINCT(userid) as ttp FROM orders where MONTH(timestamp)= MONTH(NOW())";
             $res = mysqli_query($con, $sql);
            
             if ($res)
             {
                 // it return number of rows in the table.
                 $rowcount = mysqli_num_rows($res);
                 if ($rowcount)
                    {
                    // printf("" . $row);
                      echo "<h6 style='margin-left:100px;'>Number of customers ordered products in this month : {$rowcount} Customers </h6>";
                      echo "<hr>";
                      echo "<hr>";
                    }
                  }      
                    
              ?>
 </h3>
<br><br>


<?php
include_once('../dbh/config.php');

?>
<?php
  $transdate = date('d-m-Y', time());
  $month =  date('m');
  
  $prevMonth = date('m')-1;
  $Month2 = date('m')-2; 
  $Month3 = date('m')-3;

  $sql = "SELECT SUM(totalprice) as ttp FROM orders where MONTH(timestamp)= MONTH(NOW())";
  $res = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($res);

  $prevsql = "SELECT SUM(totalprice) as ttp FROM orders where MONTH(timestamp)= MONTH(NOW())-1";
  $preres = mysqli_query($con, $prevsql);
  $Prevrow = mysqli_fetch_assoc($preres);

  $forsql = "SELECT SUM(totalprice) as ttp FROM orders where MONTH(timestamp)= MONTH(NOW())-2";
  $forres = mysqli_query($con, $forsql);
  $Forrow = mysqli_fetch_assoc($forres);
  
  $beforesql = "SELECT SUM(totalprice) as ttp FROM orders where MONTH(timestamp)= MONTH(NOW())-3";
  $beforeres = mysqli_query($con, $beforesql);
  $beforerow = mysqli_fetch_assoc($beforeres);

 $dataPoints = array( 
     array("y" => $row['ttp'],"label" => $month ),
     array("y" => $Prevrow['ttp'],"label" =>  $prevMonth),
     array("y" => $Forrow['ttp'],"label" => $Month2 ),
     array("y" => $beforerow['ttp'],"label" => $Month3),
    //  array("y" => 41,"label" => "July" )
 );
  
 
 ?>
 <!DOCTYPE HTML>
 <html>
 <head>
 <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
 <script>
 window.onload = function() {
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title:{
         text: "Monthly sales of last three months"
     },
     axisY: {
         title: "Revenue (in Rs)",
         includeZero: true,
         prefix: "Rs.",
         
     },
     axisX: {
         title: "Months(in Number)",
     },
     data: [{
         type: "bar",
         yValueFormatString: "#,##0.00",
         indexLabel: "{y}",
         indexLabelPlacement: "inside",
         indexLabelFontWeight: "bolder",
         indexLabelFontColor: "white",
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
 </script>
 </head>
 <body>
 <div id="chartContainer" style="height: 370px; width: 100%;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 </body>
 </html>            

