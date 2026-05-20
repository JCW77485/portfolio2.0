<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($data['name']); ?> | Portfolio 2025</title>
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
                    },
                    animation: {
                        marquee: "marquee var(--duration) linear infinite",
                        shimmer: "shimmer 2s linear infinite",
                    },
                    keyframes: {
                        marquee: {
                            from: { transform: "translateX(0)" },
                            to: { transform: "translateX(calc(-100% - var(--gap)))" },
                        },
                        shimmer: {
                            from: { backgroundPosition: "0 0" },
                            to: { backgroundPosition: "-200% 0" },
                        }
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

        .img-container {
            position: relative;
            overflow: hidden;
            background: #e8e8e8;
        }

        .img-container img {
            transition: transform 1.2s cubic-bezier(0.2, 1, 0.3, 1);
        }

        .img-container:hover img {
            transform: scale(1.05);
        }

        /* MagicUI Marquee */
        .marquee-container {
            --gap: 2rem;
            --duration: 40s;
            display: flex;
            overflow: hidden;
            user-select: none;
            gap: var(--gap);
            -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
            mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        }

        .marquee-content {
            flex-shrink: 0;
            display: flex;
            justify-content: space-around;
            min-width: 100%;
            gap: var(--gap);
            animation: marquee var(--duration) linear infinite;
        }

        /* MagicUI Bento Card */
        .bento-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            padding: 2.5rem;
            border-radius: 1rem;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .bento-card:hover {
            box-shadow: 0 20px 40px rgba(0,0,0,0.04);
            border-color: #0057ff;
        }

        /* MagicUI Spotlight Effect for Project Cards */
        .magic-card {
            position: relative;
            background: white;
            border-radius: 1.5rem;
            border: 1px solid rgba(0,0,0,0.05);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .magic-card:hover {
            transform: translateY(-5px);
        }

        .magic-spotlight {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            pointer-events: none;
            background: radial-gradient(400px circle at var(--x) var(--y), rgba(0, 87, 255, 0.05), transparent 80%);
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .magic-card:hover .magic-spotlight {
            opacity: 1;
        }

        .header-floating {
            position: fixed;
            top: 1.5rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
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
            .header-floating { top: 1rem; gap: 1rem; padding: 0.4rem 0.4rem 0.4rem 1rem; }
        }

        @media (min-width: 1024px) {
            .text-huge { font-size: 10vw; line-height: 0.85; letter-spacing: -0.04em; }
        }
    </style>
</head>
<body class="selection:bg-brand_blue selection:text-white">

    <header class="header-floating">
        <div class="text-sm font-bold tracking-tighter uppercase whitespace-nowrap">Portfolio<span class="text-brand_blue">.25</span></div>
        <nav class="flex items-center gap-1">
            <a href="#work" class="px-4 py-2 text-[10px] md:text-xs font-bold uppercase tracking-widest hover:text-brand_blue hover:bg-black/5 rounded-full transition-all">Work</a>
            <a href="#about" class="px-4 py-2 text-[10px] md:text-xs font-bold uppercase tracking-widest hover:text-brand_blue hover:bg-black/5 rounded-full transition-all">About</a>
            <a href="#contact" class="px-6 py-3 text-[10px] md:text-xs font-bold uppercase tracking-widest bg-brand_black text-white rounded-full hover:bg-brand_blue transition-all">Contact</a>
        </nav>
    </header>

    <main class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-12 pt-32 md:pt-48 pb-12 md:pb-24 space-y-24 md:space-y-48">

        <!-- Hero -->
        <section class="space-y-8 md:space-y-12">
            <div class="space-y-4 reveal active">
                <h2 class="text-brand_blue font-bold tracking-widest uppercase text-[10px] md:text-sm">SUBJECT_01 // <?php echo htmlspecialchars($data['title']); ?></h2>
                <h1 class="text-4xl md:text-8xl lg:text-huge font-bold leading-tight md:leading-none">
                    <?php echo htmlspecialchars($data['name']); ?>
                </h1>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 pt-4 md:pt-12">
                <div class="lg:col-span-7">
                    <div class="img-container aspect-[16/9] rounded-sm shadow-sm reveal active">
                        <img src="<?php echo htmlspecialchars($data['profileImage']); ?>" alt="Cover" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="lg:col-span-5 flex flex-col justify-end space-y-6 md:space-y-8 reveal active">
                    <p class="text-xl md:text-3xl font-semibold leading-snug md:leading-tight">
                        <?php echo htmlspecialchars($data['about']); ?>
                    </p>
                    <div class="pt-2 md:pt-4">
                        <a href="#contact" class="inline-flex items-center gap-4 text-brand_blue font-bold group">
                            SCROLL_FOR_INTEL <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" class="animate-bounce"><path d="m7 13 5 5 5-5"/><path d="M12 18V6"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Marquee -->
        <section class="py-12 border-y border-black/5 reveal">
            <div class="marquee-container">
                <div class="marquee-content">
                    <?php foreach ($data['skills'] as $skill): ?>
                    <div class="flex items-center gap-4 px-8 py-4 bg-white/40 rounded-full border border-black/5">
                        <span class="text-brand_blue font-bold text-lg">•</span>
                        <span class="font-bold uppercase tracking-widest text-sm"><?php echo htmlspecialchars($skill['category']); ?></span>
                    </div>
                    <?php endforeach; ?>
                    <?php foreach ($data['skills'] as $skill): ?>
                    <div class="flex items-center gap-4 px-8 py-4 bg-white/40 rounded-full border border-black/5">
                        <span class="text-brand_blue font-bold text-lg">•</span>
                        <span class="font-bold uppercase tracking-widest text-sm"><?php echo htmlspecialchars($skill['category']); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Bento -->
        <section id="about" class="space-y-12 md:space-y-24">
            <h2 class="text-3xl md:text-6xl font-bold tracking-tighter reveal">Bio <span class="text-brand_blue">Matrix.</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bento-card md:col-span-2 lg:col-span-2 reveal">
                    <p class="text-xs font-bold uppercase opacity-30 tracking-widest">Base_Location</p>
                    <p class="text-3xl font-bold mt-4"><?php echo htmlspecialchars($data['contact']['location']); ?></p>
                </div>
                <div class="bento-card md:col-span-2 lg:col-span-4 bg-brand_black text-brand_paper reveal">
                    <p class="text-xs font-bold uppercase opacity-30 tracking-widest">Core_Discipline</p>
                    <p class="text-4xl md:text-5xl lg:text-7xl font-bold tracking-tighter mt-4"><?php echo htmlspecialchars($data['title']); ?></p>
                </div>
            </div>
        </section>

        <!-- Projects - MagicUI Grid -->
        <section id="work" class="space-y-12 md:space-y-24">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 md:gap-8 reveal">
                <div class="space-y-2 md:space-y-4">
                    <h2 class="text-4xl md:text-8xl font-bold tracking-tighter leading-none">Project <br>Spotlight.</h2>
                    <p class="text-sm md:text-xl font-bold opacity-40 uppercase tracking-widest">Neural Stream // 2025</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($data['projects'] as $index => $project): ?>
                <a href="<?php echo htmlspecialchars($project['id']); ?>.html" class="magic-card group reveal block">
                    <div class="magic-spotlight"></div>
                    <div class="img-container aspect-[3/4]">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="Project" class="w-full h-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-brand_blue/0 group-hover:bg-brand_blue/10 transition-colors duration-500"></div>
                        <div class="absolute top-6 left-6 px-4 py-2 bg-white/90 backdrop-blur-md rounded-full text-[10px] font-bold border border-black/5 uppercase tracking-widest">ID_<?php echo sprintf("%02d", $index + 1); ?></div>
                    </div>
                    <div class="p-8 space-y-4">
                        <h3 class="text-2xl font-bold group-hover:text-brand_blue transition-colors"><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p class="text-sm text-brand_black/50 font-medium leading-snug line-clamp-2"><?php echo htmlspecialchars($project['description']); ?></p>
                        <div class="pt-4 flex items-center gap-2 text-[10px] font-bold text-brand_blue uppercase tracking-[0.2em]">
                            Open_Case_Study <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m9 18 6-6-6-6"/></svg>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Footer -->
        <footer id="contact" class="pt-24 md:pt-48 pb-8 md:pb-12 reveal">
            <div class="bg-brand_black text-brand_paper p-8 md:p-24 rounded-[2rem] space-y-12 md:space-y-16 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-brand_blue/20 blur-[120px] rounded-full"></div>
                <div class="space-y-4 md:space-y-6 relative z-10">
                    <h2 class="text-3xl md:text-8xl font-bold tracking-tighter leading-tight md:leading-none uppercase italic">Let's Connect.</h2>
                    <p class="text-base md:text-2xl font-medium opacity-60">Neural protocols active for new collaborations.</p>
                </div>
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8 md:gap-12 relative z-10">
                    <a href="mailto:<?php echo htmlspecialchars($data['contact']['email']); ?>" class="text-xl md:text-5xl font-bold hover:text-brand_blue transition-colors border-b-2 md:border-b-4 border-brand_blue pb-1 md:pb-2 break-all">
                        <?php echo htmlspecialchars($data['contact']['email']); ?>
                    </a>
                </div>
            </div>
            <div class="mt-12 md:mt-24 flex justify-between items-center text-[10px] font-bold uppercase tracking-widest opacity-30">
                <p>© 2025 <?php echo htmlspecialchars($data['name']); ?></p>
                <p>Designed with Magic</p>
            </div>
        </footer>
    </main>

    <script>
        // Spotlight Effect Logic
        document.querySelectorAll('.magic-card').forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--x', `${x}px`);
                card.style.setProperty('--y', `${y}px`);
            });
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.05, rootMargin: '50px' });

        document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
    </script>
</body>
</html>
