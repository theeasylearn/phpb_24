<?php
    require('MyObject.php');

    $car = new MyObject();
    $car->name = "Maruti"; // it means $car->__set('name','Maruti')
    $car->color = "blue";
    $car->seat = 5;
    $car->engine = 'EV';


    // $car2 = $car;
    $car2 = clone $car;
    $car2->name = "Audi"; // it means $car->__set('name','Maruti')
    $car2->color = "Black";
    $car2->seat = 5;
    $car2->engine = 'EV';

    echo $car;
    echo $car2;

    