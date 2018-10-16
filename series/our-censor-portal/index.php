<?php

	require_once('include/header.inc.php');

?>
<?php

  $offset = 0; //Set the offset at 0. Need to step thru all occurances of search
  $findArray = array('Acme'); // Set text to found to Acme in an array.
  $replaceArray = array('Insights'); // Set text to replace found text to Insights in an array.

  if (isset($_POST['text'])) {
    $text = $_POST['text']; //User input text
    $search = $findArray[0]; //Text to seacrh for linked to array
    $replace = $replaceArray[0]; //Text to replace the searched for text with within array

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
 			echo $text;
		//Displays the new text after the replacements
    } else {
      echo 'Please fill in all the fields.';
    }
  }

?>

<form action="index.php" method="POST">
  <textarea name="text" rows="6" cols="60"></textarea><br><br>
  <input type="submit" value="Find and Replace">
<textarea><?php echo $text ?></textarea>	
</form>

<?php

	require_once('include/footer.inc.php');

?>
