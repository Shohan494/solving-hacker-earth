<?php


$inputArray = [];

while($f = fgets(STDIN))
{
    array_push($inputArray, rtrim($f));
}

for($i = 0; $i < $inputArray[1]; $i++)
{
    $explodedValues = explode(" ", $inputArray[$i + 2]);
    {
        // echo $explodedValues[0];
        // echo ",";
        // echo $explodedValues[1];
        // echo "next";
        // echo "\n";
        
        if($explodedValues[0] >= $inputArray[0] && $explodedValues[1] >= $inputArray[0] && $explodedValues[0] == $explodedValues[1])
        {
            echo "ACCEPTED";
            echo "\n";
        }
        elseif($explodedValues[0] < $inputArray[0] || $explodedValues[1] < $inputArray[0])
        {
            echo "UPLOAD ANOTHER";
            echo "\n";
        }
        elseif($explodedValues[0] > $inputArray[0] || $explodedValues[1] > $inputArray[0])
        {
            echo "CROP IT";
            echo "\n";   
        }
    }
    
}

?>
