<?php
session_start();
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php
        require_once('inc/menu.php');
        require_once('inc/message.php');

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
            <tr>
                <td>1</td>
                <td>PSI</td>
                <td>7 to 9 </td>
                <td width='50px'>01-07-2024</td>
                <td width='50px'>15-07-2025</td>
                <td width='95px'>
                    <a href=""><i class="fa fa-pencil fa-2x"></i></a>
                    <a href=""><i class="fa fa-trash fa-2x"></i></a>
                </td>
            </tr>

        </tbody>
    </table>
    <?php
    require_once("inc/footer.php");
    ?>
</body>

</html>