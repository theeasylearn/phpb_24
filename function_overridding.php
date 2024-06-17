<?php 
    class ParentClass 
    {
        function who()
        {
            echo "<br/> who() function from Parent";
        }
    }
    class Child extends ParentClass
    {
        //function over-ridding
        function who()
        {
            echo "<br/> who() function from Child";
        }
        function WhatICanDo()
        {
            echo "<br/> WhatICanDo() function called. <hr/>";
            $this->who(); //call same class function who
            self::who(); //call same class function who
            parent::who(); //call parent class class function who
        }
    }

    //create parent class object
    $p1 = new ParentClass();
    $p1->who(); //parent class method is called

    $c1 = new Child();
    $c1->who(); //child class method is called

    $c1->WhatICanDo();
?>