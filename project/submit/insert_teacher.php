<?php
session_start();
require_once("../inc/connection.php");
// var_dump($_POST);
// var_dump($_FILES);
try {
    //prepare query 
    $sql = 'INSERT INTO teacher(name, mobile, email, gender, qualification, experience, photo) VALUES (:name,:mobile,:email,:gender,:qualification,:experience,:photo)';
    $cmd = $db->prepare($sql);
    extract($_POST);
    $photo = rand(1000,9999). "_" . $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $photo);
    $cmd->bindParam(':name', $name);
    $cmd->bindParam(':mobile',$mobile);
    $cmd->bindParam(':email', $email);
    $cmd->bindParam(':gender', $gender);
    $cmd->bindParam(':qualification', $qualification);
    $cmd->bindParam(':experience', $experience);
    $cmd->bindParam(':photo', $photo);
    //query execute
    $cmd->execute($data);
    $id = $db->lastInsertId();
   
    $_SESSION['success'] = "teacher added with id $id";
    header("location:../teacher.php");
} catch (PDOException $error) {
    LogError($error);
    header("location:../teacher.php");
}
