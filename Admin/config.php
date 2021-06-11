<?php 
$dbhost =  "localhost";
$dbuser  =  "root";
$dbpass  =  "";
$dbname  =  "logForm";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Connection Failed".mysqli_connect_error());
}

?>