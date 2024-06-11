<?php
class MyObject
{
    //create static variable author
    public static $author = "ANKIT PATEL";
    public static $count = 1;

    private $data = array(); //empty array
    public function __construct()
    {
        $this->data['srno']  = MyObject::$count++;
    }
    public function __set($key, $value)
    {
        $this->data[$key]  = $value;
    }
    public function __get($key)
    {
        return $this->data[$key];
    }
    public function __toString()
    {
        echo "<table border=1 cellpadding='10'><tr><th>name</th><th>value</th></tr>";
        foreach ($this->data as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
        return "";
    }
    public function __isset($key)
    {
        if(isset($this->data[$key])==true)
            return true;
        else 
            return false;
    }
    public function __callStatic($name, $arguments)
    {
        echo "<br/> no such static function exists....";
    }
    public function __call($name,$arguments)
    {
        echo "<br/> no such function exists....";
    }
    public function __clone()
    {
        $this->data['srno']  = MyObject::$count++;
    }
}
