<?php
require_once('inc/header-part.php');
?>
</head>

<body style="height:100vh;display:flex;border: 1px solid black;align-item:center;flex-direction:column">
    <table id="data">
        <tbody>
            <tr>
                <td colspan="2" align="center">
                    <h2 style="font-size: 2rem;">Forgot password</h2>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" id="email" required />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Login" class="save" />
                    <input type="reset" value="Clear all" class="clear" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <a href="index.php">Login</a>
                </td>
            </tr>
        </tbody>
    </table>
    <?php
    require_once("inc/footer.php");
    ?>
</body>

</html>