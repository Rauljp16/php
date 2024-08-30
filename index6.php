<?php
    $mysqli = new mysqli("localhost","root","raul","hotel_miranda");

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

      $id = isset($_GET["id"]) ? intval($_GET['id']) : 0;
      

      $row = $mysqli -> query('SELECT * FROM rooms WHERE id='.$id.'');
      $roomFound = $row -> fetch_assoc();

      $mysqli->close();

    ?>
    
    <?php if ($roomFound): ?>
        <li><strong>ROOM: </strong><?= $roomFound["id"] ?>
                <ul>
                    <li><strong>NAME:</strong> <?= $roomFound["RoomType"] ?></li>
                    <li><strong>NUMBER:</strong> <?= $roomFound["number"] ?></li>
                    <li><strong>PRICE:</strong> <?= $roomFound["Rate"] ?></li>
                    <li><strong>DISCOUNT:</strong> <?= $roomFound["OfferPrice"] ?></li>
                </ul>
            </li>
    <?php else: ?>
        <p>No room.</p>
    <?php endif; ?>