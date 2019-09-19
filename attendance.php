<?php 
session_start(); // session start
    // a check to know if a user exist
    $department =array('hr', 'tech', 'finance');
    $employees = array('omusi','nurudeen', 'emma', 'lanre');
    if (isset($_POST['form_attendance'])):
        $firstname = $_POST['firstname'];
        if(in_array($firstname, $employees)){
            $_SESSION['attendance'] = array($_POST['firstname'], $_POST['department']);
            echo "attendance has been recorded";
        }else{
            echo "Employee does not exist";
        }
    endif; 

    // a check to know if a user still works
 if (isset($_GET['form_attendance'])):
    $search = $_GET['search'];
    if(in_array($search, $employees)){
        echo "employee still works in this company";
    }else{
        echo "Employee does not exist";
    }
endif; 