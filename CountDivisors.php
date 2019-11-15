<?php

$input = fgets(STDIN);

$numbers = explode(" ", $input);
$result = 0;

for($i = $numbers[0]; $i <= $numbers[1]; $i++)
{
    if($i % $numbers[2] == 0)
    {
        $result++;
    }
}

echo $result;

?>
