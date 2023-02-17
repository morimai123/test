<?php
 
$startNum = $_GET["startNum"];
$endNum = $_GET["endNum"];

// 先ほどのループ文
for ($i = $startNum; $i <= $endNum; $i++) {
    if ($i % 15 === 0) {
        echo 'FizzBuzz';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } else {
        echo $i;
    }
    echo '</br>';
}
 
?>
 
