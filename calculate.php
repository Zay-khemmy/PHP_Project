<?php
// check if its numeric
if (isset($_GET['calculator'])):
    $a_value = $_GET['a'];
    $b_value = $_GET['b'];
    $action = $_GET['operation'];
        if(is_numeric($a_value) && is_numeric($b_value)){
            // echo "it is numeric";
            if($action == "add"){
                $calculate = $a_value + $b_value;
            }else if($action == "subtract"){
                $calculate = $a_value - $b_value;
            }else if($action == "multiply"){
                $calculate = $a_value * $b_value;
            }else if ($action == "divide") {
                $calculate = $a_value / $b_value;
            }else{
                $calculate = "Please select an operation";
            }
                echo $calculate;
            }else{
                echo "Either A or B is not numeric";
            }
endif;
    