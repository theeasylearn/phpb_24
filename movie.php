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
        public function __toString()
        {
            return "<br/> name = $this->name length = $this->length cast = $this->cast";
        }
    }
