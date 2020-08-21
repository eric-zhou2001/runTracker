<?php
    $user = 'root';
    $password='root';
    $db='runtracker';
    $host='localhost';

    $conn = mysqli_connect($host, $user, $password, $db);

    $runCount = $_POST['newRunCount'];

    $sql = "SELECT * FROM runs LIMIT $runCount";
    $result = mysqli_query($conn, $sql);

    $total_miles = 0;
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        $miles_run = $row['miles_run'];
        $location = $row['location'];
        $date = $row['date'];
        $total_miles += $miles_run;
        echo "
        <div class='run'>
            <p>Distance: $miles_run miles</p>
            <p>Location: $location</p>
            <p>Date: $date</p>
        </div>
        ";
        }
    } else {

    }

    // Load the total miles.
    echo "
    <div class='total-miles'>
        <p>Total Miles of Runs Displayed: $total_miles </p>
    </div>
    ";
?>
