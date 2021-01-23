<?php
/* Sarah Mehri
 * 1/15/2020
 * Pair Programing 2
 */

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
include ("function.php");


?>

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


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
