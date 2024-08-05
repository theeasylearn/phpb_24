<?php
session_start();
require_once('inc/verify_login.php');
require_once("inc/connection.php");
try {
    //prepare query 
    $sql = 'update teacher set isdeleted=1 where id=?';
    $cmd = $db->prepare($sql);
    extract($_REQUEST);
    $data = array($teacherid);

    //query execute
    $cmd->execute($data);

    $_SESSION['success'] = "teacher deleted";
    header("location:teacher.php");
} catch (PDOException $error) {
    LogError($error);
    header("location:teacher.php");
}
