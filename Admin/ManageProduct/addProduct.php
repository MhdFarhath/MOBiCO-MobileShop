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

    <div class="text-white py-3" style="background-color: teal;">
        <h1>&nbsp;&nbsp;Add Product</h1>
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
                            <a href="addProduct.php" class="dropdown-item"> Add Product</a>
                            <a href="updateProduct.php" class="dropdown-item"> Update Product</a>
                            <a href="deleteProduct.php" class="dropdown-item"> Delete Product</a>
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

            <form action="addproduct.html" method="post" enctype="multipart/form-data">
                <button type="button" class="btn btn-info float-right">Read products</button>
                <h4 class="card-header">What You are Selling</h4><br>

                <div class="card-text">
                    <div class="form-group row">
                        <label for="productName" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="productName">
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="form-group row">
                        <label for="productID" class="col-sm-2 col-form-label">Product ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="productID">
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="form-group row">
                        <label for="manufacturer" class="col-sm-2 col-form-label">Manufacturer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="manufacturer">
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="form-group row">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="category">
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="price">
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="form-group row">
                        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="quantity">
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="form-group row">
                        <label for="importimg" class="col-sm-2 col-form-label">Import Image</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04">
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="button">Add product</button>

                </div>

                </a>

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
</body>

</html>