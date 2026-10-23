<!-- ======================================================== -->
<!-- CLIENT TESTIMONIALS / REVIEWS SECTION (Exact Clenix Testimonial 2) -->
<!-- ======================================================== -->

<style>
    /* Clenix Testimonial Card Hover Lift */
    .clenix-testimonial-card {
        border-radius: 6px;
        transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
        user-select: none;
        -webkit-user-select: none;
    }
    .clenix-testimonial-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 28px -8px rgba(0, 68, 139, 0.08);
        border-color: #cbd5e1;
    }
    
    /* Pagination indicator pills */
    .testimonial-dot {
        transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
    }
    .testimonial-dot.active {
        width: 1.85rem; /* ~30px wide pill */
        background-color: #287ff9;
    }
    .testimonial-dot:not(.active) {
        width: 0.6rem; /* ~10px dot */
        background-color: #cbd5e1;
    }
    .testimonial-dot:not(.active):hover {
        background-color: #94a3b8;
    }

    #testimonialSliderWrapper.cursor-grabbing {
        cursor: grabbing !important;
        user-select: none;
    }
</style>

<section id="testimonials" class="relative py-8 sm:py-12 bg-white overflow-hidden border-t border-neutral-border/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header (Ultra-compact so section fits 100% on laptop screen) -->
        <div class="text-center max-w-3xl mx-auto mb-6 sm:mb-8 space-y-1">
            <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-medium tracking-tight text-secondary">
                Verified Client Reviews
            </h2>
            <p class="font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed max-w-xl mx-auto">
                Real experiences from homeowners, villa communities, and corporate facilities across Chennai who trust Clean Matrix.
            </p>
        </div>

        <!-- Testimonial Slider Outer Wrapper (Draggable Container) -->
        <div id="testimonialSliderWrapper" class="max-w-5xl mx-auto relative overflow-hidden cursor-grab select-none">
            
            <!-- Slides Flex Track -->
            <div id="testimonialTrack" class="flex transition-transform duration-500 ease-out will-change-transform">

                <!-- ================= SLIDE 1 (2 Cards) ================= -->
                <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-6 px-2">
                    
                    <!-- Review Card 1 -->
                    <div class="clenix-testimonial-card bg-white border border-[#eaedf2] p-4 sm:p-5 text-center flex flex-col justify-between shadow-sm relative group">
                        <div>
                            <!-- Watermark Quotation Icon -->
                            <div class="flex justify-center mb-2 text-[#e2e8f0] group-hover:text-[#287ff9]/30 transition-colors duration-300">
                                <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                                </svg>
                            </div>

                            <!-- Review Text -->
                            <p class="font-body text-neutral-text text-[13px] sm:text-[13.5px] font-light leading-relaxed mb-3 italic max-w-md mx-auto pointer-events-none">
                                &ldquo;The 6-in-1 deep clean for our 4BHK villa in ECR was phenomenal. Their German mechanized scrubbing removed years of salt water stain on the balcony glass, and the team was polite, uniform-clad, and punctual.&rdquo;
                            </p>
                        </div>

                        <div>
                            <!-- Client Avatar with strict fixed dimensions -->
                            <div class="mb-1.5 flex justify-center">
                                <img src="{{ asset('images/testimonials/client1.jpg') }}" alt="Arun Sundaram" style="width: 54px; height: 54px; min-width: 54px; min-height: 54px;" class="rounded-full object-cover border-2 border-white shadow-sm pointer-events-none select-none mx-auto" draggable="false">
                            </div>

                            <!-- Client Name -->
                            <h4 class="font-heading text-sm sm:text-[15px] font-medium text-secondary-sub tracking-tight pointer-events-none">
                                Arun Sundaram
                            </h4>

                            <!-- Client Role -->
                            <p class="font-body text-[11px] text-neutral-text/75 font-light mt-0.5 pointer-events-none">
                                Villa Resident, ECR Chennai
                            </p>

                            <!-- Star Rating -->
                            <div class="flex items-center justify-center gap-0.5 text-[#ff9800] mt-1.5 pointer-events-none">
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Review Card 2 -->
                    <div class="clenix-testimonial-card bg-white border border-[#eaedf2] p-4 sm:p-5 text-center flex flex-col justify-between shadow-sm relative group">
                        <div>
                            <!-- Watermark Quotation Icon -->
                            <div class="flex justify-center mb-2 text-[#e2e8f0] group-hover:text-[#287ff9]/30 transition-colors duration-300">
                                <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                                </svg>
                            </div>

                            <!-- Review Text -->
                            <p class="font-body text-neutral-text text-[13px] sm:text-[13.5px] font-light leading-relaxed mb-3 italic max-w-md mx-auto pointer-events-none">
                                &ldquo;We contracted Clean Matrix for post-renovation handover of our tech park office in Guindy. Zero chemical odor, completely streak-free glass facades, and spotless tile restoration. Highly dependable team!&rdquo;
                            </p>
                        </div>

                        <div>
                            <!-- Client Avatar with strict fixed dimensions -->
                            <div class="mb-1.5 flex justify-center">
                                <img src="{{ asset('images/testimonials/client2.jpg') }}" alt="Priya Chandrasekhar" style="width: 54px; height: 54px; min-width: 54px; min-height: 54px;" class="rounded-full object-cover border-2 border-white shadow-sm pointer-events-none select-none mx-auto" draggable="false">
                            </div>

                            <!-- Client Name -->
                            <h4 class="font-heading text-sm sm:text-[15px] font-medium text-secondary-sub tracking-tight pointer-events-none">
                                Priya Chandrasekhar
                            </h4>

                            <!-- Client Role -->
                            <p class="font-body text-[11px] text-neutral-text/75 font-light mt-0.5 pointer-events-none">
                                Facility Director, Guindy IT Park
                            </p>

                            <!-- Star Rating -->
                            <div class="flex items-center justify-center gap-0.5 text-[#ff9800] mt-1.5 pointer-events-none">
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ================= SLIDE 2 (2 Cards) ================= -->
                <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-6 px-2">
                    
                    <!-- Review Card 3 -->
                    <div class="clenix-testimonial-card bg-white border border-[#eaedf2] p-4 sm:p-5 text-center flex flex-col justify-between shadow-sm relative group">
                        <div>
                            <!-- Watermark Quotation Icon -->
                            <div class="flex justify-center mb-2 text-[#e2e8f0] group-hover:text-[#287ff9]/30 transition-colors duration-300">
                                <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                                </svg>
                            </div>

                            <!-- Review Text -->
                            <p class="font-body text-neutral-text text-[13px] sm:text-[13.5px] font-light leading-relaxed mb-3 italic max-w-md mx-auto pointer-events-none">
                                &ldquo;Their team cleaned our residential apartment in Anna Nagar before our housewarming ceremony. Every single corner, inside wardrobes, and kitchen cabinets were meticulously wiped down. Highly satisfied!&rdquo;
                            </p>
                        </div>

                        <div>
                            <!-- Client Avatar with strict fixed dimensions -->
                            <div class="mb-1.5 flex justify-center">
                                <img src="{{ asset('images/testimonials/client3.jpg') }}" alt="Dr. K. Ramanathan" style="width: 54px; height: 54px; min-width: 54px; min-height: 54px;" class="rounded-full object-cover border-2 border-white shadow-sm pointer-events-none select-none mx-auto" draggable="false">
                            </div>

                            <!-- Client Name -->
                            <h4 class="font-heading text-sm sm:text-[15px] font-medium text-secondary-sub tracking-tight pointer-events-none">
                                Dr. K. Ramanathan
                            </h4>

                            <!-- Client Role -->
                            <p class="font-body text-[11px] text-neutral-text/75 font-light mt-0.5 pointer-events-none">
                                Homeowner, Anna Nagar Chennai
                            </p>

                            <!-- Star Rating -->
                            <div class="flex items-center justify-center gap-0.5 text-[#ff9800] mt-1.5 pointer-events-none">
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Review Card 4 -->
                    <div class="clenix-testimonial-card bg-white border border-[#eaedf2] p-4 sm:p-5 text-center flex flex-col justify-between shadow-sm relative group">
                        <div>
                            <!-- Watermark Quotation Icon -->
                            <div class="flex justify-center mb-2 text-[#e2e8f0] group-hover:text-[#287ff9]/30 transition-colors duration-300">
                                <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                                </svg>
                            </div>

                            <!-- Review Text -->
                            <p class="font-body text-neutral-text text-[13px] sm:text-[13.5px] font-light leading-relaxed mb-3 italic max-w-md mx-auto pointer-events-none">
                                &ldquo;We trust Clean Matrix for our campus-wide holiday sanitization. Certified eco-friendly disinfectants and police-verified staff give our parents total confidence in campus hygiene standards.&rdquo;
                            </p>
                        </div>

                        <div>
                            <!-- Client Avatar with strict fixed dimensions -->
                            <div class="mb-1.5 flex justify-center">
                                <img src="{{ asset('images/testimonials/client4.jpg') }}" alt="Meenakshi Sundaram" style="width: 54px; height: 54px; min-width: 54px; min-height: 54px;" class="rounded-full object-cover border-2 border-white shadow-sm pointer-events-none select-none mx-auto" draggable="false">
                            </div>

                            <!-- Client Name -->
                            <h4 class="font-heading text-sm sm:text-[15px] font-medium text-secondary-sub tracking-tight pointer-events-none">
                                Meenakshi Sundaram
                            </h4>

                            <!-- Client Role -->
                            <p class="font-body text-[11px] text-neutral-text/75 font-light mt-0.5 pointer-events-none">
                                Administrator, Vidya Mandir Campus
                            </p>

                            <!-- Star Rating -->
                            <div class="flex items-center justify-center gap-0.5 text-[#ff9800] mt-1.5 pointer-events-none">
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Pagination Pill Indicators -->
            <div class="flex items-center justify-center gap-2 mt-6">
                <button type="button" aria-label="Go to Slide 1" class="testimonial-dot active h-2 rounded-full cursor-pointer" onclick="goToTestimonialSlide(0)"></button>
                <button type="button" aria-label="Go to Slide 2" class="testimonial-dot h-2 rounded-full cursor-pointer" onclick="goToTestimonialSlide(1)"></button>
            </div>

        </div>

    </div>
