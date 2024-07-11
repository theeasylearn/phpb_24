<?php
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php
    require_once('inc/menu.php');
    ?>
    <div id="heading">
        <h2>Subject - Add Subject</h2>
        <a href="subject.php" class="btn">Back</a>
    </div>
    <table id="data">
        <tbody>
            <tr>
                <td width="30%">Select Course</td>
                <td width="70%">
                    <select name="courseid" id="courseid">
                        <option value="">Select course</option>
                        <option value="1">PSI</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td>Title</td>
                <td>
                    <input type="text" name="title" id="title" required />
                </td>
            </tr>
            <tr>
                <td>Rate</td>
                <td>
                    <input type="number" min='0' name="rate" id="rate" required />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Add Subject" class="save" />
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