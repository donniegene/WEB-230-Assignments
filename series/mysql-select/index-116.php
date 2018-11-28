<?php
require 'connect.inc.php'; //Connecting to the database or killing the code

      //Selecting the food & calories columns from the food table
$query = "SELECT 'food', 'calories' FROM 'food' ORDER BY 'id' DESC";

      //Checking to see if a query will work
if ($query_run = mysqli_query($query)) {

      while ($query_row = mysqli_fetch_assoc($query_run)) {
            $food = $query_row['food'];
            $calories = $query_row['$calories'];

            echo $food.' has '.$calories.' calories.<br>';
      }

} else {
      echo mysqli_error();
}

//$query_run = mysqli_query($query);

?>