</section>

<!-- Testimonial Slider Script with Smooth Mouse Drag & Touch Swipe -->
<script>
    (function() {
        const track = document.getElementById('testimonialTrack');
        const sliderWrapper = document.getElementById('testimonialSliderWrapper');
        const dots = document.querySelectorAll('.testimonial-dot');
        let currentTestimonialSlide = 0;
        const totalTestimonialSlides = 2;

        let isDown = false;
        let startX = 0;
        let diffX = 0;
        let autoSlideTimer = null;

        function updateSlide(index, animate = true) {
            currentTestimonialSlide = Math.max(0, Math.min(index, totalTestimonialSlides - 1));
            if (track) {
                track.style.transition = animate ? 'transform 0.4s cubic-bezier(0.25, 1, 0.5, 1)' : 'none';
                track.style.transform = `translateX(-${currentTestimonialSlide * 100}%)`;
            }

            dots.forEach((dot, idx) => {
                if (idx === currentTestimonialSlide) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        window.goToTestimonialSlide = function(index) {
            updateSlide(index, true);
            resetAutoTimer();
        };

        function startDrag(e) {
            isDown = true;
            startX = (e.pageX !== undefined) ? e.pageX : (e.touches && e.touches[0].pageX);
            diffX = 0;
            if (track) {
                track.style.transition = 'none';
            }
            if (sliderWrapper) {
                sliderWrapper.classList.add('cursor-grabbing');
                sliderWrapper.classList.remove('cursor-grab');
            }
            clearInterval(autoSlideTimer);
        }

        function onDrag(e) {
            if (!isDown) return;
            const currentX = (e.pageX !== undefined) ? e.pageX : (e.touches && e.touches[0].pageX);
            diffX = currentX - startX;

            const width = sliderWrapper ? sliderWrapper.offsetWidth : 1;
            const percentDiff = (diffX / width) * 100;
            const currentPercent = -(currentTestimonialSlide * 100) + percentDiff;
            
            if (track) {
                track.style.transform = `translateX(${currentPercent}%)`;
            }
        }

        function endDrag() {
            if (!isDown) return;
            isDown = false;
            if (sliderWrapper) {
                sliderWrapper.classList.remove('cursor-grabbing');
                sliderWrapper.classList.add('cursor-grab');
            }

            const threshold = 40; // 40px drag threshold to change slide
            if (diffX < -threshold) {
                // Swipe Left -> loop to next slide (e.g. 0 -> 1 -> 0)
                currentTestimonialSlide = (currentTestimonialSlide + 1) % totalTestimonialSlides;
            } else if (diffX > threshold) {
                // Swipe Right -> loop to prev slide (e.g. 1 -> 0 -> 1)
                currentTestimonialSlide = (currentTestimonialSlide - 1 + totalTestimonialSlides) % totalTestimonialSlides;
            }
            updateSlide(currentTestimonialSlide, true);
            resetAutoTimer();
        }

        if (sliderWrapper) {
            // Mouse Drag Listeners
            sliderWrapper.addEventListener('mousedown', (e) => {
                startDrag(e);
            });
            window.addEventListener('mousemove', (e) => {
                onDrag(e);
            });
            window.addEventListener('mouseup', () => {
                endDrag();
            });

            // Touch Swipe Listeners
            sliderWrapper.addEventListener('touchstart', (e) => {
                startDrag(e);
            }, { passive: true });
            window.addEventListener('touchmove', (e) => {
                onDrag(e);
            }, { passive: true });
            window.addEventListener('touchend', () => {
                endDrag();
            });

            // Pause on hover
            sliderWrapper.addEventListener('mouseenter', () => {
                clearInterval(autoSlideTimer);
            });
            sliderWrapper.addEventListener('mouseleave', () => {
                if (!isDown) resetAutoTimer();
            });
        }

        function resetAutoTimer() {
            clearInterval(autoSlideTimer);
            autoSlideTimer = setInterval(() => {
                currentTestimonialSlide = (currentTestimonialSlide + 1) % totalTestimonialSlides;
                updateSlide(currentTestimonialSlide, true);
            }, 7500);
        }

        resetAutoTimer();
    })();
</script>
