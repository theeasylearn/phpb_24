<?php
class Person
{
    public function walk()
    {
        echo "<br/> i can walk";
    }
    public function talk()
    {
        echo "<br/> i can talk";
    }
}
interface animal
{
    function eat(); //abstract function which has no code 
    function sleep();  //abstract function which has no code 

}
interface human 
{
    function breath(); 
}
//multiple inheritance
class Student extends Person implements animal, human 
{
    public function read()
    {
        echo "<br/> I can read";
    }
    public function write()
    {
        echo "<br/> I can write";
    }
    public function eat()
    {
        echo "<br/> i can eat";
    }
    public function sleep()
    {
        echo "<br/> i can sleep";
    }
    public function breath()
    {
        echo "<br/> i can breath";
    }
}

//create student class object
$s1 = new Student();
$s1->walk();
$s1->talk();
$s1->eat();
$s1->sleep();
$s1->breath();