<?php
$dataRooms = file_get_contents("roomsData.json");
$roomsArr = json_decode($dataRooms, true);

?>

<ol>
    <?php foreach($roomsArr as $room): ?>
    <li>
            <ul>
                <li><strong>NAME:</strong> <?= $room["BedType"] ?></li>
                <li><strong>NUMBER:</strong> <?= $room["number"] ?></li>
                <li><strong>PRICE:</strong> <?= $room["Rate"] ?></li>
                <li><strong>DISCOUNT:</strong> <?= $room["OfferPrice"] ?></li>
            </ul>
        </li>
    <?php endforeach?>
</ol>