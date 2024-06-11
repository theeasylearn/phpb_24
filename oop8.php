<?php
    require('MyObject.php');

    $car = new MyObject();
    $car->name = "Maruti"; // it means $car->__set('name','Maruti')
    $car->color = "blue";
    $car->seat = 5;
    $car->engine = 'EV';

    echo "<br/> $car->name"; // it means $car->__get('name')
    echo "<br/> $car->color";
    echo "<br/> $car->seat";
    echo "<br/> $car->engine";

    echo $car;

    if (isset($car->seat) == true)
        echo "<br/> car has seat";
    else
        echo "<br/> car has no seat";

    $student1 = new MyObject();
    $student1->name = "Abhay Rathod";
    $student1->weight = 65.22;
    $student1->gender = true;
    $student1->dob = '2004-01-01';

    echo $student1;
    echo MyObject::$author;
    MyObject::$author = "A M PATEL";
    echo "<br/>" . MyObject::$author;
    echo "<br/>" . MyObject::getAuthor();
    echo "<br/> " . $student1->display();
    echo "<br/>  good bye";
