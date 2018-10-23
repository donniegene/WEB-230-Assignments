<?php

require 'conf.inc.php';
include 'header.inc.php';

  echo '<img src="'.$images.'header.gif" />';   // Shows image

if (isset($_POST['submit'])) {
  echo 'Process 1'; // If the submit button is pressed in Index.php then display
}


/*
01. Explain the $_SERVER['SCRIPT_NAME']. $script_name = $_SERVER['SCRIPT_NAME'];
      You've created a variable which allows you to dynamically update another
      variable pointing you back to the page you are on.

02. Explain what is happening to reduce the resulting output of the $images variable. echo $images;
      By dynamically changing the Host on the server thru $_SERVER['HTTP_HOST'] the system knows where the images folder is

03. Explain how using the $script_name variable benefits us. -->
    <form action="<?php echo $script_name; ?>" method="POST">
    <input type="submit" name="submit" value="Submit"> </form>
      This would be useful fi we had to have the user login and then we could
      put the user back on their original page they were in when they had to
      do the login.
*/

?>
