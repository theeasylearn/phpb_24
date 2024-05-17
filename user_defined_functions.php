<?php 
// include('datetime1.php');
require('include/datetime.php');
echo getCurrentDate();
echo "<br/>" . getCurrentDate('Y-m-d');
echo "<br/>" . getCurrentDate('m-d-Y');
echo "<br/>" . getCurrentDate('D m-d-Y');
echo "<br/>" . getCurrentTime();

?>  