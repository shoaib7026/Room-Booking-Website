<?php
include 'dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkin  = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $adults   = $_POST['adults'];
    $children = $_POST['children'];

    echo "<h2>User Input Received:</h2>";
    echo "Check-in: $checkin <br>";
    echo "Check-out: $checkout <br>";
    echo "Adults: $adults <br>";
    echo "Children: $children <br>";

    $stmt = $pdo->prepare("SELECT * FROM rooms 
        WHERE id NOT IN (
            SELECT room_id FROM bookings
            WHERE (check_in < :checkout AND check_out > :checkin)
        )
        AND adults >= :adults
        AND children >= :children");

    // Bind all parameters
    $stmt->bindParam(':checkin', $checkin);
    $stmt->bindParam(':checkout', $checkout);
    $stmt->bindParam(':adults', $adults);
    $stmt->bindParam(':children', $children);

    // Execute
    $stmt->execute();
    

    // Fetch results
    $availableRooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($availableRooms);
    echo "</pre>";
    
} else {
    echo "Form not submitted.";
}
?>
