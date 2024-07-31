<?php
session_start();
require_once('inc/header-part.php');
require_once('inc/connection.php');
?>
<link rel="stylesheet" href="dist/css/lightbox.min.css">
</head>

<body>
    <?php
    require_once('inc/menu.php');
    require_once('inc/message.php');
    try {
        $sql = "select * from teacher order by id desc";
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
            <?php
             $temp = "";
             foreach ($table as $row) {
             extract($row);
             $temp .= "<tr>
                <td>$id</td>
                <td>$name</td>
                <td>$mobile</td>
                <td>$email</td>
                <td>$gender</td>
                <td>$qualification</td>
                <td width='50px'>$experience</td>
                <td>
                    <a class='example-image-link' href='http://picsum.photos/400' data-lightbox='example-1'>
                        <img class='example-image' src='photo/$photo' alt='Teacher Photo' width='50px' />
                    </a>
                </td>
                <td width='95px'>
                    <a href='edit_teacher.php?teacherid=$id'><i class='fa fa-pencil fa-2x'></i></a>
                    <a href=''><i class='fa fa-trash fa-2x'></i></a>
                </td>
            </tr>";

             }
             echo $temp;    
            ?>
            <!-- Additional rows can be added here -->
        </tbody>
    </table>

    <?php
    require_once("inc/footer.php");
    ?>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>

</body>

</html>