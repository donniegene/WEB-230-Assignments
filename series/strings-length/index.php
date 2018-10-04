<?php

  $string = 'ThisIsMyPassword';
  $passLen = strlen($string);

  if ($passLen <= 5) {
    echo 'Your password is too short. Your password was '.$passLen.' characters long.';
  } else if ($passLen >= 20) {
    echo 'Your password is too long. Your password was '.$passLen.' characters long.';
  } else {
    echo 'Your password was the right length. Your password was '.$passLen.' characters long.';
  }


?>
