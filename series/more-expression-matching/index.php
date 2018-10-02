<?php

  function has_space($string) {
    if (preg_match('{ }', $string)) {
      return true;
    } else {
      return false;
    }
  }

  $string = "This string has spaces.";

  if (has_space($string)) {
    echo 'This string has at least one space.';
  } else {
    echo 'The string has no spaces.';
  }

?>
