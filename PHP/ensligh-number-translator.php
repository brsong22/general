<?php

	if(isset($_POST["input"]) && $_POST["input"] != ""){
	    echo "<form method=\"POST\">";
	    echo "Input: <input type=\"text\" id=\"input\" name=\"input\" size=\"75\" value=\"".$_POST["input"]."\">";
	    echo "<input type=\"submit\" id=\"submit\" value=\"translate!\"><br>";
	
		$numStrings = explode(",", $_POST["input"]);//create array out of the input string
		//loop through array to translate into numbers
		foreach($numStrings as $var){
			$translateNum = explode(" ", $var);
			$millions = 0;	//millions place holder
			$thousands = 0;	//thousands place holder
			$hundreds = 0;	//hundreds place holder
			$tens = 0;		//tens place holder
			$ones = 0;		//ones placeholder
			$isNegative = false;
			foreach($translateNum as $i){
				switch($i){
				    case "zero":
				        $ones = 0;
				        break;
					case "one":
						$ones = 1;
						break;
					case "two":
						$ones = 2;
						break;
					case "three":
						$ones = 3;
						break;
					case "four":
						$ones = 4;
						break;
					case "five":
						$ones = 5;
						break;
					case "six":
						$ones = 6;
						break;
					case "seven":
						$ones = 7;
						break;
					case "eight":
						$ones = 8;
						break;
					case "nine":
						$ones = 9;
						break;
					case "ten":
						$tens = 10;
						break;
					case "eleven":
						$tens = 11;
						break;
					case "twelve":
						$tens = 12;
						break;
					case "thirteen":
						$tens = 13;
						break;
					case "fourteen":
						$tens = 14;
						break;
					case "fifteen":
						$tens = 15;
						break;
					case "sixteen":
						$tens = 16;
						break;
					case "seventeen":
						$tens = 17;
						break;
					case "eighteen":
						$tens = 18;
						break;
					case "nineteen":
						$tens = 19;
						break;
					case "twenty":
						$tens = 20;
						break;
					case "thirty":
						$tens = 30;
						break;
					case "fourty":
						$tens = 40;
						break;
					case "fifty":
						$tens = 50;
						break;
					case "sixty":
						$tens = 60;
						break;
					case "seventy":
						$tens = 70;
						break;
					case "eighty":
						$tens = 80;
						break;
					case "ninety":
						$tens = 90;
						break;
					case "hundred":
						$hundreds = ($ones+$tens)*100;
						$ones = 0;
						$tens = 0;
						break;
					case "thousand":
						$thousands = ($ones+$tens+$hundreds)*1000;
						$ones = 0;
						$tens = 0;
						$hundreds = 0;
						break;
					case "million":
						$millions = ($ones+$tens+$hundreds)*1000000;
						$ones = 0;
						$tens = 0;
						$hundreds = 0;
						break;
					case "negative":
						$isNegative = ($isNegative ? false : true);
						break;
					default:
						break;
				}
			}
			$x = $millions+$thousands+$hundreds+$tens+$ones;//get the final number
			$x = ($isNegative ? -1*$x : $x);//create negative number
			echo $x."<br>";
		}	
	}
	else{
	    echo "<form method=\"POST\">";
	    echo "Input: <input type=\"text\" id=\"input\" name=\"input\" size=\"75\" value=\"six, negative seven hundred twenty nine, one million one hundred\">";
	    echo "<input type=\"submit\" id=\"submit\" value=\"translate!\">";
	}
?>