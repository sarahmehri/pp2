<?php

echo"<p> PHP Array Practice</p>";

$numbers = array(7, 9, 8, 9, 8, 8, 6);
//printing numbers
function printArr($numbers){
$round = count($numbers);
for($i =0; $i<$round; $i++){
    echo "<p> $numbers[$i] <br> </p>";
}

}
//calling number function
printArr($numbers);

function largest($numbers){
    $round = count($numbers);
    $j = $numbers[0];
    for($i =1; $i<$round; $i++){
        if($numbers[$i] > $j){
            $j = $numbers[$i];
        }

    }
    echo "<p> The largest number in array is : $j <br> </p>";

}
//calling largest
largest($numbers);

//printing the array without the dup
function removeDups($numbers){

    $results = array_unique($numbers);
    echo "[" . implode(", ", $results) . "]";
}
//calling the removeDups function
removeDups($numbers);