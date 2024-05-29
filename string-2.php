<?php 
    $name = "             The Easylearn Academy          ";
    echo "<pre> * $name *";
    echo "<br/> * " . ltrim($name) . "*";
    echo "<br/> * " . rtrim($name) . "*";
    echo "<br/> * " . trim($name) . "*";
    echo "<br/> length of string " . strlen(trim($name));
    echo "<br/> length of string " . strlen($name);
    echo "</pre>";
    $name = trim($name);
    echo "<br/> " . str_repeat("^",100) . "<br/>";
    echo str_pad($name,100,"*",STR_PAD_BOTH);
    echo "<BR/>" . str_pad($name,100,"*",STR_PAD_LEFT);
    echo "<BR/>" . str_pad($name,100,"*",STR_PAD_RIGHT);
    echo "<br/> " . str_repeat("!",100) . "<br/>";

    echo "<br/> position of academy " . strpos($name,'academy');
    echo "<br/> position of india " . strpos($name,'india'); //if not found it return false 

    $fruit1 = 'mango';
    $fruit2 = 'mango';

    if(strcmp($fruit1,$fruit2)==0)
    {
        echo "<br/> both string are same";
    }
    else if(strcmp($fruit1,$fruit2)<0)
    {
        echo "<br/> first string smaller then second";
    }
    else if(strcmp($fruit1,$fruit2)>0)
    {
        echo "<br/> first string bigger then second";
    }

    $sentence = "you should daily eat pizza, burger and drink coca-cola";
    $bad_words = array('pizza','burger','coca-cola');
    $good_words = array('apple','banana','coconut water');
    echo "<br/> original sentence = $sentence <br/> updated sentence " . str_replace($bad_words,$good_words,$sentence);

    echo "<br/>" . wordwrap($sentence,15,"<br/>",false);
    echo "<br/> 1st five letter of $name = " . substr($name,0,5);
    echo "<br/> last ten letter of $name = " . substr($name,10,strlen($name));
    $email = "theeasylearn@gmail.com";
    echo "<br/> all letter's @ onwards " . strstr($email,'@');
    echo "<br/> all letter's before @  " . substr($email,0,strpos($email,'@'));

    echo "<br/> $name in lowercase = " . strtolower($name);
    echo "<br/> $name in uppercase = " . strtoupperwww($name);
?>  