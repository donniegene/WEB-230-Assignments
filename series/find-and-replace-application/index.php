<?php

  $offset = 0; //Set the offset at 0. Need to step thru all occurances of search

  if (isset($_POST['text'])&&isset($_POST['searchFor'])&&isset($_POST['replaceWith'])) {
    $text = $_POST['text']; //User input text
    $search = $_POST['searchFor']; //Text to seacrh for
    $replace = $_POST['replaceWith']; //Text to replace the searched for text with

    $search_length = strlen($search); //Find the length of the search text

    if (!empty($text)&&!empty($search)&&!empty($replace)) {
      //Determines if there is input in each variable

      while ($strpos = strpos($text, $search, $offset)) { //Continues while true
        $offset = $strpos + $search_length; //Steps the offset past each occurence
        $text = substr_replace($text, $replace, $strpos, $search_length);
        /* Takes the text string and and replaces each occurence of the $search text with the
        $replace text as determined by the strpos function in the while loop. The $search_length
        determines how many characters to replace with the new text.
        */
      }
        echo $text; //Displays the new text after the replacements
    } else {
      echo 'Please fill in all the fields.';
    }
  }

/*
7.  Form is HTML and not php. It gets added outside of the php code. By adding it at the end the
php code gets run first then the form gets processed.

8.  Action - Where to send form-data when the form si submitted.
    Method - Specifies how to send the form-data.
    GET - Appends data into the URL in name/value pairs
          Never use on sensitive data.
          Useful when a bookmark is needed
    POST - Appends form-data inside the body of the HTTP request.

9.  Type - Specifies the type of <input> to display.
          ie. button, checkbox, search, reset, test, submit, etc.
    Value - Specifies the value of the <input> element.
          Button, reset,  submit - Defines the text on the button.
          Text,  password, hidden - Defines the inital value.
          Checkbox, radio, image - It is the value associated with the <input>.
*/
?>

<form action=""index.php" method="POST">
  <textarea name="text" rows="6" cols="30"></textarea><br><br>
  Search for:<br>
  <input type="text" name="searchFor"><br><br>
  Replace with:<br>
  <input type="text" name="replaceWith"><br><br>
  <input type="submit" value="Find and Replace">
</form>
