<?php
session_start();
require_once('inc/header-part.php');
?>
</head>

<body style="height:100vh">
    <?php require_once('inc/message.php'); ?>
    <form action="submit/recover_password.php" method="post">
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
    </form>
    <?php
    require_once("inc/footer.php");
    ?>
</body>

</html>