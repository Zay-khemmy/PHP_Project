<?php 
    $base_salary = 4500;
    $acc_salary_a = $base_salary + 1200;
    $acc_salary_b = $base_salary + 1500.;
    echo $acc_salary_a . " is the accumulated salary for A";

    echo $acc_salary_b . " is the accumulated salary for B";
    $earn_a = $acc_salary_a / 30;
    $earn_b = $acc_salary_b / 28;
    echo $earn_a . " is the amount earned by A in a day";
    echo $earn_b . " is the amount earned by B in a day";
    echo "Yes, i can";
    $money_earn_a = $earn_a * 5;
    $money_earn_b = $earn_b * 5;
    echo $money_earn_a . " is the amount earned by A in 5 days";
    echo $money_earn_b . " is the amount earned by B in 5 days";
?>