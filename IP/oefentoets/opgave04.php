<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 4</title>
    </head>
    <body>
        <h1>Opgave 4</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $weekend = TRUE;
        $afstand = 5;

        /* Begin uitwerking */
        if ($weekend == true && $afstand < 10) {
            echo "Wij gaan fietsen";
        }
        else {
            echo "We nemen mooi de auto";
        }

        /* Einde uitwerking */
        ?>
    </body>
</html>