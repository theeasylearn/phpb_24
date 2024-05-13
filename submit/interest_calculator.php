<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit']) == true) //create variables and store frontend page input
    {
        $amount = $rate = $year = $interest = 0; //chain assignment
        $amount = $_POST['amount'];
        $rate = $_POST['rate'];
        $year = $_POST['year'];

        echo "$amount $rate $year";
        //calculate interest
        $interest = ($amount * $rate * $year) / 100;
        echo "<hr/> interest = $interest";
    }
    else 
    {
        echo "<a href='../input.php'>click here to give input</a>";
    }
    ?>
</body>

</html>