<?php 
    include('connect.php');

    $package_id = $_GET['package_id'];
    $subpackage_name = $_GET['subpackage-name'];

    if(mysqli_query($con,"insert into th_subpackage(package_id,subpackage_name) values ('$package_id','$subpackage_name')")){
        echo ("<script type='text/javascript'>
                alert('Package & Subpackage added successfully');
                window.location.href='tour-packages.php';
              </script>");
    } else {
        echo ("<script type='text/javascript'>
                    alert('Package & Subpackage failed to add');
                    window.location.href='tour-package.php';
               </script>");
    }

?>