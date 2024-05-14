<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //var_dump($_POST);
    if (isset($_POST['submit']) == true) //create variables and store frontend page input
    {
        if (empty($_POST['amount']) == true || empty($_POST['rate']) == true || empty($_POST['year']) == true) 
        {
            echo "<font color='red' size='+2'>input is missing </font>";
        } 
        else if(is_numeric($_POST['amount']) == false || is_numeric($_POST['rate']) == false || is_numeric($_POST['year']) == false)
        {
            echo "<font color='red' size='+2'>input must be numeric </font>";
        }
        else {
            $amount = $rate = $year = $interest = 0; //chain assignment
            $amount = $_POST['amount'];
            $rate = $_POST['rate'];
            $year = $_POST['year'];

            echo "$amount $rate $year";
            //calculate interest
            $interest = ($amount * $rate * $year) / 100;
            echo "<hr/> interest = $interest";
        }
    } else {
        echo "<a href='../input.php'>click here to give input</a>";
    }
    ?>
</body>

</html>