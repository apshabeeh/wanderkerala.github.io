<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Wander</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/destination.png'); ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fontAwesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/hero-slider.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl-carousel.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/datepicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/tooplate-style.css'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'); ?>"></script>
</head>

<body>


    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="left-side">
                        <div class="logo">
                            <a href="<?php echo base_url(); ?>">
                            <img src="<?php echo base_url('assets/img/logo1.png'); ?>" alt="wander Template">
                            </a>
                        </div>
                        <div class="tabs-content">
                            <h4>Choose Your Direction:</h4>
                            <ul class="social-links">
                                <li><a href="http://facebook.com">Find us on <em>Facebook</em><i class="fa fa-facebook"></i></a></li>
                                <!-- <li><a href="http://youtube.com">Our <em>YouTube</em> Channel<i class="fa fa-youtube"></i></a></li> -->
                                <li><a href="http://instagram.com">Follow our <em>instagram</em><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="page-direction-button">
                            <a href="<?php echo base_url('index.php/contact'); ?>"><i class="fa fa-phone"></i>Contact Us Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4>Check availability for <em>direction</em>:</h4>
                                <h3 class=""><?php echo validation_errors(); ?></h3>
                                <form id="form-submit" action="<?php echo base_url('index.php/bus/index'); ?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="from">From:</label>
                                                <input name="source" type="text" class="form-control input" id="source" placeholder="Type a location" required="" >
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="to">To:</label>
                                                <input name="destination" type="text" class="form-control input" id="destination" placeholder="Type a location" required="" >
                                        <div class="col-md-6">
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="btn">Search</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#" class="scroll-top">Back To Top</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-rss"></i></a></li> -->
                        <!-- <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
                    </ul>
                </div>
                <div class="col-md-12">
                    <p>Copyright &copy; Wander Kerala</p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    
    <script src="<?php echo base_url('assets/js/bus.js'); ?>"></script>

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo base_url('assets/js/vendor/jquery-1.11.2.min.js'); ?>"><\/script>')
    </script> -->

    <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>


    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {



            // navigation click actions 
            $('.scroll-link').on('click', function(event) {
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function(event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed) {
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({
                scrollTop: targetOffset
            }, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() {}
            };
        }
    </script>
</body>

</html>