<section class="fdb-block" style="background-image: url(<?php echo base_url('assets/imgs/hero/blue.svg'); ?>);">
    <div class="container">
        <div class="fdb-box">
            <div class="row justify-content-center align-items-center">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 text-center">
                        <?php
                        echo "<h2>Chronological time table of buses passing through " . ucwords(strtolower($stop_name)) . "</h2>";
                        ?>
                        <form action="<?php echo base_url('index.php/stops/stop_search'); ?>" method="post">
                            <div class="input-group mt-4 mb-4">
                                <input type="text" name="stop" id="stop" class="form-control" placeholder="Enter stop name">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <form action="<?php echo base_url('index.php/stop/stop_search'); ?>">
                    <div class="input-group mt-4 mb-4">
                        <input type="text" name="stop" class="form-control" placeholder="Enter stop name">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Submit</button>
                        </div>
                    </div>
                </form> -->