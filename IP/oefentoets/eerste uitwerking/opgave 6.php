<?php
echo "Opgave 6.<br><br>";

$reserveringen = ["ontbijt" => [10, 11],
    "lunch" => [40, 41],
    "diner" => [50, 51]];

foreach ($reserveringen as $maaltijd => $value){
    foreach ($value as $v){
        echo "$maaltijd: $v<br>";
    }
}