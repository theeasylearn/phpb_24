<?php
class DateTime
{
    //hours = 2 , minutes = 10 , seconds = 10
    public function toSeconds($hours, $minutes = 0, $seconds = 0)
    {
        echo "<br/> hours = $hours minutes= $minutes, seconds = $seconds";
        $totalSeconds = $hours * 60 * 60;
        $totalSeconds += ($minutes * 60);
        $totalSeconds += $seconds;
        return $totalSeconds;
    }
    public function toDays($years, $months = 0, $days = 0)
    {
        
    }
    public function addDays($years,$months,$days)
    {
        //return future date after adding above years, months, days into current date 
    }
}
