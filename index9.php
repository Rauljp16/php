<?php 
    $mysqli = new mysqli("localhost","root","raul","hotel_miranda");

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $query = "INSERT INTO rooms (Foto, number, RoomType, Amenities, Rate, OfferPrice, Status, RoomFloor)
                    VALUES ('{$_POST['Foto']}', '{$_POST['number']}', '{$_POST['RoomType']}', '{$_POST['Amenities']}', '{$_POST['Rate']}', '{$_POST['OfferPrice']}', '{$_POST['Status']}', '{$_POST['RoomFloor']}')";
        $stmt = $mysqli -> query($query);
    }
?>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>

    <h1>Room created!!!</h1>

<ul>

    <li>Number: <?= $_POST['number'] ?></li>
    <li>Rate: <?= $_POST['Rate'] ?></li>
    <li>Room Type: <?= $_POST['RoomType'] ?></li>
</ul>

<?php else: ?>

<h1>Create Room:</h1>

<form method="POST">
    Foto: <input type="text" name="Foto" value="https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"><br>
    Number: <input type="number"  name="number"><br>
    Room Type: <input type="text"  name="RoomType"><br>
    Amenities (comma separated): <input type="text" name="Amenities" ><br>
    Rate: <input type="number"  name="Rate"><br>
    OfferPrice: <input type="number" name="OfferPrice"><br>
    Status: <input type="text" name="Status"><br>
    RoomFloor: <input type="number" name="RoomFloor"><br>
    <input type="submit">
</form>

<?php endif ?>