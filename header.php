<?php include("connect.php");

if(isset($_POST['username'])){
	$uname = $_POST['username'];
	$pass = mysqli_real_escape_string($con,$_POST['password']);
    $pass = md5($pass);

	$sql = "select * from th_user where username = '".$uname."' AND password = '".$pass."' limit 1";

	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result) == 1){
		$_SESSION['user'] = $uname;
        while($row = mysqli_fetch_array($result)){
            $_SESSION['id'] = $row[0];
        }
       header('location:index.php');

	} else {
		echo("<script type='text/javascript'>
				window.alert('Invalid Credentials');
				window.location.href='index.php';
			</script>");
	}

}
?>

<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width,initial-scale=1'>
        <title>TravelHut</title>
        <!-- Stylesheet starts -->
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <link rel="stylesheet" href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css' integrity='sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'>
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel='stylesheet' href='css/main.css'>
        <!-- Stylesheet ends -->
    </head>

    <body id='myBody'>
        <!-- Scroll Button starts -->
        <button  id='btnScroll' type='button' onClick='click();'>
            <i class='fas fa-arrow-up fa-2x text-light'></i>
        </button>
        <!-- Scroll Button ends -->


        <!-- Top bar starts -->
        <div class='container-fluid'>
            <div class='row border-bottom border-1'>
                <div class='col'>
                    <div class='row'>
                        <div class='col-8'>
                            <ul class='nav'>
                                <li class='nav-item'><a href='http://facebook.com' class='nav-link'><i class='fab fa-facebook-square text-dark'></i></a></li>
                                <li class='nav-item'><a href='http://twitter.com' class='nav-link'><i class='fab fa-twitter text-dark'></i></a></li>
                                <li class='nav-item'><a href='http://instagram.com' class='nav-link'><i class='fab fa-instagram text-dark'></i></a></li>
                                <li class='nav-item'><a href='http://twitch.tv' class='nav-link'><i class='fab fa-twitch text-dark'></i></a></li>
                            </ul>
                        </div>
                        <div class='col'>
                            <span class='nav nav-item nav-link text-center'>Call us at: <i class='fa fa-phone-alt'></i> 8005544845</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar ends -->

        <!-- Navigation bar starts -->
        <nav class='navbar navbar-expand-lg navbar-light sticky-top bg-white smooth-scroll'>
            <div class='container-fluid'>
                <a href='index.php' class='navbar-brand mx-5'>TravelHut</a>
                <button type='button' class='navbar-toggler' data-toggle='collapse' data-target='#menu'>
                    <span class='navbar-toggler-icon'></span>
                </button>

                <div class='collapse navbar-collapse justify-content-end' id='menu'>
                    <ul class='navbar-nav mr-5'>
                        <li class='nav-item px-4'><a href='index.php' class='nav-link active'>Home&nbsp;</a></li>

                        <li class='nav-item px-4'><a href='index.php#about' class='nav-link'>About Us</a></li>

                        <li class='nav-item px-4'><a href='index.php#services' class='nav-link'>Services</a></li>

                        <li class='nav-item px-4 dropdown'><a href='#' id='tour-packages' class='nav-link dropdown-toggle' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Tours & Packages&nbsp;</a>
                            <div class='dropdown-menu border border-0' aria-labelledby='tour-packages'>
                                <a class='dropdown-item' href='#'>Best Selling Destinations</a>
                                <div class='dropdown-divider'></div>
                                <a class='dropdown-item' href='#'>Chaar Dhaam Yatra Packages</a>
                                <div class='dropdown-divider'></div>
                                <a class='dropdown-item' href='#'>Summer Holiday Packages</a>
                            </div>
                        </li>

                        <li class='nav-item px-4'><a href='index.php#gallery' class='nav-link'>Gallery</a></li>

                        <li class='nav-item px-4'><a href='contact.php' class='nav-link'>Contact Us</a></li>

                        <?php
                            if(isset($_SESSION['user'])){
                                $status = 1;

                                echo "<script>
                                    document.getElementById('myBody').onload = function(){

                                        $(document).ready(function(){
                                            $('#booking').modal('show');
                                        });
                                    }
                                    </script>";

                                echo "<li class='nav-item px-4 dropdown'>
                                        <a href='#' role='button' class='nav-link dropdown-toggle' data-toggle='modal' data-target='#booking' data-toggle='dropdown' id='account' aria-haspopup='true' aria-expanded='false'>Welcome,&nbsp;".$_SESSION['user']."
                                        </a>
                                        <div class='dropdown-menu border border-0' aria-labelledby='account'>
                                            <a class='dropdown-item bg-white' href='my-tour.php'>My Tour</a>
                                            <div class='dropdown-divider'></div>
                                            <a class='dropdown-item bg-white' href='logout.php'>Logout</a>
                                        </div>
                                </li>";



                                $sql = mysqli_query($con,"update th_user set status = '".$status."' where id = '".$_SESSION['id']."'");
                            } else {
                                echo "<li class='nav-item px-4'><a href='#' role='button' data-toggle='modal' data-target='#userPanel' class='nav-link'>Account</a></li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation bar ends -->

        <!-- User account section starts -->
        <div class='modal fade' tabindex='-1' role='dialog' id='userPanel'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-body bg-transparent'>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item w-50 border-right border-secondary">
                                <a class="nav-link text-dark text-center font-weight-bold active" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
                            </li>
                            <li class="nav-item w-50">
                                <a class="nav-link text-center text-dark font-weight-bold" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <!-- Registration form starts -->
                            <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form class='mt-3' method='post' action='register.php'>
                                    <div class='form-group'>
                                        <input type='text' name='name' placeholder='Full Name' class='form-control' required>
                                    </div>

                                    <div class='form-group'>
                                        <input type='text' name='username' placeholder='Username' class='form-control' required>
                                    </div>

                                    <div class='form-group'>
                                        <input type='password' name='password' placeholder='Password' class='form-control' required>
                                    </div>

                                    <div class='form-group'>
                                        <input type='password' name='confirmPassword' placeholder='Confirm Password' class='form-control' required>
                                    </div>


                                    <div class='form-group'>
                                        <input type='date' name='dob' class='form-control' required>
                                    </div>

                                    <div class='form-group'>
                                        <input type='tel' name='phone' placeholder='Mobile Number' class='form-control' required>
                                    </div>

                                    <div class='form-group'>
                                        <input type='submit' name='register' value='Submit' class='btn btn-info form-control' required>
                                    </div>
                                </form>
                            </div>
                            <!-- Registration form ends -->

                            <!-- Login form starts -->
                            <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                                <form class='mt-3' method='post'>
                                    <div class='form-group'>
                                        <input type='text' name='username' placeholder='Username' class='form-control' required>
                                    </div>

                                    <div class='form-group'>
                                        <input type='password' name='password' placeholder='Password' class='form-control' required>
                                    </div>

                                    <div class='forgot-link d-flex justify-content-end'>
                                        <a href='#'>Forgot Password?</a>
                                    </div>

                                    <div class='form-group mt-2'>
                                        <input type='submit' name='login' value='Login' class='form-control btn btn-info'>
                                    </div>
                                </form>
                            </div>
                            <!-- Login form ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- User account section ends -->


        <!-- Booking form starts -->
        <div class='modal fade' tabindex = '-1' role='dialog' id='booking' aria-hidden='true'>
            <div class='modal-dialog modal-xl modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header mb-3'>
                        <h3 class='modal-title text-center w-100' id='bookingForm'>Tour Booking Form</h3>
                    </div>

                    <div class='modal-body'>
                        <form method='post' action='booking.php'>
                            <div class='form-row'>
                                <div class='col form-group'>
                                    <select name='package' id='package' class='form-control'>
                                        <option>Select from package</option>
                                        <?php
                                            $query = mysqli_query($con,"select * from th_package");
                                            while($row = mysqli_fetch_array($query)){
                                                echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='col-12 form-group'>
                                    <input type='date' name='from_date' class='form-control'>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='col form-group'>
                                    <input type='number' name='person' placeholder='No. of Person' class='form-control' min='0'>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='col form-group'>
                                    <input type='text' name='uname' placeholder='Customer Name' class='form-control' required>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='col form-group'>
                                    <input type='email' name='email' placeholder='Email id' class='form-control' required>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='col form-group'>
                                    <input type='tel' name='number' placeholder='Mobile Number' class='form-control' required>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='col form-group'>
                                    <input type='text' name='address1' placeholder='Address Line 1' class='form-control' maxlength='50' required>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='col form-group'>
                                    <input type='text' name='address2' placeholder='Address Line 2' class='form-control'>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='col form-group'>
                                    <input type='text' name='landmark' placeholder='Landmark' class='form-control'>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='col-4 form-group'>
                                    <input type='text' name='city' placeholder='City' class='form-control' required>
                                </div>

                                <div class='col-4 form-group'>
                                    <input type='text' name='state' placeholder='State' class='form-control' required>
                                </div>

                                <div class='col form-group'>
                                    <input type='tel' name='pincode' placeholder='Pincode' class='form-control' required>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='col form-group'>
                                    <input type='text' name='price' id='price' placeholder='Price' class='form-control' readonly>
                                </div>
                            </div>

                            <div class='form-row'>
                                <div class='col form-group'>
                                    <input type='submit' value='Book My Tour' class='btn btn-dark font-weight-bold form-control'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Booking form -->
