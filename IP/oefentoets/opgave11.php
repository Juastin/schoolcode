<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <title>Opgave 11</title>
    </head>
    <body>
        <h1>Opgave 11</h1>
        <?php
        $aantal = 2;

        /* Begin uitwerking */
//        print("<br><img src='3.jpg'> <img src='5.jpg'>");
        if (isset($_GET["submit"])){
            $aantal = $_GET["aantal"];
        }
        if ($aantal < 1) {
            for ($i = 1; $i < $aantal + 1; $i++) {
                $rand = rand(1, 6);
                $rand1 = rand(1, 6);
                echo "Worp $i:";
                echo "<img src='$rand.jpg'>";
                echo "<img src='$rand1.jpg'><br>";
            }
        }
        else {
            echo "Je moet minmaal 1 keer gooien";
        }
        /* Einde uitwerking */
        ?>
        <br>
    </body>
</html>
