<?php

      $match = 'pass123';

     /* 01. Explain what this variable will be used for and how. $match = 'pass123';
            It is used to simulate the password that would be in the database. We
            take the password collected in the POST and compare it to the $match password
            to determine whick way to continue with the 'if' statement in the code.

        02. Explain the process of the following if statment. if ( !empty($password))
        { if($password == $match){ echo 'That is correct!'; }else{ echo 'That is incorrect!'; }
        }else{ echo 'Please enter a password.'; }
            Explained below as commented in the code.
     */

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
