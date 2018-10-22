https://ocp.donaldallenjr.com/

- web-230-prj-004
	- created website ocp.donaldallenjr.com
	- created file structure with assets/css folders and include folder
	- created files index.php, style.css and config, footer, and header.php
		- copied file contents as applicable from 2xx site files
	- imported code from find and replace app assignment to modify for use
	- built 2 arrays to control the find parameter and replace parameter
	- attempted to modify code to use arrays, incomplete at this time
	- modified style.css imported code to change color of background and text of header and footer
		- footer colors have been modified
		- header background has been changed
		- subheader text is white
		- unable to change main header text color from blue to white
	- modified header.inc.php to include new company name with subtitle
	- modified footer to include copyright line

- Changes made 19 Oct 18
	- added variables to config.inc.php files
	- corrected code in index.php file
		- changed positioning of echo to display $text into textarea
		- changed search and replace back from array to regular variable
	- modified header.inc.php file
		- added include_once line for config.inc.php
		- changed title and header to variable
		- changed code to echo all html code vs going in & out of php		

- 	web-230-prj-004-001
		- created events.php file
			-	populated with array and used a foreach to display Events
			- used style.css and div tags to control output
		- created internal-communications.php file
			- copied contents over from index.php file except header
			- changed form action to point to current page
		- modified index.php to just display text as required by assignment
		- major modification of style.css file
		 	- eliminated unused code
			- created div tag code to control display in events and index
			- fixed spacing issues on footer and header
			- modified textarea to fix spacing issue and add colors
		- modified header.inc.php file
			- made title and header controllable with variable pageTitle
			- tried to create interactive menu for different pages
				-	not working. passing the incorrect number of arguments
				- created functions.inc.php file to hold menuBuilder
				- created menu.data.php to hold array for data for menuBuilder
				
