<?php

fscanf(STDIN, "%s\n", $input);  // Reading input from STDIN

for($i = 1; $i <= 10; $i++)
{
    echo $input * $i . "\n";
}

?>
