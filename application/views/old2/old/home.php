<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Search My Ride</title>
    <link rel="icon" href="<?php echo base_url('assets/img/core-img/favicon.ico'); ?> ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
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
                        <a class="navbar-brand" href="<?php echo base_url('index.php/bus/index'); ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/core-img/b.png'); ?>" alt=""></a>
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
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(<?php echo base_url('assets/img/bg-img/hero-1.jpg'); ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>Discover places near you</h2>
                        <h4>This is the best guide of your city</h4>
                    </div>
                    <div class="hero-search-form">
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="true">Bus</a>
                            <a class="nav-item nav-link" id="nav-stops-tab" data-toggle="tab" href="#nav-stops" role="tab" aria-controls="nav-stops" aria-selected="false">Stops</a>
                            <a class="nav-item nav-link" id="nav-boats-tab" data-toggle="tab" href="#nav-boats" role="tab" aria-controls="nav-boats" aria-selected="false">Boats</a>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                                <h6>What are you looking for?</h6>
                                <h6><?php echo validation_errors(); ?></h6>
                                <form action="<?php echo base_url('index.php/bus/index'); ?>" method="post">
                                    <input type="text" name="source" id="source" class="custom-input" placeholder="Source">
                                    <input type="text" name="destination" id="destination" class="custom-input" placeholder="Destination">
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="false"></i> Search</button>
                                </form>
                            </div>
                            <div class="tab-pane fade " id="nav-stops" role="tabpanel" aria-labelledby="nav-stops-tab">
                                <h6>What are you looking for?</h6>
                                <h6><?php echo validation_errors(); ?></h6>
                                <form action="<?php echo base_url('index.php/stops/stop_search'); ?>" method="post">
                                    <input type="text" name="stop" id="stop" class="custom-input" placeholder="Stop">
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                            <div class="tab-pane fade " id="nav-boats" role="tabpanel" aria-labelledby="nav-boats-tab">
                                <h6>What are you looking for?</h6>
                                <?php echo validation_errors(); ?>
                                <form action="<?php echo base_url('index.php/boats/boat_search'); ?>" method="post">
                                    <input type="text" name="source" id="boat_source" class="custom-input" placeholder="Source">
                                    <input type="text" name="destination" id="boat_destination" class="custom-input" placeholder="Destination">
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url('assets/js/jquery/jquery-2.2.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/others/plugins.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/active.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bus.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>


</body>

</html>