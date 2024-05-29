<?php

    function printArray($array,$msg=null) {
        echo "<hr>";

        if($msg != null)
            echo "<b>$msg</b>";
        print_r($array);
        echo "<hr>";

    }

    $fruits = array('apple','banana','mango','pinapple');
    print_r($fruits,'original array');

    array_push($fruits,'graps','kiwi');

    printArray($fruits,'after push opertion at the end of array');

    array_unshift($fruits,'watermelon');
    printArray($fruits,'after adding new value at the begging of array');

    $remove_value = array_pop($fruits);
    printArray($fruits,'after removing value from the end of array');

    $number = array(rand(10,99),rand(10,99),rand(10,99));
    printArray($number);

    echo "<br> randmly genreted otp " . implode("",$number);

    echo "<br> Sum of Array = " . array_sum($number);

    $gujarat = array(
        "Name" => "Gujrat",
        "CAPITAL" => "Gandhinagar",
        "pOPuLatIon" => 60439692,
        "aREa" => 196024,
        "lANguAge" => "Gujrati"
    );
    printArray($gujarat,"Display array at is it");
    $gujarat = array_change_key_case($gujarat,CASE_LOWER);

    printArray($gujarat);

    if(array_key_exists('name',$gujarat))
        echo "<br> name exists in gujrat ";
    else 
        echo "<br> name does not exists in gujarat array";
?>