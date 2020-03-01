<?php
//this php file is for the class Main that is used for planets only.

//This is the class for the array that contains the destinations and there information.
class destinations{	
	
	private $destList = array(
		 "Mercury" => array("distance" => 56974146,"travelSpeed" => 1000000,"costPerMile" => 0.15),
		 
		 "Venus" => array("distance" => 25724767,"travelSpeed" => 209099,"costPerMile" => 0.12),
		 
		 "Mars" => array("distance" => 48678219,"travelSpeed" => 225150,"costPerMile" => 0.12),
		 
		 "Jupiter" => array("distance" => 390674710,"travelSpeed" => 22555150,"costPerMile" => 0.20),
		 
		 "Saturn" => array("distance" => 792248270,"travelSpeed" => 90295150, "costPerMile" => 0.20),
		 
		 "Neptune" => array("distance" => 2703959960,"travelSpeed" => 10990909,"costPerMile" => 0.22),
		 
		 "Uranus" => array("distance" => 1692662530,"travelSpeed" => 55555150,"costPerMile" => 0.22),
		 
		 "Pluto" => array("distance" => 4670000000,"travelSpeed" => 55555150,"costPerMile" => 0.22),
	); 

//setter method for destList.
	public function setDestName($destList){
		$this->destList = $destList;
	}

//getter method for destList.	
	public function getDestName(){
		return $this->destList;
	}
	
}


$destinations = new Destinations();
$destList = $destinations->getDestName();

//Sort the array
ksort($destList);

//array_keys()	
function printNestedArray($destList) {
    echo '<blockquote>';
    foreach ($destList as $key => $value) {
      echo htmlspecialchars("$key: ");
      if (is_array($value)) {
        printNestedArray($value);
      } else {
        echo htmlspecialchars($value) . '<br />';
      }
    }
    echo '</blockquote>';
  }	

function get_Key($destList){
	$result = array_keys($destList);
	return ($result);
}

function get_distance($distance){
	$result = array_keys($distance);
	return ($result);
}
$destList = array("one"=>"Jupiter","two"=>"Mars","three"=>"Mercury","four"=>"Neptune",
					"five"=>"Pluto","six"=>"Saturn","seven"=>"Uranus","eight"=>"Venus");
$distance = array("Jupiter"=>"390674710","Mars"=>"48678219","Mercury"=>"56974146","Neptune"=>"2703959960",
			"Pluto"=>"4670000000","Saturn"=>"792248270","Uranus"=>"1692662530","Venus"=>"25724767");
	
