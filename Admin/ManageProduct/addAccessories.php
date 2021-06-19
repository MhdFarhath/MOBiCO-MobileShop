<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!---bootstrap cdn----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!---fontawsome cdn----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="text-white py-3" style="background-color: #0A2558;;">
        <h1>&nbsp;&nbsp;Add Accessories</h1>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="../index.php" class="navbar-brand">&nbsp;&nbsp;
         
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../index.php" class="nav-link">
                        <i class="fas fa-chart-bar"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fab fa-product-hunt"></i> Product
                        </a>
                        <div class="dropdown-menu">
                            <a href="Product.php" class="dropdown-item"> Product</a>
                            <a href="updateProduct.php" class="dropdown-item"> Update Product</a>
                            <!-- <a href="deleteProduct.php" class="dropdown-item"> Delete Product</a> -->
                        </div>
                    </div>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        </div>


        <!----Card---->
        <div class="card card-body">

            <form  method="POST"  enctype="multipart/form-data">
                <!-- <button type="button" class="btn btn-info float-right">Read products</button> -->
                <h4 class="card-header">What You are Selling</h4><br>
                <!-- <div class="card-text">
                    <div class="form-group row">
                        <label for="productName" class="col-sm-2 col-form-label">Product ID</label>
                        <div class="col-sm-10">
                            <input type="text"  name="ID" class="form-control" id="productName" required>
                        </div>
                    </div> -->
                <div class="card-text">
                    <div class="form-group row">
                        <label for="productName" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text"  name="PNAME" class="form-control" id="productName" required>
                        </div>
                    </div>
                </div>

                <div class="card-text">
                    <div class="form-group row">
                        <label for="manufacturer"  class="col-sm-2 col-form-label">Brand Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="BNAME" class="form-control" id="Brand Name" required>
                        </div>
                    </div>
                </div>

                <div class="card-text">
                    <div class="form-group row">
                        <label for="price"   class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" name="PRICE" class="form-control" id="price" required >
                        </div>
                    </div>
                </div>
                
                
                <div class="card-text">
                    <div class="form-group row">
                    <label for="category"  class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                    <select name="CATEGORY" class="form-select form-select-lg mb-3 form-control"  aria-label=".form-select-lg example" required>
                        <option selected>Choose...</option>
                        
                        <option value="Charger">Chargers</option>
                        <option value="Cover">Mobile Covers</option>
                        <option value="Tempered">Tempered Glasses</option>
                        <option value="HandFree">Handsfree</option>
  
                    </select>       
                    </div>
                </div>
                
                <div class="card-text">
                    <div class="form-group row">
                        <label for="quantity" class="col-sm-2 col-form-label">Stock quantity</label>
                        <div class="col-sm-10">
                            <input type="number" name="STOCK" class="form-control" id="quantity" required>
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="DESCRIPTION" id="description" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="form-group row">
                        <label for="importing" class="col-sm-2 col-form-label">Import Image</label>
                        <div class="col-sm-10">
                            <div class="">
                                <input type="file" name="file">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" class="btn btn-primary btn-sm " name="submit" value="Add Product">
                </div>
<?php 
    include("../../dbh/config.php");
                      
        if($_SERVER['REQUEST_METHOD'] == "POST"){
                
                $PNAME = $_POST['PNAME'];
                $BNAME = $_POST['BNAME'];
                $PRICE = $_POST['PRICE'];
                $CATEGORY = $_POST['CATEGORY'];
                $PRODESC = $_POST['DESCRIPTION'];
                $STOCK = $_POST['STOCK'];

                $PIC = $_FILES['file']['name'];
                
                    //Save to Databaseif (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	                $img_name = $_FILES['file']['name'];
	                $img_size = $_FILES['file']['size'];
	                $tmp_name = $_FILES['file']['tmp_name'];
	                $error = $_FILES['file']['error'];

	                if ($error === 0) {
		                if ($img_size > 125000) {
			                $em = "Sorry, your file is too large.";
		                }else {
			                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			                $img_ex_lc = strtolower($img_ex);

			                $allowed_exs = array("jpg", "jpeg", "png"); 

			                if (in_array($img_ex_lc, $allowed_exs)) {
				            $new_img_name = $img_name;
				            $img_upload_path = '../../images/'.$new_img_name;
				            move_uploaded_file($tmp_name, $img_upload_path);

				            // Insert into Database
                            $query = "INSERT INTO product( PNAME, BNAME, CATEGORY, PRICE, STOCK, PRODESC,PIC) VALUES  ('$PNAME','$BNAME','$CATEGORY','$PRICE', '$STOCK', '$PRODESC','$PIC')";
                            mysqli_query($con,$query);
				            // header("Location: view.php");
			                }else {
				            $em = "You can't upload files of this type";
		                    // header("Location: index.php?error=$em");
			                }
		                }
	                }else {
		                $em = "unknown error occurred!";
	
	                }

                
                    


                  
                    
                       
                  
                    
                    // header("Location: Product.php");
                    // echo "<script>alert('Success');</script>";
                    die;
                    
                }
                else{
                    // echo "<script>alert('Fill all inputs');</script>";
                }

              
                
    ?>


               

            </form>
        </div>
        <!-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <ul class="pagination">

                    <li class="page-item"><a class="page-link"
                            href="‪‪C:\Users\pcz\Desktop\project\Add product.html">1</a></li>
                    <li class="page-item"><a class="page-link"
                            href="C:\Users\pcz\Desktop\project\update product.html">2</a></li>
                    <li class="page-item"><a class="page-link"
                            href="C:\Users\pcz\Desktop\project\Delete Product.html">3</a></li>
                    <li class="page-item"><a class="page-link"
                            href="C:\Users\pcz\Desktop\project\update product.html">Next</a></li>
                </ul>
        </nav> -->

        <!---javaScript cdn----->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

            <input type="file" name="file" class="custom-file-input">
</body>

</html>