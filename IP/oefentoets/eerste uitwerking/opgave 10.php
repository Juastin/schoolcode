<?php
echo "Opgave 10.<br><br>";

function terugOfDoor($kmGelopen,$kmOver){
    if ($kmGelopen >= ($kmOver/2)){
        echo "Ik loop door";
    }
    else {
        echo "Ik ga terug";
    }
}
terugOfDoor(4,10);