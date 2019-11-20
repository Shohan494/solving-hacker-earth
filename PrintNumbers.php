<?php

$inputArray = [];

while($f = fgets(STDIN))
{
    array_push($inputArray, $f);
}

echo $inputArray[1];
?>
