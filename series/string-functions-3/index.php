<?php
// This function compares and measures the similarity between 2 strings.
  $stringOne = 'I love both my kids; Michelle & Troy.';
  $stringTwo = 'I look forward to playing with all my grandkids, including Aliyah and Addie.';

  similar_text ($stringOne, $stringTwo, $result);
  echo 'String 1 - '.$stringOne.'<br>';
  echo 'String 2 - '.$stringTwo.'<br>';
  echo 'The similarity between the 2 statements is: '.$result;
  echo '<br>';
  echo '<br>';

// This function returns the number of alphanumeric characters in a string.
  $stringLength = strlen($stringTwo);    //The variable $stringTwo is used from previous example.

  echo 'The length of String 2 is: '.$stringLength;
?>
