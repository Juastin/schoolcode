<?php
//Opdracht 1
//$aantal = trim(fgets(STDIN));
//if($aantal > 1){
//    print ("ik zie " . $aantal . " vogels");
//}
//else {
//    print ("ik zie " . $aantal . " vogel");
//}
// Opdracht 2
//print("type ik, jij of hij\n");
//$persoon = trim(fgets(STDIN));
//$verjaardag = "16 april";
//
//if ($persoon == 'ik') {
//    $werkwoord = 'ben';
//} elseif($persoon == 'jij') {
//        $werkwoord = 'bent';
//    }
//elseif($persoon == 'hij') {
//    $werkwoord = 'is';
//}
//print ($persoon." ".$werkwoord." jarig op " . $verjaardag);
// Opdracht 3
//print("Hoe oud ben je?\n");
//$leeftijd = trim(fgets(STDIN));
//print ("Je bent " . $leeftijd . ", dus je mag ");
// if ($leeftijd >= 18) {
//     print ("stemmen");
// }
//else {
//    print ("niet stemmen. Want je bent te jong");
//}
// Opdracht 4
//print("Hoe warm wordt het?\n");
//$temperatuur = trim(fgets(STDIN));
//if ($temperatuur > 25) {
//    print ("We gaan naar het strand.");
//} else {
//    print ("We blijven thuis.");
//}
// Opdracht 5
//print ("Anna, hoe oud ben je ?");
//    $anna = trim(fgets(STDIN));
//print ("Bob, hoe oud ben je ?");
//    $bob = trim(fgets(STDIN));
//if ($anna > $bob) {
//    print ("Anna is ouder dan Bob");
//}
//elseif($anna < $bob) {
//    print ("Bob is ouder dan Anna");
//}
//else {
//    print ("Jullie zijn even oud");
//}
// OPdracht 6
//$sjors = 2;
//$mathilde = 3;
//$sharon = 4;
//$gemiddelde = ($sjors+$mathilde+$sharon)/3;
//$weinig = ' dat zijn er behoorlijk weinig. ';
//$gemiddeld = ' dat is gemiddeld. ';
//$veel = ' dat zijn er behoorlijk veel. ';
//if ($sjors > $gemiddelde) {
//    $sjorshoeveel = $veel;
//}
//if ($mathilde > $gemiddelde) {
//    $mathildehoeveel = $veel;
//}
//if ($sharon > $gemiddelde) {
//    $sharonhoeveel = $veel;
//}
//if ($sjors = $gemiddelde) {
//    $sjorshoeveel = $gemiddeld;
//}
//if ($mathilde = $gemiddelde) {
//    $mathildehoeveel = $gemiddeld;
//}
//if ($sharon = $gemiddelde) {
//    $sharonhoeveel = $gemiddeld;
//}
//if ($sjors < $gemiddelde) {
//    $sjorshoeveel = $weinig;
//}
//if ($mathilde < $gemiddelde) {
//    $mathildehoeveel = $weinig;
//}
//if ($sharon < $gemiddelde) {
//    $sharonhoeveel = $weinig;
//}
//print ('Sjors eet er '.$sjors.$sjorshoeveel);
//print ('Mathilde eet er '.$mathilde.$mathildehoeveel);
//print ('Sharon eet er '.$mathilde.$sharonhoeveel);
// Opdracht 7
//$stelling1 = "Olifant schrijf je met een O";
//$stelling2 = "Cocacola bevat nogsteeds cocaine";
//$waarheid1 = TRUE;
//$waarheid2 = FALSE;
//print ("Stelling 1 (" . $stelling1 . ") is ");
//if ($waarheid1) {
//    print (" WAAR.");
//} else {
//    print (" NIET WAAR.");
//}
//print ("Stelling 2 (" . $stelling2 . ") is ");
//if ($waarheid2) {
//    print (" WAAR.");
//} else {
//    print (" NIET WAAR.");
//}
// Opdracht 8
//$regen = true;
//$meerijden = false;
//if ($regen == true) {
//    if ($meerijden == true){
//        print ('Vandaag kan ik met iemand meerijden');
//    }
//    else {
//        print ('Vandaag moet ik met de bus');
//    }
//}
//else {
//    print ('Vandaag ga ik fietsen');
//}
// Opdracht 9
//function PrijsBereken($dag, $abbo, $km){
//    if($dag == 'weekend' && $abbo == 'weekend') {
//        print ('Je kan gratis reizen vandaag');
//    }
//    if($dag == 'weekdag' && $abbo == 'week') {
//        print ('Je kan gratis reizen vandaag');
//    }
//    else {
//        $prijs = 0.1 * $km;
//        $prijs = $prijs / 100 * 60;
//        print ('Je betaald vandaag ' . $prijs. ' euro voor je reis');
//    }
//}
//PrijsBereken('weekend', 'week', 120);
// Opdracht 10
//$iemandJarig = FALSE;
//$aantalWekenZonderFeest = 3;
//$zomervakantie = FALSE;
//
//if ($iemandJarig || $zomervakantie || $aantalWekenZonderFeest > 2) {
//    print("deze week is het feest");
//} else {
//    print("deze week is er geen feest");
//}
// Opdracht 11
//$aantalKoffie = 0;
//$koffieIsVers = FALSE;
//$laatInDeAvond = FALSE;
//
//if($aantalKoffie == 0) {
//    print("Ik neem koffie");
//} else {
//    if ($laatInDeAvond == TRUE || $koffieIsVers == FALSE || $aantalKoffie >= 5) {
//        print("Ik neem geen koffie");
//    } else {
//        print("Ik neem koffie");
//    }
//}
// Opdracht 12
//$hetIsOchtend = TRUE;
//$mamaBelt = TRUE;
//$ikSlaap = TRUE;
//
//if ($ikSlaap == TRUE) {
//    print ('Rot op met die telefoon');
//}
//elseif ($hetIsOchtend == TRUE && $mamaBelt == FALSE){
//    print ('Rot nogsteeds op met die telefoon');
//}
//else {
//    print('Met justin?');
//}
// Opdracht 13
//function PrijsBereken($dag, $abbo, $km){
//    $korting = 0.6;
//    if (($dag == 'weekend' && $abbo == 'weekend') || ($dag == 'weekdag' && $abbo == 'week')) {
//        print ('Je kan gratis reizen vandaag');
//    }
//    elseif ($abbo == 'weekend' || 'week') {
//        $prijs = 0.1 * $km * $korting;
//        print ('Je betaald vandaag ' .$prijs. ' euro voor je reis');
//    }
//    else {
//        $prijs = 0.1 * $km;
//        print ('Je betaald vandaag ' .$prijs. ' euro voor je reis');
//    }
//}
//PrijsBereken('weekdag', 'weekend', 120);
// Opdracht 14
//function isMarkBoos($aantal, $gebied){
//    if ($aantal < 3) {
//        print ('Mark is boos');
//    }
//    if ($aantal >= 3 && $aantal <= 5) {
//        print ('Mark is humeurig');
//    }
//    if ($aantal > 5) {
//        if($gebied == 'onderwijs'){
//            print ('Mark is boos');
//        }
//        if ($gebied == 'zorg'){
//            print ('Mark is verdrietig');
//            }
//        }
//    else {
//        print ('Mark is blij');
//    }
//}
//isMarkBoos($aantal = 8, $gebied = 'zorg');