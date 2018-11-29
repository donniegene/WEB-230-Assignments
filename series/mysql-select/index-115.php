<?php
      require 'connect.inc.php'; //Connecting to the database or killing the code

            //Selecting the food & calories columns from the food table
      $query = "SELECT food, calories FROM food ORDER BY 'id'";

            //Checking to see if a query will work
      if ($query_run = mysqli_query($con, $query)) {
            echo 'Query success.';
      } else {
            echo 'Query failed.';
      }

?>
