<?php

echo"<p> PHP Array Practice</p>";
echo"<p> printing array function: </p>";
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
echo"<p> largest num function: </p>";
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

echo"<p> remove Dups function: </p>";
//printing the array without the dup
function removeDups($numbers){

    $results = array_unique($numbers);
    echo "[" . implode(", ", $results) . "]";
}
//calling the removeDups function
removeDups($numbers);
echo"<p> distribution function: </p>";
//distribution function
function distribution($numbers){
    asort($numbers);
    print_r(array_count_values($numbers));

}
//calling the distribution func
distribution($numbers);