<?php 
    class Student
    {
        private $rollno,$name;
        protected $surname,$dob;
        public $gender,$weight;
        public function __construct($rollno,$name,$surname,$dob,$gender,$weight)
        {
            $this->rollno = $rollno;
            $this->name = $name;
            $this->surname = $surname;
            $this->dob = $dob;
            $this->gender = $gender;
            $this->weight = $weight;
        }
        public function __toString()
        {
            echo "<table border='1' cellpadding='10'>";
            foreach($this as $key => $value)
            {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo "</table>";
            return "";
        }
    }
    //create student classs object
    $s1 = new Student(100,'Ankit','Patel','2024-06-18','Male',80.21);
    echo $s1; //it will call magic method tostring
?>