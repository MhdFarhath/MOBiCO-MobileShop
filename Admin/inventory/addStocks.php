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
     
    <div class="text-white py-3" style="background-color: #0A2558;">
        <h1>&nbsp;&nbsp;Add Stocks</h1>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">&nbsp;&nbsp;
         
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link" >
                        <i class="fas fa-chart-bar"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-box"></i> Stocks
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"> Add Stocks</a>
                            <a href="#" class="dropdown-item"> Update Stocks</a>
                            <a href="#" class="dropdown-item"> Delete Stocks</a>
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
        </div>
    </nav>
    </div>


    
     
    <!----Card---->
    <div class="card card-body">
        
        <form action="addproduct.html" method="post" enctype="multipart/form-data">
            <button type="button" class="btn btn-info float-right" style="margin: 0.5em; background-color: #0A2558">Read Stocks</button>
            <h4 class="card-header">Stock Details</h4><br>
            
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
                    <label for="manufacturer" class="col-sm-2 col-form-label">Supplier</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="manufacturer">
                    </div>
                </div>
            </div>
            <div class="card-text">
                <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                    <select class="custom-select">

                    <option selected disabled value="">Choose...</option>
                    <option>Mobile phones</option>
                    <option>Chargers</option>
                    <option>Mobile Covers</option>
                    <option>Tempered Glasses</option>
                    <option>Handsfree</option>
            </select>
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
                            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
           
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="button" style="background-color: #0A2558">Add Stock</button>
                    
                  </div>
               
        </a>  

        </form>
    </div>
    <n
    
<!---javaScript cdn----->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>