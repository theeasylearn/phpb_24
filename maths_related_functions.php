<?php
    function randomFloat($min = 0, $max = 1)
    {
        // Generate a random float number between $min and $max
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }
    $num1 = rand(1000, 9999);
    $num2 = rand(1000, 9999);
    echo "<br/> num1 = $num1 num2 = $num2";
    $difference = abs($num1 - $num2);
    echo "<br/> $difference";

    $randomNumber = randomFloat(1.5, 10.5);
    echo "<br/> Random float number: " . $randomNumber;
    echo "<br/> ceil value = " . ceil($randomNumber);
    echo "<br/> floor value = " . floor($randomNumber);
    echo "<br/> round value = " . round($randomNumber,2);
    $numbers = array(rand(10, 99), rand(10, 99), rand(10, 99),rand(10, 99), rand(10, 99));

    echo "<br/> minimum value from array  " . min($numbers);
    echo "<br/> maximum value from array  " . max($numbers);
?>
