<!-- ============================================== -->
<!-- HERO SECTION: FULL-WIDTH SLIDER (3 SLIDES)     -->
<!-- ============================================== -->
<section class="relative w-full h-[580px] sm:h-[640px] lg:h-[700px] overflow-hidden bg-secondary-sub">
    
    <!-- Slider Container -->
    <div id="heroSlider" class="relative w-full h-full">

        <!-- SLIDE 1: Housekeeping -->
        <div class="slide-item absolute inset-0 w-full h-full opacity-100 scale-100 z-10 transition-all duration-700 ease-in-out">
            <!-- Background Image & Light Translucent Black Coating (Natural Vibrant Colors) -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/slider/slider-1.jpg') }}');">
                <div class="absolute inset-0 bg-black/45"></div>
            </div>

            <!-- Slide Content (Center Aligned as in Reference Theme) -->
            <div class="relative h-full max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex items-center justify-center pb-16 sm:pb-0 text-center">
                <div class="max-w-3xl mx-auto text-white space-y-5 text-center">

                    <!-- Main Heading (Montserrat, Slim & Clean) -->
                    <h1 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-normal leading-tight tracking-tight text-white">
                        Clean Smarter. <br>
                        <span class="text-primary font-light">Live Better.</span>
                    </h1>

                    <!-- Subtitle Paragraph (Poppins, Light) -->
                    <p class="font-body text-base sm:text-lg text-white/90 font-light max-w-2xl mx-auto leading-relaxed">
                        Professional housekeeping and routine maintenance for homes, apartments, and corporate facilities. Reliable, insured, and verified staff.
                    </p>

                    <!-- Call To Action Buttons (Reduced Border Radius: rounded-lg) -->
                    <div class="flex flex-wrap items-center justify-center gap-4 pt-3">
                        <a href="#quote" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white px-7 py-3 rounded-lg text-sm font-medium transition-all shadow-lg hover:shadow-primary/30">
                            <span>Take Our Service</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="#housekeeping" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white border border-white/30 px-6 py-3 rounded-lg text-sm font-normal backdrop-blur-sm transition-all">
                            <span>Learn More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SLIDE 2: Deep Cleaning -->
        <div class="slide-item absolute inset-0 w-full h-full opacity-0 scale-105 pointer-events-none z-0 transition-all duration-700 ease-in-out">
            <!-- Background Image & Light Translucent Black Coating -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/slider/slider-2.jpg') }}');">
                <div class="absolute inset-0 bg-black/45"></div>
            </div>

            <!-- Slide Content (Center Aligned) -->
            <div class="relative h-full max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex items-center justify-center pb-16 sm:pb-0 text-center">
                <div class="max-w-3xl mx-auto text-white space-y-5 text-center">

                    <!-- Main Heading -->
                    <h1 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-normal leading-tight tracking-tight text-white">
                        Deep Cleaning for <br>
                        <span class="text-primary font-light">Spotless Spaces.</span>
                    </h1>

                    <!-- Subtitle Paragraph -->
                    <p class="font-body text-base sm:text-lg text-white/90 font-light max-w-2xl mx-auto leading-relaxed">
                        Thorough scrubbing, advanced disinfection, and specialized equipment for kitchens, bathrooms, full villas, and moving in/out.
                    </p>

                    <!-- Call To Action Buttons -->
                    <div class="flex flex-wrap items-center justify-center gap-4 pt-3">
                        <a href="#quote" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white px-7 py-3 rounded-lg text-sm font-medium transition-all shadow-lg hover:shadow-primary/30">
                            <span>Get Instant Quote</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="#packages" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white border border-white/30 px-6 py-3 rounded-lg text-sm font-normal backdrop-blur-sm transition-all">
                            <span>Compare Packages</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SLIDE 3: Pest Control -->
        <div class="slide-item absolute inset-0 w-full h-full opacity-0 scale-105 pointer-events-none z-0 transition-all duration-700 ease-in-out">
            <!-- Background Image & Light Translucent Black Coating -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/slider/slider-3.jpg') }}');">
                <div class="absolute inset-0 bg-black/45"></div>
            </div>

            <!-- Slide Content (Center Aligned) -->
            <div class="relative h-full max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex items-center justify-center pb-16 sm:pb-0 text-center">
                <div class="max-w-3xl mx-auto text-white space-y-5 text-center">

                    <!-- Main Heading -->
                    <h1 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-normal leading-tight tracking-tight text-white">
                        Certified Safe <br>
                        <span class="text-primary font-light">Pest Control Care.</span>
                    </h1>

                    <!-- Subtitle Paragraph -->
                    <p class="font-body text-base sm:text-lg text-white/90 font-light max-w-2xl mx-auto leading-relaxed">
                        Government-approved formulations safe for children and pets. Permanent treatments for termites, cockroaches, rodents, and bed bugs.
                    </p>

                    <!-- Call To Action Buttons -->
                    <div class="flex flex-wrap items-center justify-center gap-4 pt-3">
                        <a href="#quote" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white px-7 py-3 rounded-lg text-sm font-medium transition-all shadow-lg hover:shadow-primary/30">
                            <span>Book Inspection</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="tel:+919566666199" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white border border-white/30 px-6 py-3 rounded-lg text-sm font-normal backdrop-blur-sm transition-all">
                            <i data-lucide="phone" class="w-4 h-4 text-primary"></i>
                            <span>Call Expert</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Desktop Slider Controls: Previous & Next Buttons (Circular matching reference screenshot, hidden on mobile so it never covers text) -->
    <button id="prevSlideBtn" aria-label="Previous Slide" class="hidden md:flex absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 z-20 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-white/20 hover:bg-white text-white hover:text-secondary-sub backdrop-blur-md items-center justify-center transition-all duration-200 border border-white/30 shadow-lg focus:outline-none cursor-pointer">
        <i data-lucide="chevron-left" class="w-6 h-6"></i>
    </button>
    <button id="nextSlideBtn" aria-label="Next Slide" class="hidden md:flex absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 z-20 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-white/20 hover:bg-white text-white hover:text-secondary-sub backdrop-blur-md items-center justify-center transition-all duration-200 border border-white/30 shadow-lg focus:outline-none cursor-pointer">
        <i data-lucide="chevron-right" class="w-6 h-6"></i>
    </button>

    <!-- Bottom Controls: Pagination Dots + Mobile Thumb Controls (Positioned above the scallop divider) -->
    <div class="absolute bottom-12 sm:bottom-14 left-1/2 -translate-x-1/2 z-20 flex items-center space-x-3 bg-black/40 backdrop-blur-md px-4 py-2 rounded-full border border-white/20 shadow-lg">
        <!-- Mobile Prev Button -->
        <button id="mobilePrevBtn" aria-label="Previous Slide" class="md:hidden text-white hover:text-primary p-1 cursor-pointer transition-colors">
            <i data-lucide="chevron-left" class="w-4 h-4"></i>
        </button>

        <!-- Slider Pagination Indicators (Dots) -->
        <div class="flex items-center space-x-2">
            <button class="dot-btn w-8 h-2 rounded-full bg-primary transition-all duration-300 cursor-pointer" data-slide="0" aria-label="Go to slide 1"></button>
            <button class="dot-btn w-2.5 h-2 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300 cursor-pointer" data-slide="1" aria-label="Go to slide 2"></button>
            <button class="dot-btn w-2.5 h-2 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300 cursor-pointer" data-slide="2" aria-label="Go to slide 3"></button>
        </div>

        <!-- Mobile Next Button -->
        <button id="mobileNextBtn" aria-label="Next Slide" class="md:hidden text-white hover:text-primary p-1 cursor-pointer transition-colors">
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
        </button>
    </div>

    <!-- Scalloped Half-Circle Wave Divider (Seamless Zero-Gap Transition) -->
    <div class="absolute -bottom-1 left-0 w-full overflow-hidden leading-none z-20 pointer-events-none">
        <svg class="relative block w-full h-7 sm:h-9" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <defs>
                <pattern id="scallopWave" width="48" height="60" patternUnits="userSpaceOnUse">
                    <!-- Semicircle arch pointing UP into hero (0 to 16), solid white below (16 to 60) -->
                    <path d="M 0 16 C 12 0, 36 0, 48 16 L 48 60 L 0 60 Z" fill="#ffffff"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#scallopWave)"/>
        </svg>
    </div>

