<section class="fdb-block" style="background-image: url(<?php echo base_url('assets/imgs/hero/blue.svg'); ?>);">
    <div class="container">
        <div class="fdb-box">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-6">
                    <h2>Stop Schedule</h2>
                    <p class="lead">Search for a station to get the buses servicing through that station </p>
                </div>
                <div class="col-12 col-lg-5 text-center">
                    <?php echo validation_errors(); ?>
                    <form action="<?php echo base_url('index.php/stops/stop_search'); ?>" method="post">
                        <div class="input-group mt-4">
                            <input type="text" id="stop" name="stop" class="form-control"
                                placeholder="Enter stop name">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        jQuery("#stop").autocomplete({
            // 'autoFill': true,
            focus: function(event,ui){
                $('#stop').val(ui.item.value);
            },
            select: function(event, ui) {
                $('#stop').val(ui.item.label);
                // $('#source-id').val(ui.item.value);
                return false;
            },
            change: function(event, ui) {
                if (!ui.item) {
                    $('#stop').val("");
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