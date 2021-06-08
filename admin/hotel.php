<?php include('header.php'); ?>

<!-- Main Content starts from here -->
<div class='col-10 main' role='main'>
    <h3 class='px-4'><i class='fas fa-hotel'></i>&nbsp;&nbsp;Hotels</h3>
    <hr>
    <div class='container-fluid my-5'>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link text-dark text-decoration-none font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. Hotel Details Form
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <form method='get' action='hotel_insert.php'>
                            <div class='form-row'>
                                <div class='form-group col'>
                                    <input type='text' name='hotel-name' placeholder='Name of Hotel' class='form-control'>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='form-group col'>
                                    <input type='text' name='hotel-price' placeholder='Price' class='form-control'>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='form-group col'>
                                    <textarea name='hotel-address' rows='5' cols='5' placeholder='Address of Hotel' class='form-control'></textarea>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='form-group col'>
                                    <input type='text' name='hotel-city' placeholder='City' class='form-control'>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='form-group col'>
                                    <input type='text' name='hotel-state' placeholder='State' class='form-control'>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='form-group col'>
                                    <input type='submit' class='btn btn-warning w-25 float-right font-weight-bold form-control'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link text-dark text-decoration-none font-weight-bold collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2. Hotel Details
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <table id="table_id" class="display">
                            <thead> 
                                <tr>
                                    <th>ID</th>
                                    <th>Hotel Name</th>
                                    <th>Price</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = mysqli_query($con,"select * from th_hotel");
                                    while($row = mysqli_fetch_array($sql)){
                                        echo "<tr>
                                                <td>".$row[0]."</td>
                                                <td>".$row[1]."</td>
                                                <td>".$row[2]."</td>
                                                <td>".$row[3]."</td>
                                                <td>".$row[4]."</td>
                                                <td>".$row[5]."</td>
                                                <td><a href='delete1.php?id=$row[0];'>Delete</a></td>
                                            </tr>"; 
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>