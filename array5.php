<?php
//user defined function
function printArray($array, $msg = null)
{
    echo "<hr/>";
    if ($msg != null)
        echo " <b>$msg </b>";
    print_r($array);
    echo "<hr/>";
}
$fruits = array('apple', 'banana', 'mango', 'pinapple');
printArray($fruits, 'original array');
//push value into the array at end end
array_push($fruits, 'graps', 'kiwi');
printArray($fruits, 'after push opertion at the end of array');
//add value at the begining of the array
array_unshift($fruits, 'coconut');
printArray($fruits, 'after adding new value at the begging of array');

array_unshift($fruits, 'watermelon');
printArray($fruits, 'after adding new value at the begging of array');

//now remove value from end of array
$removed_value = array_pop($fruits);
printArray($fruits, 'after removing value from the end of array');

$numbers = array(rand(10, 99), rand(10, 99), rand(10, 99));
printArray($numbers);
echo "<br/> randomly generated otp " . implode("", $numbers);
echo "<br/> sum of array =  " . array_sum($numbers);

$gujarat = array(
    "Name" => "Gujarat",
    "capItal" => "Gandhinagar",
    "popUlation" => 60439692, // as per the latest available data
    "arEA" => 196024, // in square kilometers
    "languAGE" => "Gujarati"
);
printArray($gujarat, "display array as it is");
$gujarat = array_change_key_case($gujarat, CASE_LOWER);
printArray($gujarat, "display array after changing case of the key");
if (array_key_exists('name', $gujarat))
    echo "<br/> name exists in gujarat array";
else
    echo "<br/> name does not exists in gujarat array";

if (array_key_exists('email', $gujarat))
    echo "<br/> email exists in gujarat array";
else
    echo "<br/> email does not exists in gujarat array";
