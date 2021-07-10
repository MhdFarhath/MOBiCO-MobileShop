
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
         yValueFormatString: "$#,##0K",
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