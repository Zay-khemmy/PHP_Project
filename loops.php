<?php 
    // sum of first 10 numbers (for loop)
    $sum = 0;
    for($i = 1; $i <= 10; $i++){
        $sum += $i;
       
    }
    echo $sum;

    // while loop 
    $i = 1;
    $sum = 0;
    while($i <= 10){
        $sum += $i;
        $i++;
    }
    echo $sum;
?>