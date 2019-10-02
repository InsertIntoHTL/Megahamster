<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Megahamster</title>
    <link rel="stylesheet" href="myCss.css">
</head>
<body>

<?php
require("classes\OctagonalRoom.php");
require("classes\RectangularRoom.php");
$rooms = [new RectangularRoom("The Flat", 149.00, 120, 80),
        new RectangularRoom("The Room", 49.00, 80, 50),
        new OctagonalRoom("The pit", 69.00, 20)]
?>

<div class="container">
    <h1>Megahamster</h1>
    <table>
        <tr>
            <th>Produkt</th>
            <th>Preis</th>
            <th>Länge</th>
            <th>Breite</th>
            <th>Seite</th>
            <th>Fläche</th>
        </tr>
        <?php
        foreach ($rooms as $room) {
            echo $room->toHtml();
        }
        ?>
    </table>
</div>

</body>
</html>