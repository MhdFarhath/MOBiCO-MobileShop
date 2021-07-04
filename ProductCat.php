<?php include('dbh/config.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php');?>

<!-- navbarStart -->
<div class="text-white py-3 row" style="background-color: #0A2558;">
        
    <div class="col-md-6">
    <h1 class="">&nbsp;&nbsp;Product Categories</h1>
    </div>
    <div class="col-md-6"> 
      <a href="index.php" class="btn btn-dark btn-sm float-right m-2 "><i class='bx bx-home' style='color:#ffffff'  ></i> Go Back To Home Page</a> 
    </div>
</div>
<!-- navBar End -->
<table class="table table-hover">
  <thead>
    <tr class="thead-dark">
      <th scope="col"></th>
      <th scope="col">Category </th>
      <th scope="col">Brand</th>
      <th scope="col">Product Name</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
  <tr class="table">
      <th scope="row">1</th>
      <td>Mobile</td>
      <td>All Brands</td>
      <td>All Mobiles</td>
      <td><a href="MobilePhone/allMob.php" class="btn btn-dark btn-sm">Mobiles<a> </td>
    </tr>
    <tr class="table">
      <th scope="row">2</th>
      <td>Mobile</td>
      <td>Apple</td>
      <td>I Phones</td>
      <td><a href="MobilePhone/AppleMob.php" class="btn btn-dark btn-sm">Apple Mobiles<a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mobile</td>
      <td>Samsung</td>
      <td>Galaxy and Other mobiles</td>
      <td> <a href="MobilePhone/SamsungMob.php" class="btn btn-dark btn-sm">Samsung Mobiles<a></td>
    </tr>
    <tr class="table">
      <th scope="row">3</th>
      <td>Mobile</td>
      <td> Redmi</td>
      <td> Note and other Redmi</td>
      <td> <a href="MobilePhone/Redmi.php" class="btn btn-dark btn-sm">Redmi Mobiles<a></td>
    </tr>
    <tr class="table">
      <th scope="row">5</th>
      <td>Accessories</td>
      <td> All Brands</td>
      <td> All Accesories</td>
      <td> <a href="MobilePhone/accessories.php" class="btn btn-dark btn-sm">Accessories<a></td>
    </tr>
    



   