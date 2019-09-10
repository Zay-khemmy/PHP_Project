<?php 
    //sum of array
    $a = array(1,2,3,4,5,6);
    foreach($a as $value){
        
    }
    echo array_sum($a);

    //sum of value
    $b =array('tech' => 4, 'admin' => 5,'hr' => 3,'finance' => 4);
    foreach ($b as $key=>$value){
       }
       
    echo array_sum($b);

    $sum = 0;
    $b =array('tech' => 4, 'admin' => 5,'hr' => 3,'finance' => 4);
    foreach ($b as $key=>$value){
        $sum += $value;
       }
       
    echo($sum);

    // total number of keys
    echo count($b);
?>