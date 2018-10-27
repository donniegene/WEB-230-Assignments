<?php
require 'config.inc.php';


foreach ($ip_blocked as $ip) { // For each IP in the array $ip_blocked
  if ($ip==$ip_address) { // If the IP is equal to thecurrent IP
    die('Your IP address, '.$ip_address.' has been blocked.');
        // Kill the code and display this message
  }
}
/*
01. Explain what this for each loop is doing. foreach ($ip_blocked as $ip) { if($ip == $ip_address)
    { die('Your IP address, '.$ip_address.' has been blocked'); } }
      It is checking each ip address in the $ip_blocked array and if it is there it is stopping this code
      from continuiing and displaing the message.
*/
?>

<h1>Welcome!</h1>
