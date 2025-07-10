<?php
include('components/header.php');
include('dbcon.php');

// Step 1: Get user inputs from GET method (sent from form page)
$checkin  = $_GET['checkin'];
$checkout = $_GET['checkout'];
$adults   = $_GET['adults'];
$children = $_GET['children'];
$category = $_GET['category'];

// Step 2: Query to get available rooms
$stmt = $pdo->prepare("SELECT * FROM rooms 
   WHERE roomCategory = :category
    AND adults >= :adults 
      AND children >= :children 
      AND id NOT IN (
        SELECT room_id FROM bookings
        WHERE (check_in < :checkout AND check_out > :checkin)
    )");

$stmt->bindParam(':adults', $adults);
$stmt->bindParam(':children', $children);
$stmt->bindParam(':checkin', $checkin);
$stmt->bindParam(':checkout', $checkout);
$stmt->bindParam(':category',$category);

$stmt->execute();
$availableRooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Icon mapping for facilities
$facilityIcons = [
    'wifi'        => ['icon' => 'bi-wifi', 'type' => 'bi'],
    'ac'          => ['icon' => 'bi-snow', 'type' => 'bi'],
    'fan'         => ['icon' => 'bi-wind', 'type' => 'bi'],
    'laundry'     => ['icon' => 'bi-basket', 'type' => 'bi'],
    'roomservice' => ['icon' => 'bi-bell', 'type' => 'bi'],
    'tv'          => ['icon' => 'bi-tv', 'type' => 'bi'],
    'tea'         => ['icon' => 'bi-cup-hot', 'type' => 'bi'],
    'fridge'      => ['icon' => 'bi-box', 'type' => 'bi'],
    'wardrobe'    => ['icon' => 'bi-door-closed', 'type' => 'bi'],
    'bed'         => ['icon' => 'bi-bed', 'type' => 'bi'],
    'chair'       => ['icon' => 'fa-light fa-chair', 'type' => 'fa'],
    'sofa'        => ['icon' => 'fa-light fa-couch', 'type' => 'fa'],
    'workdesk'    => ['icon' => 'fa-light fa-computer', 'type' => 'fa']
];
?>

<div class="container p-5" id="showroomscontainer">
    <h2 class="mb-4 text-center">Available Rooms</h2>

    <?php if (count($availableRooms) > 0): ?>
        <?php foreach ($availableRooms as $room): ?>
            <div class="row mb-4 shadow-lg rounded-4 overflow-hidden bg-white">
                <!-- Left: Room Image -->
                <div class="col-md-6 p-0">
                    <div id="carousel<?= $room['id'] ?>" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" style="height: 400px;">
    <div class="carousel-item active">
      <img src="<?= $room['image'] ?>" class="d-block w-100" style="height: 400px; object-fit: cover;">
    </div>
    <?php if (!empty($room['image_2'])): ?>
    <div class="carousel-item">
      <img src="<?= $room['image_2'] ?>" class="d-block w-100" style="height: 400px; object-fit: cover;">
    </div>
    <?php endif; ?>
    <?php if (!empty($room['image_3'])): ?>
    <div class="carousel-item">
      <img src="<?= $room['image_3'] ?>" class="d-block w-100" style="height: 400px; object-fit: cover;">
    </div>
    <?php endif; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $room['id'] ?>" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark rounded-circle mx-2 p-4"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $room['id'] ?>" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark rounded-circle mx-2 p-4"></span>
  </button>
</div>

                </div>

                <!-- Middle: Room Details -->
                <div class="col-md-4 p-4">
                    <h4 class="fw-bold"><?= $room['roomName'] ?></h4>

                    <p><i class="bi bi-building-check text-primary me-2"></i><strong>Facilities:</strong><br>
                    <?php
                        $facilities = explode(',', strtolower($room['facilities']));
                        foreach ($facilities as $item):
                            $item = trim($item);
                            if (isset($facilityIcons[$item])):
                                $icon = $facilityIcons[$item]['icon'];
                                $type = $facilityIcons[$item]['type'];
                    ?>
                        <i class="<?= $type ?> <?= $icon ?> text-secondary me-2"></i>
                    <?php
                            else:
                                echo ucfirst($item) . ' ';
                            endif;
                        endforeach;
                    ?>
                    </p>

                    <p class="mb-1">
                        <i class="bi bi-person-fill text-dark me-1"></i> Adults: <?= $room['adults'] ?>
                        &nbsp;&nbsp;
                        <i class="bi bi-person text-dark me-1"></i> Children: <?= $room['children'] ?>
                    </p>
                    <p class="mb-1">
                        <i class="bi bi-people-fill text-dark me-2"></i><strong>Capacity:</strong> <?= $room['capacity'] ?> persons
                    </p>
                    <p class="mb-0 fs-5 text-success">
                        <strong>PKR <?= $room['price'] ?> / night</strong>
                    </p>

                    <?php if ($room['capacity'] > 5): ?>
    <p class="text-danger mt-2"> Extra bed will be provided on request</p>
<?php endif; ?>



                </div>

                <!-- Right: Book Now Button -->

             <form class="col-md-2 d-flex align-items-center justify-content-center" action="confirm-booking.php" method="post">
    <input type="hidden" name="room_id" value="<?php echo $room['id']; ?>">
    <input type="hidden" name="room_name" value="<?php echo $room['roomName']; ?>">
    <input type="hidden" name="room_price" value="<?php echo $room['price']; ?>">
    <input type="hidden" name="adults" value="<?php echo $room['adults']; ?>">
    <input type="hidden" name="children" value="<?php echo $room['children']; ?>">
    <input type="hidden" name="checkin" value="<?php echo ($checkin); ?>">
    <input type="hidden" name="checkout" value="<?php echo ($checkout); ?>">




    <button type="submit" class="btn btn-outline-success rounded-pill px-4 py-2 fw-bold mb-2">
        <i class="bi bi-cart-check-fill me-1"></i> Book Now
    </button>
</form>

              
            </div>
        <?php endforeach; ?>
</div>

<?php else: ?>
    <div class="min-vh-100 d-flex align-items-center justify-content-center text-center">
        <div class="alert alert-warning p-5">
            <p>Sorry, we couldn't find any rooms that match your selected dates and preferences.</p>
            <a href="index.php" class="btn btn-outline-primary mt-3">Try Again</a>
        </div>
    </div>
<?php endif; ?>

<?php include('components/footer.php'); ?>
