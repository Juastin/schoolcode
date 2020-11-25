<!DOCTYPE html>
<!--Justin Passchier 1155615-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 9</title>
    </head>
    <body>
        <h1>Opgave 9</h1>
        
        <?php
        
        /* Gebruik onderstaande variabele in de uitwerking */
        $formaat = 4;

        // gebruik onderstaande regels in je uitwerking voor het printen van de juiste output:
        // "+" 
        // "-" 
        // "|"  
        // "X"

        /* Begin uitwerking */
        echo ("+");
        for ($x = 1; $x <= $formaat; $x++){
            echo "-";
        }
        echo "+<br>";
        for ($i = 1; $i <= $formaat; $i++){
            echo "|";
            for ($j = 1; $j<= $formaat; $j++){
            echo "x";
            }
            echo "|";
            echo ("<br>");
        }
        echo ("+");
        for ($x = 1; $x <= $formaat; $x++){
            echo "-";
        }
        echo "+<br>";

        /* Einde uitwerking */
        
        ?>
    </body>
</html>