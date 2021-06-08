<?php
    include('connect.php');

    $userid = $_SESSION['id'];
    $package = $_POST['package'];
    $from_city = $_POST['from_city'];
    $to_city = $_POST['to_city'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $num_person = $_POST['person'];
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $mobile = $_POST['number'];
    $address1 = $_POST['address1'];
    $address2  = $_POST['address2'];
    $landmark = $_POST['landmark'];
    $address = $address1." ".$address2." ".$landmark; 
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $price = $_POST['price'];

    if(mysqli_query($con,"insert into th_booking (user_id,package_id,from_city,to_city,from_date,to_date,num_person,name,email,mobile,address,city,state,pincode,price) values ('$userid','$package','$from_city','$to_city','$from_date','$to_date','$num_person','$name','$email','$mobile','$address','$city','$state','$pincode','$price')")){
        echo "<script>alert('You have Successfully booked your trip ');</script>";
        header('location:my-tour.php');
    } else {
        echo "<script>alert('Booking Failed);</script>";
        header('location:index.php');
    }

?>