<?php

$string = 'This is a string.';

  if (preg_match('{ is }', $string, $match)) {
    echo 'The original text is: '.$string.'<br>';  
    echo "Match found!<br />";
    print_r($match);
  } else {
    echo 'No match found.';
  }

?>
