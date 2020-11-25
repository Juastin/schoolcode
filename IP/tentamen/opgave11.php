<!DOCTYPE html>
<!--Justin Passchier 1155615-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 11</title>
    </head>
    <body>
        <H3>Linkjes naar opgaven</H3>
        <a href="opgave01.php">Opgave 01</a>

        <?php
        /* Gebruik onderstaande variabele in de uitwerking */
        $aantalOpgaven = 12;

        /* Begin uitwerking */
        for ($i = 1; $i <= $aantalOpgaven; $i++){
            if ($i < 10){
                echo ("<br><a href='opgave'".$i."'.php'>Opgave 0".$i."</a>");
            }
            else {
                echo ("<br><a href='opgave'".$i."'.php'>Opgave ".$i."</a>");
            }
        }
        /* Einde uitwerking */
        ?>

    </body>
</html>
