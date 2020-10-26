<?php
echo "Opgave 7a.<br><br>";
//
//$lengtemetingen =
//    [0 => 120,
//    1 => 122,
//    2 => 122,
//    3 => 127];
//$newlengte = null;
//for ($i = 0; $i<=3; $i++){
//    if ($lengtemetingen[$i]){
//        if ($newlengte != null){
//            $newlengte = $lengtemetingen[$i]-$newlengte;
//            echo "$newlengte cm gegroeid ";
//        }
//    };
//    $newlengte = $lengtemetingen[$i];
//}

echo "<br><br>Opgave 7b.<br><br>";

echo "Opgave 7a.<br><br>";

$lengtemetingen =
    [0 => 120,
        1 => 122,
        2 => 122,
        3 => 127];
$newlengte = null;
$avglengte = 0;
$sum = 0;
for ($i = 0; $i<=3; $i++){
    if ($lengtemetingen[$i]){
        if ($newlengte != null){
            $newlengte = $lengtemetingen[$i]-$newlengte;
            echo "$newlengte cm gegroeid "; if ($newlengte == 0){echo "X ";} echo "<br>";
            $sum++;
        }
        $avglengte = $avglengte + $newlengte;
    };
    $newlengte = $lengtemetingen[$i];
}
echo $avglengte / $sum;
echo $sum;
