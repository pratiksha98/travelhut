<?php 
    include('connect.php');

    $package_id = $_POST['package_id'];
    $subpackage_id = $_POST['subpackage_id'];
    $hotel = $_POST['hotel'];
    $price = $_POST['price'];
    $cost = $_SESSION['a'];
    $price = $price + $cost;
    echo $price;
    $days = $_POST['days'];
    $nights = $_POST['nights'];
    $description = $_POST['description'];
    $insert = mysqli_query($con,"insert into th_package_details(package_id,subpackage_id,hotel,price,days,nights,description) values ('$package_id','$subpackage_id','$hotel','$price','$days','$nights','$description')");
    if($insert){
        header('location:tour-packages.php');
    } else {
        echo "<script>alert('Error in insertion'); </script>";
    }

?>