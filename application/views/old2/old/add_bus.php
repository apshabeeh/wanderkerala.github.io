<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add bus</title>
    <style>
        input[type=text], select {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 50%;
            float: right;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            margin: auto;
            width: 75%;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        label {
            width: 25%;
            float: left;
        }
        .agency, .routes, .trips, .stops, .stop-times {
            margin: auto;
            width: 50%;
        }
    </style>
</head>
<body>
    <?php if($this->session->flashdata('msg')): ?>
        <p><?php echo $this->session->flashdata('msg'); ?></p>
    <?php endif; ?>
    <div class="agency">
        <h1>Add Agency</h1>
        <form action="<?php echo base_url('index.php/Data/add_agency'); ?>" method="post">
            <label >Agency Id:</label>
            <input required="required" type="text" name="agency_id"><br>
            <label >Name:</label>
            <input required="required" type="text" name="agency_name"><br>
            <label >Phone:</label>
            <input required="required" type="text" name="agency_phone"><br>
            <label >Language:</label>
            <input required="required" type="text" name="agency_lang"><br>
            <input type="submit" value="Submit"  id="agency-button">
        </form>
    </div>
    <div class="routes">
        <h1>Add Routes</h1>
        <form action="<?php echo base_url('index.php/Data/add_routes'); ?>" method="post">
            <label >Route Id:</label>
            <input required="required" type="text" name="route_id"><br>
            <label >Agency Id:</label>
            <input required="required" type="text" name="agency_id"><br>
            <label >Route Name:</label>
            <input required="required" type="text" name="route_name"><br>
            <label >Route Description:</label>
            <input required="required" type="text" name="route_desc"><br>
            <input type="submit" value="Submit"  id="routes-button">
        </form>
    </div>
    <div class="trips">
        <h1>Add Trips</h1>
        <form action="<?php echo base_url('index.php/Data/add_trips'); ?>" method="post">
            <label >Trip Id:</label>
            <input required="required" type="text" name="trip_id"><br>
            <label >Trip Name:</label>
            <input required="required" type="text" name="trip_name"><br>
            <label >Route Id:</label>
            <input required="required" type="text" name="route_id"><br>
            <input type="submit" value="Submit"  id="trips-button">
        </form>
    </div>
    <div class="stops">
        <h1>Add Stops</h1>
        <form action="<?php echo base_url('index.php/Data/add_stops'); ?>" method="post">
            <label >Stop Id:</label>
            <input required="required" type="text" name="stop_id"><br>
            <label >Stop Name:</label>
            <input required="required" type="text" name="stop_name"><br>
            <label >Stop Lat:</label>
            <input required="required" type="text" name="stop_lat"><br>
            <label >Stop Long:</label>
            <input required="required" type="text" name="stop_long"><br>
            <label >Location Type:</label>
            <input required="required" type="text" name="location_type"><br>
            <label >Stop Description:</label>
            <input required="required" type="text" name="stop_desc"><br>
            <label >Zone Id:</label>
            <input required="required" type="text" name="zone_id"><br>
            <input type="submit" value="Submit"  id="stops-button">
        </form>
    </div>
    <div class="stop-times">
        <h1>Add stop-times</h1>
        <form action="<?php echo base_url('index.php/Data/add_stop_times'); ?>" method="post">
            <label >Trip Id:</label>
            <input required="required" type="text" name="trip_id"><br>
            <label >Stop Id:</label>
            <input required="required" type="text" name="stop_id"><br>
            <label >Stop Sequence:</label>
            <input required="required" type="text" name="stop_sequence"><br>
            <label >Arrival Time:</label>
            <input required="required" type="text" name="arrival_time"><br>
            <input type="submit" value="Submit"  id="stop_times-button">
        </form>
    </div>
</body>
</html>