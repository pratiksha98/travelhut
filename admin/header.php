<?php include('connect.php'); ?>
<?php
    if(!isset($_SESSION['username'])){
        header('location:index.php');
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width,initial-scale=1'>
        <title>TravelHut</title>

        <!-- Stylesheet start from here -->
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'>
        <link rel='stylesheet' href='css/main.css'>
        <!-- End of Stylesheet -->
    </head>

    <body>
        <!-- Navbar starts from here -->
        <nav class='navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-4 border-dark fixed-top'>
            <div class='container-fluid'>
                <a href='dashboard.php' class='navbar-brand ml-5 pl-5'>TravelHut</a>

                <div class='justify-content-end'>
                    <ul class='navbar-nav'>
                        <li class='nav-item dropdown'>
                            <a href='#' id='account' class='nav-link text-light dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Welcome,&nbsp;<?php echo $_SESSION['username'];?>&nbsp;</a>
                            <div class='dropdown-menu shadow bg-dark border border-0' aria-labelledby='account'>
                                <a href='logout.php' class='dropdown-item bg-custom text-white'>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->

        <!-- Content starts from here -->
        <section class='container-fluid'>
            <div class='row'>
                <!-- Sidebar starts from here -->
                <div class='col-2 d-none bg-dark d-md-block sidebar shadow'>
                    <div class='left-sidebar'>
                        <ul class='nav flex-column sidebar-nav'>
                            <li class='nav-item my-2'>
                                <a class='nav-link px-5' href='dashboard.php'><i class='fas fa-tachometer-alt'></i>&nbsp;&nbsp;Dashboard</a> 
                            </li>

                            <li class='nav-item my-2'>
                                <a class='nav-link px-5' href='customers.php'><i class='fas fa-users'></i>&nbsp;&nbsp;Customers</a> 
                            </li>

                            <li class='nav-item my-2'>
                                <a class='nav-link px-5' href='tour-packages.php'><i class='fas fa-archway'></i>&nbsp;&nbsp;Tour Packages</a> 
                            </li>

                            <li class='nav-item my-2'>
                                <a class='nav-link px-5' href='booking.php'><i class='fas fa-address-book'></i>&nbsp;&nbsp;Bookings</a>
                            </li>

                            <li class='nav-item my-2'>
                                <a class='nav-link px-5' href='hotel.php'><i class='fas fa-hotel'></i>&nbsp;&nbsp;Hotels</a>
                            </li>
                            
                            <li class='nav-item my-2'>
                                <a class='nav-link px-5' href='feedback.php'><i class='fas fa-comment-alt'></i>&nbsp;&nbsp;Feedbacks</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End of Sidebar -->
