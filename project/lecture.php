<?php
require_once('inc/header-part.php');
?>
<link rel="stylesheet" href="dist/css/lightbox.min.css">
</head>

<body>
    <?php
    require_once('inc/menu.php');
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
            <tr>
                <td>1</td>
                <td>Fri 12-07-1985</td>
                <td>120 Minute</td>
                <td>1000</td>
                <td>Ghanshyam</td>
                <td>History</td>
                <td>7 to 9</td>
               
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