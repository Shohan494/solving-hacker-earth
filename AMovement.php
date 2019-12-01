<?php

fscanf(STDIN, "%s\n", $number);           // Reading input from STDIN

$steps = 0;

while($number != 0)
{
    if($number >= 5)
    {
        $number -= 5;
        $steps++;
        //echo $number;
    }
    elseif($number == 4)
    {
        $number -= 4;
        $steps++;
    }
    elseif($number == 3)
    {
        $number -= 3;
        $steps++;
    }
    elseif($number == 2)
    {
        $number -= 2;
        $steps++;
    }
    elseif($number == 1)
    {
        $number -= 1;
        $steps++;
    }
}

echo $steps;

?>
