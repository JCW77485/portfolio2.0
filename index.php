<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
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

        .btn-blue {
            background: #0057ff;
            color: white;
            padding: 1rem 1.5rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.75rem;
        }

        .btn-blue:hover {
            background: #0044cc;
            transform: translateY(-1px);
        }

        @media (min-width: 1024px) {
            .text-huge {
                font-size: 10vw;
                line-height: 0.85;
                letter-spacing: -0.04em;
            }
            .btn-blue {
                padding: 1rem 2rem;
                font-size: 0.875rem;
            }
        }
    </style>
</head>
<body class="selection:bg-brand_blue selection:text-white">

    <header class="fixed top-0 left-0 w-full z-50 px-4 md:px-6 py-6 md:py-8 flex justify-between items-center bg-brand_paper/90 backdrop-blur-md border-b border-black/5">
        <div class="text-lg md:text-xl font-bold tracking-tighter">PORTFOLIO.25</div>
        <div class="flex gap-4 md:gap-8 text-[10px] md:text-sm font-bold uppercase tracking-widest">
            <a href="#work" class="hover:text-brand_blue transition-colors">Work</a>
            <a href="#about" class="hover:text-brand_blue transition-colors">About</a>
            <a href="#contact" class="hover:text-brand_blue transition-colors">Contact</a>
        </div>
    </header>

    <main class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-12 pt-32 md:pt-48 pb-12 md:pb-24 space-y-24 md:space-y-48">

        <!-- Hero Section -->
        <section class="space-y-8 md:space-y-12 reveal active">
            <div class="space-y-4">
                <h2 class="text-brand_blue font-bold tracking-widest uppercase text-[10px] md:text-sm">SUBJECT_01 // <?php echo htmlspecialchars($data['title']); ?></h2>
                <h1 class="text-4xl md:text-8xl lg:text-huge font-bold leading-tight md:leading-none">
                    <?php echo htmlspecialchars($data['name']); ?>
                </h1>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 pt-4 md:pt-12">
                <div class="lg:col-span-7">
                    <div class="img-container aspect-[16/9] rounded-sm shadow-sm">
                        <img src="<?php echo htmlspecialchars($data['profileImage']); ?>" alt="Cover" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="lg:col-span-5 flex flex-col justify-end space-y-6 md:space-y-8">
                    <p class="text-xl md:text-3xl font-semibold leading-snug md:leading-tight">
                        <?php echo htmlspecialchars($data['about']); ?>
                    </p>
                    <div class="pt-2 md:pt-4">
                        <a href="#contact" class="btn-blue w-full md:w-auto justify-center">
                            Connect Now <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m7 7 10 10"/><path d="M17 7v10H7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats / Info Bar -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 py-12 md:py-24 border-y border-brand_black/10 reveal">
            <div class="space-y-1 md:space-y-2">
                <p class="text-[10px] font-bold uppercase opacity-40">Status</p>
                <p class="text-lg md:text-xl font-bold italic">Available for Projects</p>
            </div>
            <div class="space-y-1 md:space-y-2">
                <p class="text-[10px] font-bold uppercase opacity-40">Location</p>
                <p class="text-lg md:text-xl font-bold"><?php echo htmlspecialchars($data['contact']['location']); ?></p>
            </div>
            <div class="space-y-1 md:space-y-2">
                <p class="text-[10px] font-bold uppercase opacity-40">Experience</p>
                <p class="text-lg md:text-xl font-bold">3+ Years Professional</p>
            </div>
            <div class="space-y-1 md:space-y-2">
                <p class="text-[10px] font-bold uppercase opacity-40">Expertise</p>
                <p class="text-lg md:text-xl font-bold"><?php echo htmlspecialchars($data['title']); ?></p>
            </div>
        </section>

        <!-- Experience -->
        <section id="about" class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 reveal">
            <div class="lg:col-span-4">
                <h2 class="text-3xl md:text-4xl font-bold lg:sticky lg:top-32">Experience <br><span class="text-brand_blue">Archives.</span></h2>
            </div>
            <div class="lg:col-span-8 space-y-16 md:space-y-24">
                <?php foreach ($data['experience'] as $item): ?>
                <div class="space-y-6 md:space-y-8 border-b border-brand_black/5 pb-12 md:pb-16 last:border-0 group">
                    <div class="flex flex-col md:flex-row justify-between gap-2 md:gap-4">
                        <h3 class="text-2xl md:text-5xl font-bold group-hover:text-brand_blue transition-colors"><?php echo htmlspecialchars($item['company']); ?></h3>
                        <span class="text-sm md:text-xl font-bold opacity-30"><?php echo htmlspecialchars($item['period']); ?></span>
                    </div>
                    <p class="text-lg md:text-2xl font-bold text-brand_blue/60"><?php echo htmlspecialchars($item['role']); ?></p>
                    <p class="text-base md:text-2xl text-brand_black/60 font-medium leading-relaxed max-w-3xl whitespace-pre-line">
                        <?php echo htmlspecialchars($item['description']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Projects - Optimized Grid -->
        <section id="work" class="space-y-12 md:space-y-24 reveal">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 md:gap-8">
                <div class="space-y-2 md:space-y-4">
                    <h2 class="text-4xl md:text-8xl font-bold tracking-tighter leading-none">Project <br>Spotlight.</h2>
                    <p class="text-sm md:text-xl font-bold opacity-40 uppercase tracking-widest">Selected Works // 2025</p>
                </div>
                <p class="text-base md:text-xl font-bold max-w-xs opacity-40 hidden md:block">A deep dive into visual communication and design strategy across various industries.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 md:gap-x-8 gap-y-12 md:gap-y-20">
                <?php foreach ($data['projects'] as $index => $project): ?>
                <a href="<?php echo htmlspecialchars($project['id']); ?>.html" class="space-y-4 md:space-y-8 group cursor-pointer block">
                    <div class="img-container aspect-[3/4] rounded-sm">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="Project" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-brand_blue/0 group-hover:bg-brand_blue/5 transition-colors duration-500"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity hidden md:flex">
                            <span class="bg-brand_blue text-white px-6 py-3 rounded-full font-bold text-sm tracking-widest">VIEW_DETAIL</span>
                        </div>
                    </div>
                    <div class="space-y-2 md:space-y-4">
                        <div class="flex items-center gap-4">
                            <span class="text-[8px] md:text-[10px] font-bold text-brand_blue tracking-[0.2em] uppercase">NO.<?php echo sprintf("%02d", $index + 1); ?></span>
                            <div class="h-[1px] flex-grow bg-brand_black/10"></div>
                        </div>
                        <h3 class="text-xl md:text-3xl font-bold group-hover:text-brand_blue transition-colors"><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p class="text-sm md:text-lg text-brand_black/50 font-medium leading-snug line-clamp-2 md:line-clamp-3"><?php echo htmlspecialchars($project['description']); ?></p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Footer -->
        <footer id="contact" class="pt-24 md:pt-48 pb-8 md:pb-12 reveal">
            <div class="bg-brand_black text-brand_paper p-8 md:p-24 rounded-sm space-y-12 md:space-y-16">
                <div class="space-y-4 md:space-y-6">
                    <h2 class="text-3xl md:text-8xl font-bold tracking-tighter leading-tight md:leading-none">Ready to start <br>the conversation?</h2>
                    <p class="text-base md:text-2xl font-medium opacity-60">I'm currently accepting new projects and collaborations.</p>
                </div>

                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8 md:gap-12">
                    <a href="mailto:<?php echo htmlspecialchars($data['contact']['email']); ?>" class="text-xl md:text-5xl font-bold hover:text-brand_blue transition-colors border-b-2 md:border-b-4 border-brand_blue pb-1 md:pb-2 break-all max-w-full">
                        <?php echo htmlspecialchars($data['contact']['email']); ?>
                    </a>

                    <div class="flex flex-row flex-wrap gap-6 md:gap-8 text-[10px] md:text-lg font-bold uppercase tracking-widest">
                        <a href="<?php echo htmlspecialchars($data['contact']['instagram']); ?>" class="hover:text-brand_blue transition-colors">Instagram</a>
                        <a href="<?php echo htmlspecialchars($data['contact']['linkedin']); ?>" class="hover:text-brand_blue transition-colors">LinkedIn</a>
                    </div>
                </div>
            </div>

            <div class="mt-12 md:mt-24 flex flex-col md:flex-row justify-between items-center gap-4 md:gap-8 text-[8px] md:text-xs font-bold uppercase tracking-widest opacity-30 text-center">
                <p>© 2025 <?php echo htmlspecialchars($data['name']); ?> // ALL RIGHTS RESERVED</p>
                <div class="flex gap-6 md:gap-12">
                    <span class="cursor-pointer hover:text-brand_blue transition-colors" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">Back to Top ↑</span>
                    <span>Built with Precision</span>
                </div>
            </div>
        </footer>
    </main>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
    </script>
</body>
</html>
