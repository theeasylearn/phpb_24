<?php
//class definition 
class Product
{
    //property/instance variable
    private $name, $quantity;
    public $price;
    //setter function 
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    //getter function 
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function print()
    {
        var_dump($this);
    }
}
?>
