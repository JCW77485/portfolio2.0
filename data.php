<?php
$data = [
    'name' => 'YAU GIAK KIAN',
    'title' => 'Senior Graphic Designer',
    'profileImage' => 'https://framerusercontent.com/images/6Jms3yt4XRdWgbQCYtOCFcdaKw.jpeg?width=1877&height=2400',
    'about' => 'Creative Graphic Designer with over 3 years of experience in retail branding and digital content. Proven track record in designing for both physical spaces like exhibition booths, store renovations and digital platforms. Skilled in taking projects from initial concept to final setup.',
    'experience' => [
        [
            'company' => 'Pangu Sdn Bhd',
            'period' => 'Jan 2022 – Present',
            'role' => 'Senior Graphic Designer',
            'description' => "Authorized Exclusive Distributor – COROS & BMAI\n• Manage all design assets and website updates for pangu.my and coros.my while overseeing the visual identity for the Bmai, COROS, and Pangu Headphones brands.\n• Create high-quality graphics and engaging content for social media postings to drive brand awareness.\n• Design eye-catching POP displays and marketing materials for 3 retail stores and dealers to improve sales performance.\n• Handle the full design and physical setup for exhibition booths and event spaces.\n• Support retail store renovation projects and new shop opening concepts from planning to execution.\n• Develop custom apparel designs and various internal marketing collaterals."
        ],
        [
            'company' => 'Bitlink System',
            'period' => '2019 – 2021',
            'role' => 'Administrative Assistant',
            'description' => "• Managed daily administrative tasks, documentation, and office paperwork.\n• Handled accurate data entry and record management for the team."
        ]
    ],
    'education' => [
        [
            'degree' => 'Bachelor of Science (Hons) Multimedia Computing',
            'institution' => 'YPC International College / Liverpool Moores University',
            'period' => '2020-2022'
        ],
        [
            'degree' => 'Diploma in E-Business Technology',
            'institution' => 'YPC International College',
            'period' => '2017-2019'
        ]
    ],
    'skills' => [
        [
            'category' => 'Branding & Identity',
            'details' => 'Logo design, typography, packaging, and style guides.'
        ],
        [
            'category' => 'UI/UX Design',
            'details' => 'Wireframing, prototyping, user research, and responsive web design.'
        ],
        [
            'category' => 'Project Management',
            'details' => 'Team leadership, client relations, and deadline management.'
        ]
    ],
    'projects' => [
        [
            'id' => 'acco-campaign',
            'title' => 'Acco Campaign',
            'description' => 'Revamped Acco’s brand with a bold, engaging campaign for global impact.',
            'full_description' => "This campaign was a complete overhaul of Acco's visual presence. We focused on high-contrast colors and bold typography to create a sense of urgency and modernity.",
            'image' => 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg?width=2400&height=1600',
            'gallery' => [
                ['url' => 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg', 'span' => 'sm:col-span-2 sm:row-span-2'], // Landscape
                ['url' => 'https://framerusercontent.com/images/6Jms3yt4XRdWgbQCYtOCFcdaKw.jpeg', 'span' => 'sm:col-span-1 sm:row-span-2'], // Portrait
                ['url' => 'https://framerusercontent.com/images/Oqx6YKytap78HOSr0zKxcs4lU.jpeg', 'span' => 'sm:col-span-1 sm:row-span-1'], // Square
                ['url' => 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg', 'span' => 'sm:col-span-2 sm:row-span-1'], // Landscape
                ['url' => 'https://framerusercontent.com/images/Oqx6YKytap78HOSr0zKxcs4lU.jpeg', 'span' => 'sm:col-span-1 sm:row-span-1'],
                ['url' => 'https://framerusercontent.com/images/6Jms3yt4XRdWgbQCYtOCFcdaKw.jpeg', 'span' => 'sm:col-span-1 sm:row-span-1']
            ]
        ],
        [
            'id' => 'luna-direction',
            'title' => 'Luna Direction',
            'description' => 'Crafted Luna’s creative direction to elevate brand identity and audience connection.',
            'full_description' => "Luna Direction was about finding the 'soul' of the brand. We moved away from generic aesthetics toward a more artisanal, grounded visual language.",
            'image' => 'https://framerusercontent.com/images/Oqx6YKytap78HOSr0zKxcs4lU.jpeg?width=2400&height=2400',
            'gallery' => [
                ['url' => 'https://framerusercontent.com/images/Oqx6YKytap78HOSr0zKxcs4lU.jpeg', 'span' => 'sm:col-span-2 sm:row-span-2'],
                ['url' => 'https://framerusercontent.com/images/6Jms3yt4XRdWgbQCYtOCFcdaKw.jpeg', 'span' => 'sm:col-span-1 sm:row-span-2'],
                ['url' => 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg', 'span' => 'sm:col-span-1 sm:row-span-1'],
                ['url' => 'https://framerusercontent.com/images/Oqx6YKytap78HOSr0zKxcs4lU.jpeg', 'span' => 'sm:col-span-2 sm:row-span-1']
            ]
        ]
    ],
    'contact' => [
        'location' => 'Kuala Lumpur, Malaysia',
        'email' => 'yaugiakkian@gmail.com',
        'phone' => '+60 12-345 6789',
        'instagram' => 'https://www.instagram.com/',
        'linkedin' => 'https://www.linkedin.com/'
    ]
];

// Seed remaining projects with mixed orientations
for ($i = 1; $i <= 10; $i++) {
    $img = ($i % 2 == 0) ? 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg' : 'https://framerusercontent.com/images/6Jms3yt4XRdWgbQCYtOCFcdaKw.jpeg';
    $data['projects'][] = [
        'id' => "project-$i",
        'title' => "Advanced Operation $i",
        'description' => "A high-performance design case study focusing on technical excellence and visual strategy.",
        'full_description' => "This project represents the $i-th iteration of our advanced design framework.",
        'image' => $img,
        'gallery' => [
            ['url' => $img, 'span' => 'sm:col-span-2 sm:row-span-2'],
            ['url' => 'https://framerusercontent.com/images/Oqx6YKytap78HOSr0zKxcs4lU.jpeg', 'span' => 'sm:col-span-1 sm:row-span-1'],
            ['url' => 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg', 'span' => 'sm:col-span-1 sm:row-span-1']
        ]
    ];
}
?>
