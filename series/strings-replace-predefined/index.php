<?php

  $find = array('is', 'string', 'example');
  $replace = array('IS', 'STRING', '');

  $string = 'This is a string, and is an example.';

  $new_string = str_replace($find, $replace, $string);

  echo 'Before: '.$string.'<br><br>';
  echo 'After: '.$new_string;

?>
