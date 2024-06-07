<?php 
    require('box.php');
    //create object of time class
    $b1 = new Box();
    echo "<br/> display " . $b1->display();
    echo "<br/> length = 10 width = 20 " . $b1->getArea(10,20);
    echo "<br/> length = 10  " . $b1->getArea(10);
    echo "<br/> length = 10 width = 20 depth = 30" . $b1->getVolume(10,20,30);
    echo "<br/> length = 10 width = 20   " . $b1->getVolume(10,20);
    echo "<br/> length = 10 width = 20 depth = 30 and 40 " . $b1->getVolume(10,20,30,40);
?>