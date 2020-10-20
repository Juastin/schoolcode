<?php
echo "Opgave 5a.<br><br>";

$prijsPerStuk = 1;
$aantal = 3;
$vasteKlant = true;


if ($vasteKlant == true || $aantal >= 50){
    echo ("totaalprijs: ".$prijs =(($prijsPerStuk * $aantal)*0.9));
}
else {
    echo ("totaalprijs: ".$prijs =($prijsPerStuk * $aantal));
}
echo "<br><br>Opgave 5b.<br><br>";

$verzendkosten = 0.05;
if ($aantal >= 100){
    $verzendkosten = 0;
}
else {
    $verzendkosten = $verzendkosten*$aantal;
}
if ($vasteKlant == true || $aantal >= 50){
    $prijs=$prijsPerStuk * $aantal *0.9;
    echo ("totaalprijs: ".$prijs."<br>");
    echo ("verzending:".$verzendkosten."<br>");
    echo ("totaal: ".$prijs=$prijs+$verzendkosten."<br>");
}
else {
    echo ("totaalprijs: ".$prijs =($prijsPerStuk * $aantal));
    echo ("verzending: ".$verzendkosten);
    echo ("totaal: ".$prijs=$prijs+$verzendkosten."<br>");
}
