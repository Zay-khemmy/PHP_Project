<?php 
   // calculating with operations 
   function calculator($operation, $a, $b){
       $convert = strtolower($operation);
        switch($convert){
            case "add":
            $result = $a + $b;
            break;

            case "subtract":
            $result = $a - $b;
            break;

            case "multiply":
            $result = $a * $b;
            break;

            case "divide":
            $result = $a / $b;
            break;
            
            default:
            $result = "invalid action";
        }
        return $result;
    }
    echo calculator('ADd', 4, 3);
?>