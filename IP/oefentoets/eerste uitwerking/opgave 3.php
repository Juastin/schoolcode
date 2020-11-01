<?php
echo "Opgave 3.<br><br>";

$elektriciteit = TRUE;
$gas = FALSE;
$ikHebHetDruk = FALSE;
$prijsVakman = 90;
if (($elektriciteit == true || $gas == true) || ($ikHebHetDruk == true && $prijsVakman <= 100)) {
    echo("vakman");
} else {
    echo("ik doe het zelf");
}