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
        require_once('inc/message.php');
    ?>
    <div id="heading">
        <h2>Subject </h2>
        <a href="add_subject.php" class="btn">Add Subject</a>
    </div>
    <table id="data">
        <thead>
            <tr>
                <th width='50px'>id</th>
                <th width='200px'>Course</th>
                <th>Title</th>
                <th>Rate</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>PSI</td>
                <td>History</td>
                <td width='50px'>500</td>
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