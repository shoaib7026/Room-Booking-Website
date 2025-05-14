<?php
session_start();
include('dbcon.php');
include('components/header.php');


$booking_success = isset($_SESSION['booking_success']) ? $_SESSION['booking_success'] : false; 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $room_id    = $_POST['room_id'];
    $room_name  = $_POST['room_name'];
    $room_price = $_POST['room_price'];
    $adults     = $_POST['adults'];
    $children   = $_POST['children'];
    $checkin    = $_POST['checkin'];
    $checkout   = $_POST['checkout'];
}
?>
<?php if (!$booking_success): ?>
<div class="container  border rounded-4 bg-light" id="booking-form">
    <h3 class="mb-4 text-center">Confirm Your Booking</h3>
    <form action="" method="post">

        <!-- Room Info (visible but readonly) -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Room Name</label>
                <input type="text" name="room_name" class="form-control" value="<?= htmlspecialchars($room_name) ?>" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Room Price</label>
                <input type="text" id="room_price"  name="room_price" class="form-control" value="<?= htmlspecialchars($room_price) ?>" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Check-in Date</label>
                <input type="text" id="checkin" name="checkin" class="form-control" value="<?= htmlspecialchars($checkin) ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Check-out Date</label>
                <input type="text" id="checkout" name="checkout" class="form-control" value="<?= htmlspecialchars($checkout) ?>" readonly>
            </div>
            <div class="col-md-2">
                <label class="form-label">Adults</label>
                <input type="text" name="adults" class="form-control" value="<?= htmlspecialchars($adults) ?>" readonly>
            </div>
            <div class="col-md-2">
                <label class="form-label">Children</label>
                <input type="text" name="children" class="form-control" value="<?= htmlspecialchars($children) ?>" readonly>
            </div>
        </div>

        <!-- Hidden Room ID -->
        <input type="hidden" name="room_id" value="<?= htmlspecialchars($room_id) ?>">

        <!-- Guest Info -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Guest Name</label>
                <input type="text" name="guest_name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
        </div>

        <!-- Phone and Pickup -->
  <div class="row mb-3">
    <div class="col-md-6">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" required>
    </div>

     <div class="col-md-6">
        <label class="form-label">Pickup Location</label>
        <select name="pickup_location" class="form-select" onchange="updatePickupCost(this)">
            <option value="">Select Pickup Location</option>
            <option value="Jinnah International Airport" data-cost="1200">Jinnah International Airport</option>
            <option value="Cantt Railway Station" data-cost="1500">Cantt Railway Station</option>
            <option value="Saddar Bus Stand" data-cost="1000">Saddar Bus Stand</option>
            <option value="Gulshan-e-Iqbal (NIPA)" data-cost="1100">Gulshan-e-Iqbal (NIPA)</option>
            <option value="Korangi Crossing" data-cost="1800">Korangi Crossing</option>
            <option value="Clifton Do Talwar" data-cost="2000">Clifton Do Talwar</option>
            <option value="Tariq Road" data-cost="1400">Tariq Road</option>
            <option value="Nazimabad No.1" data-cost="1900">Nazimabad No.1</option>
            <option value="Orangi Town" data-cost="1600">Orangi Town</option>
            <option value="Malir Halt" data-cost="1800">Malir Halt</option>
            <option value="Landhi 89" data-cost="2000">Landhi 89</option>
            <option value="North Karachi (Power House)" data-cost="1700">North Karachi (Power House)</option>
        </select>
    </div>
</div>


        <!-- Pickup Cost and Notes -->
        <div class="row mb-3">
             <div class="col-md-6">
        <label class="form-label">Pickup Cost</label>
        <!-- Make this input visible and editable -->
        <input type="number" name="pickup_cost" class="form-control" value="0"  id="pickup_cost" readonly>
    </div>
            <div class="col-md-6">
                <label class="form-label">Additional Note</label>
                <textarea name="additional_note" class="form-control" rows="2"></textarea>
            </div>
        </div>

        <!-- Total Price -->
        <div class="mb-3">
            <label class="form-label">Total Price</label>
            <input type="number" id="total_price" name="total_price" class="form-control" >
        </div>

        <button type="submit" name="booking-confirm" class="btn btn-success px-5 py-2">Confirm Booking</button>
    </form>
</div>
<?php endif; ?>


