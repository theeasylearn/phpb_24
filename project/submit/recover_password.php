<?php
session_start();
require_once("../inc/connection.php");
try 
{
    //prepare query 
    $sql = 'select id from admin where email=?';
    $cmd = $db->prepare($sql);
    extract($_POST);
    $data = array($email);

    //query execute
    $cmd->execute($data);
    $table = $cmd->fetchAll();
    if(sizeof($table)==0)
    {
        //login failed
        $_SESSION['error'] = "email not found";
        header("location:../forgot_password.php");
    }
    else 
    {
        // $_SESSION['success'] = "login successfully";
        // $_SESSION['id'] = $table[0]['id'];
        // header("location:../lecture.php");
        //generate randome password 
        require_once("../inc/common_functions.php");
        $newpassword = generatePassword(8);
        echo $newpassword;
    }
} catch (PDOException $error) {
    LogError($error);
    header("location:index.php");
}
