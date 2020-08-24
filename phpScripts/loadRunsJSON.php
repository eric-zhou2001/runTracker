<?php
  include_once("connectToDatabase.php");
  $sql = "SELECT * FROM runs";
  $result = mysqli_query($conn, $sql);

  $data = array();
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $run_id = $row['run_id'];
      $miles_run = $row['miles_run'];
      $location = $row['location'];
      $date = $row['date'];

      $data["run_" . $run_id] = array(
        "miles_run" => $miles_run,
        "location" => $location
      );
    }
  } else {

  }
  echo json_encode($data);
  
?>