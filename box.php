<?php
class Box
{
    public function __call($name,$arguments)
    {
        if (method_exists($this, $name)==false) {
            echo "<br/> No such function $name";
        } 
        else 
        {
            return call_user_func_array([$this, $name], $arguments);
        }
    }
    private function getArea($length, $width=0)
    {
        if($width!=0)
            return $length * $width;
        else 
            return $length * $length;
    }
    private function getVolume($length,$width,$deapth=1)
    {
        if(func_num_args()>3)
            return 0;
        else
            return $length * $width * $deapth;
    }
}
?>