<?php
// yaha pr hamara form submit wala code start he jo table me data insert kreyga 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['booking-confirm'])) {

    $rmname = $_POST['room_name'];
    $rmprice = $_POST['room_price'];
    $chkin = $_POST['checkin'];
    $chkout = $_POST['checkout'];
    $cnfrmadults = $_POST['adults'];
    $cnfrmchildren =$_POST['children'];
    $guestname =$_POST['guest_name'];
    $gusetemail = $_POST['email'];
    $guestphone =$_POST['phone'];
    $pcklocation = $_POST['pickup_location'];
    $pckcost = $_POST['pickup_cost'];
    $additionanotes = $_POST['additional_note'];
    $totalprice = $_POST['total_price'];


    $insert = $pdo->prepare("INSERT INTO bookings (room_id	,Room_name,price,check_in,check_out,adults,children,guest_name,email,phone,pickup_location,pickup_cost,additional_note,total_price) VALUES(:rid,:rname,:rprice,:rcheckin,:rcheckot,:radults,:rchild,:gname,:gemail,:gphone,:gpickup,:gpickpupcost,:gnote,:rtotal)");

    $insert->bindParam(':rid', $room_id);
    $insert->bindParam(':rname', $rmname);
    $insert->bindParam(':rprice', $rmprice);
    $insert->bindParam(':rcheckin', $chkin);
    $insert->bindParam(':rcheckot', $chkout);
    $insert->bindParam(':radults', $cnfrmadults);
    $insert->bindParam(':rchild', $cnfrmchildren);
    $insert->bindParam(':gname', $guestname);
    $insert->bindParam(':gemail', $gusetemail);
    $insert->bindParam(':gphone', $guestphone);
    $insert->bindParam(':gpickup', $pcklocation);
    $insert->bindParam(':gpickpupcost', $pckcost);
    $insert->bindParam(':gnote', $additionanotes);
    $insert->bindParam(':rtotal', $totalprice);

 if($insert->execute()) {
    $_SESSION['booking_success'] = true;
  // Form data variables
    $rmname = $_POST['room_name'];
    $rmprice = $_POST['room_price'];
    $chkin = $_POST['checkin'];
    $chkout = $_POST['checkout'];
    $cnfrmadults = $_POST['adults'];
    $cnfrmchildren = $_POST['children'];
    $guestname = $_POST['guest_name'];
    $gusetemail = $_POST['email'];
    $guestphone = $_POST['phone'];
    $pcklocation = $_POST['pickup_location'];
    $pckcost = $_POST['pickup_cost'];
    $additionanotes = $_POST['additional_note'];
    $totalprice = $_POST['total_price'];

    // Email setup
    $to = $gusetemail;
    $from = "mahalerang@gmail.com";
    $subjectLine = "Your Booking Confirmation - Mahale Rang";

    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $logo = 'https://i.ibb.co/8Lb7CRWM/mahl-logo.png';
    $link = '#';

    // Email body HTML
   $body = "<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title>Booking Confirmation</title>
</head>
<body style='font-family: Arial, sans-serif; background-color: #f6f6f6; padding: 20px;'>
  <table style='max-width: 600px; margin: auto; background-color: #ffffff; border: 1px solid #ddd; padding: 20px;'>
    <tr>
      <td style='text-align: center;'>
        <a href='{$link}'><img src='{$logo}' alt='Mahale Rang Logo' style='width: 150px;'></a>
        <h2 style='color: #333;'>Booking Confirmation</h2>
        <p style='color: #666;'>Thank you for booking with <strong>Mahale Rang</strong>. Below are your booking details:</p>
      </td>
    </tr>

    <tr><td><hr></td></tr>

    <tr><td>
      <h3 style='color: #444;'>Guest Information</h3>
      <p><strong>Name:</strong> {$guestname}</p>
      <p><strong>Email:</strong> {$gusetemail}</p>
      <p><strong>Phone:</strong> {$guestphone}</p>
    </td></tr>

    <tr><td>
      <h3 style='color: #444;'>Booking Details</h3>
      <p><strong>Room:</strong> {$rmname}</p>
      <p><strong>Room Price:</strong> PKR {$rmprice}</p>
      <p><strong>Check-in:</strong> {$chkin}</p>
      <p><strong>Check-out:</strong> {$chkout}</p>
      <p><strong>Adults:</strong> {$cnfrmadults}</p>
      <p><strong>Children:</strong> {$cnfrmchildren}</p>
    </td></tr>

    <tr><td>
      <h3 style='color: #444;'>Pickup Details</h3>
      <p><strong>Pickup Location:</strong> {$pcklocation}</p>
      <p><strong>Pickup Cost:</strong> PKR {$pckcost}</p>
    </td></tr>

    <tr><td>
      <h3 style='color: #444;'>Additional Notes</h3>
      <p>{$additionanotes}</p>
    </td></tr>

    <tr><td style='padding: 15px 0;'>
      <h2 style='color: #000;'>Total Amount: PKR {$totalprice}</h2>
    </td></tr>

    <tr>
      <td style='text-align: center; color: #777; font-size: 14px; padding-top: 20px;'>
        <p>We look forward to hosting you.<br><strong>Mahale Rang</strong></p>
      </td>
    </tr>
  </table>
</body>
</html>";


    // Send mail
    mail($to, $subjectLine, $body, $headers);
    
}

    else{
             echo " <script> alert('booking failed'); </script>";
    }
 
}
?>
<!-- Modal HTML code -->
<?php if (isset($_SESSION['booking_success']) && $_SESSION['booking_success']): ?>
<!-- Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"> <!-- Yeh line change ki -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center text-dark" id="thankYouModalLabel">Booking Confirmed</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-dark">Thank you for booking with us! Your booking is confirmed. We look forward to your stay. A confirmation email has been sent to your email address</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>
window.onload = function() {
    var myModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
    myModal.show();

    // Show invoice and hide booking form when modal is closed
    document.getElementById('thankYouModal').addEventListener('hidden.bs.modal', function () {
        fetch('unset_session.php'); // Clear session if necessary
        document.getElementById('booking-form').style.display = "none"; // Hide the booking form
        document.getElementById('invoice').style.display = "block"; // Show the invoice
    });
}

