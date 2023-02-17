<?php

$Money = $_GET["Money"];
$Rate = $_GET["Rate"];
$Term = $_GET["Term"];

$result = round($Money * pow((1 + ($Rate / 100)), $Term));
echo '・運用方法'.'<br/>'.$Money . '万円' .'<br/>'. $Term . '年間'.'<br/>'. '年利：' . $Rate . '％' . '<br/>'. '<br/>';
echo '・運用結果'.'<br/>'.$result . '万円';

// 元本×（1＋年利率）^n（n＝運用年数)