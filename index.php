<?php

require 'vendor/autoload.php';

use InsertIntoHTL\Megahamster\Living as Living;

$rooms = [
    new Living\RectangularRoom("The room", 49, 80, 50, ["none"]),
    new Living\RectangularRoom("The flat", 149, 120, 80, ["Food jars"]),
    new Living\OctagonalRoom("The pit", 69, 20, ["Hamster training gloves", "Hamster punchingsack"])
];

if (isset($_GET['format']) && $_GET['format'] === "json") {
    header('content-type:application/json');
    echo json_encode($rooms);
} else {

    echo <<<EOT

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Megahamster</title>
    <link rel="stylesheet" href="myCss.css">
</head>
<body>

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

    echo <<<EOT
</table>
</body>
</html>
EOT;
}
?>