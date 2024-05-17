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
        .multiply
        {
            margin-top: 20px;
            margin-left: 50px;
            margin-right: 50px;
        }
    </style>
</head>

<body>
    <div class="gray">
        <table width='100%'>
            <tr>
                <td width='30%'>Multiplication Table Generator</td>
                <td>
                    <input type="number" name="start" id="start" placeholder="start value" />
                </td>
                <td>
                    <input type="number" name="stop" id="stop" placeholder="stop value" />
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
                    <input type="submit" value="generate" class="blue-button" />
                </td>
            </tr>
        </table>
    </div>

    <div class="multiply">
        <table width='15%' border="1" cellpadding='10'>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>=</td>
                <td>1</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>=</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>=</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>=</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>=</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>=</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>=</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>=</td>
                <td>2</td>
            </tr>
            
        </table>
    </div>
</body>

</html>