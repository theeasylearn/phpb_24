<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        require('subject.php');
        //create object
        $c1 = new Course('PHP','abc xyz',120,7500); //constructor called
        $c1->display();

        $c2 = new Course('Laravel', 'abc xyz', 180); //constructor called
        $c2->display();


    ?>
</body>

</html>