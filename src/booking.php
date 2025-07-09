<?php
$pageTitle = 'Book Your Tour - WanderLust Tours';
include 'includes/header.php';

$selectedTour = $_GET['tour'] ?? '';
$message = '';

if ($_POST) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $tour = htmlspecialchars($_POST['tour'] ?? '');
    $travelers = (int)($_POST['travelers'] ?? 1);
    $date = htmlspecialchars($_POST['date'] ?? '');
    $notes = htmlspecialchars($_POST['notes'] ?? '');
    
    if ($name && $email && $phone && $tour && $date) {
        $message = '<div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 8px; margin-bottom: 2rem; text-align: center;">
                    <h3>Booking Request Submitted!</h3>
                    <p>Thank you, ' . $name . '! Your booking request for "' . $tour . '" has been received.<br>
                    We will contact you within 24 hours to confirm your reservation.</p>
                   </div>';
    } else {
        $message = '<div style="background: #f8d7da; color: #721c24; padding: 1rem; border-radius: 8px; margin-bottom: 2rem; text-align: center;">
                    Please fill in all required fields.
                   </div>';
    }
}

$tours = [
    'Paris Romance' => ['price' => 1299, 'icon' => '🗼'],
    'Tokyo Adventure' => ['price' => 2199, 'icon' => '🏯'],
    'Bali Paradise' => ['price' => 899, 'icon' => '🏖️'],
    'Rome History' => ['price' => 1099, 'icon' => '🏛️'],
    'Swiss Alps' => ['price' => 1799, 'icon' => '🏔️'],
    'Safari Kenya' => ['price' => 2899, 'icon' => '🐘']
];
?>

<section class="hero">
    <div class="hero-content">
        <h1>📅 Book Your Adventure</h1>
        <p><?php echo "Reserve Your Spot for an Unforgettable Journey"; ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title">Booking Form</h2>
        
        <?php echo $message; ?>
        
        <div class="contact-form">
            <form method="POST">
                <div class="form-group">
                    <label for="tour">Select Tour *</label>
                    <select id="tour" name="tour" required style="width: 100%; padding: 1rem; border: 2px solid #ecf0f1; border-radius: 8px; font-size: 1rem;">
                        <option value="">Choose a tour...</option>
                        <?php foreach ($tours as $tourName => $tourData): ?>
                            <option value="<?php echo $tourName; ?>" <?php echo ($selectedTour == $tourName) ? 'selected' : ''; ?>>
                                <?php echo $tourData['icon'] . ' ' . $tourName . ' - $' . number_format($tourData['price']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required value="<?php echo $_POST['name'] ?? ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required value="<?php echo $_POST['email'] ?? ''; ?>">
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required value="<?php echo $_POST['phone'] ?? ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="travelers">Number of Travelers *</label>
                        <input type="number" id="travelers" name="travelers" min="1" max="10" required value="<?php echo $_POST['travelers'] ?? '1'; ?>">
                    </div>
                    <div class="form-group">
                        <label for="date">Preferred Date *</label>
                        <input type="date" id="date" name="date" required value="<?php echo $_POST['date'] ?? ''; ?>" min="<?php echo date('Y-m-d', strtotime('+1 week')); ?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="notes">Special Requests or Notes</label>
                    <textarea id="notes" name="notes" rows="4" placeholder="Any dietary restrictions, accessibility needs, or special occasions..."><?php echo $_POST['notes'] ?? ''; ?></textarea>
                </div>
                
                <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 8px; margin-bottom: 1.5rem;">
                    <h4 style="margin-bottom: 1rem; color: #2c3e50;">Booking Summary</h4>
                    <p style="color: #7f8c8d; margin-bottom: 0.5rem;">• All prices are per person</p>
                    <p style="color: #7f8c8d; margin-bottom: 0.5rem;">• A deposit of 25% is required to confirm booking</p>
                    <p style="color: #7f8c8d; margin-bottom: 0.5rem;">• Full payment due 30 days before departure</p>
                    <p style="color: #7f8c8d;">• Free cancellation up to 14 days before departure</p>
                </div>
                
                <button type="submit" class="btn" style="width: 100%; font-size: 1.1rem;">Submit Booking Request</button>
            </form>
        </div>
        
        <div style="text-align: center; margin-top: 3rem;">
            <p style="color: #7f8c8d; margin-bottom: 1rem;">Need help with your booking?</p>
            <a href="contact.php" class="btn" style="background: #27ae60;">Contact Our Travel Experts</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>