<?php


// Cheeku will take medicine from him only if Length of name of Book is lesser than 
// or equal to 23 and number of pages in book is between 500 to 1000.
// Otherwise he will not take medicine from this Doctor.


$inputArray = [];
while($f = fgets(STDIN))
{
    $inputArray = explode(" ", $f);
}

if($inputArray[0] <= 23 &&  1000 >= $inputArray[1] && $inputArray[1] >= 500 )
{
    echo "Take Medicine";
}
else
{
    echo "Don't take Medicine";
}


?>
