<?php 
    //associative array 1st method
    $person = array("name"=>"Ram Patel","age"=>50,"gender"=>true,"weight"=>75.69);
    print_r($person);
    $person['email'] = 'ram.patel@gmail.com';

    var_dump($person);

    foreach($person as $value)
    {
        echo "<br/> $value";
    }
    
    //2nd technique
    $subject['name'] = 'php';
    $subject['trainer'] = 'Ankit Patel';
    $subject['duration'] = 120;

    //2nd version of for each loop 
    foreach($subject as $key=>$value)
    {
        echo "<br/> $key => $value";
    }
?>