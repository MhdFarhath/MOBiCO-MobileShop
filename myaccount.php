<?php include_once('head.php'); ?>
<?php 
include('dbh/config.php');
 session_start();
 
 if(!isset($_SESSION['customerid'])){
    
	header('location:login.php');
	}

?>
 
 
 
 
<div class="container text-white m-5 rounded " style="background-color: #000051;" >
<br>
<div class="page_header text-center">
    <h2 class='text-center text-white m-2'>My Account</h2>
	<span><a href="index.php"><button class="btn btn-warning btn-sm m-2 ">Purchase more products</button></a></span>
	<span><a href="logout.php"><button class="btn btn-warning btn-sm m-2 ">Sign Out</button></a></span>
 </div>   
	<section id="content" >
		<div class="content-blog content-account">
			<div class="container">
				<div class="row">
				 
					<div class="col-md-12">

			<h3>Recent Orders</h3>
			<br>
			<table class="cart-table account-table table table-bordered bg-white text-dark">
				<thead>
					<tr>
						<th>Total Price</th>
						<th>Order Status</th>
						<th>Paymentmode</th>
						<th>Date and Time</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php
				$c_id = $_SESSION['customerid'];

 
  
				$sql = "SELECT * FROM orders WHERE userid='$c_id' Order by timestamp desc";
				$result = mysqli_query($con, $sql);
			  
				if (mysqli_num_rows($result) > 0) {
				 // output data of each row
				 while($row = mysqli_fetch_assoc($result)) {
 			?>
					<tr>
						<td>
							<?php echo $row["totalprice"] ?>
						</td>
						<td>
						<?php echo $row["orderstatus"] ?>
						</td>
						<td>
						<?php echo $row["paymentmode"] ?>		
						</td>
						<td>
						

						<?php echo date('M j g:i A', strtotime($row["timestamp"]));  ?>		
						</td>
						<td>
							<a href="view-order.php?id=<?php echo $row["id"] ?>">View</a> 
							<?php if($row["orderstatus"] != 'Cancelled'){ ?>
								|  <a href="cancel-order.php?id=<?php echo $row["id"] ?>">cancel</a> 
							<?php }?>
						</td>
					</tr>
				 
			
			<?php
				}
			   } else {
				 echo "0 results";
			   }
			 
			 
			 ?>




				
				</tbody>
			</table>		

		 

			<div class="ma-address">
						<h3>My Addresses</h3>
						<p>The following addresses will be used on the checkout page by default.</p>

						<div class="row  text-light px-5 py-3">
				<div class="col-md-6">
								<h4>Billing Address <a href="update_address.php?id=<?php echo $c_id ?>">Edit</a></h4>
                                <?php  
                        $sql_add = "SELECT * FROM customer_data  WHERE userid='$c_id'";
                        $result_add = mysqli_query($con, $sql_add);
                      
                     $row_add = mysqli_fetch_assoc($result_add); 
                        echo "Name : "."&nbsp &nbsp  &nbsp  &nbsp  &nbsp ".$row_add['firstname'] ." ". $row_add['lastname'] . "<br>";
                        echo "Company : &nbsp  &nbsp  ".$row_add['company'] . "<br>";
						echo "Mobile No : &nbsp  &nbsp  ".$row_add['mobile'] . "<br>";
						echo "<br>";
                        echo "Address line 1 : &nbsp  &nbsp  ".$row_add['address1'] . "<br>";
                        echo "Address line 2 : &nbsp  &nbsp  ".$row_add['address2'] . "<br>";
                        echo "City : &nbsp  &nbsp  ".$row_add['city'] . "<br>";
                        echo "Zip Code : &nbsp  &nbsp  ".$row_add['zip'] . "<br>";
						echo "<br>";
                        

                        ?>

 
				</div>

			 
			</div>



			</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
 
</div>








