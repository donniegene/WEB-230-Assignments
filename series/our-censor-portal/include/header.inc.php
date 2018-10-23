<?php

	include_once('include/config.inc.php');
	include_once('menu.data.php');

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
		  echo '</header>';
  echo '</body>';
?>

<?php

	function menuBuilder($menuItems) {

		echo('<ul>');

		foreach($menuItems as $key => $value) {

			echo('<li><a href="' .$value['MenuLink']. '">'.$value['MenuName'].'</a></li>');
		}

		echo('</ul>');
	}

	// menuBuilder();  ** Not passing the correct number of arguments

?>