<?php
// Opdracht 1 a t/m h
//$ster="";
//for ($a= 0; $a<=3; $a=$a+1){
//    $extraster="*";
//    $ster=$ster.$extraster;
//    print ("$ster\n");
//
//}
//for ($i= 0; $i <=3; $i=$i+1){
//    $ster = substr($ster, 0, -1);
//    print("$ster\n");
//};
// Opdracht 1 i t/m l
//$str='';
//for ($i=1; $i<=100; $i=$i+1) {
//    if ($i % 2 == 0){
//        $str=" ".$i;
//        print ($str);
//    }
//}
// Opdracht 1 m t/m p
//$int = [];
//for ($i=1; $i<=20; $i=$i+1){
//    $int = rand(0,99);
//    print ("$int ");
//}
//for ($i=1; $i<=8; $i=$i+1){
//    for ($a=1; $a<=8; $a=$a+1){
//        $breed = rand(0,99);
//        print ("$breed ");
//    }
//    $leng = rand(0,99);
//   print ("$leng\n");
//}
// Opdracht 2
//function Dobbel($punten) {
//    $dobbel = rand(1, 6);
//    $game = true;
//    print ('Je hebt ' . $dobbel . " gegooid\n");
//    while ($dobbel % 2 == 0 && $game == true) {
//        for ($i = 0; $i < $dobbel; $i++) {
//            $kaart = rand(1, 52);
//            print ('De waarde van de kaart is: ' . $kaart . "\n");
//            $punten += $kaart;
//        }
//        $game = false;
//    }
//    print ('Totaal aantal punten: ' . $punten);
//}
//Dobbel($punten);
//$punten = 0;
// Opdracht 3
//function RenteVerdubbel($verm, $rente){
//    $strverm = $verm;
//    $eindverm = $verm*2;
//    $factor = 1 + ($rente / 100);
//    $jaar = 0;
//    while ($verm < $eindverm) {
//        $verm *= $factor;
//        $jaar++;
//    }
//    print ("na $jaar heb ik mijn $strverm verdubbeld");
//}
//RenteVerdubbel(200, 4);