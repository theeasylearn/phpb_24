<?php
session_start();
require_once("../inc/connection.php");
// var_dump($_POST);
try {
    //prepare query 
    $sql = 'insert into course (title,fees,duration,description) values (?,?,?,?)';
    $cmd = $db->prepare($sql);
    //bind parameters
    $cmd->bindparam(1, $_POST['title']);
    $cmd->bindparam(2, $_POST['fees']);
    $cmd->bindparam(3, $_POST['duration']);
    $cmd->bindparam(4, $_POST['description']);

    //query execute
    $cmd->execute();
    $courseid = $db->lastInsertId();
    // $msg = "Course added with id $courseid";
    // header("location:../course.php?success=$msg");

    $_SESSION['success'] = "Course added with id $courseid";
    header("location:../course.php");
} catch (PDOException $error) {
    LogError($error);
    // $msg = 'oops, something went wrong, we are trying to findout the problem.please come after sometime';
    // header("location:../course.php?error=$msg");
    // or 
    header("location:../course.php");
}
