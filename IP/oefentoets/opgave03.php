<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 3</title>
    </head>
    <body>
        <h1>Opgave 3</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $elektriciteit = TRUE;
        $gas = FALSE;
        $ikHebHetDruk = FALSE;
        $prijsVakman = 90;

        if (($elektriciteit == true || $gas == true) || ($ikHebHetDruk == true && $prijsVakman <= 100)) {
            print("vakman");
        } else {
            print("ik doe het zelf");
        }
        ?>
    </body>
</html>