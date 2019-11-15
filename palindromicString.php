<?php

fscanf(STDIN, "%s\n", $inputString);    // Reading input from STDIN

$reverseString = "";

for($i = strlen($inputString) - 1; $i >= 0; $i--)
{
    $reverseString = $reverseString . $inputString[$i];
}


if($inputString === $reverseString)
{
    echo "YES";
}
else
{
    echo "NO";
}

?>
