<?php
/*
// Sample code to perform I/O:

fscanf(STDIN, "%s\n", $name);           // Reading input from STDIN
echo "Hi, ".$name.".\n";                // Writing output to STDOUT

// Warning: Printing unwanted or ill-formatted data to output will cause the test cases to fail
*/

// Write your code here

fscanf(STDIN, "%s\n", $string);           // Reading input from STDIN

$stringLength = strlen($string);

$newString = "";

// echo $string;
// echo $stringLength;

for($i=0; $i<$stringLength; $i++)
{   
    //echo $string[$i]."\n";
    if(ctype_upper($string[$i]))
    {
        $newString = $newString . strtolower($string[$i]);
    }
    else
    {
        $newString = $newString . strtoupper($string[$i]);
    }
}

echo $newString;

?>
