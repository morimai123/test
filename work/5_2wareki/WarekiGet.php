<?php

$Wareki = $_GET["Wareki"]; 
$Num = $_GET["Num"];
function back(){
    echo '<form action="WarekiForm.html" method="get">';
    echo '<p><input type="submit" name="submitBtn" value="戻る"></p>';
    echo '</form>';
}

if($Wareki === '令和' && $Num <= 5){
    echo '西暦'. ($Num+2018) .'年';
    back();
}
elseif($Wareki==='平成' && $Num >= 1 && $Num <= 30){
    echo '西暦'. ($Num+1988) .'年';
    back();
}
elseif($Wareki==='昭和' && $Num >= 1 && $Num <= 63){
    echo '西暦'. ($Num+1925) .'年';
    back();
}
elseif($Wareki==='大正' && $Num >= 1 && $Num <= 14){
    echo '西暦'. ($Num+1911) .'年';
    back();
}
elseif($Wareki==='明治' && $Num >= 1 && $Num <= 44){
    echo '西暦'. ($Num+1867) .'年';
    back();
}
else{
    echo '存在しない年の和暦表示はできません。'.'<br/>'.'入力に間違いがないかご確認ください。';
    back();
}

?>