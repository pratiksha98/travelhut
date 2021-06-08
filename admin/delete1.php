<?php 
    include('connect.php');

    $del = $_REQUEST['id'];

    $sql = mysqli_query($con,"delete from th_hotel where id = $del");
    if($sql){
        header('location:hotel.php');
    } else {
        echo "<script>alert('Invalid');</script>";
    }
?>