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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto ml-5 mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-white text-bold" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item pl-5">
                        <a class="nav-link text-white text-bold" href="<?php echo base_url('index.php/contact/index'); ?>">Contact Us <span
                                class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="page-wrapper  p-t-165 p-b-100">
        <div class="wrapper wrapper--w720">
            <div class="card card-3">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <form method="POST" action="#">
                                <h3 class="text-white text-center mb-4">Contact Us</h3>
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-1" type="text" name="name" placeholder="Enter Your Name"
                                        required="required">
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Email</label>
                                            <input class="input--style-1" type="email" name="email"
                                                placeholder="Enter Your Email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Phone</label>
                                            <input class="input--style-1" type="text" name="phone"
                                                placeholder="Enter Your Number" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-1" type="text" name="subject" placeholder="Enter Message Subject"
                                        required="required">
                                </div>
                                <div class="input-group">
                                    <label class="label">Message</label>
                                    <!-- <input class="input--style-1" type="text" name="message"
                                        placeholder="Enter Your Name" required="required"> -->
                                    <textarea name="message" placeholder="Enter Your Message" cols="30" rows="6"></textarea>
                                </div>
                                <button class="btn-submit" type="submit">Send Message</button>
                            </form>
                                <!-- <div class="details">
                                    <h3 class="text-white text-center mt-4 mb-4">Contact Details</h3>
                                    <h4 class="text-white">Phone : 8078209092</h4>
                                    <h4 class="text-white">Email : wanderkerala@gmail.com</h4>
                                </div> -->
                        </div>
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