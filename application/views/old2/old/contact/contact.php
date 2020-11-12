<section class="fdb-block bg-dark" style="background-image: url(<?php echo base_url('assets/imgs/hero/blue.svg');?>);">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
                <h1>Contact Us</h1>
                <h2>We love to hear from you!</h2>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-12">
            <?php echo validation_errors();    
            if (!empty($status)) {
                    echo "<p class='field-error>".$status."</p>";
                }
            ?>
                <form action="<?php echo base_url('index.php/contact/index');?>" method="post">
                    <div class="row">
                        <div class="col-12 col-md">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-12 col-md mt-4 mt-md-0">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-12 col-md mt-4 mt-md-0">
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <button type="submit" name="contactsubmit" class="btn btn-dark">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>