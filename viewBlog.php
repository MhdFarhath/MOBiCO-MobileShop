<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap');

*{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif ;
}

/* .container{
width: 100% ;
min-height: 100vh;
background-color:antiquewhite ;
} */

#row{
        width: 85%;
        margin: auto;
    }

.heading-section{

    width: 60%;
    text-align: center;
    margin: auto;
}  



.content-section{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
}

#card{
    flex: 1;
    margin: 40px 20px;
}

img{
    width: 400px;
    height: 200px;
}

#h4{
margin-top: 20px;    
}

#p{
font-size: 15px;
margin-top: 10px;
color: black;   
line-height: 1.75 ; 
}
.center{
    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

@media screen and (max-width: 768px) {
    .content-section{
        flex-direction: column;
    }
}

</style> 
</head>
<body>
    <!-- navBar Start -->
<div class="text-white py-3 row" style="background-color: #0A2558;">
        <div class="col-md-6">
            <h1>&nbsp;&nbsp;BLOGS OF MOBiCO</h1>
        </div>        
        <div class="col-md-6 ">
            <a href="index.php" class="btn btn-dark btn-md m-2 float-right"><i class='bx bx-home' style='color:#ffffff'  ></i> </a> 
        </div>
    </div>
    
        <!-- navBar End -->

<?php include("dbh/config.php");
    $id = $_GET['id'];
  
?>

<div class=" content-section"> 
        <?php 
            $sql = "SELECT * FROM data where id = $id order by RAND() limit 3 ";
            $res = $con->query($sql);

            if($res->num_rows > 0){
                while($row = $res ->fetch_assoc()){ ?>
                    
                    <div class="card" id="card">
                    <h1 id='h1' style="color:#000051; text-decoration:underline;" class="text-center"><?php echo $row['title']?></h1>
                    <br>
                    <img src="Admin/images/<?php echo $row['images']?>" class="center border responsive" alt="Mobiles" style="width:40%; " >
                   
                   <p id="p" class="p-4"><?php echo $row['content']?></p>

                </div>
               <?php
                }
            }
        ?>
    </div>

</body>
</html>