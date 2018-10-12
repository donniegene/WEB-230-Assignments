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

?>

<form action=""index.php" method="POST">
  <textarea name="text" rows="6" cols="30"></textarea><br><br>
  Search for:<br>
  <input type="text" name="searchFor"><br><br>
  Replace with:<br>
  <input type="text" name="replaceWith"><br><br>
  <input type="submit" value="Find and Replace">
</form>
