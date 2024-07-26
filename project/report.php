<?php
    session_start();
    require_once('inc/connection.php');
    require_once('inc/header-part.php');
?>
</head>

<body>
    <?php
        require_once('inc/menu.php');
        if(isset($_POST['submit'])==true)
        {
            echo "it is input submit";
            extract($_POST);
            try 
            {
                $sql = "SELECT * FROM `lecture` where lecturedate>=? and lecturedate<=? and batchid=?";
                $cmd = $db->prepare($sql);
                $cmd->bindParam(1,$startdate);
                $cmd->bindParam(2,$enddate);
                $cmd->bindParam(3,$batchid);
                $cmd->execute();
                $table = $cmd->fetchAll();
            }
            catch(PDOException $error)
            {
                LogError($error);
                require_once("message.php");
            }
        }
    ?>
    <div id="heading">
        <h2>Batch Report</h2>
        <a href="payment_report.php" class="btn">Payment report</a>
    </div>
    <table id="data">
        <form action="report.php" method="post">
              <thead>
            <tr>
                <td colspan="2" align="center">
                    <label for="batchid">Select Batch</label> <br />
                    <select name="batchid" id="batchid" required>
                        <option value="">Select batch</option>
                        <option value="1">7 to 9</option>
                        <option value="2">9 to 11</option>
                        <option value="3">11 to 1</option>
                    </select>
                </td>
                <td colspan="2" align="center">
                    <label for="startdate">Start Date</label> <br />
                    <input type="date" name="startdate" id="startdate" required />
                </td>
                <td colspan="2" align="center">
                    <label for="enddate">End date</label> <br />
                    <input type="date" name="enddate" id="enddate" required />
                </td>
                <td>
                    <input type="submit" value="search" class="save" name="submit" /> <br/>
                    <input type="reset" value="clear all" class="clear" />
                </td>
            </tr>
            <tr>
                <th>Sr No</th>
                <th>Lecture Date</th>
                <th>Teacher</th>
                <th>Subject</th>
                <th>Duration</th>
                <th>Amount</th>
                <th>is paid</th>
            </tr>
        </thead>
        </form>
        <tbody>
            <?php 
                $temp = '';
                foreach($table as $row)
                {
                    $temp+= "<tr>
                    <td>1</td>
                    <td>15-07-2024</td>
                    <td>Ghanshyam pandye</td>
                    <td>History</td>
                    <td>120 Minute</td>
                    <td>1000</td>
                    <td>No</td>
                </tr>";
                }
                echo $temp;
            ?>

        </tbody>
    </table>
    <?php
        require_once("inc/footer.php");
    ?>
</body>

</html>