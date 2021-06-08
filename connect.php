<?php 
    session_start();
    $con = mysqli_connect("localhost","root","","travelhut") or
        die("Connection not established".mysqli_error());
?>