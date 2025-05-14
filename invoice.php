<?php
session_start();
include('components/header.php');

if (!isset($_SESSION['booking_data'])) {
    echo "No booking data found.";
    exit;
}

$data = $_SESSION['booking_data'];
?>

<?php if (isset($_SESSION['show_thank_you']) && $_SESSION['show_thank_you']): ?>
    <div class="alert alert-success text-center fw-bold fs-5" id="thankYouMessage">
        ✅ Thank you for booking with us! Your booking is confirmed.
    </div>

    <div id="invoice" class="container p-4 shadow-sm rounded bg-white invoice-box" style="display: none;">
        <div class="text-center">
            <img src="image/mahl-logo.png" alt="Logo" class="mb-2" style="width: 100px;">
            <h2 class="text-dark">Mahal e Rang Booking Confirmation</h2>
        </div>

        <div class="text-center invoice-header mt-2">
            <p><strong>Mahal e Rang</strong> | 123 Main Street, Karachi </p>
            <p>Phone: +92-3181447026 | Email: mahalerang@gmail.com</p>
            <p>Website: www.mahalerang.com</p>
        </div>

        <hr>

        <div class="row invoice-details">
            <div class="col-md-6"><p><strong>Room:</strong> <?= $data['rmname'] ?></p></div>
            <div class="col-md-6"><p><strong>Price:</strong> <?= $data['rmprice'] ?></p></div>
            <div class="col-md-6"><p><strong>Check-in:</strong> <?= $data['chkin'] ?></p></div>
            <div class="col-md-6"><p><strong>Check-out:</strong> <?= $data['chkout'] ?></p></div>
            <div class="col-md-6"><p><strong>Guest:</strong> <?= $data['guestname'] ?></p></div>
            <div class="col-md-6"><p><strong>Email:</strong> <?= $data['gusetemail'] ?></p></div>
            <div class="col-md-6"><p><strong>Phone:</strong> <?= $data['guestphone'] ?></p></div>
            <div class="col-md-6"><p><strong>Pickup Location:</strong> <?= $data['pcklocation'] ?></p></div>
            <div class="col-md-6"><p><strong>Pickup Cost:</strong> <?= $data['pckcost'] ?></p></div>
            <div class="col-12"><p><strong>Additional Notes:</strong> <?= $data['additionanotes'] ?></p></div>
            <div class="col-12 mt-2"><p class="fw-bold fs-5"><strong>Total Price:</strong> <?= $data['totalprice'] ?></p></div>
        </div>

        <!-- Print and Download Buttons with Icons -->
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

    <script>
        // 3-second delay before showing the invoice
        setTimeout(function() {
            // Hide the thank you message
            document.getElementById('thankYouMessage').style.display = 'none';
            
            // Show the invoice
            document.getElementById('invoice').style.display = 'block';
        }, 3000);
    </script>

    <?php unset($_SESSION['show_thank_you']); ?>
<?php endif; ?>

<?php
unset($_SESSION['booking_data']);
include('components/footer.php');
?>
