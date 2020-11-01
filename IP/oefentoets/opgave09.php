<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 9</title>
    </head>
    <body>
        <h1>Opgave 9</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $maximum = 50;
        $getal1 = 1;
        $getal2 = 2;

        /* Begin uitwerking */
        for($getal3=1; $getal3<50; $getal3++) {
            $getal3 = $getal1 + $getal2;
            $getal1 = $getal2;
            $getal2 = $getal3;
            echo $getal3 = $getal1 + $getal2;
        }

        /* Einde uitwerking */
        ?>
    </body>
</html>