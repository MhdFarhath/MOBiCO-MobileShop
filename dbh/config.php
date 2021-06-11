<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "mobicoDB";

$con = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>