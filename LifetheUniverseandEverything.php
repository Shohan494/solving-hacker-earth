<?php

// this was way much easier than I expected, thought some sorting would be needed at first

$inputArray = [];

while($f = fgets(STDIN))
{
    array_push($inputArray, $f);
}

for($i=0; $i < count($inputArray); $i++)
{
    if($inputArray[$i] == 42)
    {
        break;
    }
    else
    {
        echo $inputArray[$i] . "\n";
    }
}


?>
