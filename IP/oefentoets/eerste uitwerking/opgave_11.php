<!-- Opgave 11 [EXECUTE IN XAMPP] -->
<!DOCTYPE html>
<html>
<head>
    <title>Huiserk week 9</title>
</head>

<body>
<form method="get">
    <input type="number" id="aantal" name="aantal">
    <input type="submit" value="Verwerk!">
</form>
<?php
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
?>
</body>

</html>
