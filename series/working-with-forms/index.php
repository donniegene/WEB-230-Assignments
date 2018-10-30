<?php

/*
01. Explain what the action attribute is and does.
      The action attribute tells the code where to go with the information once the
      submit button has been pushed.

02. Explain what the method attribute is and does.
      The method attribute tells the code whether to attach the return info
      attached to the url (GET) or send it more securely by not attaching
      it to the url. (POST)
*/
?>

<form action="index.php" method="GET">
      Day:<br><input type="text" name="day"><br>
      Date:<br><input type="text" name="date"><br>
      Year:<br><input type="text" name="year"><br><br>
      <input type="submit" value="Submit">
</form>
