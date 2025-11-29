<?php include 'include/header.php'; ?>
<?php
// Slider data array
$slides = [
    [
        'id' => 1,
        'image' => 'assets/images/slider/003.jpeg',
        'alt' => 'Diamond Wire Saw Manufacturing',
        'title' => 'Where quality',
        'subtitle' => 'meets precision for',
        'highlight' => 'stone excellence.',
        'description' => 'Since 2015, delivering high-performance diamond tools engineered for unmatched durability and accuracy.',
        'cta_text' => 'EXPLORE PRODUCTS',
    ],
    [
        'id' => 2,
        'image' => 'assets/images/slider/02.jpg',
        'alt' => 'Advanced Stone Cutting Solutions',
        'title' => 'Engineering tools',
        'subtitle' => 'that redefine',
        'highlight' => 'stone processing.',
        'description' => 'From quarrying to profiling — innovative wire saw solutions built for maximum output and efficiency.',
        'cta_text' => 'DISCOVER MORE',
    ],
    [
        'id' => 2,
        'image' => 'assets/images/slider/01.jpg',
        'alt' => 'Precision Diamond Tools',
        'title' => 'Crafting excellence',
        'subtitle' => 'in every cut',
        'highlight' => 'since 2015.',
        'description' => 'Transforming stone processing with cutting-edge diamond tools engineered for precision, durability, and unmatched performance.',
        'cta_text' => 'VIEW PRODUCTS',
    ]

];
?>

<script>
    function sliderData() {
        return {
            currentSlide: 0,
            slides: <?php echo json_encode($slides, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>,
            autoplay: null,
            init() {
                this.startAutoplay();
            },
            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                this.resetAutoplay();
            },
            prevSlide() {
                this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                this.resetAutoplay();
            },
            goToSlide(index) {
                this.currentSlide = index;
                this.resetAutoplay();
            },
            startAutoplay() {
                this.autoplay = setInterval(() => {
                    this.nextSlide();
                }, 5000);
            },
            resetAutoplay() {
                clearInterval(this.autoplay);
                this.startAutoplay();
            }
        }
    }
</script>

<style>
    [x-cloak] {
        display: none !important;
    }

    .progress-bar {
        animation: progressBar 5s linear;
    }

    @keyframes progressBar {
        from {
            width: 0%;
        }

        to {
            width: 100%;
        }
    }
</style>

<!-- Hero Slider Section -->
<section
    class="relative h-[85vh] w-full overflow-hidden bg-black"
    x-data="sliderData()"
    x-init="init()">
    <!-- Background Slides -->
    <div class="absolute inset-0">
        <?php foreach ($slides as $index => $slide): ?>
            <div
                class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
                x-show="currentSlide === <?php echo $index; ?>"
                x-transition:enter="transition ease-out duration-1000"
                x-transition:enter-start="opacity-0 scale-110"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-700"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                style="<?php echo $index === 0 ? '' : 'display: none;'; ?>">
                <img
                    src="<?php echo $slide['image']; ?>"
                    alt="<?php echo $slide['alt']; ?>"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Main Content Container -->
    <div class="relative z-10 min-h-screen flex items-center">
        <div class="container mx-auto px-6 lg:px-16 py-20">
            <div class="max-w-7xl">
                <!-- Animated Content -->
                <?php foreach ($slides as $index => $slide): ?>
                    <div
                        x-show="currentSlide === <?php echo $index; ?>"
                        x-transition:enter="transition ease-out duration-700 delay-300"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        style="<?php echo $index === 0 ? '' : 'display: none;'; ?>">
                        <!-- Subtitle Label -->
                        <div class="mb-6 inline-block">
                            <div class="flex items-center space-x-3 text-primary">
                                <div class="w-12 h-px bg-primary"></div>
                                <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Innovation & Excellence</span>
                            </div>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-5xl md:text-7xl max-w-3xl font-light leading-tight mb-6 font-appcrave">
                            <span class="text-white"><?php echo $slide['title']; ?></span>
                            <span class="text-white/90"><?php echo $slide['subtitle']; ?></span>
                            <span class="text-primary font-medium">
                                <?php echo $slide['highlight']; ?>
                            </span>
                        </h1>

                        <!-- Description -->
                        <p class="text-lg md:text-xl text-white/70 mb-10 max-w-2xl font-light font-tagline">
                            <?php echo $slide['description']; ?>
                        </p>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Next Slide Thumbnail Preview -->
    <div class="absolute bottom-8 right-8 z-20 hidden lg:block">
        <button
            @click="nextSlide()"
            class="relative w-80 h-48 overflow-hidden group cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_60px_rgba(0,0,0,0.5)]">

            <!-- Thumbnail Image -->
            <img
                :src="slides[(currentSlide + 1) % slides.length].image"
                :alt="slides[(currentSlide + 1) % slides.length].alt"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-black/50 group-hover:opacity-100 transition-opacity duration-300"></div>

            <!-- Content -->
            <div class="absolute inset-0 p-6 flex flex-col justify-between">
                <span class="text-xs tracking-[0.3em] text-white/50 font-medium font-tagline">NEXT SLIDE</span>

                <div>
                    <p class="text-white/70 text-sm mb-3 font-tagline" x-text="slides[(currentSlide + 1) % slides.length].title"></p>

                    <!-- Progress Bar -->
                    <div class="w-full h-px bg-white/10 overflow-hidden">
                        <div class="h-full bg-primary progress-bar" :key="currentSlide"></div>
                    </div>
                </div>
            </div>

            <!-- Arrow Icon -->
            <div class="absolute top-4 right-4 w-10 h-10 border border-white/30 flex items-center justify-center group-hover:bg-white/10 group-hover:border-white/60 transition-all duration-300">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </div>
        </button>
    </div>






    <!-- Slide Counter -->
    <div class="absolute top-32 right-8 z-20 hidden lg:block">
        <div class="text-right">
            <div class="text-5xl font-light text-white/30 font-appcrave">
                <span class="text-white" x-text="(currentSlide + 1).toString().padStart(2, '0')"></span>
                <span class="text-white/20"> / </span>
                <span x-text="slides.length.toString().padStart(2, '0')"></span>
            </div>
        </div>
    </div>
