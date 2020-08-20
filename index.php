<?php
  include_once("./phpScripts/loadDb.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Run Tracker</title>

    <!-- Styling for index.html -->
    <link rel='stylesheet' href='./styles/styles.css'>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="login" onclick="login()">
            Login
        </div>
    </div>
    <div class="flex-container">
        <div class="content-container">
            <!-- Actual input for distance.-->
            <h1>Run Tracker</h1>
            <form method="post" action="./phpScripts/addToDb.php">
                <p><label for="run-count">Distance Ran:</label>
                <input type='text' name="run-count" id="run-count" class='form-input'/></p>
                <div class="form-break"></div> <!-- Find a better way to do this! -->
                <p><label for='day'>Day (MM/DD/YYYY):</label>
                <input type='text' name='day' id='day' class='form-input'/></p>
                <div class="form-break"></div>
                <p><label for='location'>Location of Run:</label>
                <input type='text' name='location' id='location' class='form-input'/></p>
                <input class='submit-btn' type="submit" name="submit"/>
            </form>
        </div>
    </div>
</body>
</html>
