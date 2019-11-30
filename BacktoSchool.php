<?php

$inputArray = [];
while($f = fgets(STDIN))
{
    array_push($inputArray, $f);
}

$splitted = explode(" ", $inputArray[0]);

//print_r($splitted);


if($splitted[0] > $splitted[1])
{
    if($splitted[0] > $splitted[2])
    {
        echo $splitted[0];
    }
    else
    {
        echo $splitted[2];
    }
}
else
{
    if($splitted[1] > $splitted[2])
    {
        echo $splitted[1];
    }
    else
    {
        echo $splitted[2];
    }
}


?>
