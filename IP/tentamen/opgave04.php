<!DOCTYPE html>
<!--Justin Passchier 1155615-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 4</title>
    </head>
    <body>
        <h1>Opgave 4</h1>
        
        <?php
        
        /* Gebruik onderstaande variabelen in de uitwerking */
        $reparatieKosten = 150;
        $nieuwPrijs = 500;
        $garantie = TRUE;

        // gebruik onderstaande regels in je uitwerking voor het printen van de juiste output:
        // 
        // "reparatie - kosten winkel"
        // "vervangen - kosten winkel"
        // "kosten klant"

        /* Begin uitwerking */
        if ($garantie == TRUE) {
            if ($reparatieKosten < $nieuwPrijs) {
                echo ("reparatie - kosten winkel");
            }
            else {
                echo ("vervangen - kosten winkel");
            }
        }
        else {
            echo ("kosten klant");
        }
        /* Einde uitwerking */
        
        ?>
    </body>
</html>