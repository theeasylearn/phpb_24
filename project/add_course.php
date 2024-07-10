<?php
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php
    require_once('inc/menu.php');
    ?>
    <div id="heading">
        <h2>Course -> Add Course</h2>
        <a href="course.php" class="btn">back</a>
    </div>
    <table id="data">

        <tbody>
            <tr>
                <td width='30%'>Title</td>
                <td width='70%'>
                    <input type="text" name="title" id="title" required />
                </td>
            </tr>
            <tr>
                <td>Fees</td>
                <td><input type="number" name="fees" id="fees" required /></td>
            </tr>
            <tr>
                <td>Duration</td>
                <td>
                    <input type="number" name="duration" id="duration" required />
                </td>
            </tr>
            <tr>
                <td valign=top>Description</td>
                <td>
                    <textarea name="description" id="description" required></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Add Course" class="save" />
                    <input type="reset" value="Clear all" class="clear" />
                </td>
            </tr>
        </tbody>
    </table>
    <?php
    require_once("inc/footer.php");
    ?>
</body>

</html>