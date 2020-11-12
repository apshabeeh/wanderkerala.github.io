
    <section class="fdb-block" style="background-image: url(<?php echo base_url('assets/imgs/shapes/1.svg'); ?>);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8 text-center">
                    <div class="row">
                        <div class="col">
                            <h1><strong>Explore</strong></h1>
                            <!-- <p class="lead">God's Own Country</p> -->
                            <h2>God's Own Country</h2>
                            <!-- <p>We provide bus schedules from one station to another</p> -->
                            <h4>We provide bus schedules from one station to another</h4>
                        </div>
                    </div>
                    <?php echo validation_errors(); ?>
                    <form action="<?php echo base_url('index.php/bus/search'); ?> " method="post">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-5 mt-4">
                                <!-- <input type="hidden" id="source-id" name="source" class="form-control" placeholder="Source"> -->
                                <input type="text" id="source" name="source" class="form-control" placeholder="Source name">
                            </div>
                            <div class="col-12 col-md-5 mt-4">
                                <!-- <input type="hidden" id="destination-id" name="destination" class="form-control" placeholder="Destination"> -->
                                <input type="text" id="destination" name="destination" class="form-control" placeholder="Destination name">
                            </div>
                            <div class="col-12 col-md-2 mt-4">
                                <button class="btn btn-secondary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript">
    jQuery(function($) {
        jQuery("#source").autocomplete({
            // 'autoFill': true,
            focus: function(event,ui){
                $('#source').val(ui.item.value);
            },
            select: function(event, ui) {
                $('#source').val(ui.item.label);
                // $('#source-id').val(ui.item.value);
                return false;
            },
            change: function(event, ui) {
                if (!ui.item) {
                    $('#source').val("");
                    return false;
                }
            },
            source: function(request, response) {
                $.ajax({
                    url: "<?php echo base_url('index.php/bus/autocomplete'); ?>",
                    type: 'post',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            }
        });
        jQuery("#destination").autocomplete({
            'autoFill': true,
            select: function(event, ui) {
                $('#destination').val(ui.item.label);
                // $('#destination-id').val(ui.item.value);
                return false;
            },
            change: function(event, ui) {
                if (!ui.item) {
                    $('#destination').val("");
                    return false;
                }
            },
            source: function(request, response) {
                $.ajax({
                    url: "<?php echo base_url('index.php/bus/autocomplete'); ?>",
                    type: 'post',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            }
        });
    });
</script>
