<?php 
    // string related library function
    $amount = 12500000;
    printf("amount = [%s]",number_format($amount));
    printf("<br/> <pre> amount = [%20s]",number_format($amount));
    printf("<br/> amount = [%-20s]",number_format($amount));
    printf("</pre><br/> amount = [%020s]",number_format($amount));
    printf("<br/> amount = [%'#20s]",number_format($amount));
    $name = "Ankit Patel";
    $age = 38;
    $output = sprintf("your name is %s and your age is %d",$name,$age);
    echo $output;

    $filename = 'datetime.txt';
    $mode = 'a';

    //file open 
    $fp = fopen($filename,$mode);
    date_default_timezone_set("asia/kolkata");
    $datetime = date("d") . "/" . date("m") . "/" . date("y") . " " . date("h") . ":" . date("i") . ":" . date("s");

    fprintf($fp,"\n%s",$datetime);

    fclose($fp);
?>