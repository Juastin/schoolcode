<?php
// Opdracht 1a
//print_r($klassenlijst = array("tobias","hasna","aukje","fred"));
// Opdracht 1b
//$klassenlijst = array("tobias","hasna","aukje","fred");
//print("$klassenlijst[0]\n");
//print("$klassenlijst[1]\n");
//print("$klassenlijst[2]\n");
//print("$klassenlijst[3]\n");
// Opdracht 1c
//asort($klassenlijst);
//print_r($klassenlijst);
// Opdracht 2
//$playlist = [];
//print ("nummer 1: \n");
//$playlist[0] = trim(fgets(STDIN));
//print ("nummer 2: \n");
//$playlist[1] = trim(fgets(STDIN));
//print ("nummer 3: \n");
//$playlist[2] = trim(fgets(STDIN));
//print_r($playlist);
// Opdracht 3a
//$rondetijden = [
//    "ronde 1" => "5 minuten",
//    "ronde 2" => "5 minuten",
//    "ronde 3" => "6 minuten",
//    "ronde 4" => "6 minuten",
//    "ronde 5" => "7 minuten"];
//print_r($rondetijden);
// Opdracht 3b
//print_r(array_count_values($rondetijden));
// Opdracht 3c
//$rondetijden = [
//    "ronde 1" => "5 minuten",
//    "ronde 2" => "5 minuten",
//    "ronde 3" => "6 minuten",
//    "ronde 4" => "6 minuten",
//    "ronde 5" => "7 minuten"];
//foreach($rondetijden as $rondetijd){
//     print_r ($rondetijd."\n");
//}
//print ("Langzaamste ronde: "); print_r(max($rondetijden)."\n");
//print ("Snelste ronde: "); print_r(min($rondetijden));
// Opdracht 4a & 4b & 4c & 4d
//$klassenlijst = array("tobias",
//    "hasna", "aukje",
//    "fred", "sep",
//    "koen", "wahed",
//    "anna", "jackie",
//    "rashida", "winston",
//    "sammy", "manon",
//    "ben", "karim",
//    "bart", "lisa");
//array_push($klassenlijst, "tom");
//foreach($klassenlijst as $nr => $student){
//    print ($nr.". ".ucfirst($student)."\n");
//}
// Opdracht 5a & 5b & 5c
//$getallen = [1, 8, 12, 7, 14, -13, 8, 1, -1, 14, 7];
//print_r($getallen);
//print ("Hoogste getal: ".$max = max($getallen)."\n");
//print ($som = array_sum($getallen));
// Opdracht 5d & 5e
//$som = 0;
//$getallen = [1, 8, 12, 7, 14, -13, 8, 1, -1, 14, 7];
//foreach($getallen as $getal){
//    if ($getal > 0 ){
//    $som += $getal;
//    }
//}
//print $som;
// Opdracht 5f
//$som = 0;
//$getallen = [1, 8, 12, 7, 14, -13, 8, 1, -1, 14, 7];
//
//foreach($getallen as $getal){
//    if ($getal < 0 ){
//        $getal = $getal * -1;
//    }
//    $som += $getal;
//}
//print $som;
// Opdracht 5g
//$getallen = [1, 8, 12, 7, 14, -13, 8, 1, -1, 14, 7];
//$maxgetal = max($getallen);
//foreach($getallen as $getal){
//    if ($getal < $maxgetal){
//        $unset = array_search($getal, $getallen);
//        unset($getallen[$unset]);
//    }
//}
//print_r(array_count_values($getallen));
// Opdracht 6a
$telnrs = [
    "Mickey Mouse" => "038-4699776",
    "Guus Geluk" => "0578-121212",
    "Donald Duck" => "010-2311512"
];
//print_r($telnrs);
// Opdracht 6b & 6c & 6d
print ('Wie krijgt een nieuw nummer? '); $naam = trim(fgets(STDIN));
if ($naam == array_key_exists($naam, $telnrs)) {
    print ("Wat is zijn nieuwe nummer? "); $newtel = trim(fgets(STDIN));
    if (is_string($newtel)){
        print "HET IS EEN STRING";
    }
    if ($newtel !== null){
        $newarray = [$naam => $newtel];
        print_r($newarray);
        array_replace($telnrs, $newarray);
        print_r($telnrs);
    }
}
else {
    print ("Deze naam staat niet in het telefoonboek");
}

