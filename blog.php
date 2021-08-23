<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('head.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap');

/* *{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif ;
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

#h1{
    padding: top 30px;
    font-size: 42px;
    color: #000051;
}


#para{
  margin-top: 15px;
  color:mediumvioletred;   
  font-size: 17px;
  line-height: 1.5;
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



#h4{
margin-top: 20px;   


}

#p{
    padding: 20px;
    text-align: justify;
    font-size: 15px;
    margin-top: 10px;
    color: black;   
    line-height: 1.75 ; 
}





</style> 
</head>
<body>
<hr style="background-color:black;">
    <div class="row" id="row">
        <div class="heading-section">
            <h1 id="h1" class="m-2">LATEST  <span>BLOGS!</span> </h1>
            <p id='para'>Welcome to our Latest Blogs!
                            Here, you will find various trending news about our products!
            </p>
        </div>
    </div>
</div>
<div class=" content-section"> 
        <?php include('dbh/config.php');
            $sql = "SELECT * FROM data order by RAND() limit 3";
            $res = $con->query($sql);

            if($res->num_rows > 0){
                while($row = $res ->fetch_assoc()){ ?>
                    
                    <div class="card" id="card">
                    <img src="Admin/images/<?php echo $row['images']?>" alt="Mobiles" style="width:100%">
                    <br>
                    <h5 id='h4' style="color:#000051" class="text-center"><?php echo $row['title']?></h5>
                   <!-- <p id="p"><?php echo $row['content']?></p> -->
                   <p><a href="viewBlog.php?id=<?php echo $row['id'];?>" class="btn btn-dark form-control mb-0  p-2" style="background-color:#0A2558;">View Blog</a></p>
                </div>
               <?php
                }
            }
        ?>
    </div>





    <!-- <div class="row justify-content-center"> 
        <?php /*include('dbh/config.php');
            $sql = "SELECT * FROM data order by RAND() limit 3";
            $res = $con->query($sql);

            if($res->num_rows > 0){
                while($row = $res ->fetch_assoc()){
                    echo "
                    <div class='col-11 '>
                        <div class='card bg-light m-2'>
                            <div class='card-body text-center'>
                                <p class='card-text'  style='font-size:40px'><strong>".$row["title"]."</strong></p> 
                                <h5 class='card-text' style='font-size:15px'>".$row["content"]."</h5>
                            </div>
                        </div>
                    </div>";
                }
            }
            */
        ?>
    </div> -->

</body>
</html>


        

