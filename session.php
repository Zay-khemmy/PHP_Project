<?php 
    session_start();
    
    function attendance($name, $staff_id, $dept){
        switch($dept){
            case "system":
            $_SESSION[$dept] = array($name, $staff_id);
            break;

            case "integration":
            $_SESSION[$dept] = array($name, $staff_id);
            break;

            case "hr":
            $_SESSION[$dept] = array($name, $staff_id);
            break;

            case "finance":
            $_SESSION[$dept] = array($name, $staff_id);
            break;

            case "admin":
            $_SESSION[$dept] = array($name, $staff_id);
            break;

            default:
            $_SESSION["visitor"] = array($name, $staff_id);
        
        }
        // return $_SESSION[$dept];
    }
    // print_r(attendance("zainab", 12, "system"));
?>