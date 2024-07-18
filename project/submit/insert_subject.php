<?php
session_start();
require_once("../inc/connection.php");
// var_dump($_POST);
try {
    //prepare query 
    $sql = 'insert into subject (courseid,title,rate) values (?,?,?)';
    $cmd = $db->prepare($sql);
    //bind parameters
    $cmd->bindparam(1,$_POST['courseid']);
    $cmd->bindparam(2,$_POST['title']);
    $cmd->bindparam(3,$_POST['rate']);

    //query execute
    $cmd->execute();
    $id = $db->lastInsertId();
   
    $_SESSION['success'] = "Subject added with id $id";
    header("location:../subject.php");
} catch (PDOException $error) {
    LogError($error);
    header("location:../subject.php");
}
