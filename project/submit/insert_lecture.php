<?php
session_start();
require_once("../inc/connection.php");
// var_dump($_POST);
try {
    //prepare query 
    $sql = "INSERT INTO lecture (teacherid, subjectid, batchid, duration, amount, lecturedate) 
            VALUES (:teacherid, :subjectid, :batchid, :duration, :amount, :lecturedate)";
    $cmd = $db->prepare($sql);

    $data = array(
        ':teacherid' => $_POST['teacherid'],
        ':subjectid' => $_POST['subjectid'],
        ':batchid' => $_POST['batchid'],
        ':duration' => $_POST['duration'],
        ':amount' => $_POST['amount'],
        ':lecturedate' => $_POST['lecturedate']
    );

    //query execute
    $cmd->execute($data);
    $id = $db->lastInsertId();

    $_SESSION['success'] = "Lecture added with id $id";
    header("location:../lecture.php");
} catch (PDOException $error) {
    LogError($error);
    header("location:../lecture.php");
}
