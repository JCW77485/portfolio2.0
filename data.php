<?php
/**
 * PORTFOLIO GLOBAL CONFIGURATION
 * Centralize all your text and images here.
 */

$config = [
    // --- SITE METADATA ---
    'site' => [
        'name' => 'YAU GIAK KIAN',
        'title' => 'Senior Graphic Designer',
        'footer_copyright' => '© 2025 YAU GIAK KIAN // ALL RIGHTS RESERVED',
        'built_with' => 'Designed with Magic & Precision',
    ],

    // --- NAVIGATION LABELS ---
    'nav' => [
        'home_label' => 'Portfolio.25',
        'work' => 'Work',
        'about' => 'About',
        'contact' => 'Contact',
        'back_to_home' => 'BACK_HOME',
    ],

    // --- HERO SECTION ---
    'hero' => [
        'prefix' => 'SUBJECT_01 // Senior Graphic Designer',
        'name' => 'YAU GIAK KIAN',
        'bio_short' => 'Creative Graphic Designer with over 3 years of experience in retail branding and digital content. Based in Kuala Lumpur, Malaysia.',
        'profile_image' => 'https://framerusercontent.com/images/6Jms3yt4XRdWgbQCYtOCFcdaKw.jpeg?width=1877&height=2400',
        'cta_label' => 'SCROLL_FOR_INTEL',
    ],

    // --- BIO MATRIX SECTION ---
    'bio_matrix' => [
        'title' => 'Bio Matrix.',
        'location_label' => 'Base_Location',
        'location_value' => 'Kuala Lumpur, Malaysia',
        'discipline_label' => 'Core_Discipline',
        'discipline_value' => 'Senior Graphic Designer',
        'discipline_desc' => 'Transforming complex business objectives into high-impact visual narratives since 2022.',
        'experience_label' => 'Experience',
        'education_label' => 'Education',
    ],

    // --- MARQUEE SKILLS ---
    'skills' => [
        'Branding & Identity',
        'UI/UX Design',
        'Project Management',
        'Typography',
        'Retail Branding',
        'Digital Content',
        'Exhibition Design'
    ],

    // --- PROFESSIONAL EXPERIENCE ---
    'experience' => [
        [
            'company' => 'Pangu Sdn Bhd',
            'period' => 'Jan 2022 – Present',
            'role' => 'Senior Graphic Designer',
            'description' => "Authorized Exclusive Distributor – COROS & BMAI\n• Manage all design assets and website updates.\n• Create high-quality graphics and engaging content.\n• Design POP displays and marketing materials."
        ],
        [
            'company' => 'Bitlink System',
            'period' => '2019 – 2021',
            'role' => 'Administrative Assistant',
            'description' => "• Managed daily administrative tasks and documentation.\n• Handled accurate data entry and record management."
        ]
    ],

    // --- EDUCATION ---
    'education' => [
        [
            'degree' => 'Bachelor of Science (Hons) Multimedia Computing',
            'institution' => 'YPC International College',
            'period' => '2020-2022'
        ],
        [
            'degree' => 'Diploma in E-Business Technology',
            'institution' => 'YPC International College',
            'period' => '2017-2019'
        ]
    ],

    // --- PROJECTS (The central hub for all project info) ---
    'projects' => [
        [
            'id' => 'acco-campaign',
            'title' => 'Acco Campaign',
            'grid_label' => 'Neural Stream',
            'grid_desc' => 'Revamped Acco’s brand with a bold, engaging campaign for global impact.',
            'cover_image' => 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg?width=2400&height=1600',

            // Detail Page Info
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => "This campaign was a complete overhaul of Acco's visual presence. We focused on high-contrast colors and bold typography to create a sense of urgency and modernity.",
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'ORIENTATION_AGNOSTIC_v1.0',
                'gallery' => [
                    ['url' => 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg', 'span' => 'sm:col-span-2 sm:row-span-2'],
                    ['url' => 'https://framerusercontent.com/images/6Jms3yt4XRdWgbQCYtOCFcdaKw.jpeg', 'span' => 'sm:col-span-1 sm:row-span-2'],
                    ['url' => 'https://framerusercontent.com/images/Oqx6YKytap78HOSr0zKxcs4lU.jpeg', 'span' => 'sm:col-span-1 sm:row-span-1'],
                    ['url' => 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg', 'span' => 'sm:col-span-2 sm:row-span-1'],
                ]
            ]
        ],
        [
            'id' => 'luna-direction',
            'title' => 'Luna Direction',
            'grid_label' => 'Neural Stream',
            'grid_desc' => 'Crafted Luna’s creative direction to elevate brand identity.',
            'cover_image' => 'https://framerusercontent.com/images/Oqx6YKytap78HOSr0zKxcs4lU.jpeg?width=2400&height=2400',

            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => "Luna Direction was about finding the 'soul' of the brand. We moved away from generic aesthetics toward a more artisanal, grounded visual language.",
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'VISUAL_STUDY_v2.4',
                'gallery' => [
                    ['url' => 'https://framerusercontent.com/images/Oqx6YKytap78HOSr0zKxcs4lU.jpeg', 'span' => 'sm:col-span-2 sm:row-span-2'],
                    ['url' => 'https://framerusercontent.com/images/6Jms3yt4XRdWgbQCYtOCFcdaKw.jpeg', 'span' => 'sm:col-span-1 sm:row-span-2'],
                    ['url' => 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg', 'span' => 'sm:col-span-1 sm:row-span-1'],
                ]
            ]
        ]
    ],

    // --- CONTACT & FOOTER ---
    'contact' => [
        'title' => "Let's Connect.",
        'subtitle' => 'Neural protocols active for new collaborations.',
        'email' => 'yaugiakkian@gmail.com',
        'social' => [
            ['name' => 'Instagram', 'url' => 'https://www.instagram.com/'],
            ['name' => 'LinkedIn', 'url' => 'https://www.linkedin.com/'],
        ]
    ]
];

// Seed 10 more projects for high-volume layout testing
for ($i = 1; $i <= 10; $i++) {
    $img = ($i % 2 == 0) ? 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg' : 'https://framerusercontent.com/images/Oqx6YKytap78HOSr0zKxcs4lU.jpeg';
    $config['projects'][] = [
        'id' => "project-$i",
        'title' => "Advanced Operation $i",
        'grid_label' => 'Neural Stream',
        'grid_desc' => "Technical excellence iteration NO.$i.",
        'cover_image' => $img,
        'detail' => [
            'tagline' => 'CASE_STUDY // SEED_DATA',
            'mission_title' => '_The Challenge',
            'description' => "This is a seeded project entry to demonstrate the high-volume grid layout and detail page structure.",
            'gallery_title' => '_Asset_Repository',
            'gallery_status' => 'STABLE_BUILD',
            'gallery' => [
                ['url' => $img, 'span' => 'sm:col-span-2 sm:row-span-2'],
                ['url' => 'https://framerusercontent.com/images/Oqx6YKytap78HOSr0zKxcs4lU.jpeg', 'span' => 'sm:col-span-1 sm:row-span-1'],
                ['url' => 'https://framerusercontent.com/images/KOBK8KKe96vsUV9PlHUkG6k8.jpeg', 'span' => 'sm:col-span-1 sm:row-span-1'],
            ]
        ]
    ];
}
?>
