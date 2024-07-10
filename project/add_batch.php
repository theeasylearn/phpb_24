<?php
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php
    require_once('inc/menu.php');
    ?>
    <div id="heading">
        <h2>Batch - Add batch</h2>
        <a href="batch.php" class="btn">Back</a>
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
                <td>Start date</td>
                <td>
                    <input type="date" name="startdate" id="startdate" required />
                </td>
            </tr>
            <tr>
                <td>End date</td>
                <td>
                    <input type="date" name="enddate" id="enddate" required />
                </td>
            </tr>
            <tr>
                <td>Class time</td>
                <td>
                    <input type="text" name="classtime" id="classtime" required />
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