<?php
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstrvwxyz1234567890_-!@#$%^&*()[]{}|';
    $seeds = str_split($letters);
    // print_r($seeds);
    shuffle($seeds);
    // print_r($seeds);
    echo "<br/>" . substr(join("",$seeds),0,5);
    shuffle($seeds);
    echo "<br/>" . substr(join("",$seeds),0,10);
    shuffle($seeds);
    echo "<br/>" . substr(join("",$seeds),0,20);
?>