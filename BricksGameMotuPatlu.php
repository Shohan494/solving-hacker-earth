<?php

fscanf(STDIN, "%s\n", $input);           // Reading input from STDIN

$patlu = 0;
$motu = 0;

while($input >= 1)
{
    if($patlu < $input)
    {
        //patlu's turn
        $patlu = $patlu + 1;
        
        //echo "Patlu Picked : " . $patlu . "\n";
        
        $input = $input - $patlu;
        
        //echo "Remaining : " . $input . "\n";
        
        $motu = $patlu * 2;
        
        if($motu < $input)
        {
            //motu's turn
            //echo "Motu Picked : " . $motu . "\n";
            
            $input = $input - $motu;
            
            //echo "Remaining : " . $input . "\n";
        }
        else
        {
            echo "Motu"; 
            break;
        }
    }
    else
    {
        echo "Patlu"; 
        break;
    }
}

?>
