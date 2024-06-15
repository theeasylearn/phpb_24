<?php
class MyMath
{
    public function getPi()
    {
        return 3.1415;
    }
    public function getSquare($number) //10 * 10
    {
        $square = $number * $number;
        return $square;
    }
}
class Circle extends MyMath
{
    protected $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getArea()
    {
        $area = MyMath::getPi() * MyMath::getSquare($this->radius);
        return $area;
    }
}
class Sphere extends Circle
{
    public function __construct($radius)
    {
        Circle::__construct($radius);
    }
    public function getVolume()
    {
        $radius = $this->radius;
        $volume = (4/3) * Circle::getPi() * Circle::getSquare($radius) * $radius;
        return $volume;
    }
}
class Cyliender extends MyMath
{
    private $radius, $height;
    public function __construct($radius, $height)
    {
        $this->radius = $radius;
        $this->height = $height;
    }
    public function getArea()
    {
        $area = 2 * MyMath::getPi() * $this->radius * $this->height;
        return $area;
    }
}

$c1 = new Circle(100);
$c2 = new Cyliender(100, 36);
$s1 = new Sphere(10);
echo "<br/> circle area = " . $c1->getArea();
echo "<br/> cyliender area = " . $c2->getArea();
echo "<br/> Sphere volume = " . $s1->getVolume();
