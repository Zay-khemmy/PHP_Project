<?php
// check if its numeric
if (isset($_GET['calculator'])):
    $a_value = $_GET['a'];
    $b_value = $_GET['b'];
    $action = $_GET['operation'];
        if(is_numeric($a_value) && ($b_value)){
            echo "it is numeric";
        }else{
            echo "not numeric";
        }
endif;
    // calculate result
if($action == "add"){
    $calculate = $a_value + $b_value;
}else if($action == "subtract"){
    $calculate = $a_value - $b_value;
}else if($action == "multiply"){
    $calculate = $a_value * $b_value;
}else if ($action == "divide") {
    $calculate = $a_value / $b_value;
}
echo $calculate;