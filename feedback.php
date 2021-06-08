<?php
    include('connect.php');

    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $message = $_GET['message'];

    if(mysqli_query($con,"insert into th_feedback(name,email,mobile,message) values('$name','$email','$phone','$message')")){
        echo("<script type='text/javascript'>
                window.alert('Thank you for contacting us. We will be back to you soon.');
                window.location.href='contact.php';
              </script>");
    } else{
            echo("<script type='text/javascript'>
                    window.alert('Something is Wrong!!');
                    window.location.href='contact.php';
                  </script>");
    }
?>
