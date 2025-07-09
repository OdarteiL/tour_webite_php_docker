<?php
$pageTitle = 'Contact Us - WanderLust Tours';
include 'includes/header.php';

$message = '';
if ($_POST) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $destination = htmlspecialchars($_POST['destination'] ?? '');
    $userMessage = htmlspecialchars($_POST['message'] ?? '');
    
    if ($name && $email && $userMessage) {
        $message = '<div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 8px; margin-bottom: 2rem; text-align: center;">
                    Thank you, ' . $name . '! Your message has been received. We will get back to you soon.
                   </div>';
    } else {
        $message = '<div style="background: #f8d7da; color: #721c24; padding: 1rem; border-radius: 8px; margin-bottom: 2rem; text-align: center;">
                    Please fill in all required fields.
                   </div>';
    }
}
?>

<section class="hero-contact">
    <div class="hero-content">
        <h1>📞 Get In Touch</h1>
        <p><?php echo "Ready to Start Your Adventure? Let's Plan Your Perfect Trip!"; ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        
        <?php echo $message; ?>
        
        <div class="contact-form">
            <form method="POST" id="contact-form">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required value="<?php echo $_POST['name'] ?? ''; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required value="<?php echo $_POST['email'] ?? ''; ?>">
                </div>
                <div class="form-group">
                    <label for="destination">Interested Destination</label>
                    <input type="text" id="destination" name="destination" placeholder="e.g., Paris, Tokyo, Bali" value="<?php echo $_POST['destination'] ?? ''; ?>">
                </div>
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tell us about your dream vacation..." required><?php echo $_POST['message'] ?? ''; ?></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>

        <div class="contact-info">
            <?php
            $contactInfo = [
                [
                    'icon' => '📍',
                    'title' => 'Visit Us',
                    'details' => '123 Travel Street<br>Adventure City, AC 12345<br>United States'
                ],
                [
                    'icon' => '📞',
                    'title' => 'Call Us',
                    'details' => '+1 (555) 123-4567<br>Mon-Fri: 9AM-6PM<br>Sat-Sun: 10AM-4PM'
                ],
                [
                    'icon' => '✉️',
                    'title' => 'Email Us',
                    'details' => 'info@wanderlusttours.com<br>bookings@wanderlusttours.com<br>support@wanderlusttours.com'
                ]
            ];
            
            foreach ($contactInfo as $info): ?>
                <div class="contact-card">
                    <div class="contact-card-icon"><?php echo $info['icon']; ?></div>
                    <h3><?php echo $info['title']; ?></h3>
                    <p><?php echo $info['details']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>