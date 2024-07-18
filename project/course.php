<?php
session_start();
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php
    require_once('inc/menu.php');
    if (isset($_SESSION['success']) == true) 
    {
        echo "<div class='success'>Success! {$_SESSION['success']}</div>";
        unset($_SESSION['success']);
    } 
    else if (isset($_SESSION['error']) == true) 
    {
        echo "<div class='error'>error      ! {$_SESSION['error']}</div>";
        unset($_SESSION['error']);
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