<?php 
    include('connect.php');

    $del = $_REQUEST['id'];

    $sql = mysqli_query($con,"delete from th_package_details where id = $del");
    if($sql){
        header('location:tour-packages.php');
    } else {
        echo "<script>alert('Invalid');</script>";
    }
?>