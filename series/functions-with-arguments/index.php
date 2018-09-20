<?php
// Set the parameters for the funcions
$iNum1 = 421;
$iNum2 = 2;

  function add($Number1, $Number2) { //Created the function add with 2 arguments
    echo 'The answer added is ';
    echo $Number1 + $Number2. '<br>';
  }

  function sub($Number1, $Number2) { //Created the function add with 2 arguments
    echo 'The answer subtracted is ';
    echo $Number1 - $Number2. '<br>';
  }

  function multi($Number1, $Number2) { //Created the function add with 2 arguments
    echo 'The answer multiplied is ';
    echo $Number1 * $Number2. '<br>';
  }

  function divide($Number1, $Number2) { //Created the function add with 2 arguments
    echo 'The answer divided is ';
    echo $Number1 / $Number2. '<br>';
  }

  add($iNum1, $iNum2); //Called the function add
  sub($iNum1, $iNum2); //Called the function sub
  multi($iNum1, $iNum2); //Called the function multi
  divide($iNum1, $iNum2); //Called the function divide

?>
