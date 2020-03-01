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
print "<h1>Please Confirm the information is correct.</h1>\n";  


echo $_SESSION['planets'] = "You have booked a trip to " .$name . "." . "<br>" . "Total cost of trip "
		. $name;
print '<form name="confirm" method="POST">
		
			
			<br>
			<a href="indexW.php">Book Another Trip</a>
			
		</form>';


print $page->getBottomSection();