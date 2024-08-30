<?php
    $mysqli = new mysqli("localhost","root","raul","hotel_miranda");

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

      $roomsArr = $mysqli -> query('SELECT * FROM rooms ORDER BY id ASC');
      $row = $roomsArr -> fetch_assoc();
?>

<ol>
    <?php foreach($roomsArr as $room): ?>
    <li>
            <ul>
                <li><strong>NAME:</strong> <?= $room["RoomType"] ?></li>
                <li><strong>NUMBER:</strong> <?= $room["number"] ?></li>
                <li><strong>PRICE:</strong> <?= $room["Rate"] ?></li>
                <li><strong>DISCOUNT:</strong> <?= $room["OfferPrice"] ?></li>
            </ul>
        </li>
    <?php endforeach?>
</ol>