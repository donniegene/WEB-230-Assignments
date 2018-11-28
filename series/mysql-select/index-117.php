<?php
require 'connect.inc.php'; //Connecting to the database or killing the code

      //Selecting the food & calories columns from the food table
$query = "SELECT 'food', 'calories' FROM 'food' WHERE 'healthy_unhealthy' = 'h' AND 'calories' = '700' ORDER BY 'id' DESC";

      //Checking to see if a query will work
if ($query_run = mysqli_query($query)) {

      if (mysqli_num_rows($query_run)==NULL) { //Are the # of valid rows 0?
            echo 'No results found.';
      } else {

      while ($query_row = mysqli_fetch_assoc($query_run)) { //If there are valid results do the while
            $food = $query_row['food'];
            $calories = $query_row['$calories'];

            echo $food.' has '.$calories.' calories.<br>';
            }
      }

} else {
      echo mysqli_error();
}

?>
