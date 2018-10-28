<?php

      $browser = get_browser(null, true);
      $browser = strtolower($browser['browser']);

            if ($browser != 'chrome') {
                  echo 'You are not using Chrome. You may get a better experience it you do.';
            }

?>
