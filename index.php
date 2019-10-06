<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Megahamster</title>
    <link rel="stylesheet" href="myCss.css">
</head>
<body>
<?php

require 'classes/Room.php';
require 'classes/RectangularRoom.php';
require 'classes/OctagonalRoom.php';

$rooms = [
        new RectangularRoom("The room", 49, 80, 50, ["none"]),
        new RectangularRoom("The flat", 149, 120, 80, ["Food jars"]),
        new OctagonalRoom("The pit", 69, 20, ["Hamster training gloves", "Hamster punchingsack"])
];

echo <<<EOT
<h1>Megahamster</h1>
<table>
    <tr>
        <th>Produkt</th>
        <th>Preis</th>
        <th>Länge</th>
        <th>Breite</th>
        <th>Seite</th>
        <th>Fläche</th>
        <th>Bezeichnung</th>
    </tr>
EOT;

foreach ($rooms as $room) {
    echo $room->toHTML();
}

echo "</table>";
?>
</body>
</html>