<?php
date_default_timezone_set("asia/kolkata");
define("FILENAME", $_SERVER['DOCUMENT_ROOT'] . "/phpb_24/project/inc/error.log");
define("ISDEBUG",true);
define("SERVER","localhost:3308");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE", "phpb_24");
function LogError($error)
{
    $ErrorDateTime = date("D d-m-Y h:i:sA");
    $code = $error->getCode();
    $message = $error->getMessage();
    $line = $error->getLine();
    $file = $error->getFile();
    $ErrorMessage = "\n Error Code $code  ErrorDetail  $message on $ErrorDateTime in file $file at lineno $line";
    //it writes content into file
    file_put_contents(FILENAME, $ErrorMessage, FILE_APPEND | LOCK_EX);
    if (ISDEBUG == true)
        $_SESSION['error'] = $ErrorMessage;
    else 
        $_SESSION['error'] = 'oops, something went wrong, we are trying to findout the problem.please come after sometime';
    //exit(); //terminate php script
}
$db = null; //object
try {
    $db = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE, USERNAME, PASSWORD);

    // Set the fetch mode to FETCH_ASSOC
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //echo "Connection is created ";
} catch (PDOException $error) {
    LogError($error); //calling user defined functions
}
