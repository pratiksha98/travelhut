<?php include('header.php'); ?>

<!-- Main Content starts from here -->
<div class='col-10 main' role='main'>
    <h3 class='px-4'><i class='fas fa-comment-alt'></i>&nbsp;&nbsp;Feedbacks</h3>
    <hr>

    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email id</th>
                <th>Mobile</th>
                <th>Message</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                $sql = mysqli_query($con,"select * from th_feedback");

                if($row = mysqli_fetch_array($sql)){
                    echo "<tr>
                        <td>".$row[0]."</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[4]."</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table> 
</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>