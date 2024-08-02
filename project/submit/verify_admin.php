<?php
session_start();
require_once("../inc/connection.php");
try 
{
    //prepare query 
    $sql = 'select id from admin where email=? and password=?';
    $cmd = $db->prepare($sql);
    extract($_POST);
    $data = array($email,$password);

    //query execute
    $cmd->execute($data);
    $table = $cmd->fetchAll();
    if(sizeof($table)==0)
    {
        //login failed
        $_SESSION['error'] = "login failed";
        header("location:../index.php");
    }
    else 
    {
        $_SESSION['success'] = "login successfully";
        $_SESSION['id'] = $table[0]['id'];
        header("location:../lecture.php");
    }
} catch (PDOException $error) {
    LogError($error);
    header("location:index.php");
}
