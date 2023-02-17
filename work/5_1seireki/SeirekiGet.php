<?php
 
$Num = $_GET["Num"];

if($Num>=2019){
    echo '令和'. ($Num-2018) .'年';
}
elseif($Num>=1989){
    echo '平成'. ($Num-1988) .'年';
}
elseif($Num>=1926){
    echo '昭和'. ($Num-1925) .'年';
}
elseif($Num>=1912){
    echo '大正'. ($Num-1911) .'年';
}
elseif($Num>=1868){
    echo '明治'. ($Num-1867) .'年';
}
else{
    echo '';
}

?>