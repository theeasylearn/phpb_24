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
        require_once("../inc/common_functions.php");

        //generate randome password 
        $newpassword = generatePassword(8);
        $sql = 'update admin set password=? where email=?';
        $cmd = $db->prepare($sql);
        $data = array($newpassword,$email);
        //query execute
        $cmd->execute($data);
        require_once("../inc/mail_function.php");
        $subject = "Password recovery email";
        $message = "your new password $newpassword";
        SendMail($email,$subject,$message);
        $_SESSION['success'] = "password sent on email";
        header("location:../index.php");
    }
} catch (PDOException $error) {
    LogError($error);
    header("location:index.php");
}
