<?php 
    //Singleton class 
    class Database 
    {
        private static $instance = null;
        public $name;
        private function __construct()
        {
            echo "<br/> private constructor is called....";
            $this->name = 'easylearn';
        }
        public static function getInstanceIfNotExist()
        {
            if(self::$instance==null)
            {
                echo "<br/>instance is null so let us allocate memory";
                self::$instance = new Database();
            }
            else 
            {
                 echo "<br/>instance is not null so we dont allocate memory";
            }
            return self::$instance;
        }
    }

    //create database class object
    //$db1 = new Database(); it is not possible to create object because constructor is private
    $db1 = Database::getInstanceIfNotExist();
    $db1->name = 'the easylearn academy';
    echo "<hr/> db1 name " . $db1->name;
    $db2 = Database::getInstanceIfNotExist();
    echo "<hr/> db2 name " . $db2->name;
    $db2->name = 'T.E.A';
    echo "<hr/> db1 name " . $db1->name;
    echo "<hr/> db2 name " . $db2->name;
?>