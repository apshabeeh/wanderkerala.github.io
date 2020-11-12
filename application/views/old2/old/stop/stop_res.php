
<?php
if (!empty($results)) {
    echo "<table class='table table-bordered table-hover'>";
    echo "<thead class='table-danger'>";
    echo "<tr>";
    echo "<th>Trip Details</th>";
    echo "<th>Time</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($results as $result) {
        echo "<tr>";
        echo "<td>" . $result['route_name'] . "</td>";
        echo "<td>" . date("h:i A", strtotime($result['arrival_time'])) . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No results found</p>";
}
?>
</div>
</div>
</div>
</section>
