<?php
//user defined functions 
//function function-name(arguments)
// {
//     //code 
// }
//with argument with return value
function getCurrentDate($format = null) //format variable is optional
{
    date_default_timezone_set("asia/kolkata");
    if ($format == null)
        $today = date('d-m-Y');
    else
        $today = date($format);
    return $today;
}
//without argument with return value
function getCurrentTime()
{
    date_default_timezone_set("asia/kolkata");
    $now = date('h:i:s');
    return $now;
}
