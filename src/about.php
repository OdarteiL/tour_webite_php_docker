<?php
$pageTitle = 'About Us - WanderLust Tours';
include 'includes/header.php';
?>

<section class="hero-about">
    <div class="hero-content">
        <h1>✈️ About WanderLust Tours</h1>
        <p><?php echo "Crafting Extraordinary Travel Experiences Since 2008"; ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title">Our Story</h2>
        <p style="text-align: center; font-size: 1.2rem; color: #7f8c8d; max-width: 800px; margin: 0 auto 3rem;">
            Founded by passionate travelers, WanderLust Tours has been creating unforgettable journeys for over 15 years. 
            We believe that travel is not just about visiting places, but about creating memories that last a lifetime.
        </p>
        
        <div class="about-content">
            <?php
            $aboutCards = [
                [
                    'icon' => '🎯',
                    'title' => 'Our Mission',
                    'description' => 'To provide exceptional travel experiences that inspire, educate, and create lasting memories while promoting sustainable tourism practices.'
                ],
                [
                    'icon' => '👥',
                    'title' => 'Expert Team',
                    'description' => 'Our team of travel experts and local guides ensure every detail of your journey is perfectly planned and executed with care.'
                ],
                [
                    'icon' => '🌱',
                    'title' => 'Sustainable Travel',
                    'description' => 'We\'re committed to responsible tourism that benefits local communities and preserves the beauty of our destinations.'
                ]
            ];
            
            foreach ($aboutCards as $card): ?>
                <div class="about-card">
                    <div class="about-icon"><?php echo $card['icon']; ?></div>
                    <h3><?php echo $card['title']; ?></h3>
                    <p><?php echo $card['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="stats-section section">
    <div class="container">
        <h2 class="section-title">Our Achievements</h2>
        <div class="stats-grid">
            <?php
            $achievements = [
                ['number' => '50K+', 'label' => 'Happy Travelers'],
                ['number' => '120+', 'label' => 'Destinations'],
                ['number' => '15+', 'label' => 'Years Experience'],
                ['number' => '24/7', 'label' => 'Customer Support']
            ];
            
            foreach ($achievements as $achievement): ?>
                <div class="stat-item">
                    <div class="stat-number"><?php echo $achievement['number']; ?></div>
                    <div class="stat-label"><?php echo $achievement['label']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>