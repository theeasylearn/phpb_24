<?php
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php
    require_once('inc/menu.php');
    ?>
    <?php
    if (isset($_REQUEST['success']) == true)
        echo "<div class='success'>Success! {$_REQUEST['success']}</div>";
    else if (isset($_REQUEST['error']) == true)
        echo "<div class='error'>error! {$_REQUEST['error']}</div>";
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

            <tr>
                <td>1</td>
                <td>PSI</td>
                <td>25000</td>
                <td>180 Days</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                <td>
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