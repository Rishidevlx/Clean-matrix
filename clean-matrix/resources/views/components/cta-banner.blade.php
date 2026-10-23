<!-- ======================================================== -->
<!-- COMPONENT: CTA BANNER SECTION (Exact Clenix Origami 3D)  -->
<!-- Reusable across About, Packages, Services, Contact, etc.  -->
<!-- ======================================================== -->
@props([
    'title' => "Let's Shine!",
    'subtitle' => 'Get Started With Your Free Estimate',
    'buttonText' => 'Request an Estimate',
    'buttonUrl' => route('contact'),
])

<section class="relative py-16 sm:py-20 lg:py-24 overflow-hidden bg-[#157efb] flex items-center justify-center">

    <!-- Background: Clenix estimation-bg.png (Blue Sunburst & Floating Bubbles) -->
    <div class="absolute inset-0 bg-cover bg-center pointer-events-none" 
         style="background-image: url('{{ asset('images/about/estimation-bg.png') }}');">
    </div>

    <!-- 3D Perspective Scene Container -->
    <div class="relative z-10 w-full max-w-3xl mx-auto px-4" style="perspective: 1400px;">
        
        <!-- 3D Origami Yellow Message Card with Interactive Tilt (Compact Balanced Size) -->
        <div id="ctaRibbonCard" 
             class="relative w-full max-w-[620px] mx-auto cursor-pointer select-none transition-transform duration-150 ease-out will-change-transform"
             style="transform-style: preserve-3d; filter: drop-shadow(0 20px 35px rgba(0, 30, 90, 0.45));">
            
            <!-- SVG Origami Vector Silhouette (Exact Match to Clenix Yellow Theme) -->
            <svg viewBox="0 0 760 480" class="w-full h-auto overflow-visible pointer-events-none" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="yellowRibbonGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#FFE033" />
                        <stop offset="100%" stop-color="#FFD41D" />
                    </linearGradient>
                    <linearGradient id="foldShadowGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#C69B00" />
                        <stop offset="100%" stop-color="#9E7C00" />
                    </linearGradient>
                </defs>

                <!-- 1. Dark Shadow Fold Triangle of Ribbon Tail -->
                <polygon points="410,350 460,345 350,470" fill="url(#foldShadowGrad)" />

                <!-- 2. Front Bright Yellow Ribbon Tail -->
                <polygon points="350,470 410,350 350,352" fill="url(#yellowRibbonGrad)" />

                <!-- 3. Main Yellow Origami Banner Body -->
                <polygon points="15,65 745,15 745,340 15,365" fill="url(#yellowRibbonGrad)" />
            </svg>

            <!-- Foreground Content Layer Floating in 3D Depth Space -->
            <div class="absolute inset-0 pt-8 sm:pt-10 pb-20 sm:pb-24 px-6 sm:px-12 flex flex-col items-center justify-center text-center" 
                 style="transform: translateZ(45px); transform-style: preserve-3d;">
                
                <!-- Main Bold Heading: Let's Shine! -->
                <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-black italic tracking-tight text-[#00366F] leading-none mb-2.5 sm:mb-3 drop-shadow-xs"
                    style="transform: translateZ(20px);">
                    {{ $title }}
                </h2>

                <!-- Subtitle -->
                <p class="font-heading text-sm sm:text-base lg:text-lg font-semibold text-[#002766] tracking-tight mb-5 sm:mb-6"
                   style="transform: translateZ(15px);">
                    {{ $subtitle }}
                </p>

                <!-- White Action Button -->
                <a href="{{ $buttonUrl }}" 
                   class="inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-[#00366F] font-heading text-xs sm:text-sm font-bold tracking-wide px-6 sm:px-8 py-2.5 sm:py-3 rounded-[4px] shadow-md hover:shadow-xl transition-all duration-300 hover:scale-105 active:scale-95 group"
                   style="transform: translateZ(30px);">
                    <span>{{ $buttonText }}</span>
                    <i data-lucide="chevron-right" class="w-4 h-4 stroke-[3] text-[#00366F] group-hover:translate-x-1 transition-transform"></i>
                </a>

            </div>

        </div>

    </div>

</section>

<!-- 3D Interactive Mouse Tilt Script for Yellow Origami Banner -->
<script>
    (function() {
        function initCtaTilt() {
            const card = document.getElementById('ctaRibbonCard');
            if (!card || card.dataset.tiltInitialized) return;
            card.dataset.tiltInitialized = "true";

            let isHovered = false;

            card.addEventListener('mouseenter', () => {
                isHovered = true;
                card.style.transition = 'transform 0.1s ease-out';
            });

            card.addEventListener('mousemove', (e) => {
                if (!isHovered) return;
                const rect = card.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width - 0.5;
                const y = (e.clientY - rect.top) / rect.height - 0.5;
                
                const rotateY = x * 24; // tilt horizontally left/right
                const rotateX = -y * 24; // tilt vertically up/down
                
                card.style.transform = `perspective(1200px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) scale3d(1.05, 1.05, 1.05) translateZ(25px)`;
            });

            card.addEventListener('mouseleave', () => {
                isHovered = false;
                card.style.transition = 'transform 0.6s cubic-bezier(0.2, 0.8, 0.2, 1)';
                card.style.transform = 'perspective(1200px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1) translateZ(0px)';
            });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initCtaTilt);
        } else {
            initCtaTilt();
        }
    })();
</script>
