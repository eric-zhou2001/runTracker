<?php
    function addToRuntracker($input) {
        $sql = "INSERT INTO 
            users (user_id, miles_run, date, location
            VALUES (1, $input['run-count'], $input['day'], $input['location'])"
    }

    addToRuntracker($input);

    # Redirects to original website.
    header("Location: http://localhost/test/runTracker/");