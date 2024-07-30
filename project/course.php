<?php
session_start();
require_once('inc/connection.php');
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php
    require_once('inc/menu.php');
    require('inc/message.php');
    try {
        $sql = "select * from course order by id desc";
        $cmd = $db->prepare($sql);
        $cmd->execute();
    } //end of try
    catch (PDOException $error) {
        LogError($error);
        require('inc/message.php');
    }
    ?>
    <div id="heading">
        <h2>Course</h2>
        <a href="add_course.php" class="btn">Add Course</a>
    </div>
    <table id="data">
        <thead>
            <tr>
                <th width='10%'>id</th>
                <th>Name</th>
                <th width='10%'>Fees</th>
                <th width='10%'>Duration</th>
                <th>Description</th>
                <th width='10%'>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = $cmd->fetch()) {
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['fees'] ?></td>
                    <td><?php echo $row['duration'] ?> Days</td>
                    <td><?php echo $row['description'] ?></td>
                    <td>
                        <button type="button"><i class="fa fa-trash fa-2x"></i></button>
                        <a href=""><i class="fa fa-pencil fa-2x"></i></a>
                    </td>
                </tr>
            <?php
            } //end of while

            ?>
        </tbody>
    </table>
    <?php
    require_once("inc/footer.php");
    ?>
</body>

</html>