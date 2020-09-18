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
//Print("Hoe warm wordt het?\n");
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
$stelling1 = "Olifant schrijf je met een O";
$waarheid1 = TRUE;
print ("Stelling 1 (" . $stelling1 . ") is ");
if ($waarheid1) {
    print (" WAAR.");
} else {
    print (" NIET WAAR.");
}