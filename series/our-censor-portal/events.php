<?php
  include_once('include/config.inc.php');
  $pageTitle = 'Events';

  require_once('include/header.inc.php');


  $event = array('Blue Jeans Day'=>
                    array('October 12, 2018', 'All employees may wear jeans to work'),
                'Leave early day'=>
                    array('December 22, 2018', 'All employees may leave work, with pay, at lunch on this day to get started on their holiday plans.'),
                'Christmas Holiday Closing'=>
                    array('December 23, 2018 – December 27, 2018', 'Our offices will be closed December 23, 2018 through December 27, 2018.'));

?>

<?php
  echo '<div>';
  foreach ($event as $element => $inner_array) {
    echo '<strong>'.$element.'</strong><br>';
      foreach ($inner_array as $item) {
        echo '--  '.$item.'<br>';
      }
    };
    echo '</div>';
?>

<?php

	require_once('include/footer.inc.php');

?>
