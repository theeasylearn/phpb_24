<?php
session_start();
require_once("inc/connection.php");
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php
    require_once('inc/menu.php');
    ?>
    <div id="heading">
        <h2>Teacher - Add Teacher</h2>
        <a href="teacher.php" class="btn">Back</a>
    </div>
    <form action="submit/insert_teacher.php" method="post"
    enctype="multipart/form-data">
        <table id="data">
            <tbody>
                <tr>
                    <td width="30%">Name</td>
                    <td width="70%">
                        <input type="text" name="name" id="name" required />
                    </td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td>
                        <input type="tel" name="mobile" id="mobile" required />
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" id="email" required />
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" id="male" value="male" required />
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="female" value="female" required />
                        <label for="female">Female</label>

                    </td>
                </tr>
                <tr>
                    <td>Qualification</td>
                    <td>
                        <input type="text" name="qualification" id="qualification" required />
                    </td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td>
                        <input type="number" min="0" name="experience" id="experience" required />
                    </td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td>
                        <input type="file" name="photo" id="photo" accept="image/*" required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Add Teacher" class="save" />
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