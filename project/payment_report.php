<?php
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php
    require_once('inc/menu.php');
    ?>
    <div id="heading">
        <h2>Payment Report</h2>
        <a href="report.php" class="btn">Batch report</a>
    </div>
    <table id="data">
        <thead>
      
            <tr>
                <th>Sr No</th>
                <th>Course</th>
                <th>Batch</th>
                <th>Paid Amount</th>
                <th>Unpaid Amount</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>P.S.I</td>
                <td>7 to 9</td>
                <td>50000</td>
                <td>30000</td>
                <td>80000</td>
            </tr>

        </tbody>
    </table>
    <?php
    require_once("inc/footer.php");
    ?>
</body>

</html>