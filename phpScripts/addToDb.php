<?php
    include_once("./connectToDatabase.php");

    $miles_run = floatval(mysqli_real_escape_string($conn, $_POST['run-count']));
    $date = date("Y-m-d", strtotime(mysqli_real_escape_string($conn, $_POST['day'])));
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $user_id = 1;
    # Why does $_POST not work in the SQL line itself?

    var_dump($miles_run, $date, $location);

    $sql = "INSERT INTO 
        runs (user_id, miles_run, date, location) 
        VALUES ($user_id, $miles_run, '$date', '$location');";

    if (mysqli_query($conn, $sql)) {
        echo"Successfully added to database!";
    } else {
        echo"Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    # Redirects to original website.
    header("Location: http://localhost/test/runTracker/");
?>