</section>

<!-- Stats Grid -->
<section class="w-full bg-white py-8 shadow-lg">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 divide-x divide-primary items-center text-center">
            <div class="py-0">
                <div class="text-5xl font-black text-primary mb-2 font-appcrave">10</div>
                <p class="text-black text-lg font-tagline">Years of Experience</p>
            </div>
            <div class="py-0">
                <div class="text-5xl font-black text-primary mb-2 font-appcrave">2</div>
                <p class="text-black text-lg font-tagline">Manufacturing Units</p>
            </div>
            <div class="py-0">
                <div class="text-5xl font-black text-primary mb-2 font-appcrave">6+</div>
                <p class="text-black text-lg font-tagline">Product Categories</p>
            </div>
            <div class="py-0">
                <div class="text-5xl font-black text-primary mb-2 font-appcrave">100%</div>
                <p class="text-black text-lg  font-tagline">Quality Assured</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="pt-12 bg-white/90">
    <div class="container mx-auto px-6 lg:px-16">
        <!-- Section Header -->
        <div class="mb-16 text-center">
            <div class="inline-block mb-1">
                <div class="flex items-center space-x-3 text-primary">
                    <div class="w-12 h-px bg-primary"></div>
                    <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">About Us</span>
                    <div class="w-12 h-px bg-primary"></div>
                </div>
            </div>
            <h2 class="text-5xl md:text-6xl font-light text-dark mb-6 font-appcrave">
                Quality Meets <span class="text-primary font-medium">Excellence</span>
            </h2>
            <p class="text-lg text-dark max-w-3xl mx-auto font-tagline">
                Since 2015, CHARBHUJA DIAMOND TOOLS has been delivering high-performance diamond tools engineered for unmatched durability and accuracy in stone processing.
            </p>
            <p class="text-dark mb-6 font-tagline">
                At CHARBHUJA DIAMOND TOOLS, we combine decades of hands‑on experience with cutting‑edge manufacturing techniques to deliver diamond tools that stand up to the most demanding stone processing applications.
            </p>
            <p class="text-dark font-tagline">
                Our focus is on reliability, precision and customer success — from bespoke wire configurations to comprehensive technical support — ensuring your projects run smoother, faster and with predictable results.
            </p>

            <p class="text-dark mb-8 font-tagline">
                Discover the CHARBHUJA difference: where quality meets excellence for stone processing solutions that perform
            </p>

        </div>

        <!-- Left: Image + Badge -->
        <div class="relative  overflow-hidden shadow-lg">
            <img src="assets/images/slider/WhatsApp Image 2025-11-28 at 20.12.33.jpeg" alt="Factory and team" class="w-full h-[500px] object-cover">

        </div>
    </div>
