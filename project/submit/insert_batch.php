<?php
session_start();
require_once("../inc/connection.php");
// var_dump($_POST);
try {
    //prepare query 
    $sql = 'insert into batch (courseid,startdate,enddate,classtime) values (?,?,?,?)';
    $cmd = $db->prepare($sql);
    extract($_POST);
    $data = array($courseid,$startdate,$enddate,$classtime);

    //query execute
    $cmd->execute($data);
    $id = $db->lastInsertId();
   
    $_SESSION['success'] = "batch added with id $id";
    header("location:../batch.php");
} catch (PDOException $error) {
    LogError($error);
    header("location:../batch.php");
}
