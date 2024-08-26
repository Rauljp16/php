<?php
$dataRooms = file_get_contents("roomsData.json");
$roomsArr = json_decode($dataRooms, true);

?>

<pre>
    <?php print_r($roomsArr) ?>
</pre>