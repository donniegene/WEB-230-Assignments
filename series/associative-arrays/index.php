<?php
//Set the values of the associative array in both manners
  $food = array('Pasta'=>300, 'Pizza'=>1000, 'Salad'=>150, 'Vegetable'=>50);
  $food['Fruit']=125;
//Print out the values of the array
  print_r ($food);
  echo '<br>'.'<br>';
//If/esle statement to state how many calories are in Pizza.
  if ($food['Pizza']>=1000) {
    echo "<h2>Pizza has " .$food['Pizza']." calories.</h2>";
  } else {
    echo 'I don\'t know how many calories are in that food.';
  }

?>