</script>

<?php endif; ?>

<!-- Invoice Section (Initially Hidden) -->
<div id="invoice" class="container p-4 shadow-sm rounded bg-white invoice-box" style="display: none;">
  <div class="text-center">
    <img src="image/mahl-logo.png" alt="Logo" class="mb-2" style="width: 100px;">
    <h2 class="text-dark">Mahal e Rang Booking Confirmation</h2>
  </div>
  <div class="text-center invoice-header mt-2">
    <p><strong>Mahal e Rang</strong> | 123 Main Street, Karachi</p>
    <p>Phone: +92-3181447026 | Email: mahalerang@gmail.com</p>
    <p>Website: www.mahalerang.com</p>
  </div>
  <hr>
  <div class="row invoice-details">
    <div class="col-md-6"><p><strong>Room:</strong> <?= $rmname ?></p></div>
    <div class="col-md-6"><p><strong>Price:</strong> <?= $rmprice ?></p></div>
    <div class="col-md-6"><p><strong>Check-in:</strong> <?= $chkin ?></p></div>
    <div class="col-md-6"><p><strong>Check-out:</strong> <?= $chkout ?></p></div>
    <div class="col-md-6"><p><strong>Guest:</strong> <?= $guestname ?></p></div>
    <div class="col-md-6"><p><strong>Email:</strong> <?= $gusetemail ?></p></div>
    <div class="col-md-6"><p><strong>Phone:</strong> <?= $guestphone ?></p></div>
    <div class="col-md-6"><p><strong>Pickup Location:</strong> <?= $pcklocation ?></p></div>
    <div class="col-md-6"><p><strong>Pickup Cost:</strong> <?= $pckcost ?></p></div>
    <div class="col-12"><p><strong>Additional Notes:</strong> <?= $additionanotes ?></p></div>
    <div class="col-12 mt-2"><p class="fw-bold fs-5"><strong>Total Price:</strong> <?= $totalprice ?></p></div>
  </div>
  <div class="text-center mt-4">
    <button class="btn" id="printBtn" onclick="printInvoice()">
      <i class="bi bi-printer-fill"></i> Print
    </button>
    <button class="btn" id="downloadBtn" onclick="downloadInvoice()">
      <i class="bi bi-download"></i> Download PDF
    </button>
  </div>
  <p class="text-center text-success fw-bold mt-4">Thank you for booking with us! 🌟</p>
  <p class="text-center text-muted small mt-3">This is a system-generated invoice – no signature required.</p>
</div>
<?php unset($_SESSION['booking_success']); ?>








<script>
    function downloadInvoice() {
  const element = document.getElementById("invoice");
  html2pdf()
    .set({
      margin: 0.7,
      filename: 'booking-confirmation.pdf',
      image: { type: 'jpeg', quality: 0.98 },
      html2canvas: { scale: 2 },
      jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    })
    .from(element)
    .save();
}
</script>





<?php include('components/footer.php'); ?>
