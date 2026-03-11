<?php

namespace Database\Seeders;

use App\Models\Jetski;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JetskiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jetskis = [
            // Tour Packages
            [
                'name' => 'BURJ AL ARAB TOUR',
                'description' => 'Experience a thrilling ride across the Arabian Gulf with stunning views of the iconic Burj Al Arab. Perfect for beginners and quick adventures.',
                'price_per_hour' => 370.00,
                'duration' => '30 Minutes',
                'image' => 'burj-al-arab-tour.jpg',
                'whatsapp_phone' => '+971503102976',
                'features' => [
                    'Skyline photo stop',
                    'Beginner-friendly route',
                    'Professional instructor',
                    'Safety equipment included'
                ],
                'is_active' => true,
            ],
            [
                'name' => 'ATLANTIS THE ROYAL TOUR',
                'description' => 'Ride towards the ultra-luxury Atlantis The Royal and explore the Palm coastline with extended riding time.',
                'price_per_hour' => 450.00,
                'duration' => '45 Minutes',
                'image' => 'atlantis-the-royal-tour.jpg',
                'whatsapp_phone' => '+971503102976',
                'features' => [
                    'Palm Jumeirah views',
                    'Extended ride duration',
                    'Ideal for couples',
                    'Guided experience'
                ],
                'is_active' => true,
            ],
            [
                'name' => 'BURJ KHALIFA VIEW TOUR',
                'description' => 'Enjoy high-speed cruising with breathtaking skyline views including Burj Khalifa in the distance.',
                'price_per_hour' => 450.00,
                'duration' => '45 Minutes',
                'image' => 'burj-khalifa-view-tour.jpg',
                'whatsapp_phone' => '+971503102976',
                'features' => [
                    'Downtown skyline backdrop',
                    'Perfect for photos',
                    'Balanced speed & sightseeing',
                    'Safety briefing included'
                ],
                'is_active' => true,
            ],
            [
                'name' => 'ATLANTIS THE PALM TOUR',
                'description' => 'Explore the legendary Atlantis The Palm with a full one-hour adventure.',
                'price_per_hour' => 630.00,
                'duration' => '60 Minutes',
                'image' => 'atlantis-the-palm-tour.jpg',
                'whatsapp_phone' => '+971503102976',
                'features' => [
                    'Popular landmark route',
                    'Multiple photo stops',
                    'Smooth guided ride',
                    'Ideal for all levels'
                ],
                'is_active' => true,
            ],
            [
                'name' => 'AIN DUBAI & BLUEWATERS TOUR',
                'description' => 'Cruise past Ain Dubai and Bluewaters Island on one of the longest and most scenic tours.',
                'price_per_hour' => 870.00,
                'duration' => '90 Minutes',
                'image' => 'ain-dubai-bluewaters-tour.jpg',
                'whatsapp_phone' => '+971503102976',
                'features' => [
                    'Extended adventure ride',
                    'Marina skyline views',
                    'Best for thrill seekers',
                    'Maximum riding time'
                ],
                'is_active' => true,
            ],
            [
                'name' => 'ULTIMATE 2-HOUR LANDMARK TOUR',
                'description' => 'Experience all major Dubai landmarks in one unforgettable Jet Ski adventure.',
                'price_per_hour' => 1050.00,
                'duration' => '120 Minutes',
                'image' => 'ultimate-2hour-landmark-tour.jpg',
                'whatsapp_phone' => '+971503102976',
                'features' => [
                    'Burj Al Arab',
                    'Atlantis The Royal',
                    'Atlantis The Palm',
                    'Burj Khalifa skyline',
                    'Ain Dubai & Bluewaters'
                ],
                'is_active' => true,
            ],
            // JetCar Rentals
            [
                'name' => '2-SEATER JETCAR – 2024 MODEL',
                'description' => 'Luxury water driving experience designed for couples and influencers.',
                'price_per_hour' => 1600.00,
                'duration' => '20 min = 600 AED | 30 min = 800 AED | 1 hour = 1600 AED',
                'image' => '2-seater-jetcar-2024.jpg',
                'whatsapp_phone' => '+971503102976',
                'features' => [
                    'Brand new 2024 model',
                    'Supercar-inspired design',
                    'High safety standards',
                    'Professional guidance'
                ],
                'is_active' => true,
            ],
            [
                'name' => '4-SEATER JETCAR – 2024 MODEL',
                'description' => 'Premium group-friendly water adventure with extra comfort and space.',
                'price_per_hour' => 2700.00,
                'duration' => '20 min = 900 AED | 30 min = 1600 AED | 1 hour = 2700 AED',
                'image' => '4-seater-jetcar-2024.jpg',
                'whatsapp_phone' => '+971503102976',
                'features' => [
                    'Spacious seating',
                    'Ideal for families',
                    'Luxury design finish',
                    'Smooth performance'
                ],
                'is_active' => true,
            ],
        ];

        foreach ($jetskis as $jetski) {
            $jetski['slug'] = Str::slug($jetski['name']);
            Jetski::create($jetski);
        }
    }
}
