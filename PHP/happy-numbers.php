<?php
    if(isset($_POST["input"]) && $_POST["input"] != ""){
	    echo "<form method=\"POST\">";
	    echo "Input: <input type=\"text\" id=\"input\" name=\"input\" size=\"75\" value=\"".$_POST["input"]."\">";
	    echo "<input type=\"submit\" id=\"submit\" value=\"calculate!\"><br>";
	}
	else{
	    echo "<form method=\"POST\">";
	    echo "Input: <input type=\"text\" id=\"input\" name=\"input\" size=\"75\" value=\"7\">";
	    echo "<input type=\"submit\" id=\"submit\" value=\"calculate!\">";
	}
	
	$numbers = trim($_POST["input"], " ");
	$numbersArray = explode(",", $numbers);
	foreach($numbersArray as $i){
	    if(is_numeric($i)){
	        $continue = true;
	        $visited = array();//array to hold previous sums for checking for loops
	        $squared = $i*$i;
	        while($continue){
	            $total = 0;
				$digits = str_split((string)$squared,1);//get all the digits
				foreach($digits as $d){
					$total += $d*$d;
				}
				if($total == 1){
					echo "$i is a HAPPY number!<br>";
					$continue = false;
				}
				elseif(in_array($total, $visited)){//check for loop
				    echo "$i is a SAD number...<br>";
				    $continue = false;
				}
				else{
				    $visited[] = $total;
				    $squared = $total;
				}
			}
	    }
	}
	
?>