<?php

fscanf(STDIN, "%s\n", $isbn);           // Reading input from STDIN

//  Sum=1×1 + 2×4 + 3×0 + 4×1 + 5×6 + 6×0 + 7×1 + 8×4 + 9×9 + 10×9 = 253 which is divisible by 11.

$sum = 1;

if(strlen($isbn) == 10)
{
    for($i=0; $i < strlen($isbn); $i++)
    {
        $sum = $sum * ($i + 1) * $isbn[$i];
    }

    if($sum % 11 == 0)
    {
        echo 'Legal ISBN';
    }
    else
    {
        echo 'Illegal ISBN';
    }
}
else
{
    echo 'Illegal ISBN';
}


?>
