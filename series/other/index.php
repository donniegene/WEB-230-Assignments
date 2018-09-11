
<?php
 //php if statement shorthand
  $number = 100;

  $guess = $number ? 'Great guess!' : 'Oops. Try again?';
  echo '1) This code shows how to use php shorthand on an if/else statement<br />';
  echo $guess;
  echo "<br />"

?>

<?php
echo '2) This code shows how to use a variable to create another variable.<br />';
$jack = 95;
$jill = 96;

$score = "jack";

echo "The score of $score is ${$score}<br />";
$score = "jill";
echo "The score of $score is ${$score}";
echo "<br />"

?>
