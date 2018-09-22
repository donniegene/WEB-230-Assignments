<?php

$seedChars = 'abcdefghijkmnpqrstuvwxyz123456789!@#$%&';
$string_shuffled = str_shuffle($seedChars);

$ten = substr($string_shuffled, 0, 10);

echo 'Your new filename is: '.$ten.'.php';
echo  '<br>';
echo  '<br>';

$string = 'abcedefghijkmnp123456789';
$string_reversed = strrev($string);

echo 'The original string is: ',$string;
echo '<br>';
echo 'The reverse of the string is: '.$string_reversed;

?>
