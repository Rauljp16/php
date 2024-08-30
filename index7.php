<?php
$mysqli = new mysqli("localhost", "root", "raul", "hotel_miranda");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$search = @$_GET['search'];

if (empty($search)) {
    $query = "SELECT * FROM rooms ORDER BY id ASC";
} else {
    $search = $mysqli->real_escape_string(ucfirst($search)) . '%';
    $query = "SELECT * FROM rooms WHERE RoomType LIKE '$search' ORDER BY id ASC";
}

$result = $mysqli->query($query);
$rooms = [];

while ($row = $result->fetch_assoc()) {
    $rooms[] = $row;
}

$roomCount = count($rooms);

?>

<?= empty($search) ? "<h1>All Rooms</h1>" : "<h1>$roomCount Results</h1><a href='index7.php'>View All</a>" ?>
<form>
    <input type="text" id="search" name="search"  />
    <input type="submit" value="Search" />
</form>
<ol>
    <?php foreach ($rooms as $room): ?>
        <li>
            <ul>
                <li>Name: <?= ($room["RoomType"]) ?></li>
                <li>Number: <?= ($room["number"]) ?></li>
                <li>Price: <?= ($room["Rate"]) ?></li>
                <li>Discount: <?= ($room["OfferPrice"]) ?></li>
            </ul>
        </li>
    <?php endforeach ?>
</ol>
