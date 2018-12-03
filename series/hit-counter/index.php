<?php
require 'connect.inc.php';
$user_ip = $_SERVER['REMOTE_ADDR'];

function ip_exists($ip) {
      global $user_ip;
      $query = "SELECT ip FROM hits_ip WHERE ip = '$user_ip'";
      $query_run = mysqli_query($con, $query);
      $mysqli_num_rows = mysqli_num_rows($query_run);
      if (mysqli_num_rows == 0) { //If query is empty
            return false;
      } else if (mysqli_num_rows >= 1) { //If query comes back with a match
            return true;
      }
}

function ip_add ($ip) {
      $query = "INSERT INTO hits_ip VALUES ('$ip')";
      $query_run = mysqli_query($con, $query);
      }

function update_count() {
      $query = "SELECT count FROM hits_count";
      if ($query_run = mysqli_query($con, $query)) {
            $count = mysqli_result($query_run, 0, count);
            $count_inc = $count + 1;

            $query_update = "UPDATE hits_count SET count = '$count_inc'";
            $query_update_run = mysqli_query($query_update);

      mysqli_free_result($query_run); //Release data from memory

      mysqli_close($con); //Close connection with database.
      } else {
            echo ("Error description: " . mysqli_error($con));
      }
}

if (!ip_exists($user_ip)) {
      update_count();
      ip_add();
}

?>

<h1>My Page</h1>
