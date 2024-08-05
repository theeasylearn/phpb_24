<?php
session_start();
require 'vendor/autoload.php';
require_once('inc/verify_login.php');
require_once('inc/connection.php');
require_once('inc/header-part.php');
?>
<link rel="stylesheet" href="dist/css/lightbox.min.css">
<!-- <link rel="stylesheet" href="//cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css"> -->
<link rel="stylesheet" href="vendor/datatables.net/datatables.net-dt/css/dataTables.dataTables.min.css" />

</head>

<body>
    <?php
    require_once('inc/menu.php');
    require_once('inc/message.php');
    try {
        $sql = "select l.*,name,title,classtime from lecture l,teacher t,subject s,  batch b where l.teacherid=t.id and l.subjectid=s.id and b.id=l.batchid order by l.id desc";
        $cmd = $db->prepare($sql);
        $cmd->execute();
        $table = $cmd->fetchAll();
    } catch (PDOException $error) {
        LogError($error);
        require('inc/message.php');
    }
    ?>
    <div id="heading">
        <h2>Lecture </h2>
        <a href="add_lecture.php" class="btn">Add Lecture</a>
    </div>
    <table id="data">
        <thead>
            <tr>
                <th width="50px">ID</th>
                <th>Lecture Date</th>
                <th>Duration</th>
                <th>Amount</th>
                <th>Teacher</th>
                <th>Subject</th>
                <th>Batch</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $output = '';
            require_once("inc/common_functions.php");
            foreach ($table as $row) {
                extract($row);
                $mydate = toDMY($lecturedate);
                $output .= " <tr>
                <td>$id</td>
                <td>$mydate</td>
                <td>$duration Minute</td>
                <td>$amount</td>
                <td>$name</td>
                <td>$title</td>
                <td>$classtime</td>
                </tr>";
            }
            echo $output;
            ?>
        </tbody>
    </table>
    <?php
    require_once("inc/footer.php");
    ?>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
    <!-- <script src="//cdn.datatables.net/2.1.2/js/dataTables.min.js"></script> -->
    <script src="vendor/components/jquery/jquery.js"></script>
    <script src="vendor/datatables.net/datatables.net/js/dataTables.js"></script>

    <script>
        //plugin activation code
        $(document).ready(function() {
            $('#data').DataTable();
        });
    </script>
</body>

</html>