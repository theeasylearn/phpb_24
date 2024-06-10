<?php 
    class Movie 
    {
        private $name,$length,$cast;
        public function __construct($name,$length,$cast)
        {
            $this->name = $name;
            $this->length = $length;
            $this->cast = $cast;
            echo "<br/> constructor is called...";
        }
        //magic method 
        public function __toString()
        {
            return "<br/> name = $this->name length = $this->length cast = $this->cast";
        }
        public function __set($name,$value)
        {
            if($name != 'cast')
                $this->$name = $value;
            else
                echo "<br/> can not set $name";
        }
        public function __isset($name)
        {
            if(isset($this->$name)==true)
                return true;
            else 
                return false;
        }
        public function __get($name)
        {
            if(isset($this->$name))
                return $this->$name;
            else 
                return null;
        }
        public function __unset($name)
        {
            unset($this->$name);
        }

        
    }
