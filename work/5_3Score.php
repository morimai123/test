<?php
$scores1 = array('国語' => 88, '数学' => 86, '英語' => 90, '理科' => 73, '社会' => 80);
$scores2 = array('国語' => 87, '数学' => 80, '英語' => 70, '理科' => 73, '社会' => 80);
$scores3 = array('国語' => 80, '数学' => 86, '英語' => 50, '理科' => 73, '社会' => 80);

$Avg1 = getAvg($scores1);
echo '3教科平均：' . $Avg1 . '点' . '</br>';
echo '</br>';

$Avg2 = getAvg($scores2);
echo '3教科平均：' . $Avg2 . '点' . '</br>';
echo '</br>';

$Avg3 = getAvg($scores3);
echo '3教科平均：' . $Avg3 . '点' . '</br>';
echo '</br>';

function getAvg($scores)
{
    $total = 0;
    foreach ($scores as $key => $value) {
        if ($key === "国語" || $key === "数学" || $key === "英語") {
            $total += $value;   
        }
    }
    $average = $total / 3;
    return $average;
}