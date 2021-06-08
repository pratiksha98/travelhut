<?php include('header.php'); ?>

<!-- Main Content starts from here -->
<div class='col-10 main' role='main'>
    <h3 class='px-4'><i class='fas fa-users'></i>&nbsp;&nbsp;Customers</h3>
    <hr>

    <table id="table_id" class="display">
        <thead> 
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Date of Birth</th>
                <th>Mobile Number</th>
                <th>Registered On</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = mysqli_query($con,"select  distinct * from th_user");
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
                        </tr>"; 
                }
            ?>
        </tbody>
    </table> 
</div>
<!-- End of Main Content -->
<?php include('footer.php'); ?>