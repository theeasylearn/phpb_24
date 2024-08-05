<?php
    session_start();
    require_once('inc/verify_login.php');
    require_once("inc/connection.php");
    require_once('inc/header-part.php');
?>
</head>
<body>
    <?php
    require_once('inc/menu.php');
    ?>
    <div id="heading">
        <h2>Lecture - Add Lecture</h2>
        <a href="lecture.php" class="btn">Back</a>
    </div>
    <form action="submit/insert_lecture.php" method="post">
        <table id="data">
            <tbody>
                <tr>
                    <td width="30%">Teacher</td>
                    <td width="70%">
                        <select name="teacherid" id="teacherid">
                            <option value="">Select teacher</option>
                            <option value="1">ram</option>
                            <option value="2">shyam</option>
                            <option value="3">Ghanshyam</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td>
                        <select name="subjectid" id="subjectid">
                            <option value="">Select subject</option>
                            <option value="1">Maths</option>
                            <option value="2">Laws</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Batch</td>
                    <td>
                        <select name="batchid" id="batchid">
                            <option value="">Select batch</option>
                            <option value="1">10 to 12</option>
                            <option value="2">8 to 10</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Duration</td>
                    <td>
                        <input type="number" name="duration" id="duration" required />
                    </td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td>
                        <input type="number" min="0" name="amount" id="amount" required />
                    </td>
                </tr>
                <tr>
                    <td>Lecture date</td>
                    <td>
                        <input type="date" name="lecturedate" id="lecturedate" required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Add Lecture" class="save" />
                        <input type="reset" value="Clear all" class="clear" />
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