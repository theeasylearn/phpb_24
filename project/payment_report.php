<?php
    session_start();
    require_once('inc/verify_login.php');
    require_once('inc/header-part.php');
    require_once('inc/connection.php');
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
            <?php
            try {
                $sql = "select title,classtime,(select sum(amount) from lecture l where batchid=b.id and payoutid is null) as 'unpaid_amount',(select sum(amount) from lecture l where batchid=b.id and payoutid is not null) as 'paid_amount' from batch b, course c where b.courseid=c.id";
                $cmd = $db->prepare($sql);
                $cmd->execute();
                $table = $cmd->fetchAll();
                $temp = '';
                $srno=1;
                foreach ($table as $row) {
                    extract($row);
                    $total = $paid_amount + $unpaid_amount;
                    $temp .= " <tr>
                <td>$srno</td>
                <td>$title</td>
                <td>$classtime</td>
                <td>$paid_amount</td>
                <td>$unpaid_amount</td>
                <td>$total</td>
            </tr>";
                    $srno++;
                }
                echo $temp;
            } catch (PDOException $error) {
                LogError($error);
                require_once("inc/message.php");
            }
            ?>


        </tbody>
    </table>
    <?php
    require_once("inc/footer.php");
    ?>
</body>

</html>