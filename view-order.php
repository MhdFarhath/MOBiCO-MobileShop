<?php 
session_start();
include('dbh/config.php');
include('head.php');
 

 
 



?>
 
 
 
 
<div class="container text-white rounded m-5" style="background:#000051;">
<br>
    <h2 class='text-center text-white'>View Orders</h2>
	<span><a href="myaccount.php"><button class="btn btn-warning btn-sm m-2 ">My Account</button></a></span>
    <section id="content">
		<div class="content-blog content-account">
			<div class="container">
				<div class="row">
				 
					<div class="col-md-12">

			<h3>Recent Orders</h3>
			<br>
			<table class="cart-table account-table table table-bordered bg-white text-dark">
				<thead>
					<tr>
						<!-- <th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th> -->
					</tr>
				</thead>
				<tbody>
				<?php
				$c_id = $_SESSION['customerid'];
				//echo $c_id;

 if(isset($_GET['id'])){
     $o_id = $_GET['id'];
	// echo $o_id;
 }


 $sql_orders = "SELECT * FROM orders WHERE id='$o_id' AND userid='$c_id'";
 $result_orders = mysqli_query($con, $sql_orders);

 $row_orders = mysqli_fetch_assoc($result_orders);
  
				$sql = "SELECT * FROM orderItems WHERE orderid='$o_id'";
				$result = mysqli_query($con, $sql);
			  
				if (mysqli_num_rows($result) > 0) {
			 
				 while($row = mysqli_fetch_assoc($result)) {
                  $prodID = $row["productid"] 
 			?>
					<!-- <tr>
						<td> -->

                        <?php 
                        
                        $sql_product = "SELECT * FROM product  WHERE ID='$prodID'";
                        $result_prod = mysqli_query($con, $sql_product);
                      
                     $row_prod = mysqli_fetch_assoc($result_prod);
                     
                      
                        
                        ?>


<!-- <a href="single.php?id=<?php echo $prodID ;?>"><?php echo $row_prod['product_name'];?></a>
					 
						</td>
						<td>
						<?php echo $row["quantity"] ?>
						</td>
						<td>
						<?php echo $row["productprice"] ?>		
						</td>
						<td>
						<?php echo $row["quantity"] * $row["productprice"] ?>		
						</td>
					 
					</tr> -->
				 
			
			<?php
				}
			   } else {
				 echo "0 results";
			   }
			 
			 
			 ?>




				
				</tbody>
                <tfooer>
					<tr>
						 
						
						<th>Total Price</th>
						<th>Rs. <?php echo  $row_orders['totalprice'] ?>.00</th>
					</tr>
                    <tr>
					 
						
						<th>Order Status</th>
						<th><?php echo  $row_orders['orderstatus'] ?></th>
					</tr>
                    <tr>
					 
					
						<th>Date</th> 
						<th><?php echo date('M j g:i A', strtotime($row_orders["timestamp"]));  ?></th>
					</tr>
				</tfooer>
			</table>		

		 
<br>
			<div class="ma-address">
						<h3>My Addresses</h3>
						<p>The following addresses will be used on the checkout page by default.</p>

			<div class="row   text-white px-5 py-3">
				<div class="col-md-6">
								<h4>Billing Address <a href="update_address.php?id=<?php echo $c_id ?>">Edit</a></h4>
                                <?php  
                        $sql_add = "SELECT * FROM customer_data  WHERE userid='$c_id'";
                        $result_add = mysqli_query($con, $sql_add);
                      
                     $row_add = mysqli_fetch_assoc($result_add); 
                        echo $row_add['firstname'] ." ". $row_add['lastname'] . "<br>";
                        echo $row_add['company'] . "<br>";
                        echo $row_add['address1'] . "<br>";
                        echo $row_add['address2'] . "<br>";
                        echo $row_add['city'] . "<br>";
                        echo $row_add['zip'] . "<br>";
                    
                        echo $row_add['mobile'] . "<br>";

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









