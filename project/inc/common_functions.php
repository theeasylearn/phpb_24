<?php 
    //user defined function 
    function toDMY($mydate)
    {
        return date("D d-m-Y", strtotime($mydate));
    }
function generatePassword($length)
{
    // Define the character sets
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_+{}[]|;:"<>?,./';

    // Combine all character sets
    $allChars = $lowercase . $uppercase . $numbers . $symbols;

    // Shuffle the character set
    $allChars = str_shuffle($allChars);

    // Generate the password
    $password = substr($allChars, 0, $length);

    return $password;
}

?>  