</section>

<!-- Product Section (Carousel with infinite scroll) -->
<section id="products" class="py-16 bg-white">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="mb-16 text-center">
            <div class="inline-block mb-4">
                <div class="flex items-center space-x-3 text-primary">
                    <div class="w-12 h-px bg-primary"></div>
                    <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Products</span>
                    <div class="w-12 h-px bg-primary"></div>
                </div>
            </div>
            <h2 class="text-5xl md:text-6xl font-light text-slate-800 mb-6 font-appcrave">
                Explore Premium <span class="text-primary font-medium">Products</span>
            </h2>
            <p class="text-lg text-slate-600 mx-auto font-tagline">
                Click any tile to view product details and discover reliable diamond tools engineered for performance and durability.
            </p>
        </div>

        <?php
        // Product tiles array
        $products = [
            ['title' => 'Quarrying Wire Saw', 'image' => 'assets/images/product/Quarrying Wire Saw.jpg', 'link' => '/products/quarrying-wire-saw.php'],
            ['title' => 'Diamond Wire Saw',  'image' => 'assets/images/product/Diamond Wire Saw.jpg',  'link' => '/products/diamond-wire-saw.php'],
            ['title' => 'Mono (Stationary) Wire', 'image' => 'assets/images/product/Mono (Stationary) Wire.jpg', 'link' => '/products/mono-wire.php'],
            ['title' => 'Squaring Wire Saw', 'image' => 'assets/images/product/Squaring Wire Saw.jpg', 'link' => '/products/squaring-wire-saw.php'],
            ['title' => 'Profiling Wiresaw', 'image' => 'assets/images/product/Profiling Wiresaw.jpg', 'link' => '/products/profiling-wiresaw.php'],
            ['title' => 'Diamond Wiresaw Beads', 'image' => 'assets/images/product/Diamond Wiresaw Beads.jpg', 'link' => '/products/diamond-beads.php'],
        ];
        ?>

        <!-- Carousel -->
        <div class="relative mt-8">
            <!-- Controls -->
            <button id="prodPrev" aria-label="Previous product" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-20 p-2 rounded bg-white/90 shadow hover:bg-white">
                <svg class="w-5 h-5 text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="prodNext" aria-label="Next product" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-20 p-2 rounded bg-white/90 shadow hover:bg-white">
                <svg class="w-5 h-5 text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Viewport -->
            <div class="overflow-hidden">
                <div id="productTrack" class="flex items-stretch transition-transform duration-500 will-change-transform">
                    <!-- Slides (rendered once, will be duplicated by JS for infinite loop) -->
                    <?php foreach ($products as $product): ?>
                        <a
                            href="<?php echo $product['link']; ?>"
                            class="slide block shrink-0 w-full md:w-1/3 lg:w-1/4 px-3"
                            aria-label="<?php echo htmlspecialchars($product['title'], ENT_QUOTES); ?> - view product">
                            <div class="group block overflow-hidden  shadow-sm hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 bg-white">
                                <div class="w-full h-64 md:h-72 lg:h-80 overflow-hidden">
                                    <img
                                        src="<?php echo $product['image']; ?>"
                                        alt="<?php echo htmlspecialchars($product['title'], ENT_QUOTES); ?>"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="p-4 bg-white backdrop-blur-sm">
                                    <h3 class="text-lg font-medium mb-2 font-appcrave text-black font-semibold">
                                        <?php echo htmlspecialchars($product['title'], ENT_QUOTES); ?>
                                    </h3>
                                    <div class="mt-2">
                                        <span class="inline-flex items-center text-primary font-medium font-tagline">
                                            View Details
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Dots -->
            <div id="prodDots" class="flex items-center justify-center gap-2 mt-6"></div>
        </div>
    </div>

    <style>
        /* Slide widths are controlled by the per-slide classes (w-full, md:w-1/2, lg:w-1/3)
           The track uses transform to slide the 'slide' nodes. The clones are inserted by JS. */
        #productTrack .slide {
            box-sizing: border-box;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }
    </style>

    <script>
        (function() {
            const track = document.getElementById('productTrack');
            const slides = Array.from(track.querySelectorAll('.slide'));
            if (!slides.length) return;

            const prevBtn = document.getElementById('prodPrev');
            const nextBtn = document.getElementById('prodNext');
            const dotsContainer = document.getElementById('prodDots');

            let autoplayInterval = 5000;
            let autoplayTimer = null;

            // Duplicate all slides to both ends for the infinite effect
            const originalCount = slides.length;
            // Clone nodes
            const headClones = slides.map(s => s.cloneNode(true));
            const tailClones = slides.map(s => s.cloneNode(true));

            // Append tail clones (end)
            tailClones.forEach(clone => track.appendChild(clone));
            // Prepend head clones (start)
            headClones.reverse().forEach(clone => track.insertBefore(clone, track.firstChild));

            // Recompute slides list after cloning
            let allSlides = Array.from(track.querySelectorAll('.slide'));
            // We'll place track so that the 1st visible slide is the first original - initialIndex equals originalCount
            let currentIndex = originalCount;

            // Helpers
            function slideWidth() {
                // Width of one slide's outer width (includes paddings)
                const s = allSlides[0];
                return s.getBoundingClientRect().width;
            }

            function setTrackPosition(instant = false) {
                const translateX = -currentIndex * slideWidth();
                if (instant) {
                    track.style.transition = 'none';
                    track.style.transform = `translateX(${translateX}px)`;
                    // force reflow then restore transition (next frame)
                    requestAnimationFrame(() => {
                        track.style.transition = '';
                    });
                } else {
                    track.style.transform = `translateX(${translateX}px)`;
                }
            }

            function goToIndex(idx) {
                currentIndex = idx;
                setTrackPosition();
                updateDots();
            }

            function next() {
                currentIndex++;
                setTrackPosition();
                updateDots();
                resetAutoplay();
            }

            function prev() {
                currentIndex--;
                setTrackPosition();
                updateDots();
                resetAutoplay();
            }

            // After transition ends, adjust index if we are in the clones region
            track.addEventListener('transitionend', () => {
                if (currentIndex >= originalCount * 2) {
                    currentIndex = currentIndex - originalCount;
                    setTrackPosition(true);
                } else if (currentIndex < originalCount) {
                    currentIndex = currentIndex + originalCount;
                    setTrackPosition(true);
                }
            });

            // Responsive: recompute positions
            let resizeObserver = new ResizeObserver(() => {
                // When width changes recompute
                setTrackPosition(true);
            });
            resizeObserver.observe(track);

            // Dots (one dot per original slide)
            function initDots() {
                dotsContainer.innerHTML = '';
                for (let i = 0; i < originalCount; i++) {
                    const btn = document.createElement('button');
                    btn.className = 'w-2 h-2 rounded-full bg-white/40';
                    btn.setAttribute('aria-label', `Go to product ${i+1}`);
                    btn.dataset.idx = i;
                    btn.addEventListener('click', () => {
                        // Map dot i to track index (original block start)
                        currentIndex = originalCount + i;
                        setTrackPosition();
                        resetAutoplay();
                        updateDots();
                    });
                    dotsContainer.appendChild(btn);
                }
                updateDots();
            }

            function updateDots() {
                const dots = Array.from(dotsContainer.children);
                if (!dots.length) return;
                // Determine active slide within original range
                // Map currentIndex to original slide index: (currentIndex - originalCount) mod originalCount
                let idx = (currentIndex - originalCount) % originalCount;
                if (idx < 0) idx += originalCount;
                dots.forEach((d, i) => {
                    if (i === idx) d.classList.add('bg-primary');
                    else {
                        d.classList.remove('bg-primary');
                    }
                });
            }

            // Mouse / Touch Drag to slide
            let isDragging = false;
            let startX = 0;
            let currentTranslate = 0;
            let prevTranslate = 0;
            let animationFrame = null;

            function pointerDown(e) {
                isDragging = true;
                startX = (e.touches ? e.touches[0].clientX : e.clientX);
                prevTranslate = -currentIndex * slideWidth();
                track.style.transition = 'none';
                cancelAnimationFrame(animationFrame);
                resetAutoplay();
            }

            function pointerMove(e) {
                if (!isDragging) return;
                const x = (e.touches ? e.touches[0].clientX : e.clientX);
                const dx = x - startX;
                currentTranslate = prevTranslate + dx;
                track.style.transform = `translateX(${currentTranslate}px)`;
            }

            function pointerUp(e) {
                if (!isDragging) return;
                isDragging = false;
                const endX = (e.changedTouches ? e.changedTouches[0].clientX : e.clientX);
                const dx = endX - startX;
                const threshold = Math.max(30, slideWidth() / 6);
                track.style.transition = '';
                if (dx < -threshold) {
                    next();
                } else if (dx > threshold) {
                    prev();
                } else {
                    // snap back
                    setTrackPosition();
                }
            }

            // Attach pointer events to the track
            track.addEventListener('touchstart', pointerDown, {
                passive: false
            });
            track.addEventListener('touchmove', pointerMove, {
                passive: false
            });
            track.addEventListener('touchend', pointerUp);
            track.addEventListener('mousedown', pointerDown);
            window.addEventListener('mousemove', pointerMove);
            window.addEventListener('mouseup', pointerUp);

            // Buttons
            nextBtn.addEventListener('click', next);
            prevBtn.addEventListener('click', prev);

            // Keyboard
            window.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') prev();
                if (e.key === 'ArrowRight') next();
            });

            // Autoplay
            function startAutoplay() {
                stopAutoplay();
                autoplayTimer = setInterval(() => next(), autoplayInterval);
            }

            function stopAutoplay() {
                if (autoplayTimer) {
                    clearInterval(autoplayTimer);
                    autoplayTimer = null;
                }
            }

            function resetAutoplay() {
                stopAutoplay();
                startAutoplay();
            }

            // Pause on hover/focus (UX)
            const carouselEl = track.parentElement;
            carouselEl.addEventListener('mouseenter', stopAutoplay);
            carouselEl.addEventListener('mouseleave', startAutoplay);
            carouselEl.addEventListener('focusin', stopAutoplay);
            carouselEl.addEventListener('focusout', startAutoplay);

            // Initialize
            allSlides = Array.from(track.querySelectorAll('.slide'));
            currentIndex = originalCount;
            setTrackPosition(true);
            initDots();
            startAutoplay();

            // Recompute resize handling
            window.addEventListener('resize', () => {
                setTrackPosition(true);
            });

            // Accessibility: add roles
            track.setAttribute('role', 'list');
            Array.from(track.querySelectorAll('.slide')).forEach(el => el.setAttribute('role', 'listitem'));
        })();
    </script>
