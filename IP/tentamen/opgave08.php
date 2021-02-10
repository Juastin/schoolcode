<!DOCTYPE html>
<!--Justin Passchier 1155615-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 8 a + b</title>
    </head>
    <body>
        <h1>Opgave 8 a + b</h1>
        
        <?php
        
        /* Gebruik onderstaande variabelen in de uitwerking */
        $kleinste = 10;
        $grootste = 15;
        $aantalPerRegel = 4;

        /* Begin uitwerking a + b */
        $x = 0;
        for ($i = $kleinste; $i <= $grootste; $i++){
            echo ("$i ");
            $x += 1;
            if ($x == $aantalPerRegel){
                echo "<br>";
            }
        }

        
        /* Einde uitwerking a + b */
        
        ?>
    </body>
</html>