<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Multidimensional array </h1>
    <table align="center" cellpadding='10' width='80%' border="2">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Capital</th>
                <th>Area</th>
                <th>Language</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $states = array(
                array('name' => 'Gujarat', 'capital' => 'Gandhinagar', 'area' => 196024, 'language' => 'Gujarati'),
                array('name' => 'Andhra Pradesh', 'capital' => 'Amaravati', 'area' => 160205, 'language' => 'Telugu'),
                array('name' => 'Arunachal Pradesh', 'capital' => 'Itanagar', 'area' => 83743, 'language' => 'English'),
                array('name' => 'Assam', 'capital' => 'Dispur', 'area' => 78438, 'language' => 'Assamese'),
                array('name' => 'Bihar', 'capital' => 'Patna', 'area' => 94163, 'language' => 'Hindi'),
                array('name' => 'Chhattisgarh', 'capital' => 'Raipur', 'area' => 135192, 'language' => 'Hindi'),
                array('name' => 'Goa', 'capital' => 'Panaji', 'area' => 3702, 'language' => 'Konkani'),
                array('name' => 'Haryana', 'capital' => 'Chandigarh', 'area' => 44212, 'language' => 'Hindi'),
                array('name' => 'Himachal Pradesh', 'capital' => 'Shimla', 'area' => 55673, 'language' => 'Hindi'),
                array('name' => 'Jharkhand', 'capital' => 'Ranchi', 'area' => 79714, 'language' => 'Hindi'),
                array('name' => 'Karnataka', 'capital' => 'Bengaluru', 'area' => 191791, 'language' => 'Kannada'),
                array('name' => 'Kerala', 'capital' => 'Thiruvananthapuram', 'area' => 38852, 'language' => 'Malayalam'),
                array('name' => 'Madhya Pradesh', 'capital' => 'Bhopal', 'area' => 308350, 'language' => 'Hindi'),
                array('name' => 'Maharashtra', 'capital' => 'Mumbai', 'area' => 307713, 'language' => 'Marathi'),
                array('name' => 'Manipur', 'capital' => 'Imphal', 'area' => 22327, 'language' => 'Meitei (Manipuri)'),
                array('name' => 'Meghalaya', 'capital' => 'Shillong', 'area' => 22429, 'language' => 'English'),
                array('name' => 'Mizoram', 'capital' => 'Aizawl', 'area' => 21081, 'language' => 'Mizo'),
                array('name' => 'Nagaland', 'capital' => 'Kohima', 'area' => 16579, 'language' => 'English'),
                array('name' => 'Odisha', 'capital' => 'Bhubaneswar', 'area' => 155707, 'language' => 'Odia'),
                array('name' => 'Punjab', 'capital' => 'Chandigarh', 'area' => 50362, 'language' => 'Punjabi'),
                array('name' => 'Rajasthan', 'capital' => 'Jaipur', 'area' => 342239, 'language' => 'Hindi'),
                array('name' => 'Sikkim', 'capital' => 'Gangtok', 'area' => 7096, 'language' => 'Nepali'),
                array('name' => 'Tamil Nadu', 'capital' => 'Chennai', 'area' => 130058, 'language' => 'Tamil'),
                array('name' => 'Telangana', 'capital' => 'Hyderabad', 'area' => 112077, 'language' => 'Telugu'),
                array('name' => 'Tripura', 'capital' => 'Agartala', 'area' => 10486, 'language' => 'Bengali'),
                array('name' => 'Uttar Pradesh', 'capital' => 'Lucknow', 'area' => 243286, 'language' => 'Hindi'),
                array('name' => 'Uttarakhand', 'capital' => 'Dehradun', 'area' => 53483, 'language' => 'Hindi'),
                array('name' => 'West Bengal', 'capital' => 'Kolkata', 'area' => 88752, 'language' => 'Bengali')
            );
            //print_r($states);
            $size = sizeof($states);
            for($index=0;$index<$size;$index++)
            {
                echo "<tr><td>" . ($index+1) . "</td>";
                foreach($states[$index] as $value)
                {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>