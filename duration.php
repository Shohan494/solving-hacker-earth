<?php

$inputArray = [];
while($f = fgets(STDIN))
{
    array_push($inputArray, $f);
}

for($i=1; $i <= $inputArray[0]; $i++)
{
    $durationArray = explode(" ", $inputArray[$i]);
    $startingTimeInMinutes = ($durationArray[0] * 60) + $durationArray[1];
    $endingTimeInMinutes = ($durationArray[2] * 60) + $durationArray[3];
    
    $resultInMinutes = $endingTimeInMinutes - $startingTimeInMinutes;
    $hours = (int)($resultInMinutes / 60);
    $minutes = $resultInMinutes % 60;
    echo($hours . " " . $minutes);
    echo "\n";
}

?>
