<?php

// String function set to give the number of words or periods n the string. '0'
$string = 'This is a sample string for WEB230.';
$stringWordCount = str_word_count($string, 0, '.');

echo 'The number of words or periods in this string is: '.$stringWordCount. '<br>';

// String function set to give the an array and print it out with the number witin the array and the word. '1'
$string = 'This is a sample string for WEB230.';
$stringWordCount = str_word_count($string, 1, '.');

print_r ($stringWordCount);
echo '<br>';

// String function set to give the an associative array and print it out with the number each word begins within the array. '2'
$string = 'This is a sample string for WEB230.';
$stringWordCount = str_word_count($string, 2, '.');

print_r ($stringWordCount);
?>
