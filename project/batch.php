<?php
session_start();
require_once('inc/connection.php');
require_once('inc/common_functions.php');
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php
    require_once('inc/menu.php');
    require_once('inc/message.php');
    try {
        $sql = "select b.*,c.title as coursetitle from batch as b, course as c where c.id=courseid order by b.id desc";
        $cmd = $db->prepare($sql);
        $cmd->execute();
        $table = $cmd->fetchAll(); //fetchAll return multidimensional array, 1st dimension
        //is for rows and 2nd dimension is for column 
    } catch (PDOException $error) {
        LogError($error);
        require('inc/message.php');
    }
    ?>
    <div id="heading">
        <h2>Batch </h2>
        <a href="add_batch.php" class="btn">Add Batch</a>
    </div>
    <table id="data">
        <thead>
            <tr>
                <th>id</th>
                <th>Course</th>
                <th>Class Time</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
             foreach ($table as $row) {
             extract($row);
            ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?=  $coursetitle ?></td>
                    <td><?= $classtime ?></td>
                    <td width='100px'><?= toDMY($startdate); ?></td>
                    <td width='100px'><?= toDMY($enddate) ?></td>
                    <td width='95px'>
                        <a href=""><i class="fa fa-pencil fa-2x"></i></a>
                        <a href=""><i class="fa fa-trash fa-2x"></i></a>
                    </td>
                </tr>
            <?php
            } //end of for each loop
            ?>

        </tbody>
    </table>
    <?php
    require_once("inc/footer.php");
    ?>
</body>

</html>