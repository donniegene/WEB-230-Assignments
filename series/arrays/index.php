<?php

  $food = array("Pasta", "Pizza", "Salad", "Vegetable");


  $food[4]='Fruit';

  print_r ($food);
  echo '<br>'.'<br>';

  if ($food[2]=='Pizza') {
    echo 'Is it pepperoni?.';
  } else {
    echo 'Can we have pizza for supper tomorrow?';
  }

?>
