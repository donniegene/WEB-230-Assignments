<?php

date_default_timezone_set('America/New_York');
$time = time();
$time_now = date('d M Y @ H:i:s', $time);
$time_modified = date('d M Y @ H:i:s', $time-(24*30*30));

echo 'The time now is '.$time_now.'<br>The time modified is '.$time_modified;


/*
01. Explaine what the time function is. $time = time();
      This gives you the number of seconds from 1 Jan 1970 until the current system time.

02. Explain what the following line of code is doing and how. $actual_time = date('D M Y @ H:i:s', $time);
      $actual_time takes 2 arguments. The format you want displayed and the input variable. In this case H - Hour, i - Minutes, s - Seconds
      $time would be the variable containing the seconds since 1 Jan 1970

03. Explain what the following line of code is doing and how. $time_modified = date('d M Y @ H:s', $time);
      This argument returns a date/time stamp of the current system time of 22 Oct 2018 @ 23:17:23.
      Date Mon YEAR @ 24 HR: Minutes: Seconds
      By adding parameters after teh $time variable you could change the time shown to a time before or after the system time.

04. Explain a way the $actual_time might be used in a web application. echo '<h3>The current dte/time is: '.$actual_time.'<h3>';
      You could display the time a user took an action on your website.

05. Explain a way the $time_modified might be used in a web application. echo '<h3>The modified dte/time is: '.$time_modified.'<h3>';
      You could display an experation date/time for action thats needs to be done by a user, either from a date selected by the company
      or a designated time from when a user took a specific action.

*/
?>
