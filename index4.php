<?php
$dataRooms = file_get_contents("roomsData.json");
$roomsArr = json_decode($dataRooms, true);
$id = isset($_GET["id"]) ? intval($_GET['id']) : 0;
$roomFound = null;

foreach ($roomsArr as $room) {
    if ($room["id"] === $id) {
        $roomFound = $room;
        break;
    }
}
?>

<?php if ($roomFound): ?>
    <li><strong>ROOM: </strong><?= $roomFound["id"] ?>
            <ul>
                <li><strong>NAME:</strong> <?= $roomFound["BedType"] ?></li>
                <li><strong>NUMBER:</strong> <?= $roomFound["number"] ?></li>
                <li><strong>PRICE:</strong> <?= $roomFound["Rate"] ?></li>
                <li><strong>DISCOUNT:</strong> <?= $roomFound["OfferPrice"] ?></li>
            </ul>
        </li>
<?php else: ?>
    <p>No room.</p>
<?php endif; ?>