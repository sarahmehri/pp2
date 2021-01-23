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