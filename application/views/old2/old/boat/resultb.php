<?php
                    if (!empty($results)) {
                        // echo "<table class='table table-bordered table-hover'>";
                        // echo "<thead style='background-color: #7643ea; color: #fff; text-align: center;'>";
                        // echo "<tr>";
                        // echo "<th>Bus Type</th>";
                        // echo "<th>Trip Details</th>";
                        // echo "<th>Departure</th>";
                        // echo "<th>Arrival</th>";
                        // echo "</tr>";
                        // echo "</thead>";
                        // echo "<tbody style='text-align: center;'>";
                        foreach ($results as $result) {
                            echo "<tr>";
                            echo "<td>" . $result['bus_type'] . "</td>";
                            echo "<td>" . $result['route_name'] . "</td>";
                            echo "<td>" . date("h:i A", strtotime($result['departure_time'])) . "</td>";
                            echo "<td>" . date("h:i A", strtotime($result['arrival_time'])) . "</td>";
                            echo "<td><button type='button' class='btn btn-danger boat-info' data-toggle='modal' data-target='#exampleModal'
                            data-id=" .$result['trip_id']. ">Info</button>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                    } else {
                        echo "<h3 class='text-center text-white bg-danger' style='border:1px black;'>No results found</h3>";
                    }
                    ?>
                </div>
        <h3 class='text-center' style='margin-top: 20px; margin-bottom: 30px;'>Help us to improve the details of Boat schedules. <a href="#">Contact us</a></h3>

            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bus Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #7643ea; color: #fff; text-align: center;">
                                <tr>
                                    <th>Stops</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody class="details text-center">

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

</body>

</html>