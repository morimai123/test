<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
 
<?php

for ($i = 1; $i < 1000; $i++) {
$FizzBuzz= getFizzBuzz($i);
if($i %10 === 0){
    echo $FizzBuzz . '<br/>';
}else{
    echo $FizzBuzz.' ';
}
}

function getFizzBuzz($num){
    if($num %3 === 0 && $num %5 === 0){
        return 'FizzBuzz';
    }
    elseif($num %3 === 0) {
        return 'Fizz';
    }
    elseif($num %5 === 0) {
        return 'Buzz';
    }
    else{
        return $num;
    }
}
// echo '<ul>';
// // 100回ループする
// for ($i=0; $i<100; $i++) {
//     if(($i+1) %3 === 0 && ($i+1) %5 === 0){
//         echo '<li>'.'FizzBuzz'.'</li>';
//     }
//     elseif(($i+1) %3 === 0) {
//         echo '<li>'.'Fizz'.'</li>';
//     }
//     elseif(($i+1) %5 === 0) {
//         echo '<li>'.'Buzz'.'</li>';
//     }
//     else{
//         echo '<li>'.($i+1).'</li>';
//     }
// echo '</ul>';
// }

?>
 
</body>
</html>