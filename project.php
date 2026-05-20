<?php
include 'data.php';

$projectId = $_GET['id'] ?? '';
$project = null;

foreach ($data['projects'] as $p) {
    if ($p['id'] === $projectId) {
        $project = $p;
        break;
    }
}

if (!$project) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($project['title']); ?> | Portfolio 2025</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Instrument Sans', 'sans-serif'],
                    },
                    colors: {
                        brand_paper: '#F5F1E6',
                        brand_black: '#191919',
                        brand_blue: '#0057ff',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #F5F1E6;
            color: #191919;
            font-family: 'Instrument Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s cubic-bezier(0.2, 1, 0.3, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Redesigned Floating Header */
        .header-floating {
            position: fixed;
            top: 1.5rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
            width: fit-content;
            background: rgba(245, 241, 230, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 9999px;
            padding: 0.5rem 0.5rem 0.5rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        @media (max-width: 768px) {
            .header-floating {
                top: 1rem;
                gap: 1rem;
                padding: 0.4rem 0.4rem 0.4rem 1rem;
            }
        }
    </style>
</head>
<body class="selection:bg-brand_blue selection:text-white">

    <header class="header-floating">
        <a href="index.html" class="text-sm font-bold tracking-tighter uppercase whitespace-nowrap flex items-center gap-2 group">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" class="group-hover:-translate-x-1 transition-transform"><path d="m15 18-6-6 6-6"/></svg>
            BACK_HOME
        </a>
        <div class="text-[10px] md:text-xs font-bold uppercase tracking-[0.2em] opacity-40 pr-4 border-r border-black/5 hidden sm:block">
            Project // <?php echo htmlspecialchars($project['id']); ?>
        </div>
        <nav class="flex items-center gap-1">
            <a href="mailto:yaugiakkian@gmail.com" class="px-6 py-3 text-[10px] md:text-xs font-bold uppercase tracking-widest bg-brand_black text-white rounded-full hover:bg-brand_blue transition-all">Connect</a>
        </nav>
    </header>

    <main class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-12 pt-32 md:pt-48 pb-12 md:pb-24 space-y-16 md:space-y-32">

        <!-- Project Hero -->
        <section class="space-y-8 md:space-y-12">
            <div class="space-y-4 reveal active">
                <h2 class="text-brand_blue font-bold tracking-widest uppercase text-[10px] md:text-sm">CASE STUDY // 2025</h2>
                <h1 class="text-4xl md:text-8xl lg:text-[8vw] font-bold tracking-tighter leading-tight md:leading-none">
                    <?php echo htmlspecialchars($project['title']); ?>
                </h1>
            </div>

            <div class="aspect-[16/9] rounded-sm overflow-hidden bg-gray-200 shadow-sm reveal active">
                <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="Cover" class="w-full h-full object-cover">
            </div>
        </section>

        <!-- Project Description -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-12 reveal">
            <div class="lg:col-span-4 space-y-4 md:space-y-6">
                <h2 class="text-[10px] md:text-xs font-bold uppercase tracking-[0.4em] opacity-40">_The Challenge</h2>
                <div class="h-[1px] w-8 md:w-12 bg-brand_blue"></div>
            </div>
            <div class="lg:col-span-8">
                <p class="text-xl md:text-4xl font-semibold leading-snug md:leading-tight text-brand_black">
                    <?php echo htmlspecialchars($project['full_description']); ?>
                </p>
            </div>
        </section>

        <!-- Image Gallery -->
        <section class="space-y-8 md:space-y-12">
            <div class="flex items-center justify-between reveal">
                <h2 class="text-[10px] md:text-sm font-bold uppercase tracking-[0.3em] opacity-40">_Process & Artifacts</h2>
                <span class="text-[8px] md:text-xs font-bold opacity-20"><?php echo count($project['gallery']); ?> IMAGES TOTAL</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 lg:gap-12">
                <?php foreach ($project['gallery'] as $index => $img): ?>
                <div class="aspect-[3/4] md:aspect-square rounded-sm overflow-hidden bg-gray-100 reveal shadow-sm">
                    <img src="<?php echo htmlspecialchars($img); ?>" alt="Process <?php echo $index; ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-1000" loading="lazy">
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Navigation -->
        <section class="pt-12 md:pt-24 border-t border-brand_black/10 reveal flex justify-center text-center">
            <a href="index.html" class="inline-flex items-center gap-2 md:gap-4 text-xl md:text-3xl font-bold hover:text-brand_blue transition-colors group">
                Explore More Works
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" class="group-hover:translate-x-2 transition-transform"><path d="m9 18 6-6-6-6"/></svg>
            </a>
        </section>
    </main>

    <footer class="max-w-[1600px] mx-auto px-6 lg:px-12 pb-12 text-[8px] md:text-xs font-bold uppercase tracking-widest opacity-20 flex justify-between items-center">
        <p>© 2025 YAU GIAK KIAN</p>
        <p class="hidden sm:block">Built with precision</p>
    </footer>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.05,
            rootMargin: '50px'
        });

        document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
    </script>
</body>
</html>
