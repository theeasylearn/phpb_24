<?php 
    //numeric array using 1st method
    $person = array("Ankit Patel",38,true,75.21,"ankit3385@gmail.com"); //mixed type
    $numbers = array(50,45,89,125,400);
    // () parenthesis 
    // [] bracket
    // {} braces
    // angel bracket
    print_r($person);
    print_r($numbers);
    //2nd way to create array
    $subject[] = "PHP";
    $subject[] = "150";
    $subject[] = "15000";
    $subject[] = true;
    $subject[4] = 'Ankit Patel';
    $subject[] = 'Dharmesh';
    print_r($subject);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width='100%' border="1" cellpadding='10'>
        <tr>
            <td width='33%'>
            <?php
                //while loop 
                $index=0;
                $size = sizeof($person);
                while($index<$size) //entry control loop
                {
                    echo $person[$index] . "<br/>";
                    $index = $index + 1;
                }
            ?>
            </td>
            <td width='33%'>
            <?php
                $size = sizeof($numbers);
                for($index=0;$index<$size;$index++) //entry control loop
                {
                   echo $numbers[$index] . "<br/>";
                }
            ?>
            </td>
            <td width='33%'>
            <?php
                $index = 0;
                //do while loop 
                $size = sizeof($subject);
                do 
                {
                    echo $subject[$index] . "<br/>";
                    $index++;
                }while($index<$size); //exit control loop 
            ?>
            </td>
        </tr>
    </table>
</body>
</html>