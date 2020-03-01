<?php
session_start();
unset($_SESSION['planets']);
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

$name = $_POST['planets'];

echo $_SESSION['planets'] = "Trip to " .$name . "." . "<br>" . "Cost per passenger: "
		. $name . "<br>" . " Total Cost of Trip " .$name . " with " .$name . " passengers.";

print '<form name="confirm" method="POST">
		
			<a href="finalConfirm.php">Confirm and Reserve</a>
			<br>
			<a href="indexW.php">Cancel and Start Over</a>
			
		</form>';


print $page->getBottomSection();




