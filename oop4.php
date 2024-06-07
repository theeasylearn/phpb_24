<?php 
    require('time.php');
    //create object of time class
    $t1 = new DateTime();

    echo "<br/> 10 hours 10 minutes 10 seconds =  " . $t1->toSeconds(10,10,10);
    echo "<br/> 10 hours 10 minutes  =  " . $t1->toSeconds(10,10);
    echo "<br/> 10 hours   =  " . $t1->toSeconds(10);
?>