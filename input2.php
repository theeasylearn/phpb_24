<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align=center>Interest Calculator</h1> <hr>
    <form novalidate action="submit/interest_calculator2.php" method="post">
        <table border="1" align="center" cellpadding='10'>
            <tr>
                <td>Enter Amount</td>
                <td>
                    <input type="text" name="amount" required />
                </td>
            </tr>
            <tr>
                <td>Enter Rate</td>
                <td>
                    <input type="text" name="rate" required />
                </td>
            </tr>
            <tr>
                <td>Enter Year</td>
                <td>
                    <input type="text" name="year" require />
                </td>
            </tr>
            <tr>
                <td colspan="2" align=center>
                    <input type="submit" name="submit" value="calculate Interest" />
                    <input type="reset" value="clear all" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>