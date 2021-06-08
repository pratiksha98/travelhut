<?php include('header.php'); ?>

<!-- Main Content starts from here -->
<div class='col-10 main' role='main'>
    <h3 class='px-4'><i class='fas fa-archway'></i>&nbsp;&nbsp;Tour Packages</h3>
    <hr>

    <div class='container-fluid'>
        <div id='main-accordion'>
            <!-- Tour Package Form starts from here -->
            <div class='card mb-4'>
                <div class='card-header bg-light' id='main-card'>
                    <h2 class='h2 card-title mb-0'>
                        <button class='btn btn-link text-dark text-decoration-none font-weight-bold' data-toggle='collapse' data-target='#tourpackage'>1. Tour Package Form</button>
                    </h2>
                </div>

                <div class='card-body collapse show' id='tourpackage' aria-labelledby='#main-card' data-parent='#main-accordion'>
                    <div id='accordion'>
                        <!-- Package Name form starts here -->
                        <div class='card mb-4'>
                            <div class='card-header bg-dark' id='card1'>
                                <h2 class='h2 card-title mb-0'>
                                    <button class='btn btn-link text-light text-decoration-none font-weight-bold' data-toggle='collapse' data-target='#packageName'>a. &nbsp;Package Form</button>
                                </h2>
                            </div>

                            <div id='packageName' class='collapse' aria-labelledby='#card1' data-parent='#accordion'>
                                <div class='card-body'>
                                    <form method='get' action='package_name.php'>
                                        <div class='form-row'>
                                            <div class='form-group col-12'>
                                                <input type='text' name='package-name' placeholder='Package Name' class='form-control' required>
                                            </div>

                                            <div class='form-group col-12'>
                                                <input type='submit' class='btn btn-primary form-control w-25 float-right'>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Ending of Package name form -->

                        <!-- Sub package form starts from here -->
                        <div class='card my-4'>
                            <div class='card-header bg-dark' id='card2'>
                                <h2 class='h2 card-title mb-0'>
                                    <button class='btn btn-link text-light text-decoration-none font-weight-bold collapsed' data-toggle='collapse' data-target='#subPackageName'>b. &nbsp;Sub-Package Form</button>
                                </h2>
                            </div>

                            <div id='subPackageName' class='collapse' aria-labelledby='#card2' data-parent='#accordion'>
                                <div class='card-body'>
                                    <form method='get' action='subpackage_name.php'>
                                        <div class='form-row'>
                                            <div class='form-group col-12'>
                                                <select class='form-control' name='package_id'>
                                                    <option selected>Select Package Name</option>
                                                    <?php 
                                                        $query = mysqli_query($con,"select * from th_package");
                                                        while($row = mysqli_fetch_array($query)){
                                                            echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class='form-group col-12'>
                                                <input type='text' name='subpackage-name' placeholder='Sub-Package Name' class='form-control' required>
                                            </div>

                                            <div class='form-group col-12'>
                                                <input type='submit' class='btn btn-primary form-control w-25 float-right'>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Ending of Sub package Name -->

                        <!-- Package details form starts from here -->
                        <div class='card my-4'>
                            <div class='card-header bg-dark' id='card3'>
                                <h2 class='h2 card-title mb-0'>
                                    <button class='btn btn-link text-light text-decoration-none font-weight-bold collapsed' data-toggle='collapse' data-target='#packageDetails'>c. &nbsp;Package Details Form</button>
                                </h2>
                            </div>

                            <div id='packageDetails' class='collapse' aria-labelledby='#card3' data-parent='#accordion'>
                                <div class='card-body'>
                                    <form method='post' action='packageDetails.php'>
                                        <div class='form-row'>
                                            <div class='form-group col-12'>
                                                <select name='package_id' class='form-control' id='cat'>
                                                    <option selected>Select Package Name</option>
                                                    <?php
                                                        $query = mysqli_query($con,"select * from th_package");
                                                        while($row = mysqli_fetch_array($query)){
                                                            echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class='form-group col-12'>
                                                <select name='subpackage_id' class='form-control' id='subcat'>
                                                    <option>Select Subpackage Name</option>
                                                </select>
                                            </div>
                                            
                                            <div class='form-group col-12'>
                                                <select name='hotel' id = 'hotel' class='form-control'>
                                                    <option>Select Hotel</option>
                                                    <?php
                                                     
                                                        $sql = mysqli_query($con,"select * from th_hotel");
                                                        
                                                        while($row = mysqli_fetch_array($sql)){
                                                            echo "<option value='$row[0]'>$row[1]</option>";
                                                            $result = mysqli_fetch_array($sql);
                                                        $_SESSION['a'] = $result[2];
                                                        $price = 1000;
                                                        $price = $_SESSION['a'] + $price;
                                                        }     
                                                    
                                                    ?>
                                                </select>
                                            </div>

                                            <div class='form-group col-12'>
                                                <input type='text' name='price' class='form-control' placeholder='Price'> 
                                            </div>

                                            <div class='form-group col-6'>
                                                <input type='number' name='days' class='form-control' placeholder='No. of days'>
                                            </div>

                                            <div class='form-group col-6'>
                                                <input type='number' name='nights' class='form-control' placeholder='No. of nights'>
                                            </div>

                                            <div class='form-group col-12'>
                                                <textarea name='description' class='form-control' rows='8' cols='8' placeholder='Additional Details'></textarea>
                                            </div>

                                            <div class='form-group col-12'>
                                                <input type='submit' class='form-control btn btn-warning font-weight-bold w-25 float-right'>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Ending of package details form -->
                    </div>
                </div>
            </div>
            <!-- Ending of Tour Package form -->

            <!-- Package details starts from here -->
            <div class='card  my-4'>
                <div class='card-header'>
                    <h2 class='h2 bg-light mb-0' id='main-card1'>
                    <button class='btn btn-link text-dark text-decoration-none font-weight-bold collapsed' data-toggle='collapse' data-target='#packagetable'>2. Tour Package Details</button>              
                    </h2>
                </div>
            </div>

            <div id="packagetable" class="collapse" aria-labelledby="#main-card1" data-parent="#main-accordion">
                    <div class="card-body">
                        <table id="table_id" class="display">
                            <thead> 
                                <tr>
                                    <th>ID</th>
                                    <th>Package id</th>
                                    <th>Subpackage id</th>
                                    <th>Hotel</th>
                                    <th>Price</th>
                                    <th>No.of Days</th>
                                    <th>No. of nights</th>
                                    <th>Additional Details</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = mysqli_query($con,"select * from th_package_details");
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
                                                <td><a href='delete2.php?id=$row[0];'>Delete</a></td>
                                            </tr>"; 
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <!-- End of Package details -->    
        </div>
    </div>
</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>