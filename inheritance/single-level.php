<?php
    //parent class
    class KB
    {
        private $bytes; //instance variable
        public function __construct($bytes)
        {
            $this->bytes = $bytes;
            echo "<br/> KB class constructor is called....";
        }
        public function getKB()
        {
            return $this->bytes / 1024;
        }
    }
    //child class 
    class MB extends KB
    {
        //if parent class has constructor child class must have constructor and it has to call parent class constructor 
        public function __construct($bytes)
        {
            KB::__construct($bytes); //call parent class constructor
            echo "<br/> MB class constructor is called....";
        }
        public function getMB()
        {
            return KB::getKB() / 1024;
        }
    }
    //create object 
    $m1 = new MB(102400000); //1st call MB class constructor which call KB class constructor
    echo "<br/> mb = " . $m1->getMB();
    echo "<br/> kb = " . $m1->getKB();

    
?>