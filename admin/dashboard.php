<?php include('header.php'); ?>
    <!-- Main Content starts from here -->
    <div class='col-10 main' role='main'>
        <h3 class='px-4'><i class='fas fa-tachometer-alt'></i>&nbsp;&nbsp;Dashboard</h3>
        <hr>

        <div class='row'>
            <div class='col'>
                <div class='card-container'>
                    <div class='card card1 card-front bg-primary border-primary shadow'>
                        <div class='card-body'>
                            <div class='card-text text-light text-center'>
                                <h5 class='h5 p-5'>
                                    Customers
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class='card card1 card-back bg-primary border-primary shadow'>
                        <div class='card-body'>
                            <div class='card-text text-light text-center'>
                                <h5 class='h5 p-5'>
                                    <?php
                                        $sql = mysqli_query($con,"select count(*) from th_user");
                                        $result = mysqli_fetch_array($sql);
                                        echo $result[0];
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>

            <div class='col'>
                <div class='card-container'>
                    <div class='card card1 card-front bg-danger border-danger shadow'>
                        <div class='card-body'>
                            <div class='card-text text-light text-center'>
                                <h5 class='h5 p-5'>
                                    Bookings
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class='card card1 card-back bg-danger border-danger shadow'>
                        <div class='card-body'>
                            <div class='card-text text-light text-center'>
                                <h5 class='h5 p-5'>
                                    <?php 
                                        $sql = mysqli_query($con,"select count(*) from th_booking");
                                        $result = mysqli_fetch_array($sql);
                                        echo $result[0];
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>

            <div class='col'>
                <div class='card-container'>
                    <div class='card card1 card-front bg-success border-success shadow'>
                        <div class='card-body'>
                            <div class='card-text text-light text-center'>
                                <h5 class='h5 p-5'>
                                    Visitors
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class='card card1 card-back bg-success border-success shadow'>
                        <div class='card-body'>
                            <div class='card-text text-light text-center'>
                                <h5 class='h5 p-5'>0</h5>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>

            <div class='col'>
                <div class='card-container'>
                    <div class='card card1 card-front bg-warning border-warning shadow'>
                        <div class='card-body'>
                            <div class='card-text text-light text-center'>
                                <h5 class='h5 p-5'>
                                    Feedbacks
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class='card card1 card-back bg-warning border-warning shadow'>
                        <div class='card-body'>
                            <div class='card-text text-light text-center'>
                                <h5 class='h5 p-5'>
                                    <?php 
                                        $sql = mysqli_query($con,"select count(*) from th_feedback");
                                        $result = mysqli_fetch_array($sql);
                                        echo $result[0];
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>

        <div class='mt-5 container-fluid'>
            <table id='table_id' class='display'>
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
    </div>
    <!-- End of Main Content -->
    </div>
</section>
<!-- Content ends here -->

<?php include('footer.php'); ?>