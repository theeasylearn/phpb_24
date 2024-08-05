<?php
session_start();
require_once('inc/verify_login.php');
require_once("inc/connection.php");
require_once('inc/header-part.php');
extract($_REQUEST);
?>
</head>

<body>
    <?php
    require_once('inc/menu.php');
    try {
        $sql = "select * from teacher where id=?";
        $cmd = $db->prepare($sql);
        $cmd->bindParam(1, $teacherid);
        $cmd->execute();
        $row = $cmd->fetch();
        extract($row);
    } catch (PDOException $error) {
        LogError($error);
        require('inc/message.php');
    }
    ?>
    <div id="heading">
        <h2>Teacher - Edit Teacher</h2>
        <a href="teacher.php" class="btn">Back</a>
    </div>
    <form action="submit/update_teacher.php" method="post" enctype="multipart/form-data">
        <table id="data">
            <tbody>
                <tr>
                    <td width="30%">Name</td>
                    <td width="70%">
                        <input type="text" name="name" id="name" required value="<?= $name ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td>
                        <input type="tel" name="mobile" id="mobile" required value="<?= $mobile ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" id="email" required value="<?= $email ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <?php
                        $male = null;
                        $female = null;
                        if ($gender == "Female") {
                            $female = "checked";
                        } else {
                            $male = "checked";
                        }
                        ?>
                        <input type="radio" name="gender" id="male" value="male" required <?= $male ?> />
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="female" value="female" required <?= $female ?> />
                        <label for="female">Female</label>

                    </td>
                </tr>
                <tr>
                    <td>Qualification</td>
                    <td>
                        <input type="text" name="qualification" id="qualification" required value="<?= $qualification ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td>
                        <input type="number" min="0" name="experience" id="experience" required value="<?= $experience ?>" />

                    </td>
                </tr>
                <tr>
                    <td valign=top>Photo</td>
                    <td>
                        <input type="file" name="photo" id="photo" accept="image/*" required /> <br />
                        <img class='example-image' src='photo/<?= $photo; ?>' alt='Teacher Photo' width='150px' />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Save changes" class="save" />
                        <input type="reset" value="Clear all" class="clear" />
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="teacherid" value="<?= $teacherid; ?>">
    </form>
    <?php
    require_once("inc/footer.php");
    ?>
</body>

</html>