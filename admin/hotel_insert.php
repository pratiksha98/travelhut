<?php 
    include('connect.php');

    $hotel_name = $_GET['hotel-name'];
    $price = $_GET['hotel-price'];
    $address = $_GET['hotel-address'];
    $city = $_GET['hotel-city'];
    $state = $_GET['hotel-state'];

    $insert = mysqli_query($con,"insert into th_hotel (name,price,address,city,state) values ('$hotel_name','$price','$address','$city','$state')");
    if($insert){
        header('location:hotel.php');
    } else {
        echo "<script>
            alert('Error in insertion');
            window.location.href='hotel.php';
        </script>";
    }