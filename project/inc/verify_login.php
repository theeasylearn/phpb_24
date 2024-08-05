<?php
if (isset($_SESSION['id']) == false) {
    $_SESSION['error'] = "login required";
    header("location:index.php");
    exit(); //prevent executing code below header
}
?>