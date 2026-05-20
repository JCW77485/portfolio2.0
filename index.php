<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($data['name']); ?> | NEURAL_LINK_v1.0</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        orbitron: ['Orbitron', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        cyber_black: '#050505',
                        cyber_cyan: '#00f3ff',
                        cyber_magenta: '#ff00ff',
                        cyber_yellow: '#fcee0a',
                        cyber_gray: '#1a1a1a',
                    },
                    boxShadow: {
                        'neon-cyan': '0 0 10px #00f3ff, 0 0 20px #00f3ff',
                        'neon-magenta': '0 0 10px #ff00ff, 0 0 20px #ff00ff',
                    }
                }
            }
        }
    </script>
    <style>
        :root {
            --cyan: #00f3ff;
            --magenta: #ff00ff;
            --yellow: #fcee0a;
        }

        body {
            background-color: #050505;
            color: #fff;
            overflow-x: hidden;
            background-image:
                linear-gradient(rgba(0, 243, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 243, 255, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        .scanlines {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(
                to bottom,
                rgba(18, 16, 16, 0) 50%,
                rgba(0, 0, 0, 0.1) 50%
            );
            background-size: 100% 4px;
            z-index: 100;
            pointer-events: none;
        }

        .glitch-text {
            position: relative;
            text-shadow: 2px 2px var(--cyan), -2px -2px var(--magenta);
        }

        .cyber-border {
            border: 1px solid var(--cyan);
            position: relative;
            clip-path: polygon(0 0, 95% 0, 100% 15%, 100% 100%, 5% 100%, 0 85%);
            background: rgba(0, 243, 255, 0.02);
            transition: all 0.3s ease;
        }

        .cyber-border:hover {
            background: rgba(0, 243, 255, 0.08);
            box-shadow: 0 0 15px rgba(0, 243, 255, 0.3);
        }

        .reveal {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateX(0);
        }

        .btn-cyber {
            background: transparent;
            border: 1px solid var(--yellow);
            color: var(--yellow);
            padding: 1rem 2rem;
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            overflow: hidden;
            transition: 0.3s;
        }

        .btn-cyber:hover {
            background: var(--yellow);
            color: black;
            box-shadow: 0 0 20px var(--yellow);
        }

        .noise {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: url('https://grainy-gradients.vercel.app/noise.svg');
            opacity: 0.05;
            pointer-events: none;
            z-index: 99;
        }
    </style>
</head>
<body class="font-mono selection:bg-cyber_cyan selection:text-black">
    <div class="scanlines"></div>
    <div class="noise"></div>

    <main class="max-w-7xl mx-auto px-6 md:px-12 lg:px-24 py-12 lg:py-24 space-y-32 lg:space-y-48">

        <!-- Header / HUD -->
        <header class="flex justify-between items-center border-b border-cyber_cyan/30 pb-4 mb-24">
            <div class="text-cyber_cyan font-bold tracking-widest text-xs uppercase">
                SYSTEM_STATUS: <span class="text-green-500 animate-pulse">ONLINE</span>
            </div>
            <div class="text-cyber_cyan/50 text-xs font-mono">
                COORD: 35.6895° N, 139.6917° E
            </div>
        </header>

        <!-- Hero Section -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-12">
                <div class="reveal active">
                    <h2 class="text-cyber_cyan font-orbitron text-sm tracking-[0.5em] uppercase mb-4">_INITIALIZING_DATA_STREAM</h2>
                    <h1 class="text-6xl md:text-8xl font-black font-orbitron leading-none mb-8 glitch-text">
                        <?php echo htmlspecialchars($data['name']); ?>
                    </h1>
                    <div class="inline-block px-4 py-2 bg-cyber_magenta/10 border-l-4 border-cyber_magenta text-cyber_magenta font-bold text-lg md:text-xl">
                        > <?php echo htmlspecialchars($data['title']); ?>
                    </div>
                </div>

                <div class="lg:hidden reveal active">
                    <div class="cyber-border p-2">
                        <img src="<?php echo htmlspecialchars($data['profileImage']); ?>" alt="SUBJECT_01" class="w-full grayscale hover:grayscale-0 transition-all duration-500">
                    </div>
                </div>

                <p class="text-lg md:text-xl text-white/70 max-w-xl leading-relaxed">
                    Accessing bio-data... <br>
                    <span class="text-cyber_cyan"><?php echo htmlspecialchars($data['about']); ?></span>
                </p>
            </div>

            <div class="lg:col-span-5 hidden lg:block">
                <div class="reveal active" style="transition-delay: 0.2s;">
                    <div class="cyber-border p-3 group">
                        <div class="relative overflow-hidden">
                            <img src="<?php echo htmlspecialchars($data['profileImage']); ?>" alt="SUBJECT_01" class="w-full grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700">
                            <div class="absolute inset-0 bg-cyber_cyan/10 opacity-50 group-hover:opacity-0 pointer-events-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience HUD -->
        <section class="space-y-16 reveal">
            <div class="flex items-center gap-4">
                <h2 class="text-3xl font-orbitron font-bold text-cyber_cyan uppercase">_WORK_HISTORY</h2>
                <div class="h-[1px] flex-grow bg-cyber_cyan/30"></div>
            </div>

            <div class="grid grid-cols-1 gap-8">
                <?php foreach ($data['experience'] as $index => $item): ?>
                <div class="cyber-border p-8 group relative">
                    <div class="absolute top-0 right-0 p-4 text-[10px] font-bold text-cyber_cyan/20">LOG_ID: <?php echo sprintf("%03d", $index + 1); ?></div>
                    <div class="flex flex-col md:flex-row justify-between gap-4 mb-6">
                        <div>
                            <h3 class="text-2xl font-orbitron font-bold text-cyber_yellow"><?php echo htmlspecialchars($item['company']); ?></h3>
                            <p class="text-cyber_cyan font-bold italic"><?php echo htmlspecialchars($item['role']); ?></p>
                        </div>
                        <div class="text-cyber_magenta font-bold font-mono"><?php echo htmlspecialchars($item['period']); ?></div>
                    </div>
                    <p class="text-white/60 leading-relaxed whitespace-pre-line border-l border-cyber_cyan/30 pl-6">
                        <?php echo htmlspecialchars($item['description']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Skill Matrix -->
        <section class="space-y-16 reveal">
            <div class="flex items-center gap-4">
                <h2 class="text-3xl font-orbitron font-bold text-cyber_magenta uppercase">_SKILL_MATRIX</h2>
                <div class="h-[1px] flex-grow bg-cyber_magenta/30"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($data['skills'] as $skill): ?>
                <div class="p-8 border border-cyber_magenta/20 bg-cyber_magenta/5 hover:bg-cyber_magenta/10 hover:border-cyber_magenta transition-all group">
                    <div class="w-12 h-1 text-cyber_magenta bg-cyber_magenta mb-6 group-hover:w-full transition-all duration-500"></div>
                    <h3 class="text-xl font-orbitron font-bold text-white mb-4"><?php echo htmlspecialchars($skill['category']); ?></h3>
                    <p class="text-sm text-white/50 font-mono"><?php echo htmlspecialchars($skill['details']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Projects Grid -->
        <section class="space-y-16 reveal">
            <div class="flex items-center gap-4">
                <h2 class="text-3xl font-orbitron font-bold text-cyber_yellow uppercase">_OPERATIONS</h2>
                <div class="h-[1px] flex-grow bg-cyber_yellow/30"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <?php foreach ($data['projects'] as $project): ?>
                <div class="group relative">
                    <div class="cyber-border overflow-hidden">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="PROJECT_DATA" class="w-full grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110">
                    </div>
                    <div class="mt-8 space-y-4">
                        <h3 class="text-2xl font-orbitron font-bold text-cyber_cyan group-hover:text-cyber_magenta transition-colors"><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p class="text-white/60 font-mono"><?php echo htmlspecialchars($project['description']); ?></p>
                        <div class="flex items-center gap-2 text-cyber_cyan text-xs font-bold uppercase tracking-widest">
                            [VIEW_ENCRYPTED_DATA] <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m7 7 10 10"/><path d="M17 7v10H7"/></svg>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Connection / Footer -->
        <footer class="pt-24 pb-12 border-t border-cyber_cyan/30 reveal">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-24">
                <div class="lg:col-span-5 space-y-8">
                    <h2 class="text-4xl font-orbitron font-black text-white leading-tight">ESTABLISH_CONNECTION</h2>
                    <button class="btn-cyber w-full md:w-auto">
                        DOWNLOAD_CORE_RESUME.PDF
                    </button>
                </div>

                <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="space-y-4">
                        <p class="text-cyber_cyan font-bold uppercase tracking-widest text-xs">// LOCATION</p>
                        <p class="text-2xl font-orbitron"><?php echo htmlspecialchars($data['contact']['location']); ?></p>
                    </div>
                    <div class="space-y-4">
                        <p class="text-cyber_magenta font-bold uppercase tracking-widest text-xs">// NEURAL_MAIL</p>
                        <a href="mailto:<?php echo htmlspecialchars($data['contact']['email']); ?>" class="text-xl md:text-2xl font-orbitron hover:text-cyber_cyan transition-colors truncate block">
                            <?php echo htmlspecialchars($data['contact']['email']); ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center gap-8 text-[10px] font-bold text-white/30 uppercase tracking-[0.5em]">
                <p>© 2025 NEURAL_ARCHIVE // STUDIO_KISMO</p>
                <div class="flex gap-8">
                    <a href="<?php echo htmlspecialchars($data['contact']['instagram']); ?>" class="hover:text-cyber_cyan transition-colors">INSTAGRAM</a>
                    <a href="<?php echo htmlspecialchars($data['contact']['linkedin']); ?>" class="hover:text-cyber_magenta transition-colors">LINKEDIN</a>
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

        // Random glitch effect on text
        setInterval(() => {
            const glitch = document.querySelector('.glitch-text');
            glitch.style.transform = `translate(${Math.random() * 4 - 2}px, ${Math.random() * 4 - 2}px)`;
            setTimeout(() => {
                glitch.style.transform = 'translate(0,0)';
            }, 50);
        }, 3000);
    </script>
</body>
</html>
