<!DOCTYPE html>
<!--Justin Passchier 1155615-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 3</title>
    </head>
    <body>
        <h1>Opgave 3</h1>
        
        <?php
        
        /* Gebruik onderstaande variabelen in de boolean expressie */
        $gok1 = 10; // bedrag dat persoon 1 heeft genoemd
        $gok2 = 10; // bedrag dat persoon 2 heeft genoemd
        $gok3 = 10; // bedrag dat persoon 3 heeft genoemd
        $totaal = 30;

        if (($gok1 + $gok2 + $gok3 == $totaal) && ($gok1 != $gok2 && $gok2 != $gok3 )) {
            print("iedereen wint zijn bedrag!");
        } else {
            print("helaas...");
        }

        ?>
    </body>
</html>