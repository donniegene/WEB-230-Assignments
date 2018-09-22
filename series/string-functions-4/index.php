<?php

// Adds a '\' to negate ""
  $string = '       There are blank spaces on either side of this image <img src="image.jpg">. ';
  $stringSlashes = htmlentities(addslashes($string));

  echo 'This example places a \ to negate the ".';
  echo '<br>';
  echo 'Before: '.$string.'<br>';
  echo 'After: '.$stringSlashes;

/*
  This function trims the blank spaces from either side of a string
  Use rtrim or ltrim to trim the spaces from just one of the sides.
*/
  $stringTrimmed = trim($string);

  echo '<br>';
  echo '<br>';
  echo 'This string as been trimmed:'.$stringTrimmed;

?>
