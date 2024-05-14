<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="area_calculator.php" method="get">
        <table border="1" align='center' cellpadding='10' width='50%'>
            <tr>
                <td align="center">
                    <h3>Area Calculator</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="length">Room Length</label> <br/>
                    <input type="number" name="length" id="length" required />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="width">Room Width</label> <br/>
                    <input type="number" name="width" id="width"  required />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="calculare area" name="submit" />
                </td>
            </tr>
            <tr>
                <td align="center">
                    <?php 
                        if(isset($_GET['submit'])==true)
                        {
                            $length = $_GET['length'];
                            $width = $_GET['width'];
                            // echo "<br/> $length $width";
                            $area = $length * $width;
                            echo "<font color='red' size='+2'>$area</font>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>