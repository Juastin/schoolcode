<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 7</title>
    </head>
    <body>
        <h1>Opgave 7</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $lengtemetingen =
            [0 => 120,
                1 => 122,
                2 => 122,
                3 => 127];
        $newlengte = null;
        $avglengte = 0;
        $sum = 0;

        /* Begin uitwerking */
        for ($i = 0; $i<=3; $i++){
            if ($lengtemetingen[$i]){
                if ($newlengte != null){
                    $newlengte = $lengtemetingen[$i]-$newlengte;
                    echo "$newlengte cm gegroeid "; if ($newlengte == 0){echo "X ";} echo "<br>";
                    $sum++;
                }
                $avglengte = $avglengte + $newlengte;
            };
            $newlengte = $lengtemetingen[$i];
        }
        echo $avglengte / $sum;
        echo $sum;

        /* Einde uitwerking */
        ?>
    </body>
</html>