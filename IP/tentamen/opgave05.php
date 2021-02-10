<!DOCTYPE html>
<!--Justin Passchier 1155615-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 5</title>
    </head>
    <body>
        <h1>Opgave 5</h1>
        <?php
        
        /* Gebruik onderstaande variabelen in de uitwerking */
        $wachttijd = 4;
        $weekend = TRUE;

        // gebruik onderstaande regels in je uitwerking voor het printen van de juiste output:
        //      
        // " minuten"
        // " minuten (langer dan normaal)"
        // " minuten (bel op en ander moment)"

        /* Begin uitwerking */
        if ($weekend == TRUE) {
            if ($wachttijd < 15) {
                echo ("$wachttijd minuten");
            }
                elseif (($wachttijd >= 15) && ($wachttijd <= 20)) {
                    echo("$wachttijd minuten (langer dan normaal)");
                }
                else {
                    echo ("$wachttijd minuten (bel op een ander moment)");
                }
        }
        else {
            if ($wachttijd < 5){
                echo ("$wachttijd minuten");
            }
                elseif (($wachttijd >= 5) && ($wachttijd <= 10)) {
                    echo("$wachttijd minuten (langer dan normaal)");
                }
                else {
                    echo ("$wachttijd minuten (bel op een ander moment)");
                }
        }

        /* Einde uitwerking */

        ?>
    </body>
</html>