<?php

  function add($number1, $number2) {
    $result = $number1 + $number2;
    return $result;
  }

  function divide($number1, $number2) {
    $result = $number1 / $number2;
    return $result;
  }

  $sum = divide(add(123, 27), add(12, 13));
  echo 'The answer to the problems is '. $sum.'.';

?>
