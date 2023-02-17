<?php
$today = date("Y-m-d");
$date1 = '2019-05-01';
$date2 = '2023-12-31';
echo '今日の日付：'.date('Y年m月d日').'<br/>';
echo '今年はあと'.((strtotime($date2) - strtotime($today)) / 86400).'日';
