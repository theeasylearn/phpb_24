<?php 
    $timestamp = time(); //current time stamp;
    echo $timestamp;

    $birthdate = '01-jan-1990';
    $birthtimestamp = strtotime($birthdate);
    echo "<br/> $birthtimestamp";
    echo "<br/>difference in seconds = " . ($timestamp - $birthtimestamp);
    echo "<br/>difference in minute= " . ($timestamp - $birthtimestamp)/60;
    echo "<br/>difference in hours= " . ($timestamp - $birthtimestamp)/(60*60);
    echo "<br/>difference in days= " . ($timestamp - $birthtimestamp)/(60*60*24);
    echo "<br/>difference in years= " . ($timestamp - $birthtimestamp)/(60*60*24*365);
    // add 180 days in today date 
    $futuretimestamp = strtotime("+180 days");
    echo "<br/>future time stamp =  " . $futuretimestamp;
    echo "<br/>future date =  " . date("d-m-Y",$futuretimestamp);   
?>