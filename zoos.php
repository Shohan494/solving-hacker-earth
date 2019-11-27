<?php

fscanf(STDIN, "%s\n", $word);
$countZ = 0;
$countO = 0;

for($i=0; $i < strlen($word); $i++)
{
    if($word[$i] == "z")
    {
        $countZ++;
    }
    else
    {
        $countO++;
    }
}

if(($countZ * 2) == $countO)
{
    echo "Yes";
}
else
{
    echo "No";
}

?>
