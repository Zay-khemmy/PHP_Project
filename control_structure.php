<?php 
    // getting weights of each animal
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
    

    function animals($animals){

        if($animals == "cat"){
            $weight = 65;
        }else if($animals == "dog"){
            $weight = 72;
        }else if($animals == "sheep"){
            $weight = 40;
        }else {
            $weight = 0;
        }
        
    }

    // animal with the least weight
    
    function getWeight($weights){
        return ($weights);
    }
    $weights = array("cat" => "65", "dog" => "72", "sheep" => "40");
    sort($weights);
    print_r($weights);

    // another option for least weight
        $weights = array("cat" => "65", "dog" => "72", "sheep" => "40");
        echo min($weights);
?>