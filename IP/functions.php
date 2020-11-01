<?php
// Opdracht 1a
//function citaat($citaat){
//    print ("$citaat\n");
//}
//citaat("To be or not to be");
// Opdracht 1b
//function citaat2($auteur, $citaat){
//    print ("$auteur: "."$citaat\n");
//}
//citaat2("Julius Caesar","Alea iacta est");
// Opdracht 2
//print(citaat("Veni vidi vici"));
//print(citaat2("Julius Caesar","Et tu, Brute "));
// Opdracht 3
//function telOp($int1, $int2){
//    $sum = 0;
//    for ($i = $int1; $i <= $int2; $i++){
//        $sum+= $i;
//    }
//    return $sum;
//}
//$resultaat = telOp(5, 10);
//print $resultaat;
// Opdracht 4
//function average($int1,$int2){
//    print $average = ($int1+$int2)/2;
//}
//average(16,34);
// Opdracht 5
//function isSom($getal1, $getal2, $som) {
//    if ($som == $getal1+$getal2){
//        return true;
//    }
//    else {
//        return false;
//    }
//}
//if ( isSom(3, 4, 8) ){
//    print("Som!");
//}
//else {
//    print("Geen som!");
//}
// Opdracht 6a & 6b & 6c
//function printMail($name, $day, $send){
//    if ($day == ""){
//        $day = "vandaag";
//    }
//    if ($send == true){
//        print ("Beste $name,\nJe pakket is $day verzonden.\n\nVriendelijke groeten,\nSnelpakket.nl\n");
//    }
//    else {
//        print ("Beste $name,\nJe pakket wordt $day verzonden.\n\nVriendelijke groeten,\nSnelpakket.nl\n");
//    }
//}
//printMail("Onno de Vries", "maandag", false);
//printMail("Onno de Vries", "", TRUE);
//printMail("Ansu Fati", "", FALSE);
// Opdracht 7a & 7b & 7c & 7d & 7e
//$hoofdstukken = array(
//    "Voorwoord" => 5,
//    "Inleiding" => 7,
//    "Expressionisme" => 9,
//    "Surrealisme" => 29,
//    "Kubisme" => 53,
//    "Dada" => 66,
//    "Futurisme" => 90,
//    "Nieuwe zakelijkheid" => 99,
//    "De Stijl" => 121,
//    "Cobra" => 144,
//    "Literatuur" => 158);
//function berekenAantalPuntjes($titel, $pagina){
//    return $aantalpuntjes = 50 - strlen($titel) - strlen($pagina);
//}
//function printHoofdstuk($deel, $pagina, $aantalPuntjes){
//    $puntjes = str_repeat(".", $aantalPuntjes);
//    print ("$deel$puntjes$pagina\n");
//}
//foreach ($hoofdstukken as $titel => $pagina) {
//    printHoofdstuk($titel, $pagina, $aantalpuntjes = berekenAantalPuntjes($titel, $pagina));
//}
// Opdracht 8a & 8b
//function tekenRondje() {
//    print ("o");
//}
//function tekenLijn($amount){
//    for ($i = 1; $i <= $amount; $i++){
//        tekenRondje();
//    }
//    print "\n";
//}
//tekenLijn(5);
//tekenLijn(3);
//tekenLijn(1);
// Opdracht 8c

