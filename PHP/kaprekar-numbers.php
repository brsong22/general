<?php
    function kaprekar($arg){
        if($arg == ""){
            $numbers = range(0,1000);//if no numbers are input, create an array 1-1000
        }
        else{
			$numbers = trim($arg, " ");
			$numbers = explode(",", $numbers);
	    }
		foreach($numbers as $k){
			$k = trim($k, " "); 
			if(is_numeric($k)){
				$num = $k*$k;
				$lenofK = strlen((string)$k);//get the value of n
				$numofDigits = (string)$num;//get the number of digits of the squared value
				$rightDigits = intval(substr($num, -$lenofK));//get the right n digits
				$leftDigits = intval(substr($num, 0, $lenofK-1));//get the left n-1 digits
				$leftDigitsN = intval(substr($num, 0, $lenofK));//get the left n digits
				if($rightDigits > 0){
					if($leftDigits > 0){
						if($rightDigits+$leftDigits == $k){
							echo "$k is a kaprekar number!<-------<br>";
						}
					}
					if($leftDigitsN > 0){
						if($rightDigits+$leftDigitsN == $k){
							echo "$k is a kaprekar number!<-------<br>";
						}
						else{
							echo "$k is NOT a kaprekar number!<br>";
						}
					}
					else{
						echo "$k is NOT a kaprekar number!<br>";
					}
				}
				else{
					echo "$k is NOT a kaprekar number!<br>";
				}
		    }
			else{
				echo "not a number<br>";
			}
		}
    }
    
    if(isset($_POST["input"]) && $_POST["input"] != ""){
	    echo "<form method=\"POST\">";
	    echo "Input: <input type=\"text\" id=\"input\" name=\"input\" size=\"75\" value=\"".$_POST["input"]."\">";
	    echo "<input type=\"submit\" id=\"submit\" value=\"calculate!\"><br>";
	    kaprekar($_POST["input"]);
	    
	}
	elseif(isset($_POST["input"]) && $_POST["input"] == ""){
	    echo "<form method=\"POST\">";
	    echo "Input: <input type=\"text\" id=\"input\" name=\"input\" size=\"75\" value=\"".$_POST["input"]."\">";
	    echo "<input type=\"submit\" id=\"submit\" value=\"calculate!\"><br>";
	    kaprekar($_POST["input"]);
	    
	}
	else{
	    echo "<form method=\"POST\">";
	    echo "Input: <input type=\"text\" id=\"input\" name=\"input\" size=\"75\" placeholder=\"leave empty to find all kaprekar numbers below 1,000\">";
	    echo "<input type=\"submit\" id=\"submit\" value=\"calculate!\"><br>"; 
	}
?>