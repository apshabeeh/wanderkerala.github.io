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
    <link href="<?php echo base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>" rel="stylesheet" media="all">
    <!-- <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all"> -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <!-- Main CSS-->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nav.css'); ?>">
</head>

<body class="bg-img-2">
    <header>
        <nav class="navbar navbar-expand-lg navbar-transparent">
            <a class="navbar-brand ml-5 text-white" href="<?php echo base_url(); ?>"><strong>Wander Kerala</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto ml-5 mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-white text-bold" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pl-5">
                        <a class="nav-link text-white text-bold" href="<?php echo base_url('index.php/contact/index'); ?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="page-wrapper  p-t-165 p-b-100">
        <div class="wrapper wrapper--w720">
            <div class="card card-3">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item tab-list__item active" role="presentation">
                            <a class="nav-link active tab-list__link" href="#tab1" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Boats</a>
                        </li>
                        <li class="nav-item tab-list__item" role="presentation">
                            <a class="nav-link tab-list__link" href="#tab2" data-toggle="tab" role="tab" aria-controls="profile" aria-selected="false">Buses</a>
                        </li>
                        <!-- <li class="tab-list__item">
                            <a class="tab-list__link" href="#tab3" data-toggle="tab">flight</a>
                        </li> -->
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                            <form method="POST" action="<?php echo base_url('index.php/boats/boat_search'); ?>">
                                <div class="input-group">
                                    <label class="label">From</label>
                                    <input class="input--style-1" type="text" name="source" id="boat_source" placeholder="Enter Source Name" required="required">
                                    <i class="zmdi zmdi-pin input-group-symbol"></i>
                                </div>
                                <div class="input-group">
                                    <label class="label">To</label>
                                    <input class="input--style-1" type="text" name="destination" id="boat_destination" placeholder="Enter Destination Name" required="required">
                                    <i class="zmdi zmdi-pin input-group-symbol"></i>
                                </div>
                                <!-- <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">check-in</label>
                                            <input class="input--style-1" type="text" name="check-in" placeholder="mm/dd/yyyy" id="input-start">
                                            <i class="zmdi zmdi-calendar-alt input-group-symbol"></i>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">check-out</label>
                                            <input class="input--style-1" type="text" name="check-out" placeholder="mm/dd/yyyy" id="input-end">
                                            <i class="zmdi zmdi-calendar-alt input-group-symbol"></i>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="input-group">
                                    <label class="label">travellers</label>
                                    <i class="zmdi zmdi-account-add input-group-symbol"></i>
                                    <div class="input-group-icon" id="js-select-special">
                                        <input class="input--style-1" type="text" name="traveller" value="1 Adult, 0 Children, 1 Room" disabled="disabled" id="info">
                                        <i class="zmdi zmdi-chevron-down input-icon"></i>
                                    </div>
                                    <div class="dropdown-select">
                                        <ul class="list-room">
                                            <li class="list-room__item">
                                                <span class="list-room__name">Room 1</span>
                                                <ul class="list-person">
                                                    <li class="list-person__item">
                                                        <span class="name">Adults</span>
                                                        <div class="quantity quantity1">
                                                            <span class="minus">-</span>
                                                            <input class="inputQty" type="number" min="0" value="1">
                                                            <span class="plus">+</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-person__item">
                                                        <span class="name">Children</span>
                                                        <div class="quantity quantity2">
                                                            <span class="minus">-</span>
                                                            <input class="inputQty" type="number" min="0" value="0">
                                                            <span class="plus">+</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="list-room__footer">
                                            <a href="#" id="btn-add-room">Add room</a>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="checkbox-row">
                                    <label class="checkbox-container m-r-45">Add a flight
                                        <input type="checkbox" checked="checked" name="add-flight">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkbox-container">Add a car
                                        <input type="checkbox" name="add-car">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> -->
                                <button class="btn-submit" type="submit">search</button>
                            </form>
                            <h3 class="wiggle">OR search boats passing through a particular jetty</h3>
                            <h5 class="text-white "><?php echo validation_errors(); ?></h5>
                            <form action="<?php echo base_url('index.php/boats/jetty'); ?>" method="POST">
                                <div class="input-group">
                                    <label class="label">Jetty</label>
                                    <input class="input--style-1" type="text" name="jetty" id="jetty" placeholder="Enter Jetty Name" required="required">
                                    <i class="zmdi zmdi-pin input-group-symbol"></i>
                                </div>
                                <button class="btn-submit" type="submit">search</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
                            <h5 class="text-white "><?php echo validation_errors(); ?></h5>
                            <form method="POST" action="<?php echo base_url('index.php/bus/index'); ?>">
                                <div class="input-group">
                                    <label class="label">From</label>
                                    <input class="input--style-1" type="text" name="source" id="source" placeholder="Enter Source Name" required="required">
                                    <i class="zmdi zmdi-pin input-group-symbol"></i>
                                </div>
                                <div class="input-group">
                                    <label class="label">To</label>
                                    <input class="input--style-1" type="text" name="destination" id="destination" placeholder="Enter Destination Name" required="required">
                                    <i class="zmdi zmdi-pin input-group-symbol"></i>
                                </div>
                                <!-- <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">check-in</label>
                                            <input class="input--style-1" type="text" name="check-in" placeholder="mm/dd/yyyy" id="input-start">
                                            <i class="zmdi zmdi-calendar-alt input-group-symbol"></i>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">check-out</label>
                                            <input class="input--style-1" type="text" name="check-out" placeholder="mm/dd/yyyy" id="input-end">
                                            <i class="zmdi zmdi-calendar-alt input-group-symbol"></i>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="input-group">
                                    <label class="label">travellers</label>
                                    <i class="zmdi zmdi-account-add input-group-symbol"></i>
                                    <div class="input-group-icon" id="js-select-special">
                                        <input class="input--style-1" type="text" name="traveller" value="1 Adult, 0 Children, 1 Room" disabled="disabled" id="info">
                                        <i class="zmdi zmdi-chevron-down input-icon"></i>
                                    </div>
                                    <div class="dropdown-select">
                                        <ul class="list-room">
                                            <li class="list-room__item">
                                                <span class="list-room__name">Room 1</span>
                                                <ul class="list-person">
                                                    <li class="list-person__item">
                                                        <span class="name">Adults</span>
                                                        <div class="quantity quantity1">
                                                            <span class="minus">-</span>
                                                            <input class="inputQty" type="number" min="0" value="1">
                                                            <span class="plus">+</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-person__item">
                                                        <span class="name">Children</span>
                                                        <div class="quantity quantity2">
                                                            <span class="minus">-</span>
                                                            <input class="inputQty" type="number" min="0" value="0">
                                                            <span class="plus">+</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="list-room__footer">
                                            <a href="#" id="btn-add-room">Add room</a>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="checkbox-row">
                                    <label class="checkbox-container m-r-45">Add a flight
                                        <input type="checkbox" checked="checked" name="add-flight">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkbox-container">Add a car
                                        <input type="checkbox" name="add-car">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> -->
                                <button class="btn-submit" type="submit">search</button>
                            </form>
                            <h3 class="wiggle">OR search buses passing through a particular stop</h3>
                            <form action="<?php echo base_url('index.php/bus/stop_search'); ?>" method="POST">
                                <div class="input-group">
                                    <label class="label">Stops</label>
                                    <input class="input--style-1" type="text" name="stop" id="stop" placeholder="Enter Stop Name" required="required">
                                    <i class="zmdi zmdi-pin input-group-symbol"></i>
                                </div>
                                <button class="btn-submit" type="submit">search</button>
                            </form>
                        </div>
                        <!-- <div class="tab-pane" id="tab3">
                            <form method="POST" action="#">
                                <div class="input-group">
                                    <label class="label">origin</label>
                                    <i class="zmdi zmdi-pin input-group-symbol"></i>
                                    <input class="input--style-1" type="text" name="origin" placeholder="City or airport" required="required">
                                </div>
                                <div class="input-group">
                                    <label class="label">destination:</label>
                                    <i class="zmdi zmdi-pin input-group-symbol"></i>
                                    <input class="input--style-1" type="text" name="destination" placeholder="City or airport" required="required">
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Departing</label>
                                            <i class="zmdi zmdi-calendar-alt input-group-symbol"></i>
                                            <input class="input--style-1" type="text" name="check-in" placeholder="mm/dd/yyyy" id="input-start-2">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">returning</label>
                                            <i class="zmdi zmdi-calendar-alt input-group-symbol"></i>
                                            <input class="input--style-1" type="text" name="check-out" placeholder="mm/dd/yyyy" id="input-end-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="radio-row">
                                    <label class="radio-container m-r-45">First Class
                                        <input type="radio" name="class">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                    <label class="radio-container m-r-45">Business
                                        <input type="radio" name="class">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                    <label class="radio-container">Economy
                                        <input type="radio" checked="checked" name="class">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <button class="btn-submit" type="submit">search</button>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <!-- Jquery JS-->
    <!-- <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script> -->
    <!-- Vendor JS-->
    <!-- <script src="<?php echo base_url('assets/vendor/select2/select2.min.js'); ?>"></script> -->
    <!-- <script src="<?php echo base_url('assets/vendor/jquery-validate/jquery.validate.min.js'); ?>"></script> -->
    <!-- <script src="<?php echo base_url('vendor/bootstrap-wizard/bootstrap.min.js'); ?>"></script> -->
    <!-- <script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script> -->
    <!-- <script src="<?php echo base_url('assets/vendor/datepicker/moment.min.js'); ?>"></script> -->
    <!-- <script src="<?php echo base_url('assets/vendor/datepicker/daterangepicker.js'); ?>"></script> -->

    <!-- Main JS-->
    <!-- <script src="<?php echo base_url('assets/js/global.js'); ?>"></script> -->
    <script src="<?php echo base_url('assets/js/bus.js'); ?>"></script>

    <!-- JavaScript and dependencies -->
    
  
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->