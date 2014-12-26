<?php
    if(isset($_POST["input"]) && $_POST["input"] != ""){
	    echo "<form method=\"POST\">";
	    echo "Input: <input type=\"text\" id=\"input\" name=\"input\" size=\"75\" value=\"".$_POST["input"]."\">";
	    echo "<input type=\"submit\" id=\"submit\" value=\"calculate!\"><br>";
	    $numbers = trim($_POST["input"]," ");
	    $numbers = explode(",", $numbers);
	    foreach($numbers as $i){
	        if($i == 0){//base case
	            echo "0<br>";
	        }
	        elseif($i == 1){//base case
	            echo "1<br>";
	        }
	        elseif($i > 5000){
	            echo "number is too large!<br>";
	        }
	        else{
	            $count = 1;
	            $f1 = 0;
	            $f2 = 1;
	            while($count < $i){
	                $f = $f1+$f2; //get value of current term in sequence
	                $temp = $f1;
	                $f1 = $f2; //update previous terms
	                $f2 = $f;
	                $count += 1;
	            }
	            echo $f."<br>";
	        }
	    }
	}
	else{
	    echo "<form method=\"POST\">";
	    echo "Input: <input type=\"text\" id=\"input\" name=\"input\" size=\"75\" value=\"5, 7, 11\">";
	    echo "<input type=\"submit\" id=\"submit\" value=\"calculate!\">";
	}
?>