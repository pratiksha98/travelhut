<?php
    include('connect.php');

    $category_id = $_POST['cat_id'];

    $sql = mysqli_query($con,"select * from th_subpackage where package_id = '$category_id'");
        echo "<option disabled>Select your Subcategory</option>";
    while($row = mysqli_fetch_array($sql)){
        echo "<option value='".$row[0]."'>".$row[2]."</option>";
    }
?>