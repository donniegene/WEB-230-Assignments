<?php

  $food = array('Healthy'=>
                    array('Salad', 'Vegetables', 'Pasta'),
                'Unhealthy'=>
                    array('Pizza', 'Ice cream', 'Popcorn'));

  foreach ($food as $element => $inner_array) {
    echo '<strong>'.$element.'</strong><br>';
    foreach ($inner_array as $item) {
      echo '-  '.$item.'<br>';
    }
  };

?>
