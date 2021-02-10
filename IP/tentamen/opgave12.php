<!DOCTYPE html>
<!--Justin Passchier 1155615-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 12</title>
    </head>
    <body>
        <h1>Opgave 12</h1>

        <?php
        /* Begin uitwerking */
        if (isset($_POST['bedrag'])){
            $value = $_POST['bedrag'];
        }
        else {
            $value = 0;
        }
        ?>
        <form method="post">
            <label for="bedrag">Bedrag</label>
            <input name="bedrag" type="number" step="any" value="<?php echo $value ?>" required>
            <input type="checkbox" name="korting">
            <label for="korting">Ik heb een kortingsbon (10%)</label>
            <input type="submit">
        </form>
        <?php

        if (isset($_POST['korting'])){
            $totaal = $_POST['bedrag'] * 0.9;
            echo ("Het totale bedrag is: ".$totaal." (met korting)");
        }
        else {
            if (isset($_POST['bedrag'])){
                echo ("Het totale bedrag is: ".$_POST['bedrag']);
            }
            else {
                echo ("Het totale bedrag is: 0");
            }
        }
        /* Einde uitwerking */
        ?>
    </body>
</html>
