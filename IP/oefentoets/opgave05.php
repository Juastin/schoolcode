<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 5</title>
    </head>
    <body>
        <h1>Opgave 5</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $prijsPerStuk = 1;
        $aantal = 30;
        $vasteKlant = false;

        /* Begin uitwerking */
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

        /* Einde uitwerking */
        ?>
    </body>
</html>