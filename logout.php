<?php include('connect.php'); 
    $status = 0;
    $sql = mysqli_query($con,"update th_user set status = '".$status."' where id = '".$_SESSION['id']."'");
    session_destroy();
    header('location:index.php');
?>