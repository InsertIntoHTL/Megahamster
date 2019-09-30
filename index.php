<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Megahamster</title>
</head>
<body>

<?php
require("classes\Room.php");
$rooms[] = new room("The Flat", 149.00);
$rooms[] = new room("The Room", 49.00);
$rooms[] = new room("The pit", 69.00);
?>

<div class="container">
    <h1>Megahamster</h1>
    <table>
        <tr>
            <th>Produkt</th>
            <th>Preis</th>
        </tr>
        <?php
        foreach ($rooms as $room) {
            echo <<<ROOM
            
        <tr>
            <td>{$room->getBezeichnung()}</td>
            <td>{$room->getPreis()}</td>
        </tr>

ROOM;
        }
        ?>
    </table>
</div>

</body>
</html>