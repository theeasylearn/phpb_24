<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>$_SERVER ARRAY INFO</h1>
    <?php 
        foreach($_SERVER as $key=>$value)
            echo "<br/> $key = $value";
    ?>
</body>
</html>