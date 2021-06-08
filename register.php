<?php
    include('connect.php'); 

    $name = $_POST['name'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $mobile = $_POST['phone'];
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $confirmPassword = mysqli_real_escape_string($con,$_POST['confirmPassword']);
    if($password == $confirmPassword){
        $pass = md5($password);
        $result = mysqli_query($con,"insert into th_user(name,username,password,dob,mobile) values('$name','$username','$pass','$dob','$mobile')");
        if($result)
        {
            header("location:index.php");
        }
        
           
    } else {
        echo "<script type='text/javascript'>
            window.alert('Invalid Credentials');
            window.location.href='index.php';
            </script>";
    }

?>