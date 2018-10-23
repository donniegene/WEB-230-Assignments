<?php

  $script_name = $_SERVER['SCRIPT_NAME'];
?>

<form action="<?php echo $script_name; ?>" method="POST"> <?php // Sets form action to the above $script_name ?>
  <input type="submit" name="submit" value="Submit">
</form>
