<?php
$host = 'localhost';
$db   = 'mahal-e-rang';
$user = 'root'; // change if different
$pass = '';     // change if your MySQL has a password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Enable error mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $targetDir = "uploads/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true); // create folder if not exists
        }

        $imageName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $imageName;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            echo "Image uploaded successfully!";
        } else {
            echo "Failed to upload image.";
            exit;
        }
    } else {
        $targetFilePath = ""; // If no image uploaded
    }

    // Prepare SQL insert
    $stmt = $pdo->prepare("INSERT INTO rooms (roomName, roomCategory, adults, children, capacity, price, facilities, size, image)
        VALUES (:roomName, :roomCategory, :adults, :children, :capacity, :price, :facilities, :size, :image)");

    $stmt->execute([
        ':roomName'     => $_POST['roomName'],
        ':roomCategory' => $_POST['roomCategory'],
        ':adults'       => $_POST['adults'],
        ':children'     => $_POST['children'],
        ':capacity'     => $_POST['capacity'],
        ':price'        => $_POST['price'],
        ':facilities'   => $_POST['facilities'],
        ':size'         => $_POST['size'],
        ':image'        => $targetFilePath
    ]);

    echo "Room data inserted successfully!";
    exit; // Prevent blank page after submission

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
