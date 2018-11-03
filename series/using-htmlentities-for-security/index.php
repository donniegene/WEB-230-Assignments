<?php


     if (isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) { //Has the form been submitted
           $day = $_GET['day'];  // Declare the variables
           $date = $_GET['date'];
           $year = $_GET['year'];
           if (!empty($day)&&!empty($date)&&!empty($year)) {  // If the fields not empty, do echo
                 echo 'It is '.$day.' '.$date.' '.$year;
           } else { // If fields are empty do echo
                 echo 'Fill in all the fields.';
          }
      }


?>

<form action="index.php" method="GET"> <!-- send data collected to index.php page using the GET method -->
      Day:<br><input type="text" name="day"><br> <!-- data entered here goes to day variable -->
      Date:<br><input type="text" name="date"><br> <!-- data entered here goes to date variable -->
      Year:<br><input type="text" name="year"><br><br> <!-- data entered here goes to year variable -->
      <input type="submit" value="Submit">
</form>
