<?php

  if (isset($_GET['user_name'])&&!empty($_GET['user_name'])) {
    $user_name = $_GET['user_name'];
    $user_name_lc = strtolower($user_name);
    $user_name_uc = strtoupper($user_name);

    if ($user_name_lc=='troy') {
      echo 'Your name has been converted to lowercase and checked, '.$user_name.'<br><br>';
    }

    if($user_name_uc=='TROY') {
      echo 'Your name has been converted to uppercase and checked, '.$user_name.'<br>';
      echo 'Try another variation of your name?'.'<br><br>';
    }

  }

?>

<form action="index.php" method="GET">
    Name: <input type="text" name="user_name"><br><br>
    <input type="submit" value="Submit">
  </form>
