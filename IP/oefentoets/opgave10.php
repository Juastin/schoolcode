<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 10</title>
    </head>
    <body>
        <h1>Opgave 10</h1>
        <?php
        /* Begin uitwerking */
        function terugOfDoor($kmGelopen,$kmOver){
            if ($kmGelopen >= ($kmOver/2)){
                echo "Ik loop door";
            }
            else {
                echo "Ik ga terug";
            }
        }
        terugOfDoor(4,10);

        /* Einde uitwerking */
        ?>
    </body>
</html>