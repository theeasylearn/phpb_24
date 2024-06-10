<?php 
    require('movie.php');
    //create object
    $m1 = new Movie('Aadipurush',200,'Prabash Kirti, saif');
    
    echo $m1;
    $m1->name = "Hanuman";
    $m1->length = 300;
    $m1->cast = 'abc, xyz';
    echo $m1;

    if(isset($m1->name)==true)
        echo "<br/> name exist  in movie object";
    else 
        echo "<br/> name do not exist in movie object";

    echo "<br/> Movie Name $m1->name"; //wont work without magic method __get

    unset($m1->cast);
    echo "<br/> Movie cast $m1->cast";
?>