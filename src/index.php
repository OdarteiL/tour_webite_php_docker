<?php
$pageTitle = 'WanderLust Tours - Your Adventure Awaits';
include 'includes/header.php';
?>

    <section class="hero">
        <div class="hero-content">
            <h1>🌍 Explore the World</h1>
            <p><?php echo "Unforgettable Adventures Await - Book Your Dream Vacation Today!"; ?></p>
            <a href="tours.php" class="btn">Discover Tours</a>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="section-title">Featured Tour Packages</h2>
            <div class="tours-grid">
                <?php
                $featuredTours = [
                    [
                        'icon' => '🗼',
                        'title' => 'Paris Romance',
                        'duration' => '7 Days / 6 Nights',
                        'price' => '$1,299',
                        'features' => [
                            'Eiffel Tower & Louvre Museum',
                            'Seine River Cruise',
                            '4-Star Hotel Accommodation',
                            'Daily Breakfast Included',
                            'Professional Tour Guide'
                        ]
                    ],
                    [
                        'icon' => '🏯',
                        'title' => 'Tokyo Adventure',
                        'duration' => '10 Days / 9 Nights',
                        'price' => '$2,199',
                        'features' => [
                            'Mount Fuji Day Trip',
                            'Traditional Ryokan Stay',
                            'Sushi Making Class',
                            'Bullet Train Experience',
                            'Cherry Blossom Gardens'
                        ]
                    ],
                    [
                        'icon' => '🏖️',
                        'title' => 'Bali Paradise',
                        'duration' => '8 Days / 7 Nights',
                        'price' => '$899',
                        'features' => [
                            'Beach Resort Stay',
                            'Temple & Culture Tours',
                            'Volcano Sunrise Trek',
                            'Spa & Wellness Package',
                            'Traditional Cooking Class'
                        ]
                    ]
                ];
                
                foreach ($featuredTours as $tour) {
                    echo '<div class="tour-card">';
                    echo '<div class="tour-header">';
                    echo '<div class="tour-icon">' . $tour['icon'] . '</div>';
                    echo '<h3 class="tour-title">' . $tour['title'] . '</h3>';
                    echo '<p class="tour-duration">' . $tour['duration'] . '</p>';
                    echo '</div>';
                    echo '<div class="tour-body">';
                    echo '<div class="tour-price">' . $tour['price'] . '</div>';
                    echo '<ul class="tour-features">';
                    foreach ($tour['features'] as $feature) {
                        echo '<li>' . $feature . '</li>';
                    }
                    echo '</ul>';
                    echo '<a href="booking.php?tour=' . urlencode($tour['title']) . '" class="btn">Book Now</a>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <div style="text-align: center; margin-top: 3rem;">
                <a href="tours.php" class="btn">View All Tours</a>
            </div>
        </div>
    </section>

    <section class="stats-section section">
        <div class="container">
            <h2 class="section-title">Why Choose WanderLust?</h2>
            <div class="stats-grid">
                <?php
                $stats = [
                    ['number' => '50K+', 'label' => 'Happy Travelers'],
                    ['number' => '120+', 'label' => 'Destinations'],
                    ['number' => '15+', 'label' => 'Years Experience'],
                    ['number' => '24/7', 'label' => 'Customer Support']
                ];
                
                foreach ($stats as $stat) {
                    echo '<div class="stat-item">';
                    echo '<div class="stat-number">' . $stat['number'] . '</div>';
                    echo '<div class="stat-label">' . $stat['label'] . '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
