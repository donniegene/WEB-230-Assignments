<?php

$conn_error = 'Couldn\'t connect.';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass  = '';
$mysql_db = 'a_database';

if (!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysqli_select_db($mysql_db)) {
      die($conn_error);
}

?>
