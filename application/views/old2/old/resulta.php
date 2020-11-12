<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SearchMyRide</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="icon" href="<?php echo base_url('assets/img/core-img/favicon.ico'); ?> ">
    <link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/responsive/responsive.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/style1.css'); ?>" rel="stylesheet">
</head>

<body>
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?php echo base_url('index.php/bus/index'); ?>"><img src="<?php echo base_url('assets/img/core-img/logo.png'); ?>" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo base_url('index.php/bus/index'); ?>">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url('assets/img/bg-img/hero-1.jpg'); ?>)">
    </div>
    <section class="dorne-explore-area d-md-flex">
        <div class="explore-search-area d-md-flex">
            <div class="explore-search-form">
                <h6>What are you looking for?</h6>
                <div class="nav nav-tabs" id="heroTab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-bus-tab" data-toggle="tab" href="#nav-bus" role="tab" aria-controls="nav-bus" aria-selected="true">Bus</a>
                    <a class="nav-item nav-link" id="nav-stops-tab" data-toggle="tab" href="#nav-stops" role="tab" aria-controls="nav-stops" aria-selected="false">Stops</a>
                    <a class="nav-item nav-link" id="nav-boats-tab" data-toggle="tab" href="#nav-boats" role="tab" aria-controls="nav-boats" aria-selected="false">Boats</a>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-bus" role="tabpanel" aria-labelledby="nav-bus-tab">
                        <?php echo validation_errors(); ?>
                        <form action="<?php echo base_url('index.php/bus/index'); ?>" method="post">
                            <input type="text" name="source" id="source" class="custom-input" placeholder="Source">
                            <input type="text" name="destination" id="destination" class="custom-input" placeholder="Destination">
                            <button type="submit" class="btn dorne-btn bg-white text-dark"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-stops" role="tabpanel" aria-labelledby="nav-stops-tab">
                        <h6><?php echo validation_errors(); ?></h6>
                        <form action="<?php echo base_url('index.php/stops/stop_search'); ?>" method="post">
                            <input type="text" name="stop" id="stop" class="custom-input" placeholder="Stop name">
                            <button type="submit" class="btn dorne-btn bg-white text-dark"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-boats" role="tabpanel" aria-labelledby="nav-boats-tab">
                        <form action="#" method="get">
                            <input type="text" class="custom-input" placeholder="Source">
                            <input type="text" class="custom-input" placeholder="Destination">
                            <button type="submit" class="btn dorne-btn bg-white text-dark"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="explore-search-result">
                <div class="col-sm-12 fresh-table full-color-orange">
                    <?php 
                        echo "<h3 class='text-center' style='margin-top: 20px; margin-bottom: 30px;'>Showing buses from " .$source." to " .$destination. "</h3>";
                        echo "<table class='table table-bordered table-hover'>";
                        echo "<thead style='background-color: #7643ea; color: #fff; text-align: center;'>";
                        echo "<tr>";
                        echo "<th>Bus Type</th>";
                        echo "<th>Trip Details</th>";
                        echo "<th>Departure from " .$source. "</th>";
                        echo "<th>Arrival at " .$destination. "</th>";
                        echo "<th>Details</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody style='text-align: center;'>";
                    ?>
                    