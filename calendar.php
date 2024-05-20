<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            margin: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            height: 80%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 36px;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-size: 1.2em;
        }


        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        td:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
        tr td:first-child
        {
            color:red !important;
        }
        tr td:last-child
        {
            color:orange;
        }
    </style>
</head>

<body>

    <table border="1" width='100%' cellpadding='10'>
        <tr>
            <th class="red">S</th>
            <th>M</th>
            <th>T</th>
            <th>W</th>
            <th>T</th>
            <th>F</th>
            <th>S</th>
        </tr>
        <?php
        $dateString = "2024-03-01";

        // Use the date function to get the numeric representation of the day of the week
        $dayNumber = date('w', strtotime($dateString));
        //echo $dayNumber;
        $last_day_of_month = date('t',strtotime($dateString));
        //echo $last_day_of_month; 
        for ($week = 1, $day_of_month = 1; $week <= 6; $week++) {
            echo "<tr>";
            for ($day = 1; $day <= 7 && $day_of_month <= $last_day_of_month; $day++) {
                if($day<=$dayNumber)
                {
                    echo "<td></td>";
                }
                else 
                {
                    echo "<td>$day_of_month</td>";
                    $day_of_month++;
                }
            }
            $dayNumber=0;
            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>