<?php
$host = 'localhost';
$db   = 'mahal-e-rang';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // For testing only
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
