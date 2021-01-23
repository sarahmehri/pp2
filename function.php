<?php

echo"<p> PHP Array Practice</p>";
$numbers = array(7, 9, 8, 9, 8, 8, 6);

function printArr($numbers){
$round = count($numbers);
for($i =0; $i<$round; $i++){
echo "<p> $numbers[$i] <br> </p>";
}

}
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
largest($numbers);