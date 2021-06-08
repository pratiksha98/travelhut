<?php include('header.php'); ?>

<!-- Main Content starts from here -->
<div class='col-10 main' role='main'>
    <h3 class='px-4'><i class='fas fa-users'></i>&nbsp;&nbsp;Bookings</h3>
    <hr>

    <table id="table_id" class="display">
        <thead> 
            <tr>
                <th>ID</th>
                <th>User Id</th>
                <th>Package Id</th>
                <th>From(City)</th>
                <th>To(City)</th>
                <th>From(Date)</th>
                <th>To(Date)</th>
                <th>No. of Persons</th>
                <th>Name</th>
                <th>Email Id</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = mysqli_query($con,"select  distinct * from th_booking");
                while($row = mysqli_fetch_array($sql)){
                    echo "<tr>
                            <td>".$row[0]."</td>
                            <td>".$row[1]."</td>
                            <td>".$row[2]."</td>
                            <td>".$row[3]."</td>
                            <td>".$row[4]."</td>                                
                            <td>".$row[5]."</td>
                            <td>".$row[6]."</td>
                            <td>".$row[7]."</td>
                            <td>".$row[8]."</td>
                            <td>".$row[9]."</td>
                            <td>".$row[10]."</td>
                            <td>".$row[11]." ".$row[12]." ".$row[13]." ".$row[14]."</td>
                            <td>".$row[15]."</td>
                            <td><a href='delete.php?id=$row[0];'>Delete</a></td>
                        </tr>"; 
                }
            ?>
        </tbody>
    </table> 
</div>
<!-- End of Main Content -->
<?php include('footer.php'); ?>