</section>








<!-- Trusted Clients / Certifications -->
<section class="pt-12 bg-black overflow-hidden">
    <div class=" mx-auto text-center">

        <!-- Heading -->
        <div class="mb-10">
            <div class="inline-block mb-4">
                <div class="flex items-center justify-center space-x-3 text-primary">
                    <div class="w-12 h-px bg-primary"></div>
                    <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline text-primary">
                        Serving Worldwide
                    </span>
                    <div class="w-12 h-px bg-primary"></div>
                </div>
            </div>

            <h3 class="text-3xl md:text-4xl font-light text-white font-appcrave">
                Global Presence Across Continents
            </h3>
            <p class="text-slate-50 max-w-2xl mx-auto mt-2 font-tagline">
                Delivering our products to valued clients across the globe.
            </p>
        </div>

        <!-- Infinite Scrolling Flags -->
        <div class="relative w-full overflow-hidden">
            <div class="flex gap-10 bg-white items-center animate-scroll-infinite">

                <!-- Duplicate flags twice for seamless looping -->
                <img src="assets/images/flags/1.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/2.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/3.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/4.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/5.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/6.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/7.png" class="h-24 object-contain opacity-90" alt="">

                <!-- Duplicate set for infinite scroll -->
                <img src="assets/images/flags/1.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/2.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/3.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/4.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/5.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/6.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/7.png" class="h-24 object-contain opacity-90" alt="">

                <!-- Duplicate set for infinite scroll -->
                <img src="assets/images/flags/1.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/2.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/3.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/4.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/5.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/6.png" class="h-24 object-contain opacity-90" alt="">
                <img src="assets/images/flags/7.png" class="h-24 object-contain opacity-90" alt="">

            </div>
        </div>
    </div>
