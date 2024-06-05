<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require('product.php');
    //create object of product class
    $p1 = new Product();
    $p1->setName('IPhone 15');
    $p1->price = 125000;
    $p1->setQuantity(10);

    echo "<br/> p1 Name = " . $p1->getName();
    echo "<br/> p1 Price = " . $p1->getPrice();
    echo "<br/> p1 Quantity = " . $p1->getQuantity();
    $p1->print();
    $p1->setPrice(109000);

    $p2 = new Product();
    $p2->setName('IPod');
    $p2->setPrice(45000);
    $p2->setQuantity(3);

    echo "<br/> p2 Name = " . $p2->getName();
    echo "<br/> p2 Price = " . $p2->getPrice();
    echo "<br/> p2 Quantity = " . $p2->getQuantity();
    $p2->print();
    ?>
</body>

</html>