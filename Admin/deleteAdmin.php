    <?php
    include_once('../dbh/config.php');
    $id = $_GET['id'];
    mysqli_query($con,"DELETE FROM adminDetails WHERE UID ='$id'");
    mysqli_close($con);
    header("Location: adminRoles.php");
    ?> 