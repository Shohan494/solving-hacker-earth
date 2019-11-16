<?php

$inputArray = [];

while($f = fgets(STDIN))
{
    array_push($inputArray, $f);
}

$answer = 1;
$inputIntegersArrayLength = $inputArray[0];

$inputIntegers = explode(" ", $inputArray[1]);

for($i=0; $i < $inputIntegersArrayLength; $i++)
{
    $answer = ($answer * $inputIntegers[$i]) % (pow(10, 9) + 7);
}

echo $answer;

?>
