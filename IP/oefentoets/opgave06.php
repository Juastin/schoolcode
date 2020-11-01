<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 6</title>
    </head>
    <body>
        <h1>Opgave 6</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $maaltijd = "ontbijt";


        $reserveringen = ["ontbijt" => [10, 11],
            "lunch" => [40, 41],
            "diner" => [50, 51]];

        /* Begin uitwerking */
        foreach ($reserveringen as $maaltijd => $value){
            foreach ($value as $v){
                echo "$maaltijd: $v<br>";
            }
        }

        /* Einde uitwerking */
        ?>
    </body>
</html>