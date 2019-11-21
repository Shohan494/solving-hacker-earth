<?php

$inputArray = [];

//fscanf(STDIN, "%s\n", $input);  // Reading input from STDIN

while(trim(fscanf(STDIN, "%s\n", $input)));  // Reading input from STDIN)
{
    array_push($inputArray, rtrim($input));
}



$valueArray = [];

for($i = 1; $i < count($inputArray); $i++)
{
    $explodedBySpace =  explode(' ', $inputArray[$i]);

    // for($j = 0; $j < count($explodedBySpace); $j++)
    // {
    //     //echo $explodedBySpace[$j];
        
    //     $value = 0;
    //     $splittedByCharacters =  str_split(trim($explodedBySpace[$j])); //this rtrim operations costed me so much time
        
    //     for($k = 0; $k < count($splittedByCharacters); $k++)
    //     {
    //          $value = $value + ord($splittedByCharacters[$k]);
    //     }

    //     array_push($valueArray, $value); 
    // }
    

}

    // for($l = 0; $l < $inputArray[0] * 2; $l = $l + 2)
    // {
    //      if($valueArray[$l] == $valueArray[$l + 1])
    //     {
    //          echo "YES";
    //       echo "\n";
    //      }
    //      else
    //      {
    //          echo "NO";
    //         echo "\n";
    //     }
    // }



?>
