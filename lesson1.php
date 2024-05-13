<?php //start of php script 
    echo "welcome to world of php <br />";
    echo "<b>PHP</b> is easy to learn and use";

    echo '<hr/> have good day';

    //how to create variables in php 
    // syntax 
    // $variable-name = value;
    $name = "THE EASYLEARN ACADEMY";
    $year = 2024; 
    $gender = true; 
    $weight = 75.11;
    echo "<br/> $name $year $gender $weight";

    //we can store any type of value into any variable
    $name = 100;
    $year = 'two thousand twenty four';
    $gender = "male";
    echo "<br/> now variable has $name $year $gender $weight";
    //variable name case sensative 
    $Name = "Ankit Patel";
    echo "<br/> name = $name Name = $Name";

    //we can delete variable as well 
    unset($name);
    unset($year);
    echo "<br/> name = $name Name = $Name";
/* end of php script */ ?>