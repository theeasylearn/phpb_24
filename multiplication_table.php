<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .gray {
            background-color: gainsboro;
            padding: 10px;
        }

        .blue-button {
            background-color: blueviolet;
            color: white;
            font-size: 18px;
            padding: 10px;
        }

        .multiply {
            margin-top: 20px;
            margin-left: 50px;
            margin-right: 50px;
        }
    </style>
</head>

<body>
    <div class="gray">
        <form method="post" action="" >
            <table width='100%'>
                <tr>
                    <td width='30%'>Multiplication Table Generator</td>
                    <td>
                        <input type="number" name="start" id="start" placeholder="start value" required />
                    </td>
                    <td>
                        <input type="number" name="stop" id="stop" placeholder="stop value" required />
                    </td>
                    <td>
                        <label for="while">
                            <input id="while" type="radio" name="loop" value="1"> while loop
                        </label>
                        <label for="for">
                            <input id="for" type="radio" name="loop" value="2"> for loop
                        </label>
                        <label for="dowhile">
                            <input id="dowhile" type="radio" name="loop" value="3"> do while loop
                        </label>
                    </td>
                    <td align="right">
                        <input type="submit" name="submit" value="generate" class="blue-button" />
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="multiply">
        <table width='100%' border="1">
            <tr>
                <?php
                    if(isset($_POST['submit'])==true)
                    {
                        $i = $_POST['start'];
                        while ($i <= $_POST['stop']) { //outer while loop
                            echo "<td>
                            <table width='100%' cellpadding='10'>"; 
                            $j=1;
                            while($j<=10) //inner while loop
                            {
                                $temp = $i * $j;
                                echo "<tr>
                                <td>$i</td>
                                <td>$j</td>
                                <td>=</td>
                                <td>$temp</td>
                            </tr>";
                            $j++;
                            }
                                
        
                            echo "</table>
                        </td>";
                            $i++;
                        }
                    }
                ?>

            </tr>
        </table>
    </div>
</body>

</html>