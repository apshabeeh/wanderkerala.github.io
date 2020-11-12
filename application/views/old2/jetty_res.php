<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="Colrolib">
    <meta name="keywords" content="Colrolib Templates">

    <!-- Title Page-->
    <title>Au Form Wizard</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>"
        rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?>" rel="stylesheet"
        media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <!-- <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all"> -->
    <!-- <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nav.css'); ?>">
</head>

<body>
    <header class="coloro">
        <nav class="navbar navbar-expand-lg navbar-custom">
            <a class="navbar-brand ml-5 text-white" href="<?php echo base_url(); ?>"><strong>Wander Kerala</strong></a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto ml-5 mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-white text-bold" href="<?php echo base_url(); ?>">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pl-5">
                        <a class="nav-link text-white text-bold" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="carding">
        <div class="container hidden-sm-imp">
            <h5 class="text-white "><?php echo validation_errors(); ?></h5>
            <form action="<?php echo base_url('index.php/boats/jetty'); ?>" method="post">
                <div class="row card-body">
                    <div class="col-md-4">
                        <input type="text" name="jetty" id="jetty" class="custom-input"
                            placeholder="Enter Jetty Name">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-danger">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <!-- <div class="row result-mod">
            <div class="col-md-3">
                <h5 class="text-bold text-center">State Water Transport Department</h5>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-5">
                        <h5 class="text-center">04:05 AM</h5>
                    </div>
                    <div class="col-md-2">
                        <h5 class="text-center"> - </h5>
                    </div>
                    <div class="col-md-5">
                        <h5 class="text-center">11:55 PM</h5>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-5">
                        <h5 class="text-center">Ernakulam</h5>
                    </div>
                    <div class="col-md-2">
                        <h5 class="text-center"> </h5>
                    </div>
                    <div class="col-md-5">
                        <h5 class="text-center">Vyttila</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="text-center">Ernakulam - Vyttila</h5>
            </div>
        </div> -->
        <?php
            if (!empty($results)) {
                foreach ($results as $result ) {
                    echo "<div class='row result-mod'>";
                    echo "<div class='col-md-3'>";
                    echo "<h5 class='text-bold text-center'>" .$result['boat_type']. "</h5>";
                    echo "</div>";
                    echo "<div class='col-md-3'>";
                    // echo "<div class='row'>";
                    // echo "<div class='col-sm-5'>";
                    echo "<h4 class='text-center weighter'>" .date("h:i A", strtotime($result['arrival_time'])). "</h4>";
                    echo "<h5 class='text-center'>" .$result['jetty']. "</h5>";
                    echo "</div>";
                    // echo "<div class='col-sm-2'>";
                    // echo "<h5 class='text-center'> - </h5>";
                    // echo "</div>";
                    // echo "<div class='col-sm-5'>";
                    // echo "<h4 class='text-center weighter'>" .date("h:i A", strtotime($result['arrival_time']))."</h4>";
                    // echo "<h5 class='text-center'>" .$result['destination']. "</h5>";
                    // echo "</div>";
                    // echo "</div>";
                    // echo "</div>";
                    echo "<div class='col-md-6'>";
                    echo "<h5 class='text-center'>" .$result['trip_name']. "</h5>";
                    echo "</div>";
                    echo "</div>";
                }
            }
        ?>
        <!-- <div class="row result-mod">
            <div class="col-md-3">
                <h5 class="text-bold text-center">State Water Transport Department</h5>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="text-center weighter">04:05 AM</h4>
                        <h5 class="text-center">Ernakulam</h5>
                    </div>
                    <div class="col-sm-2">
                        <h5 class="text-center"> - </h5>
                    </div>
                    <div class="col-sm-5">
                        <h4 class="text-center weighter">11:55 PM</h4>
                        <h5 class="text-center">Vyttila</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="text-center">Ernakulam - Vyttila</h5>
            </div>
        </div> -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <!-- Vendor JS-->
    <!-- <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script> -->

    <!-- Main JS-->
    <script src="<?php echo base_url('assets/js/global.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bus1.js'); ?>"></script>

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->