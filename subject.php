<?php 
    class Course 
    {
        private $name,$topics,$duration,$fees;
        public function __construct($name,$topics,$duration,$fees=1)
        {
            $this->name = $name;
            $this->topics = $topics;
            $this->duration = $duration;
            $this->fees = $fees;
            echo "<br/> Course class constructor is called....";
            var_dump($this);
        }
        public function __destruct()
        {
            echo "<br/> destructor is called....";
        }
        public function display()
        {
            echo "<br/> name $this->name <br/> topics = $this->topics <br/> duration =  $this->duration <br/> fees = $this->fees";
            
        }
    }
?>