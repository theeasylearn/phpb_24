<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>array related functions.....</h1>
    <hr>
    <?php 
        //numeric array 
        $numbers = array(100,5=>85,7=>95,200,50,15=>55);
        print_r($numbers);

        //count how many element it has 
        $size = count($numbers);
        // $size = sizeof($numbers);
        echo "<br/> size of the array = $size";
        //array sorting
        sort($numbers,SORT_NUMERIC);
        echo "<br/> after sorting <br/>";
        print_r($numbers);

        //associative array
        $person = array("surname"=>"patel","name"=>"ankit","email"=>"ankit3385@gmail.com");

        echo "<br/> before sorting <br/>";
        print_r($person);

        asort($person,SORT_STRING);
        echo "<br/> after sorting <br/>";
        print_r($person);

        //create variables from key value pair 
        extract($person);
        echo "<br/> name = $name surname = $surname email = $email";

        $fruits = array('mango','redish yellow','sweet','india');

        //create variables from numeric array 
        list($name,$color,$taste,$country) = $fruits;
        echo "<br/> $name $color $taste $country";

        $vegetables = array("Carrot", "Tomato", "Onion", "Broccoli", "Bell Pepper");
        $grains =  array ("Rice", "Wheat", "Barley", "Oats", "Corn");

        //array merge
        $merged_array= array_merge($vegetables,$grains);
        echo "<br/> merged array has <br/>";
        print_r($merged_array);
    ?>
</body>
</html>