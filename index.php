<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['name']; ?> | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['DM Sans', 'sans-serif'],
                    },
                    colors: {
                        muted: '#666',
                        accent: '#f5f5f5',
                    }
                }
            }
        }
    </script>
    <style>
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-white text-[#111] font-sans selection:bg-black selection:text-white">
    <main class="max-w-7xl mx-auto px-6 md:px-12 lg:px-24 py-12 lg:py-24 space-y-32 lg:space-y-48 overflow-x-hidden">

        <!-- Hero Section -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 items-end">
            <div class="lg:col-span-7 space-y-8">
                <div class="reveal active" style="transition-delay: 0.1s;">
                    <h1 class="text-6xl md:text-8xl lg:text-[10rem] font-bold tracking-tighter leading-[0.85] mb-8">
                        <?php echo htmlspecialchars($data['name']); ?>
                    </h1>
                    <p class="text-xl md:text-2xl text-muted font-medium max-w-md">
                        <?php echo htmlspecialchars($data['title']); ?>
                    </p>
                </div>

                <div class="aspect-[4/5] relative overflow-hidden rounded-2xl lg:hidden reveal active" style="transition-delay: 0.2s;">
                    <img
                        src="<?php echo htmlspecialchars($data['profileImage']); ?>"
                        alt="<?php echo htmlspecialchars($data['name']); ?>"
                        class="w-full h-full object-cover"
                    >
                </div>
            </div>

            <div class="lg:col-span-5 hidden lg:block">
                <div class="aspect-[4/5] relative overflow-hidden rounded-[2.5rem] reveal active" style="transition-delay: 0.3s;">
                    <img
                        src="<?php echo htmlspecialchars($data['profileImage']); ?>"
                        alt="<?php echo htmlspecialchars($data['name']); ?>"
                        class="w-full h-full object-cover"
                    >
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-24 reveal">
            <div class="lg:col-span-4">
                <h2 class="text-2xl font-bold flex items-center gap-2">
                    about
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted"><path d="m7 7 10 10"/><path d="M17 7v10H7"/></svg>
                </h2>
            </div>
            <div class="lg:col-span-8">
                <p class="text-3xl md:text-4xl lg:text-5xl font-medium leading-[1.1] tracking-tight">
                    <?php echo htmlspecialchars($data['about']); ?>
                </p>
            </div>
        </section>

        <!-- Experience Section -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-24 reveal">
            <div class="lg:col-span-4">
                <h2 class="text-2xl font-bold flex items-center gap-2">
                    experience
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted"><path d="m7 7 10 10"/><path d="M17 7v10H7"/></svg>
                </h2>
            </div>
            <div class="lg:col-span-8 space-y-16">
                <?php foreach ($data['experience'] as $item): ?>
                <div class="group space-y-6">
                    <div class="flex flex-col md:flex-row md:items-baseline justify-between gap-4">
                        <h3 class="text-3xl font-bold group-hover:translate-x-2 transition-transform duration-300"><?php echo htmlspecialchars($item['company']); ?></h3>
                        <span class="text-muted font-medium text-lg px-4 py-1 bg-accent rounded-full w-fit"><?php echo htmlspecialchars($item['period']); ?></span>
                    </div>
                    <p class="text-2xl font-semibold text-muted"><?php echo htmlspecialchars($item['role']); ?></p>
                    <p class="text-xl text-muted/80 leading-relaxed whitespace-pre-line max-w-3xl">
                        <?php echo htmlspecialchars($item['description']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Education & Skills -->
        <div class="space-y-32">
            <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-24 reveal">
                <div class="lg:col-span-4">
                    <h2 class="text-2xl font-bold flex items-center gap-2">
                        education
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted"><path d="m7 7 10 10"/><path d="M17 7v10H7"/></svg>
                    </h2>
                </div>
                <div class="lg:col-span-8 space-y-12">
                    <?php foreach ($data['education'] as $item): ?>
                    <div class="space-y-3">
                        <div class="flex flex-col md:flex-row md:items-baseline justify-between gap-4">
                            <h3 class="text-2xl font-bold"><?php echo htmlspecialchars($item['degree']); ?></h3>
                            <span class="text-muted font-medium whitespace-nowrap"><?php echo htmlspecialchars($item['period']); ?></span>
                        </div>
                        <p class="text-xl text-muted"><?php echo htmlspecialchars($item['institution']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-24 reveal">
                <div class="lg:col-span-4">
                    <h2 class="text-2xl font-bold flex items-center gap-2">
                        skills
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted"><path d="m7 7 10 10"/><path d="M17 7v10H7"/></svg>
                    </h2>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php foreach ($data['skills'] as $skill): ?>
                    <div class="p-10 bg-accent rounded-[2rem] space-y-4 hover:bg-black hover:text-white transition-all duration-500 group cursor-default">
                        <h3 class="text-2xl font-bold"><?php echo htmlspecialchars($skill['category']); ?></h3>
                        <p class="text-lg text-muted group-hover:text-white/80 transition-colors duration-500 leading-relaxed"><?php echo htmlspecialchars($skill['details']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>

        <!-- Projects Section -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-24 reveal">
            <div class="lg:col-span-4">
                <h2 class="text-2xl font-bold flex items-center gap-2">
                    featured projects
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted"><path d="m7 7 10 10"/><path d="M17 7v10H7"/></svg>
                </h2>
            </div>
            <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-24">
                <?php foreach ($data['projects'] as $project): ?>
                <div class="space-y-8 group cursor-pointer hover:-translate-y-4 transition-transform duration-500">
                    <div class="aspect-square relative overflow-hidden rounded-[2.5rem] bg-accent">
                        <img
                            src="<?php echo htmlspecialchars($project['image']); ?>"
                            alt="<?php echo htmlspecialchars($project['title']); ?>"
                            class="w-full h-full object-cover transition-transform duration-[1.5s] group-hover:scale-110"
                        >
                    </div>
                    <div class="space-y-4 px-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-3xl font-bold"><?php echo htmlspecialchars($project['title']); ?></h3>
                            <div class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center group-hover:bg-black group-hover:text-white transition-colors duration-300">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 7 10 10"/><path d="M17 7v10H7"/></svg>
                            </div>
                        </div>
                        <p class="text-xl text-muted leading-relaxed"><?php echo htmlspecialchars($project['description']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Footer -->
        <footer class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 pt-24 pb-12 border-t border-gray-100 reveal">
            <div class="lg:col-span-4 space-y-8">
                <button class="w-full md:w-auto px-10 py-5 bg-black text-white rounded-full font-bold text-xl hover:bg-black/90 active:scale-95 transition-all flex items-center justify-center gap-3">
                    Download PDF Resume <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 7 10 10"/><path d="M17 7v10H7"/></svg>
                </button>
            </div>

            <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8">
                <div class="space-y-6">
                    <h4 class="text-sm font-bold uppercase tracking-[0.2em] text-muted">location</h4>
                    <div class="flex items-center gap-3 font-bold text-2xl tracking-tight">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <?php echo htmlspecialchars($data['contact']['location']); ?>
                    </div>
                </div>

                <div class="space-y-6 md:col-span-2">
                    <h4 class="text-sm font-bold uppercase tracking-[0.2em] text-muted">Contact details</h4>
                    <div class="space-y-4">
                        <a href="mailto:<?php echo htmlspecialchars($data['contact']['email']); ?>" class="block text-2xl md:text-4xl font-bold hover:text-muted transition-colors break-words">
                            <?php echo htmlspecialchars($data['contact']['email']); ?>
                        </a>
                        <a href="tel:<?php echo htmlspecialchars($data['contact']['phone']); ?>" class="block text-2xl md:text-4xl font-bold hover:text-muted transition-colors">
                            <?php echo htmlspecialchars($data['contact']['phone']); ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-12 flex flex-col md:flex-row justify-between items-center gap-8 pt-24 text-muted font-medium text-lg">
                <p>© 2025 studio kismo</p>
                <div class="flex gap-12">
                    <a href="<?php echo htmlspecialchars($data['contact']['instagram']); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-black transition-colors flex items-center gap-2">
                        Instagram <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    </a>
                    <a href="<?php echo htmlspecialchars($data['contact']['linkedin']); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-black transition-colors flex items-center gap-2">
                        LinkedIn <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    </a>
                </div>
            </div>
        </footer>
    </main>

    <script>
        const observerOptions = {
            root: null,
            rootMargin: '-100px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
    </script>
</body>
</html>
