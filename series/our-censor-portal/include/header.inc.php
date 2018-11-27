<?php

	include_once('include/config.inc.php');
	include_once('menu.data.php');
	include_once('include/functions.inc.php');

	if(!isset($pageTitle)) { //Check to see if pageName is not empty
		$pageTitle = $companyName; //If empty set page to site name
	} else {
		$pageTitle = $companyName.' - '.$pageTitle; //If not empty set to normal naming
	}



echo '<!doctype html>';
echo '<html lang="en">';
	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		echo '<title>'.$pageTitle.'</title>';
		echo '<link rel="stylesheet" type="text/css" href="assets/css/style.css">';
	echo '</head>';

	echo '<body>';
		echo '<header>';
			echo 		'<h1>'.$pageTitle.'</h1>';
			echo 		'<h2>On-going Training</h2>';
			echo '<nav>';
				menuBuilder($menuItems);
			echo '</nav>';
	  	echo '</header>';

?>
