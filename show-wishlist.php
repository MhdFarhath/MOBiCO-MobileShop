<?php 
session_start();
include('dbh/config.php');
include('head.php');

if(!isset($_SESSION['customerid'])){
    
	header('location:login.php');
	}

 

 
 



?>
 
 
 
 
<div class="container text-white  mt-5 rounded" style="background:#000051;">
<br>
    <h2 class='text-center text-white m-3'>My Wishlist</h2>
 
	<a href="index.php"><button class="btn btn-warning btn-sm m-2">Add More Products</button></a>
    <section id="content">
		<div class="content-blog content-account">
			<div class="container">
				<div class="row">
				 
					<div class="col-md-12">

		 
			<br>
			<table class="cart-table account-table table table-bordered bg-white text-dark">
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Price</th>
					 
						<th>Date and Time</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$c_id = $_SESSION['customerid']; 
  
				$sql = "SELECT * FROM wishlist JOIN product on product.ID=wishlist.pid where uid = $c_id";
				$result = mysqli_query($con, $sql);
			  
				if (mysqli_num_rows($result) > 0) {
				 // output data of each row
				 while($row = mysqli_fetch_assoc($result)) {
 			?>
					<tr>
						<td>
                        <a href="view.php?id=<?php echo $row["ID"] ?>">	<?php echo $row["PNAME"] ?></a>
						
						</td>
						<td>
						<?php echo $row["PRICE"] ?>
						</td>
					 
						<td>
						

						<?php echo date('M j g:i A', strtotime($row["timestamp"]));  ?>		
						</td>
						<td>
							<a href="delete-wishlist.php?pid=<?php echo $row["ID"] ?>&cid=<?php echo $_SESSION['customerid'] ?>">Delete</a> 
							 
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

		 
 <br>



			</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
 
</div>









