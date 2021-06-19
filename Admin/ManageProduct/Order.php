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
        <h1 Class="text-cenetr">&nbsp;&nbsp;Order Details</h1>
    </div>



        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5">
                    <h2 class="text-center p-2 text-drak">Fill the details to complete your Order</h2>
            <h3 class="text-success">Product Details :</h3>
            <table class="table table-bordered" width="500px">
            <tr>
                <th class="text-info">Product Name :</th>
                <td class="text-warning">Samsung A12</td>
                <td rowspan="4" class="text-center">
                    <img src="C:\xampp\htdocs\ManageProduct\samsung-galaxy-a12.jpg">
            
            </td>
            </tr>
            <tr>
               <th class="text-info"> Product Price : </th>
               <td class="text-warning">Rs. 36000 </td>
            </tr>
            <tr>
                <th class="text-info">Deliver Charge :</th>
                <td class="text-warning">Rs. 300</td>
            </tr>
            <tr>
                <th class="text-info">Total Price :</th>
                <td class="text-warning">Rs. 36300</td>
            </tr>
            </table>
            <h4 class="text-dark">Enter your Details :</h4>
            <div class="form-group"></div>
                <input type="text" class="form-control text-muted" placeholder="Enter your name" required>
                
                <div class="form-group"></div>
                <input type="text" class="form-control text-muted" placeholder="Enter your e-mail" required>
                
                <div class="form-group"></div>
                <input type="text" class="form-control text-muted" placeholder="Enter your Address" required>
                
                <div class="form-group"></div>
                <input type="text" class="form-control text-muted" placeholder="Enter your Contact no" required>
                <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-danger" type="button">Submit</button>
                
              </div>
            </div>
        </div>
</body>
</html>



