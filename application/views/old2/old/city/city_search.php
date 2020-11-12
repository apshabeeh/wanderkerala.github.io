<section class="fdb-block" style="background-image: url(<?php echo base_url('assets/imgs/hero/red.svg'); ?>);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7 col-xl-5 text-center">
                <div class="fdb-box">
                    <div class="row">
                        <div class="col">
                            <h1>Intra-City</h1>
                            <p>Search for intra-city buses</p>
                        </div>
                    </div>
                    <?php echo validation_errors(); ?>
                    <form action="<?php echo base_url('index.php/city/index'); ?>" method="post">
                        <div class="row mt-4">
                            <div class="col">
                                <!-- <input type="text" class="form-control" placeholder="Email"> -->
                                <select name="city" class="form-control" id="city">
                                    <option value="Trivandrum">Thiruvananthapuram</option>
                                    <option value="Ernakulam">Ernakulam</option>
                                    <option value="Calicut">Calicut</option>
                                    <option value="Kannur">Kannur</option>
                                    <option value="Thrissur">Thrissur</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <input type="text" name="source" class="form-control" placeholder="Source">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <input type="text" name="destination" class="form-control mb-1" placeholder="Destination">
                                <!-- <p class="text-right"><a href="#">Recover Password</a></p> -->
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-outline-secondary" type="Submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>