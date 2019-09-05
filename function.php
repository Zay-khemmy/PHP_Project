<?php 
    // calculating simple interest
    define('rate', 3.5);
    function simple_interest($p, $t){
        $s_i = $p * rate * $t / 100;
        return $s_i;
    }
 
    // calculating product of variable
    function product($a, $b){
        $z = $a * $b;
        return $z;
    }
    
?>