</section>

<!-- Tailwind Custom Animation -->
<style>
    @keyframes scrollInfinite {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-scroll-infinite {
        display: flex;
        width: max-content;
        animation: scrollInfinite 25s linear infinite;
    }
</style>


<!-- Contact Section -->
<section id="contact" class="pt-16 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="mb-8 text-center">
            <div class="inline-block mb-2">
                <div class="flex items-center justify-center space-x-3 text-primary">
                    <div class="w-12 h-px bg-primary"></div>
                    <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Contact</span>
                    <div class="w-12 h-px bg-primary"></div>
                </div>
            </div>
            <h2 class="text-3xl md:text-4xl font-light text-slate-800 font-appcrave">Get In Touch</h2>
            <p class="text-slate-600 max-w-2xl mx-auto mt-2">Tell us about your project, request a quote or get technical support — our team will respond quickly with a tailored solution.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 divide-x divide-primary items-start bg-white shadow-lg p-8">
            <!-- Contact Form Card -->
            <div class=" px-8">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h4 class="text-2xl font-medium text-primary mb-1">Send a Message</h4>
                        <p class="text-slate-600 text-sm">We usually reply within 1 business day.</p>
                    </div>
                </div>

                <form action="" method="POST" class="space-y-6">

                    <!-- Row 1 -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        <div>
                            <label for="name" class="text-sm text-slate-700">Full Name</label>
                            <input
                                id="name" name="name" type="text" required
                                class="bg-transparent border-b border-black/70 focus:border-primary w-full py-1 outline-none"
                                placeholder="John Doe">
                        </div>
                        <div>
                            <label for="email" class="text-sm text-slate-700">Email Address</label>
                            <input
                                id="email" name="email" type="email" required
                                class="bg-transparent border-b border-black/70 focus:border-primary w-full py-1 outline-none"
                                placeholder="john@example.com">
                        </div>



                        <div>
                            <label for="phone" class="text-sm text-slate-700">Phone Number</label>
                            <input
                                id="phone" name="phone" type="tel"
                                class="bg-transparent border-b border-black/70 focus:border-primary w-full py-1 outline-none"
                                placeholder="+91 98765 43210">
                        </div>


                        <div>
                            <label for="product" class="text-sm text-slate-700">Select Product</label>
                            <select
                                id="product" name="product" required
                                class="bg-transparent text-slate-500  border-b border-black/70 focus:border-primary w-full py-1 outline-none appearance-none">
                                <option value="">Choose product</option>
                                <option value="Quarrying Wire Saw">Quarrying Wire Saw</option>
                                <option value="Diamond Wire Saw">Diamond Wire Saw</option>
                                <option value="Mono Wire">Mono (Stationary) Wire</option>
                                <option value="Squaring Wire Saw">Squaring Wire Saw</option>
                                <option value="Profiling Wiresaw">Profiling Wiresaw</option>
                                <option value="Diamond Wiresaw Beads">Diamond Wiresaw Beads</option>
                            </select>
                        </div>





                    </div>

                    <!-- Row 4 -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <div>
                            <label for="country" class="text-sm text-slate-700">Country</label>
                            <input
                                id="country" name="country" type="text"
                                class="bg-transparent border-b border-black/70 focus:border-primary w-full py-1 outline-none"
                                placeholder="Country">
                        </div>
                        <div>
                            <label for="city" class="text-sm text-slate-700">City</label>
                            <input
                                id="city" name="city" type="text"
                                class="bg-transparent border-b border-black/70 focus:border-primary w-full py-1 outline-none"
                                placeholder="City">
                        </div>

                        <div>
                            <label for="zipcode" class="text-sm text-slate-700">ZIP / Postal Code</label>
                            <input
                                id="zipcode" name="zipcode" type="text"
                                class="bg-transparent border-b border-black/70 focus:border-primary w-full py-1 outline-none"
                                placeholder="Pin / ZIP code">
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="text-sm text-slate-700">Message</label>
                        <textarea
                            id="message" name="message" rows="3" required
                            class="bg-transparent border-b border-black/70 focus:border-primary w-full py-2 outline-none resize-none"
                            placeholder="Tell us about your requirements..."></textarea>
                    </div>

                    <!-- Button -->
                    <button
                        type="submit"
                        class="px-6 py-1 bg-primary text-white  font-medium hover:bg-primary/90 transition">
                        Send Message
                    </button>

                </form>



            </div>

            <!-- Contact Details / Map -->
            <div class=" px-8">
                <iframe class="w-full h-[450px] no-pointer-events" src="https://maps.google.com/maps?q=Plot%20No.%2042%20Industrial%20Area%20Gujarat&t=&z=13&ie=UTF8&iwloc=&output=embed" aria-hidden="false" aria-label="Company location map" loading="lazy"></iframe>

            </div>
        </div>
    </div>
</section>


<?php include 'include/footer.php'; ?>