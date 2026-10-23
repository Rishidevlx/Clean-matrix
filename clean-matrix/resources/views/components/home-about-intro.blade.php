<!-- Custom Styles for Smooth Floating Wave Animations on Cleaning Icons -->
<style>
    @keyframes smoothWave1 {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-8px) rotate(4deg); }
    }
    @keyframes smoothWave2 {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(8px) rotate(-4deg); }
    }
    @keyframes smoothWave3 {
        0%, 100% { transform: translate(0px, 0px) rotate(0deg); }
        50% { transform: translate(-6px, -7px) rotate(-3deg); }
    }
    @keyframes smoothWave4 {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(7px) rotate(5deg); }
    }
    .animate-wave-1 {
        animation: smoothWave1 4.5s ease-in-out infinite;
    }
    .animate-wave-2 {
        animation: smoothWave2 5.2s ease-in-out infinite;
    }
    .animate-wave-3 {
        animation: smoothWave3 4s ease-in-out infinite;
    }
    .animate-wave-4 {
        animation: smoothWave4 4.8s ease-in-out infinite;
    }
</style>

<!-- ============================================== -->
<!-- HOME ABOUT / INTRO FEATURE SECTION             -->
<!-- ============================================== -->
<section class="relative bg-white pt-10 pb-16 sm:py-24 lg:py-28 overflow-hidden">
    
    <!-- Large Subtle Background Sparkle Decoration (Monochrome Watermark from Reference) -->
    <div class="absolute right-4 top-1/2 -translate-y-1/2 w-96 h-96 opacity-10 pointer-events-none text-secondary/40 select-none -z-0">
        <svg viewBox="0 0 200 200" fill="currentColor">
            <path d="M100 0 C100 60 140 100 200 100 C140 100 100 140 100 200 C100 140 60 100 0 100 C60 100 100 60 100 0 Z"/>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            <!-- ========================================== -->
            <!-- LEFT COLUMN: Tilted Overlapping Photos & Cleaning Doodles -->
            <!-- ========================================== -->
            <div class="lg:col-span-6 relative flex justify-center items-center pb-12 sm:pb-16 lg:pb-0">
                
                <!-- Dotted Orbit Circle Outline -->
                <div class="absolute w-[290px] h-[290px] sm:w-[380px] sm:h-[380px] rounded-full border-2 border-dashed border-secondary/20 pointer-events-none -z-0"></div>

                <!-- Cleaning Icon 1: spray-can (Top Left) -->
                <div class="absolute -top-7 left-3 sm:left-6 w-12 h-12 sm:w-14 sm:h-14 text-secondary/80 animate-wave-1 hover:scale-125 hover:rotate-12 transition-transform duration-300 cursor-pointer z-10 flex items-center justify-center" title="Spray Can Sanitizer">
                    <i data-lucide="spray-can" class="w-8 h-8 sm:w-10 sm:h-10 stroke-[1.8]"></i>
                </div>

                <!-- Cleaning Icon 2: broom-sparkles (Top Right) -->
                <div class="absolute top-1 right-4 sm:right-10 w-12 h-12 sm:w-14 sm:h-14 text-secondary/80 animate-wave-2 hover:scale-125 hover:-rotate-12 transition-transform duration-300 cursor-pointer z-10" title="Broom & Sparkles">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 sm:w-12 sm:h-12">
                        <!-- Broom handle -->
                        <line x1="38" y1="6" x2="22" y2="24"/>
                        <!-- Broom band -->
                        <line x1="19" y1="22" x2="25" y2="28"/>
                        <!-- Broom brush -->
                        <path d="M18 25c-4 4-8 10-8 15 0 2 1 3 3 3 5 0 11-4 15-8l-10-10Z"/>
                        <!-- Broom bristles lines -->
                        <line x1="14" y1="33" x2="20" y2="39"/>
                        <!-- Sparkles floating near broom -->
                        <path d="M36 18l1.5 3 3 1.5-3 1.5-1.5 3-1.5-3-3-1.5 3-1.5 1.5-3Z" fill="currentColor" stroke="none" class="text-primary"/>
                        <circle cx="28" cy="12" r="1.5" fill="currentColor" stroke="none" class="text-primary"/>
                    </svg>
                </div>

                <!-- Cleaning Icon 3: bubbles (Bottom Left) -->
                <div class="absolute bottom-2 left-1 sm:left-6 w-12 h-12 sm:w-14 sm:h-14 text-secondary/80 animate-wave-3 hover:scale-125 hover:rotate-6 transition-transform duration-300 cursor-pointer z-10" title="Soap Bubbles">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 sm:w-12 sm:h-12">
                        <!-- Main large bubble -->
                        <circle cx="22" cy="26" r="11"/>
                        <path d="M18 20a6 6 0 0 1 6-4" stroke-linecap="round"/>
                        <!-- Medium bubble -->
                        <circle cx="34" cy="16" r="7"/>
                        <path d="M32 13a3.5 3.5 0 0 1 3.5-2"/>
                        <!-- Small bubble -->
                        <circle cx="12" cy="16" r="4.5"/>
                        <!-- Tiny floating bubble -->
                        <circle cx="36" cy="34" r="3.5"/>
                    </svg>
                </div>

                <!-- OVERLAPPING PHOTO 1: Top Frame (Tilted Left) -->
                <div class="relative z-10 w-[270px] sm:w-[330px] p-3 sm:p-4 bg-white rounded-2xl shadow-xl border border-neutral-border/60 -rotate-6 hover:-rotate-3 transition-transform duration-300">
                    <div class="overflow-hidden rounded-xl aspect-[4/3] bg-neutral-light">
                        <img src="{{ asset('images/about/about-1.jpg') }}" alt="Professional Kitchen & Surface Cleaning" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- OVERLAPPING PHOTO 2: Bottom Frame (Tilted Right, Foreground) -->
                <div class="absolute -bottom-6 sm:-bottom-10 right-4 sm:right-8 z-20 w-[240px] sm:w-[290px] p-3 sm:p-4 bg-white rounded-2xl shadow-2xl border border-neutral-border/70 rotate-6 hover:rotate-3 transition-transform duration-300">
                    <div class="overflow-hidden rounded-xl aspect-[4/3] bg-neutral-light">
                        <img src="{{ asset('images/about/about-2.jpg') }}" alt="Gloved Sanitization & Scrubbing" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>

            <!-- ========================================== -->
            <!-- RIGHT COLUMN: Headings, Checklist & CTA    -->
            <!-- ========================================== -->
            <div class="lg:col-span-6 space-y-6 lg:pl-6 text-left relative">

                <!-- Main Heading (Montserrat, Slim & Clean matching reference) -->
                <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-normal leading-tight tracking-tight text-secondary">
                    Making Your House <br>
                    <span class="text-secondary-sub font-light">As Good As New</span>
                </h2>

                <!-- Subtitle Paragraph (Poppins, Light & Crisp) -->
                <p class="font-body text-[15px] sm:text-base text-neutral-text font-light leading-relaxed">
                    Clean Matrix delivers thorough, reliable, and hygienic cleaning solutions tailored to your lifestyle. Whether it's recurring housekeeping, specialized deep cleaning, or certified pest control, our vetted team ensures every corner is spotless and safe.
                </p>

                <!-- Key Benefits Checklist (Matching Reference Checkpoints) -->
                <ul class="space-y-3.5 pt-2 font-body text-[14.5px] sm:text-[15px] text-neutral-text">
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-primary/15 text-primary-sub flex items-center justify-center shrink-0">
                            <i data-lucide="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </div>
                        <span class="font-light">Experienced, trained & verified team</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-primary/15 text-primary-sub flex items-center justify-center shrink-0">
                            <i data-lucide="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </div>
                        <span class="font-light">Keep the same cleaner for recurring visits</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-primary/15 text-primary-sub flex items-center justify-center shrink-0">
                            <i data-lucide="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </div>
                        <span class="font-light">One-off, weekly, or fortnightly visits</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-primary/15 text-primary-sub flex items-center justify-center shrink-0">
                            <i data-lucide="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </div>
                        <span class="font-light">Book, manage & pay with transparent pricing</span>
                    </li>
                </ul>

                <!-- CTA Action Button (Clean Matrix Brand Theme & rounded-lg) -->
                <div class="pt-4">
                    <a href="#quote" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white text-[15px] font-medium px-8 py-3.5 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                        <span>Book a Service</span>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>
