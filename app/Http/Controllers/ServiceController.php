// app/Http/Controllers/ServiceController.php
public function index()
{
    $services = [
        [
            'title' => 'Grooming',
            'image' => 'gromming.jpg',
            'desc' => 'Professional grooming services to keep your pet looking and feeling their best.'
        ],
        [
            'title' => 'Dog Walking',
            'image' => 'walking.jpg',
            'desc' => 'Daily dog walking services to ensure your pet gets the exercise they need.'
        ],
        [
            'title' => 'Health Check-up',
            'image' => 'checkup.jpg',
            'desc' => 'Regular health check-ups to monitor your pet\'s well-being and catch any issues early.'
        ],
        [
            'title' => 'Pet Vaccination',
            'image' => 'vaccine.jpg',
            'desc' => 'Complete vaccination to protect your pet from common diseases.'
        ],
        [
            'title' => 'Pet Training',
            'image' => 'training.jpg',
            'desc' => 'Obedience and behavior training for your pets.'
        ]
    ];

    // Ubah array jadi collection lalu paginate
    $services = collect($services)->paginate(3);

    return view('services', compact('services'));
}
