<?php 
    include('connect.php');

    $del = $_REQUEST['id'];

    $sql = mysqli_query($con,"delete from th_booking where id = $del");
    if($sql){
        header('location:booking.php');
    } else {
        echo "<script>alert('Invalid');</script>";
    }
?>