<?php
echo "Opgave 9.<br><br>";

$maximum = 50;
$getal1 = 1;
$getal2 = 2;
$getal = 1;

for($getal3=1; $getal3<50; $getal3++) {
    $getal3 = $getal1 + $getal2;
    $getal1 = $getal2;
    $getal2 = $getal3;
    echo $getal3 = $getal1 + $getal2;
}
