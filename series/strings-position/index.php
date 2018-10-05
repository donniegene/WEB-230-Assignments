<?php

  $offset = 0;  // Variable to have while loop to stop at false
  $find = 'string';  // Variable for the string to search for
  $find_length = strlen($find);  // Variable to define the length of the string to search for so the position can be incremented in the while loop
  $string = 'This string is a string that is an example of a stringling.';

  while ($string_position = strpos($string, $find, $offset)) {
    echo '<strong>'.$find.'</strong> found at '.$string_position.'<br>';
    $offset = $string_position + $find_length;
  }

?>
