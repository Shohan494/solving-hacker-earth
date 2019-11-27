<?php

$inputArray = [];

while($f = fgets(STDIN))
{
    array_push($inputArray, $f);
}

//print_r($inputArray);

$currentLiftPosition;

$liftPositionA = 0;
$liftPositionB = 7;

for($i=1; $i < count($inputArray); $i++)
{
    
    if($liftPositionB - $inputArray[$i] >= $inputArray[$i] - $liftPositionA)
    {
        echo "A";
        echo "\n";
        $liftPositionA = $inputArray[$i];
    }
    else
    {
        echo "B";
        echo "\n";
        $liftPositionB = $inputArray[$i];
    }
}

?>
