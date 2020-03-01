<?php

session_start();

require_once("Template.php");
require_once("class.php");

$page = new Template("UWSP Star Adventures");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='style.css'>");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Welcome to the UWSP Star Adventures Page</h1>\n";
		
print '<form name="PlanetSelect" action="enterPass.php" method="POST">
		Please choose a destination from the list: 
			<select name="planets"> 
			<option value="">
				Please select a planet
			</option>';
				
				foreach ($destList as $destinations) {
					echo '<option value="' . $destinations . '">' . $destinations . '</option>\n';
				}
		
print '		</select>
			<input type="submit" value="Continue">
		</form>';

print $page->getBottomSection();

?>
