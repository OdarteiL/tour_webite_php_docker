<?php
$pageTitle = 'Our Tours - WanderLust Tours';
include 'includes/header.php';

$tours = [
    [
        'id' => 1,
        'icon' => '🗼',
        'title' => 'Paris Romance',
        'duration' => '7 Days / 6 Nights',
        'price' => '$1,299',
        'description' => 'Experience the magic of Paris with romantic walks along the Seine, world-class museums, and iconic landmarks.',
        'features' => [
            'Eiffel Tower & Louvre Museum',
            'Seine River Cruise',
            '4-Star Hotel Accommodation',
            'Daily Breakfast Included',
            'Professional Tour Guide'
        ]
    ],
    [
        'id' => 2,
        'icon' => '🏯',
        'title' => 'Tokyo Adventure',
        'duration' => '10 Days / 9 Nights',
        'price' => '$2,199',
        'description' => 'Discover the perfect blend of ancient traditions and cutting-edge technology in Japan\'s vibrant capital.',
        'features' => [
            'Mount Fuji Day Trip',
            'Traditional Ryokan Stay',
            'Sushi Making Class',
            'Bullet Train Experience',
            'Cherry Blossom Gardens'
        ]
    ],
    [
        'id' => 3,
        'icon' => '🏖️',
        'title' => 'Bali Paradise',
        'duration' => '8 Days / 7 Nights',
        'price' => '$899',
        'description' => 'Relax in tropical paradise with stunning beaches, ancient temples, and vibrant Indonesian culture.',
        'features' => [
            'Beach Resort Stay',
            'Temple & Culture Tours',
            'Volcano Sunrise Trek',
            'Spa & Wellness Package',
            'Traditional Cooking Class'
        ]
    ],
    [
        'id' => 4,
        'icon' => '🏛️',
        'title' => 'Rome History',
        'duration' => '6 Days / 5 Nights',
        'price' => '$1,099',
        'description' => 'Walk through history in the Eternal City, exploring ancient ruins and enjoying incredible Italian cuisine.',
        'features' => [
            'Colosseum & Roman Forum',
            'Vatican City Tour',
            'Italian Cooking Class',
            'Historic Center Walking Tour',
            'Authentic Italian Meals'
        ]
    ],
    [
        'id' => 5,
        'icon' => '🏔️',
        'title' => 'Swiss Alps',
        'duration' => '9 Days / 8 Nights',
        'price' => '$1,799',
        'description' => 'Experience breathtaking mountain scenery, charming villages, and outdoor adventures in Switzerland.',
        'features' => [
            'Matterhorn Viewing',
            'Scenic Train Rides',
            'Mountain Hiking Tours',
            'Traditional Swiss Cuisine',
            'Lake Geneva Cruise'
        ]
    ],
    [
        'id' => 6,
        'icon' => '🐘',
        'title' => 'Safari Kenya',
        'duration' => '12 Days / 11 Nights',
        'price' => '$2,899',
        'description' => 'Witness the Great Migration and incredible wildlife in Kenya\'s world-famous national parks.',
        'features' => [
            'Masai Mara Game Drives',
            'Big Five Wildlife Viewing',
            'Cultural Village Visits',
            'Hot Air Balloon Safari',
            'Luxury Safari Lodge Stay'
        ]
    ]
];
?>

<section class="hero">
    <div class="hero-content">
        <h1>🌍 Discover Our Tours</h1>
        <p><?php echo "Choose Your Perfect Adventure from Our Curated Collection"; ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title">All Tour Packages</h2>
        <div class="tours-grid">
            <?php foreach ($tours as $tour): ?>
                <div class="tour-card">
                    <div class="tour-header">
                        <div class="tour-icon"><?php echo $tour['icon']; ?></div>
                        <h3 class="tour-title"><?php echo $tour['title']; ?></h3>
                        <p class="tour-duration"><?php echo $tour['duration']; ?></p>
                    </div>
                    <div class="tour-body">
                        <div class="tour-price"><?php echo $tour['price']; ?></div>
                        <p style="margin-bottom: 1rem; color: #7f8c8d;"><?php echo $tour['description']; ?></p>
                        <ul class="tour-features">
                            <?php foreach ($tour['features'] as $feature): ?>
                                <li><?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="booking.php?tour=<?php echo urlencode($tour['title']); ?>" class="btn">Book Now</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>