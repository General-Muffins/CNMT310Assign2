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
print "<h1>Please Confirm the Number of passengers.</h1>\n";



if(isset($_POST['planets'])) {
	$name = $_POST['planets'];
	
	$planets = filter_var($_POST['planets'], FILTER_SANITIZE_STRING);
	if(empty($planets)){
		echo "Error: Please return to Start! 
		<br>
		<form name='return' action='indexW.php' method='POST'>
			<input type='submit' name='continue' value='Return'>
		</form>";
	}
	else {
        echo $_SESSION['planets'] = "You chose " .$name . "." . "<br>" . $name . " is "  . 
		 " miles away from Earth." . "<br>" . "It will take appoximately "  . " days to travel the " 
		  . " miles to " . $name . " at a rate of "  . " miles per hour." . "<br>" . 
		"Cost per passenger: " ; 
		
		print '<form name="passNum" action="confirm.php" method="POST">
		Enter number of passengers: 
			<input type="number" name="number" min="1" max="50">
			<input type ="submit" value="Continue">
		</form>'; // Displaying Selected Value
    }
	
}


print $page->getBottomSection();




