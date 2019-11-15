<?php

fscanf(STDIN, "%s\n", $input);  // Reading input from STDIN

$result = 1;

for($i = 1; $i <= $input; $i++)
{
    $result = $result * $i;
}


echo $result;

?>
