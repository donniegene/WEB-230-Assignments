<?php

  if (isset($_POST['roll'])) { //If the roll button is pushed, execute
    $rand4 = rand(1, 4);       // Generate random numbers for different type dice
    $rand2d4 = rand(2, 8);
    $rand6 = rand(1, 6);
    $rand8 = rand(1, 8);
    $rand10 = rand(1, 10);
    $rand12 = rand(1, 12);
    $rand20 = rand(1, 20);
    $randpct = rand(1, 100);

    echo 'd4      - '. $rand4.'<br>';  //echo out the results
    echo '2d4     - '. $rand2d4.'<br>';
    echo 'd6      - '. $rand6.'<br>';
    echo 'd8      - '. $rand8.'<br>';
    echo 'd10     - '. $rand10.'<br>';
    echo 'd12     - '. $rand12.'<br>';
    echo 'd20     - '. $rand20.'<br>';
    echo 'Pcnt %  - '. $randpct;
  }

/*
01. Explain what the if statment is doing here. if(isset($_POST['roll'])){
      If the roll button is pushed then execute the code below.

02. Explain what the rand function is. $rand = rand(1, 6);
      This rand function will generate a random integer between 1 & 6 inclusive.

03. Explain a way the $rand might be used in a web application.
    ?> <form action="index.php" method="POST">
    <input type="submit" name="roll" value="Roll dice."> </form>
      The obvious answer is if it is a part of a game. In a business app
      you may be running a give-a-way promotion of different gifts.
      You could setup the gifts by using ranges of numbers to establish
      what percentage chance they have of winning each prize and then use
      the rand() function to determine which prize they win.
  */
?>

<form action="index.php" method="POST">
   <input type="submit" name="roll" value="Roll dice.">
</form>
