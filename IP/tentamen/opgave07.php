<!DOCTYPE html>
<!--Justin Passchier 1155615-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 7 a + b</title>
    </head>
    <body>
        <h1>Opgave 7 a + b</h1>

        <?php
        
        // gebruik onderstaande regels in je uitwerking voor het vullen van de arrays 
        // en het printen van de juiste output:
        // 
        // "Texel"
        // "Terschelling"
        // "Zoutelande"
        // "Renesse"
        // "Ameland"
        // "Valkenburg"
        // "Hardenberg"
        // 
        // "-"
        // "gestegen"
        // "NIEUW"

        /* Begin uitwerking a + b */
        $ditJaar = [
                1 => "Texel",
                2 => "Terschelling",
                3 => "Zoutelande",
                4 => "Renesse",
                5 => "Ameland"
        ];
        $vorigJaar = [
            1 => "Valkenburg",
            2 => "Renesse",
            3 => "Texel",
            4 => "Zoutelande",
            5 => "Hardenberg"
        ];

        foreach ($ditJaar as $item => $place){

            echo ("$item $place");
            if (!in_array($place, $vorigJaar)) {
                echo (" - NIEUW<br>");
            }
            else {
                foreach ($vorigJaar as $olditem => $oldplace) {
                    // Probably wrong...
                    $gestegen = $item - $olditem;
                    if ($gestegen > $olditem ) {
                        echo " $gestegen - gestegen";
                    }
                }

                echo "<br>";
            };

        }
        /* Einde uitwerking a + b */
        
        ?>
    </body>
</html>