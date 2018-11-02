<?php

      $match = 'pass123';

     //            01. Explain what the following if statement is doing.

      if (isset($_POST['password'])) {  // Do this block if password has been sent
            $password = $_POST['password'];  //Establish $password variable
            if (!empty($password)) {  // If password is not empty do the following block
                  if ($password==$match) { // If password is equal to match variable then do echo
                        echo 'That is correct!';
                  } else { // If variables not equal do below echo
                        echo 'That is incorrect!';
                  }
            } else {  // If $password is empty do the following echo
                  echo 'Please enter a password.';
            }
      }

?>

<form action="index.php" method="POST">
      Password:<br>
      <input type="password" name="password"><br><br> <!-- type password shows *** vs characters-->
      <input type="submit" value="Submit">
</form>
