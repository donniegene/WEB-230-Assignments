<?php
require 'connect.inc.php';
$user_ip = $_SERVER['REMOTE_ADDR'];

      function update_count() {
            global $con;
            $query = "SELECT count FROM hits_count";
            if ($query_run = mysqli_query($con, $query)) {
                  $count = mysqli_fetch_row($query_run);
                  $count_inc = $count[0] + 1;

            $query_update = "UPDATE hits_count SET count = '$count_inc'";
            if($query_update_run = mysqli_query($con, $query_update)) {
                  echo $count_inc.'<br>Count has been updated<br>';

                  mysqli_free_result($query_run); //Release data from memory
                  mysqli_close($con); //Close connection with database.
            }
      }
      }

      function ip_add ($ip) {
            global $con;
            $query = "INSERT INTO hits_ip VALUES ('$ip')";
            $query_run = mysqli_query($con, $query);

            mysqli_free_result($query_run); //Release data from memory
            mysqli_close($con); //Close connection with database.
      }

      function ip_exists($ip) {
            global $user_ip;
            global $con;
            $query = "SELECT ip FROM hits_ip WHERE ip = '$ip'";
            $query_run = mysqli_query($con, $query);
            $query_num_rows = mysqli_num_rows($query_run); //Set $query_num_rows variable
            if ($query_num_rows == 0) { //If query is empty
                  return false;
            } else if ($query_num_rows >= 1) { //If query comes back with a match
                  return true;
            }
            mysqli_free_result($query_run); //Release data from memory
            mysqli_close($con); //Close connection with database.
      }

      if (!ip_exists($user_ip)) {
            update_count();
            ip_add($user_ip);
      }


update_count();
?>

<h1>My Page</h1>
