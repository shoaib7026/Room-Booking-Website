<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Data Form</title>
</head>
<body class="d-flex align-items-center justify-content-center w-100 h-100vh">

    <h2>Room Data Entry Form</h2>

    <form action="insertRoomData.php" method="POST" enctype="multipart/form-data">
        <label for="roomName">Room Name:</label><br>
        <input type="text" id="roomName" name="roomName" required><br><br>

        <label for="roomCategory">Room Category:</label><br>
        <select id="roomCategory" name="roomCategory" required>
            <option value="standard">Standard</option>
            <option value="deluxe">Deluxe</option>
            <option value="executive">Executive</option>
            <option value="royal_suite">Royal Suite</option>
        </select><br><br>

        <label for="adults">Adults:</label><br>
        <input type="number" id="adults" name="adults" required><br><br>

        <label for="children">Children:</label><br>
        <input type="number" id="children" name="children"><br><br>

        <label for="capacity">Capacity (Total People):</label><br>
        <input type="number" id="capacity" name="capacity" required><br><br>

        <label for="price">Price (per night):</label><br>
        <input type="number" id="price" name="price" required><br><br>

        <label for="facilities">Facilities:</label><br>
        <textarea id="facilities" name="facilities" rows="4" cols="50" required></textarea><br><br>

        <label for="size">Size (in sq.ft.):</label><br>
        <input type="number" id="size" name="size" required><br><br>

        <label for="image">Room Image:</label><br>
        <input type="file" id="image" name="image" required><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
