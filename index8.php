<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>

    <h1>Room created!!!</h1>

    <ul>
        <li>id: <?= $_POST['id'] ?></li>
        <li>Number: <?= $_POST['number'] ?></li>
        <li>Rate: <?= $_POST['rate'] ?></li>
        <li>Discount: <?= $_POST['discount'] ?></li>
    </ul>
<?php else: ?>
    <h1>Create Room:</h1>
    <form method="POST">
        id: <input type="number"  name="id"><br>
        Number: <input type="number"  name="number"><br>
        Room Type: <input type="text"  name="roomType"><br>
        Rate: <input type="number"  name="rate"><br>
        Discount: <input type="number" name="discount"><br>
        Status: <input type="text" name="status"><br>
        <input type="submit">
    </form>
<?php endif ?>
