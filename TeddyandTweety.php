<?php


fscanf(STDIN, "%s\n", $chocolate);           // Reading input from STDIN

//echo $chocolate / 3;

if($chocolate % 3 == 0)
{
    echo "YES";
}
else
{
    echo "NO";
}


?>
