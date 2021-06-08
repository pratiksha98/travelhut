<?php 
    include('connect.php');

    $package_name = $_GET['package-name'];

    if(mysqli_query($con,"insert into th_package(package_name) values ('$package_name')")){
        echo ("<script type='text/javascript'>
                alert('Package added successfully');
                window.location.href='tour-packages.php';
              </script>");
    } else {
        echo ("<script type='text/javascript'>
                    alert('Package failed to add');
                    window.location.href='tour-packages.php';
               </script>");
    }

?>