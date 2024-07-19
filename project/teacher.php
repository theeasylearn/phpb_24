<?php
    session_start();
    require_once('inc/header-part.php');
?>
<link rel="stylesheet" href="dist/css/lightbox.min.css">
</head>

<body>
    <?php
        require_once('inc/menu.php');
        require_once('inc/message.php');
    ?>
    <div id="heading">
        <h2>Teacher </h2>
        <a href="add_teacher.php" class="btn">Add Teacher</a>
    </div>
    <table id="data">
        <thead>
            <tr>
                <th width="50px">ID</th>
                <th width="200px">Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Qualification</th>
                <th>Experience</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>1234567890</td>
                <td>johndoe@example.com</td>
                <td>Male</td>
                <td>PhD in Education</td>
                <td width="50px">10</td>
                <td>
                    <a class="example-image-link" href="http://picsum.photos/400" data-lightbox="example-1">
                        <img class="example-image" src="http://picsum.photos/100" alt="Teacher Photo" width="50px" />
                    </a>
                </td>
                <td width="95px">
                    <a href=""><i class="fa fa-pencil fa-2x"></i></a>
                    <a href=""><i class="fa fa-trash fa-2x"></i></a>
                </td>
            </tr>
            <!-- Additional rows can be added here -->
        </tbody>
    </table>

    <?php
    require_once("inc/footer.php");
    ?>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>

</body>

</html>