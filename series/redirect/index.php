<?php
$redirect_page = 'https://google.com';  //Establishing website to be redirected to.
$redirect = true;

  if ($redirect==true) {
    header ('Location: '.$redirect_page); //This is the actual rediect if the comparison is true
  }
/*
01. Explain what is happening here. header('Location: '.$redirect_page);

$redirect_page has already been set and the header() function is sending the user to this location.
?>
