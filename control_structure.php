<?php 
    function animal($animal){
        switch($animal){
            case "cat":
            $weight = 65;
            break;

            case "dog":
            $weight = 72;
            break;

            case "sheep":
            $weight = 40;
            break;
            
            default:
            $weight = 0;
        }
        return $weight;
    }
?>