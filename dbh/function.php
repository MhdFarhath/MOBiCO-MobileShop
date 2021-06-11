<?php 
function checklogin($con){
    if(isset($_SESSION['user_id'])){
       
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM adminDetails WHERE user_id  = '$id' LIMIT 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0 ){
            $userdata = mysqli_fetch_assoc($result);
            return $userdata;
        }
    }
    header("Location: login.php");
    die;
}

function RandomNum($length){

    $text = "";
    if($length < 5){
        $length = 5;
    }

    $len = rand(4,$length);
    return $len;
}

?>