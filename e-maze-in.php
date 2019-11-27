<?php

$x = 0;
$y = 0;

fscanf(STDIN, "%s\n", $inputString);           // Reading input from STDIN

for($i=0; $i < strlen($inputString); $i++)
{
    switch ($inputString[$i])
    {
        case 'L':
            $x = $x - 1;
            break;
        case 'R':
            $x = $x + 1;
            break;
        case 'U':
            $y = $y + 1;
            break;
        case 'D':
            $y = $y - 1;
        default:
            break;
    } 
}

echo $x . ' ' . $y;

?>
