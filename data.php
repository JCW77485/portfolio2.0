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
        'profile_image' => 'img/WhatsApp Image 2026-06-04 at 10.05.42 PM.jpeg',
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
            'id' => 'bukit-cendana',
            'title' => 'Bukit Cendana',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of Bukit Cendana assets.',
            'cover_image' => 'img/Bukit Cendana/CENDANA&PENANG&PAHANG/BUKIT CENDANA.jpg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for Bukit Cendana. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/Bukit Cendana/CENDANA&PENANG&PAHANG/BUKIT CENDANA.jpg'],
                    ['url' => 'img/Bukit Cendana/CENDANA&PENANG&PAHANG/PAHANG.jpg'],
                    ['url' => 'img/Bukit Cendana/CENDANA&PENANG&PAHANG/PENANG.jpg'],
                    ['url' => 'img/Bukit Cendana/CENDANA&PENANG&PAHANG/WeChat Image_20220617121242.jpg'],
                ]
            ]
        ],
        [
            'id' => 'kallang-wave-mall-website',
            'title' => 'Kallang Wave Mall Website',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of Kallang Wave Mall Website assets.',
            'cover_image' => 'img/Kallang Wave Mall Website/Thumbnail 455px (W) X 376px(H) (2).jpg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for Kallang Wave Mall Website. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/Kallang Wave Mall Website/Banner 1784px (W) X 675px (H).jpg'],
                    ['url' => 'img/Kallang Wave Mall Website/Flyer 14.8 x 21CM.jpg'],
                    ['url' => 'img/Kallang Wave Mall Website/Mobile Banner 686px (W) X 520px (H) (2).jpg'],
                    ['url' => 'img/Kallang Wave Mall Website/Mobile Banner 686px (W) X 520px (H).jpg'],
                    ['url' => 'img/Kallang Wave Mall Website/Singapore dealer_1.jpg'],
                    ['url' => 'img/Kallang Wave Mall Website/Singapore dealer_2.jpg'],
                    ['url' => 'img/Kallang Wave Mall Website/Thumbnail 455px (W) X 376px(H) (2).jpg'],
                    ['url' => 'img/Kallang Wave Mall Website/Thumbnail 455px (W) X 376px(H).jpg'],
                    ['url' => 'img/Kallang Wave Mall Website/Thumbnail Banner 410px (W) X 296px (H) （2）.jpg'],
                    ['url' => 'img/Kallang Wave Mall Website/Thumbnail Banner 410px (W) X 296px (H).jpg'],
                ]
            ]
        ],
        [
            'id' => 'website',
            'title' => 'Website',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of Website assets.',
            'cover_image' => 'img/Website/A- Slider/COROS.png',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for Website. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/Website/A- Slider/COROS.png'],
                    ['url' => 'img/Website/A- Slider/PG01.png'],
                    ['url' => 'img/Website/A- Slider/PURELIGHT.png'],
                    ['url' => 'img/Website/A- Slider/RIVER 2 PRO.png'],
                    ['url' => 'img/Website/B- Featured Product Categories/ACCESSORIES-1.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/ACCESSORIES.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/APPAREL.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/APPAREL_1.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/APPAREL_2.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/APPAREL_3.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/FOOTWEAR.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/FOOTWEAR_N.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/OUTDOOR.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/SPORT WATCH.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/battery.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/bmai.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/nomad.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/river 3.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/run 3.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/strap.jpg'],
                    ['url' => 'img/Website/B- Featured Product Categories/turbo.jpg'],
                    ['url' => 'img/Website/C- Unique Selling Point/Best Quality.png'],
                    ['url' => 'img/Website/C- Unique Selling Point/Customer Support.png'],
                    ['url' => 'img/Website/C- Unique Selling Point/free shipping.png'],
                    ['url' => 'img/Website/D- Product Highlight/Bmai.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/Bmai_new.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/Bmai_turbo.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/Heart Rate Monitor.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/Sport Bone Conduction Headphone-2.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/Sport Bone Conduction Headphone.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/Sport watch.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/battery.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/dura.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/nomad watch.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/power station.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/river 3.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/run 3.jpg'],
                    ['url' => 'img/Website/D- Product Highlight/smart devices.jpg'],
                    ['url' => 'img/Website/E- Special Highlight/BREATHABLE WRAPPED UPPER.png'],
                    ['url' => 'img/Website/E- Special Highlight/FLOWSOLE SYSTEM.png'],
                    ['url' => 'img/Website/E- Special Highlight/FOAM4+.png'],
                    ['url' => 'img/Website/E- Special Highlight/HEMP TECHNOLOGY INSOLES.png'],
                    ['url' => 'img/Website/E- Special Highlight/Image1.jpg'],
                    ['url' => 'img/Website/E- Special Highlight/Image2.jpg'],
                    ['url' => 'img/Website/E- Special Highlight/Image3.jpg'],
                    ['url' => 'img/Website/E- Special Highlight/Image4.png'],
                    ['url' => 'img/Website/E- Special Highlight/SUPER LITE RB.png'],
                    ['url' => 'img/Website/E- Special Highlight/WIDE SHOE LAST.png'],
                    ['url' => 'img/Website/Untitled-1.png'],
                    ['url' => 'img/Website/white-clean-rough-wall.jpg'],
                ]
            ]
        ],
        [
            'id' => 'dealer-visual',
            'title' => 'Dealer Visual',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of dealer visual assets.',
            'cover_image' => 'img/dealer visual/WhatsApp Image 2026-05-27 at 1.23.28 PM (1).jpeg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for dealer visual. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/dealer visual/WhatsApp Image 2026-05-27 at 1.23.28 PM (1).jpeg'],
                    ['url' => 'img/dealer visual/WhatsApp Image 2026-05-27 at 1.23.28 PM (2).jpeg'],
                    ['url' => 'img/dealer visual/dealer-img (1).jpeg'],
                    ['url' => 'img/dealer visual/dealer-img (2).jpeg'],
                    ['url' => 'img/dealer visual/dealer-img (20).jpeg'],
                    ['url' => 'img/dealer visual/dealer-img (26).jpeg'],
                    ['url' => 'img/dealer visual/dealer-img (27).jpeg'],
                    ['url' => 'img/dealer visual/dealer-img (28).jpeg'],
                    ['url' => 'img/dealer visual/dealer-img (29).jpeg'],
                    ['url' => 'img/dealer visual/dealer-img (3).jpeg'],
                    ['url' => 'img/dealer visual/dealer-img (31).jpeg'],
                ]
            ]
        ],
        [
            'id' => 'ecomm',
            'title' => 'Ecomm',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of ecomm assets.',
            'cover_image' => 'img/ecomm/MAIN(1).jpg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for ecomm. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/ecomm/20.4 lazlive.jpg'],
                    ['url' => 'img/ecomm/3.3 banner.jpg'],
                    ['url' => 'img/ecomm/3.3-LAZ-1.jpg'],
                    ['url' => 'img/ecomm/6.6_001.jpg'],
                    ['url' => 'img/ecomm/6.6_002.jpg'],
                    ['url' => 'img/ecomm/6.6_003.jpg'],
                    ['url' => 'img/ecomm/6.6_004.jpg'],
                    ['url' => 'img/ecomm/7 days free return.jpg'],
                    ['url' => 'img/ecomm/8.8.jpg'],
                    ['url' => 'img/ecomm/APEX 2 NEW PRICE.jpg'],
                    ['url' => 'img/ecomm/APEX 2 PRO GREEN.jpg'],
                    ['url' => 'img/ecomm/APEX 2 PRO(1).jpg'],
                    ['url' => 'img/ecomm/APEX 2.jpg'],
                    ['url' => 'img/ecomm/APEX 2_Media 2.jpg'],
                    ['url' => 'img/ecomm/Apex 2 pro.jpg'],
                    ['url' => 'img/ecomm/Apr4_SellerAds_SingleBanner.jpg'],
                    ['url' => 'img/ecomm/EL 960 banner.jpg'],
                    ['url' => 'img/ecomm/FREE T SHIRT.jpg'],
                    ['url' => 'img/ecomm/Image_20230601140058.jpg'],
                    ['url' => 'img/ecomm/MAIN(1).jpg'],
                    ['url' => 'img/ecomm/MAIN-min.jpg'],
                    ['url' => 'img/ecomm/MAIN.jpg'],
                    ['url' => 'img/ecomm/PACE 2-min.jpg'],
                    ['url' => 'img/ecomm/PACE 2.jpg'],
                    ['url' => 'img/ecomm/RAMADAN.jpg'],
                    ['url' => 'img/ecomm/RAYA-2.jpg'],
                    ['url' => 'img/ecomm/RAYA-3.jpg'],
                    ['url' => 'img/ecomm/RAYA-4.jpg'],
                    ['url' => 'img/ecomm/STAND-A-CHANCE.jpg'],
                    ['url' => 'img/ecomm/Untitled-2.jpg'],
                    ['url' => 'img/ecomm/VERTIX 2(1).jpg'],
                    ['url' => 'img/ecomm/banner.jpg'],
                    ['url' => 'img/ecomm/clothes.jpg'],
                    ['url' => 'img/ecomm/lazada 2.2 banner.jpg'],
                    ['url' => 'img/ecomm/lazada 3.jpg'],
                    ['url' => 'img/ecomm/less than 2mb.jpg'],
                    ['url' => 'img/ecomm/techmania 10801x080.jpg'],
                    ['url' => 'img/ecomm/techmania biggest size.jpg'],
                    ['url' => 'img/ecomm/vertix 2.jpg'],
                    ['url' => 'img/ecomm/women day 001.jpg'],
                ]
            ]
        ],
        [
            'id' => 'launching',
            'title' => 'Launching',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of launching assets.',
            'cover_image' => 'img/launching/dealer-img (11).jpeg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for launching. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/launching/dealer-img (11).jpeg'],
                    ['url' => 'img/launching/dealer-img (12).jpeg'],
                    ['url' => 'img/launching/dealer-img (13).jpeg'],
                    ['url' => 'img/launching/dealer-img (15).jpeg'],
                    ['url' => 'img/launching/dealer-img (16).jpeg'],
                    ['url' => 'img/launching/dealer-img (17).jpeg'],
                    ['url' => 'img/launching/dealer-img (19).jpeg'],
                ]
            ]
        ],
        [
            'id' => 'pace-4-jacob',
            'title' => 'Pace 4 Jacob',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of pace 4 jacob assets.',
            'cover_image' => 'img/pace 4 jacob/Function Carousel/Artboard 0.jpg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'Pace 4 Jacob is presented with a product description focus, highlighting the campaign direction, creative concept, and launch materials.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'tabs' => [
                    ['id' => 'description', 'label' => 'Product Description', 'content_type' => 'gallery'],
                    ['id' => 'poster', 'label' => 'Product Launch Poster', 'content_type' => 'image', 'image_url' => 'img/pace 4 jacob/Function Carousel/Artboard 0.jpg']
                ],
                'gallery' => [
                    ['url' => 'img/pace 4 jacob/Function Carousel/Artboard 0.jpg'],
                    ['url' => 'img/pace 4 jacob/Function Carousel/Artboard 1.jpg'],
                    ['url' => 'img/pace 4 jacob/Function Carousel/Artboard 2.jpg'],
                    ['url' => 'img/pace 4 jacob/Function Carousel/Artboard 3.jpg'],
                    ['url' => 'img/pace 4 jacob/Function Carousel/Artboard 4.jpg'],
                    ['url' => 'img/pace 4 jacob/Function Carousel/Artboard 5.jpg'],
                    ['url' => 'img/pace 4 jacob/Function Carousel/Artboard 6.jpg'],
                    ['url' => 'img/pace 4 jacob/Price announ.jpg'],
                    ['url' => 'img/pace 4 jacob/Teaser.jpg'],
                ]
            ]
        ],
        [
            'id' => 'printing',
            'title' => 'Printing',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of printing assets.',
            'cover_image' => 'img/printing/vibrant-carpet-moss-ferns-covering-jungle-ground-lush.jpg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for printing. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/printing/Greeting card1.jpg'],
                    ['url' => 'img/printing/Greeting card2.jpg'],
                    ['url' => 'img/printing/PVC Foam Board 18(w) x 24(h).jpg'],
                    ['url' => 'img/printing/a4 stand.jpg'],
                    ['url' => 'img/printing/runliga voucher 300pcs.jpg'],
                    ['url' => 'img/printing/runliga voucher 75pcs.jpg'],
                    ['url' => 'img/printing/vibrant-carpet-moss-ferns-covering-jungle-ground-lush.jpg'],
                ]
            ]
        ],
        [
            'id' => 'product-desc',
            'title' => 'Product Desc',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of product desc assets.',
            'cover_image' => 'img/product desc/1.jpg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for product desc. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/product desc/1.jpg'],
                    ['url' => 'img/product desc/10.jpg'],
                    ['url' => 'img/product desc/11.jpg'],
                    ['url' => 'img/product desc/12.jpg'],
                    ['url' => 'img/product desc/1A.jpg'],
                    ['url' => 'img/product desc/2.jpg'],
                    ['url' => 'img/product desc/2A.jpg'],
                    ['url' => 'img/product desc/3.jpg'],
                    ['url' => 'img/product desc/3A.jpg'],
                    ['url' => 'img/product desc/4.jpg'],
                    ['url' => 'img/product desc/4A.jpg'],
                    ['url' => 'img/product desc/5.jpg'],
                    ['url' => 'img/product desc/5A.jpg'],
                    ['url' => 'img/product desc/6.jpg'],
                    ['url' => 'img/product desc/6A.jpg'],
                    ['url' => 'img/product desc/7.jpg'],
                    ['url' => 'img/product desc/7A.jpg'],
                    ['url' => 'img/product desc/8.jpg'],
                    ['url' => 'img/product desc/8A.jpg'],
                    ['url' => 'img/product desc/9(1).jpg'],
                    ['url' => 'img/product desc/9.jpg'],
                ]
            ]
        ],
        [
            'id' => 'retail-visual',
            'title' => 'Retail Visual',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of retail visual assets.',
            'cover_image' => 'img/retail visual/dealer-img (14).jpeg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for retail visual. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/retail visual/dealer-img (14).jpeg'],
                    ['url' => 'img/retail visual/dealer-img (4).jpeg'],
                    ['url' => 'img/retail visual/dealer-img (5).jpeg'],
                    ['url' => 'img/retail visual/dealer-img (6).jpeg'],
                    ['url' => 'img/retail visual/dealer-img (7).jpeg'],
                    ['url' => 'img/retail visual/retail-img (1).jpeg'],
                    ['url' => 'img/retail visual/retail-img (2).jpeg'],
                    ['url' => 'img/retail visual/retail-img (3).jpeg'],
                ]
            ]
        ],
        [
            'id' => 'shopee-main-page-design',
            'title' => 'Shopee Main Page Design',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of shopee main page design assets.',
            'cover_image' => 'img/shopee main page design/Apex 2_0.jpg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for shopee main page design. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/shopee main page design/Apex 2_0.jpg'],
                    ['url' => 'img/shopee main page design/Apex-2_1(1).jpg'],
                    ['url' => 'img/shopee main page design/Apex-2_1.jpg'],
                    ['url' => 'img/shopee main page design/Apex-2_2.jpg'],
                    ['url' => 'img/shopee main page design/Apex-2_3.jpg'],
                    ['url' => 'img/shopee main page design/Pace 2_0.jpg'],
                    ['url' => 'img/shopee main page design/Pace-2_1.jpg'],
                    ['url' => 'img/shopee main page design/Pace-2_2.jpg'],
                    ['url' => 'img/shopee main page design/Pace-2_3.jpg'],
                    ['url' => 'img/shopee main page design/Pod 2_0.jpg'],
                    ['url' => 'img/shopee main page design/Pod 2_1(1).jpg'],
                    ['url' => 'img/shopee main page design/Pod 2_1.jpg'],
                    ['url' => 'img/shopee main page design/Pod 2_2.jpg'],
                    ['url' => 'img/shopee main page design/Pod 2_3.jpg'],
                ]
            ]
        ],
        [
            'id' => 'social-media',
            'title' => 'Social Media',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of social media assets.',
            'cover_image' => 'img/social media/0 result cover.jpg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for social media. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/social media/0 result cover.jpg'],
                    ['url' => 'img/social media/1 HAZIQ.jpg'],
                    ['url' => 'img/social media/CHINESE NEW YEAR 1.jpg'],
                    ['url' => 'img/social media/Fit Malaysia Posting_01 [change date].jpg'],
                    ['url' => 'img/social media/Fit Malaysia Posting_05 [change date].jpg'],
                    ['url' => 'img/social media/HILL REPEAT x TRD.jpg'],
                    ['url' => 'img/social media/Image_20230325232228.jpg'],
                    ['url' => 'img/social media/KLSCM 960 x 960(4).jpg'],
                    ['url' => 'img/social media/Kickstarting the Run 960.jpg'],
                    ['url' => 'img/social media/Kickstarting the Run.jpg'],
                    ['url' => 'img/social media/MERDEKA 2024 coros.jpg'],
                    ['url' => 'img/social media/Roll up bunting 85 x 200CM.jpg'],
                    ['url' => 'img/social media/SCB Credit Card 2.jpg'],
                    ['url' => 'img/social media/b7d556797138f9cdf3e7b475a9d9825.jpg'],
                    ['url' => 'img/social media/bmai winner result.jpg'],
                    ['url' => 'img/social media/christmas_1.jpg'],
                    ['url' => 'img/social media/duo highway(rise to dhc) _1.jpg'],
                    ['url' => 'img/social media/image2 PHONE.jpg'],
                    ['url' => 'img/social media/ironbound bmai.jpg'],
                    ['url' => 'img/social media/ironbound coros.jpg'],
                    ['url' => 'img/social media/pace 2 berlin.jpg'],
                    ['url' => 'img/social media/pace 4 Black crystal 2.jpg'],
                    ['url' => 'img/social media/pace 4 Black crystal.jpg'],
                    ['url' => 'img/social media/platform banner.jpg'],
                    ['url' => 'img/social media/run-mudhan streak 100km.jpg'],
                    ['url' => 'img/social media/the goat KJ.jpg'],
                    ['url' => 'img/social media/we are hiring 2425-1.jpg'],
                    ['url' => 'img/social media/we are hiring 2425-2.jpg'],
                    ['url' => 'img/social media/we are hiring 2425-3.jpg'],
                    ['url' => 'img/social media/winner announcement.jpg'],
                ]
            ]
        ],
        [
            'id' => 't-shirt',
            'title' => 'T-Shirt',
            'grid_label' => 'Visual Portfolio',
            'grid_desc' => 'Collection of t-shirt assets.',
            'cover_image' => 'img/t-shirt/001_1500.0 (1).jpg',
            'detail' => [
                'tagline' => 'PROCESS_LOG // v1.0',
                'mission_title' => '_The Mission',
                'description' => 'This project showcases our work for t-shirt. It includes various design assets and marketing materials created to achieve specific brand goals.',
                'gallery_title' => '_Interactive_Gallery',
                'gallery_status' => 'STABLE_BUILD',
                'gallery' => [
                    ['url' => 'img/t-shirt/001_1500.0 (1).jpg'],
                    ['url' => 'img/t-shirt/002_11zon.jpg'],
                    ['url' => 'img/t-shirt/003_11zon.jpg'],
                    ['url' => 'img/t-shirt/back.jpg'],
                    ['url' => 'img/t-shirt/front.jpg'],
                    ['url' => 'img/t-shirt/team-coros-shirt-700x700 with model.jpg'],
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
?>
