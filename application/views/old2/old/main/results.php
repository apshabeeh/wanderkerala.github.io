<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar ftco-animate">
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4">Find Schedules</h3>
                    <form action="<?php echo base_url('index.php/bus/search');?>" method="POST">
                        <div class="fields">
                            <div class="form-group">
                                <input type="hidden" id="source-id" name="source" class="form-control"
                                    placeholder="Source">
                                <input type="text" id="source" name="source-name" class="form-control"
                                    placeholder="Source name">
                            </div>
                            <div class="form-group">
                                <div class="select-wrap one-third">
                                    <input type="hidden" id="destination-id" name="destination" class="form-control"
                                        placeholder="Destination">
                                    <input type="text" id="destination" name="destination-name" class="form-control"
                                        placeholder="Destination name">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-secondary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="fresh-table full-color-orange">
                        <?php
                            if(!empty($results))
                            {
                                echo "<table class='table table-bordered table-hover'>";
                                echo "<thead class='table-danger'>";
                                echo "<tr>";
                                echo "<th>Trip Details</th>";
                                echo "<th>Departure</th>";
                                echo "<th>Arrival</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                foreach ($results as $result ) {
                                    echo "<tr>";
                                    echo "<td>" .$result['route_name']. "</td>";
                                    echo "<td>" .$result['departure_time']. "</td>";
                                    echo "<td>" .$result['arrival_time']. "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                            }
                            else {
                            echo "<p>No results found</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript">
jQuery(function($) {
    jQuery("#source").autocomplete({
        'autoFill': true,
        select: function(event, ui) {
            $('#source').val(ui.item.label);
            $('#source-id').val(ui.item.value);
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
            $('#destination-id').val(ui.item.value);
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