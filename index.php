<?php

    function repeat($length, $values){
        $result = array();
        $i = 0 ;
        for($x = 1; $x <= $length; $x++){
            foreach($values as $key => $value){
                $result[$i] = $value;
                $i++;
            }  
        }
        return $result;
    }
    
    function reformat($string){
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $yourString = ucfirst(strtolower(str_replace($vowels, "", $string)));
        return $yourString;
    }
    
    function nextBinnaryNumber($num){

        if ( is_array($num) ) {
            $bin_array = $num;
            $y = sizeof($bin_array) - 1;
            
            for ($x=0; $x<sizeof($bin_array)-1; $x++) {
                if ($bin_array[$x] == 1) {
                    $bin_array[$x] = bcpow(2, $y);
                }
                $y--;
            }
            $number = 0;
            for ($z=0; $z<sizeof($bin_array); $z++) {
                    $number = $number + $bin_array[$z];
            }
            $nextNumber = $number+1;
            $binStr = '';
            while ($nextNumber>=1){
                $bin = $nextNumber % 2;
                $nextNumber = round($nextNumber/2, 0, PHP_ROUND_HALF_DOWN);
                $binStr .= $bin;
            }
            $binStr = strrev($binStr);

            return $binStr;
        } else {
            echo "An array required. But ". gettype($num) . " is passed";
        }

    }
    
    echo '<h3>Task 1</h3>';
    $repeat = repeat(3,[1,2,3]);
    var_dump($repeat);
    
    echo '<h3>Task 2</h3>';
    $reformat = reformat("liMeSHArp DeveLoper TEST");
    print_r($reformat);
    
    echo '<h3>Task 3</h3>';
    $nextBinnaryNumber = nextBinnaryNumber([1,0,0,0,0,0,0,0,0,1]);
    print_r($nextBinnaryNumber);  

?>