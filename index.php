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

    <!-- Open source material -->

    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    
    <!-- JavaScript -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <?php
        include_once("./phpScripts/header.includes.php");
    ?>
    <div class="flex-container">
        <div class="content-container">
            <!-- Actual input for distance.-->
            <h1>Run Tracker</h1>
            <form method="post" action="./phpScripts/addToDb.php" id='run-form'> 
                <p><label for="run-count">Distance Ran:</label>
                <input type='text' name="run-count" id="run-count" class='form-input'/></p>
                <div class="form-break"></div> <!-- Find a better way to do this! -->
                <p><label for='day'>Day (YYYY-MM-DD):</label>
                <input type='text' name='day' id='day' class='form-input'/></p>
                <div class="form-break"></div>
                <p><label for='location'>Location of Run:</label>
                <input type='text' name='location' id='location' class='form-input'/></p>
                <input class='submit-btn' type="submit" name="submit" onclick="checkFormInputs()"/>
            </form>

            <!-- Database queried information -->
            <div id='run-container' class="run-container">
                <?php
                    loadDB($conn);
                ?>
            </div>
            <div class="btn-container">
                <button class='load-btn' onclick='loadMoreRuns()'>Display more runs</button>
                <button class='load-btn' onclick='loadLessRuns()'>Display less runs</button>
            </div>
        </div>
    </div>
</body>
</html>
