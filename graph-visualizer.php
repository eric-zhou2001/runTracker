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
    <link rel='stylesheet' href='./styles/graph-visualizer.css'>

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
    <script src='./js/graph-visualizer.js'></script>
    <?php
        include_once("./phpScripts/header.includes.php");
    ?>
    <div class="flex-container">
        <div id="v-container" class="content-container"></div>
    </div>
</body>
</html>