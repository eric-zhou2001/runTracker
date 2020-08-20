<?php
  $user = 'root';
  $password='root';
  $db='runtracker';
  $host='localhost';

  $conn = mysqli_connect($host, $user, $password, $db);

  function loadDb($conn) {
    $sql = "SELECT * FROM runs";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["user_id"]. " - miles_run: " . $row["miles_run"]. " -date: " . $row["date"] . "-location: " . $row["location"] . "<br>";
      }
    } else {
      echo "0 results";
    }
  }
?>
