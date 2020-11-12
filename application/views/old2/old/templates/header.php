<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Everithing Bus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/froala_blocks.css'); ?>" />
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md no-gutters">
                <div class="col-2 text-left">
                    <a href="https://localhost/dorne/index.php/bus/search">
                        <!-- <img src="./imgs/logo.png" height="30" alt="image" /> -->
                        <span>SearchMyBus</span>
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4"
                    aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center col-md-8" id="navbarNav4">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('index.php/bus/search');?> ">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/city/index'); ?>">City Bus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/stops/stop_search');?> ">Stop Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/contact/index');?> ">Contact</a>
                        </li>
                    </ul>
                </div>

                <ul class="navbar-nav col-2 justify-content-end d-none d-md-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.froala.com"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.froala.com"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.froala.com"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.froala.com"><i class="fab fa-google"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
