<?php 
    define('rate', 3.5);
    function simple_interest($p, $t){
        $s_i = $p * rate * $t / 100;
        echo $s_i;
    }
    simple_interest(100, 5);
 
    function product($a, $b){
        $z = $a * $b;
        return $z;
    }
    echo product(10, 10);
?>