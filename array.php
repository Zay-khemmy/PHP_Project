<?php 
// different departments in TA
    $departments = array("Finance" => 4, "Business" => 2, "System_Engineering" => 5, "Integration" => 3, "Human Resource" => 6);
    print_r ($departments);

    // numbers of departments
    $departments = array("Finance", "Business", "System_Engineering", "Integration", "Human Resources");
    echo count($departments);

    // sort by numbers of employees
    $departments = array("Finance" => 4, "Business" => 2, "System_Engineering" => 5, "Integration" => 3, "Human Resources" => 6);
    sort($departments);
    print_r ($departments);

    // numeric array of elemets
    $movies =array(0 => "Die Hard",
                   1 => "John English",
                   2 => "Romeo and Juliet",
                   3 => "Lord of the Rings",
                   4 => "Pink Panther"
            );
    // fetching the first elements
        echo $movies[0];
        
    //    finding value of array
            echo " There is no array[5]";
?>