</section>

<!-- Slider JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.slide-item');
        const dots = document.querySelectorAll('.dot-btn');
        const prevBtn = document.getElementById('prevSlideBtn');
        const nextBtn = document.getElementById('nextSlideBtn');
        const mobilePrevBtn = document.getElementById('mobilePrevBtn');
        const mobileNextBtn = document.getElementById('mobileNextBtn');
        let currentSlide = 0;
        let slideInterval;

        function showSlide(index) {
            slides.forEach((slide, idx) => {
                if (idx === index) {
                    slide.classList.remove('opacity-0', 'scale-105', 'pointer-events-none');
                    slide.classList.add('opacity-100', 'scale-100', 'z-10');
                } else {
                    slide.classList.remove('opacity-100', 'scale-100', 'z-10');
                    slide.classList.add('opacity-0', 'scale-105', 'pointer-events-none');
                }
            });

            dots.forEach((dot, idx) => {
                if (idx === index) {
                    dot.classList.remove('w-2.5', 'bg-white/40');
                    dot.classList.add('w-8', 'bg-primary');
                } else {
                    dot.classList.remove('w-8', 'bg-primary');
                    dot.classList.add('w-2.5', 'bg-white/40');
                }
            });

            currentSlide = index;
        }

        function nextSlide() {
            let nextIndex = (currentSlide + 1) % slides.length;
            showSlide(nextIndex);
        }

        function prevSlide() {
            let prevIndex = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prevIndex);
        }

        function startSlideTimer() {
            stopSlideTimer();
            slideInterval = setInterval(nextSlide, 6000); // 6s auto slide
        }

        function stopSlideTimer() {
            if (slideInterval) clearInterval(slideInterval);
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                startSlideTimer();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                startSlideTimer();
            });
        }

        if (mobileNextBtn) {
            mobileNextBtn.addEventListener('click', () => {
                nextSlide();
                startSlideTimer();
            });
        }

        if (mobilePrevBtn) {
            mobilePrevBtn.addEventListener('click', () => {
                prevSlide();
                startSlideTimer();
            });
        }

        dots.forEach((dot, idx) => {
            dot.addEventListener('click', () => {
                showSlide(idx);
                startSlideTimer();
            });
        });

        const heroSlider = document.getElementById('heroSlider');
        if (heroSlider) {
            heroSlider.addEventListener('mouseenter', stopSlideTimer);
            heroSlider.addEventListener('mouseleave', startSlideTimer);
        }

        startSlideTimer();
    });
</script>
