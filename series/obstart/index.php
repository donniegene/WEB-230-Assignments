<?php ob_start(); //starts the buffering of output ?>

<h1>My Page</h1>
This is my page.

<?php
$redirect_page = 'https://google.com';  //Establishing website to be redirected to.
$redirect = false;

  if ($redirect==true) {
    header ('Location: '.$redirect_page); //This is the actual rediect if the comparison is true
  }
ob_end_flush(); // Stops the buffering and sends the output 

/*
01. Explain why we use ob_start. ob_start(); ?>
      It buffers the out back to the customer. This will allow a redirect to work that is within
      that block of code that may be after some code that already was suppose to send output. This
      will allow the redirect to work and stop a fatal error.

02. Explain what is happening here. header('Location: '.$redirect_page);
      It is sending the user to wherever $redirect_page is pointed to.

03. Explain why we use ob_end_flush.
      It stops the buffering and outputs the topmost buffer.
*/
?>
