@extends('layouts.app')

@section('title', 'Cleaning Projects | Clean Matrix')
@section('meta_description', 'Explore real Clean Matrix cleaning projects and learn about the service scope and approach used.')
@section('meta_keywords', 'cleaning projects coimbatore, cleaning case studies, marble polishing before after, floor scrubbing results, post renovation cleaning, deep cleaning evidence')
@section('canonical', route('projects'))

@section('content')

<!-- ======================================================== -->
<!-- 1. DYNAMIC PAGE HERO COMPONENT                           -->
<!-- ======================================================== -->
<x-page-hero 
    badge="PROVEN FIELDWORK &amp; CASE STUDIES"
    title="Featured Cleaning &amp;<br class='hidden sm:inline'> Facility Transformations" 
    subtitle="Explore verified deep sanitation case studies and real before-and-after evidence delivered with German mechanized equipment across Coimbatore."
    breadcrumb="Projects" 
    :image="asset('images/properties/commercial.jpg')" 
    imageAlt="Clean Matrix Cleaning Case Studies"
    :showActions="true"
/>

<!-- ======================================================== -->
<!-- 2. SIGNATURE "BEFORE VS AFTER" TRANSFORMATION SPOTLIGHT  -->
<!-- UI Concept 2: Side-by-Side Highlight Cards               -->
<!-- ======================================================== -->
<section class="py-16 sm:py-20 lg:py-24 bg-white font-body border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16 space-y-2">
            <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                REAL FIELDWORK EVIDENCE
            </p>
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold text-[#0F172A] tracking-tight">
                Side-by-Side Transformation Spotlight
            </h2>
            <p class="font-body text-sm sm:text-base text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto pt-1">
                Witness the dramatic difference delivered by our single-disc mechanized scrubbers and Taski bio-safe descaling solutions on real client properties.
            </p>
        </div>

        <!-- Side-by-Side Transformation Cards -->
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch relative">
                
                <!-- Card 1: BEFORE DEEP CLEAN -->
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group">
                    <div class="relative h-72 sm:h-80 overflow-hidden bg-slate-900">
                        <img src="{{ asset('images/projects/before.jpg') }}" alt="Before Deep Cleaning - Stained Floor" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-black/30"></div>
                        
                        <!-- Top Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-slate-900/90 text-slate-100 text-xs font-heading font-semibold rounded-full uppercase tracking-wider backdrop-blur-md border border-white/20 shadow-sm">
                                <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
                                Before Deep Clean
                            </span>
                        </div>

                        <!-- Bottom Overlay Title -->
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <p class="text-xs font-semibold text-rose-300 uppercase tracking-widest font-heading">Pre-Occupancy Condition</p>
                            <h3 class="font-heading text-lg sm:text-xl font-bold leading-snug">Heavy Paint Splatters &amp; Dull Grout</h3>
                        </div>
                    </div>

                    <!-- Issues Card Body -->
                    <div class="p-6 sm:p-7 space-y-4 flex-1 flex flex-col justify-between bg-slate-50/50">
                        <div class="space-y-2.5">
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider font-heading">Identified Surface Issues:</p>
                            <ul class="space-y-2 text-xs sm:text-sm text-slate-700">
                                <li class="flex items-center gap-2.5">
                                    <i data-lucide="x-circle" class="w-4 h-4 text-rose-500 shrink-0"></i>
                                    <span>Stubborn post-renovation paint drips &amp; cement stains</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <i data-lucide="x-circle" class="w-4 h-4 text-rose-500 shrink-0"></i>
                                    <span>Severely oxidized grout lines with embedded grime</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <i data-lucide="x-circle" class="w-4 h-4 text-rose-500 shrink-0"></i>
                                    <span>Dull, slippery film from conventional acid mopping</span>
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-t border-slate-200/80 flex items-center justify-between text-xs text-slate-500">
                            <span class="font-medium text-rose-600 flex items-center gap-1"><i data-lucide="alert-triangle" class="w-3.5 h-3.5"></i> Unhygienic Surface</span>
                            <span>Inspection Grade: Poor</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: AFTER MECHANIZED SCRUB -->
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group">
                    <div class="relative h-72 sm:h-80 overflow-hidden bg-slate-900">
                        <img src="{{ asset('images/projects/after.jpg') }}" alt="After Mechanized Restoration - Mirror Buffed Floor" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-black/30"></div>
                        
                        <!-- Top Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-[#81BA41] text-white text-xs font-heading font-semibold rounded-full uppercase tracking-wider shadow-md">
                                <i data-lucide="sparkles" class="w-3.5 h-3.5 text-white"></i>
                                After Mechanized Scrub
                            </span>
                        </div>

                        <!-- Bottom Overlay Title -->
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <p class="text-xs font-semibold text-emerald-300 uppercase tracking-widest font-heading">Handover Restoration</p>
                            <h3 class="font-heading text-lg sm:text-xl font-bold leading-snug">100% Mirror-Buffed Italian Marble</h3>
                        </div>
                    </div>

                    <!-- Delivered Improvements Body -->
                    <div class="p-6 sm:p-7 space-y-4 flex-1 flex flex-col justify-between bg-white">
                        <div class="space-y-2.5">
                            <p class="text-xs font-semibold text-emerald-700 uppercase tracking-wider font-heading">Delivered Restoration Scope:</p>
                            <ul class="space-y-2 text-xs sm:text-sm text-slate-700">
                                <li class="flex items-center gap-2.5">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 shrink-0"></i>
                                    <span>Zero paint traces with pH-neutral Taski descalers</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 shrink-0"></i>
                                    <span>Single-disc rotary scrubbed grout restoration</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 shrink-0"></i>
                                    <span>Mirror finish anti-slip protective coating applied</span>
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-t border-slate-200/80 flex items-center justify-between text-xs text-slate-500">
                            <span class="font-semibold text-emerald-600 flex items-center gap-1"><i data-lucide="award" class="w-3.5 h-3.5"></i> 100% Client Sign-off</span>
                            <span class="text-emerald-700 font-medium">Hygiene Grade: A+ Certified</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- ======================================================== -->
<!-- 3. LIVE NUMBERS / MILESTONE PROOF BAR                    -->
<!-- 4-Column Stat Cards with Smooth Count-Up Animation       -->
<!-- ======================================================== -->
<section id="stats-section" class="py-16 sm:py-20 bg-white border-b border-slate-100 font-body relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-14 space-y-1.5">
            <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#81BA41] font-heading">
                TRACK RECORD &amp; CREDIBILITY
            </p>
            <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#0F172A] tracking-tight">
                Numbers That Speak For Our Quality
            </h2>
            <div class="w-12 h-0.5 bg-[#81BA41] mx-auto rounded-full my-2"></div>
            <p class="text-xs sm:text-sm text-slate-500 font-normal">
                Audited fieldwork and operational hygiene delivered across Coimbatore and surrounding regions.
            </p>
        </div>

        <!-- Single Line Seamless Stat Bar (No Card Layout, Center Divider Lines, No Hover Effect) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 divide-y sm:divide-y-0 sm:divide-x divide-slate-200">
            
            <!-- Stat 1: 1,200+ Spaces -->
            <div class="py-6 sm:py-4 px-4 sm:px-6 text-center flex flex-col items-center">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-[#81BA41] flex items-center justify-center mb-3">
                    <i data-lucide="sparkles" class="w-6 h-6"></i>
                </div>
                <div class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#0F172A] tracking-tight mb-1">
                    <span class="count-up" data-target="1200" data-suffix="+" data-comma="true">0</span>
                </div>
                <div class="font-heading text-sm sm:text-base font-bold text-slate-800 mb-1">
                    Spaces Deep Cleaned
                </div>
                <p class="text-xs text-slate-500 font-light leading-relaxed max-w-[220px]">
                    Villas, apartments, duplexes &amp; residential communities in Coimbatore.
                </p>
            </div>

            <!-- Stat 2: 85+ SLAs -->
            <div class="py-6 sm:py-4 px-4 sm:px-6 text-center flex flex-col items-center">
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#00448B] flex items-center justify-center mb-3">
                    <i data-lucide="building-2" class="w-6 h-6"></i>
                </div>
                <div class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#0F172A] tracking-tight mb-1">
                    <span class="count-up" data-target="85" data-suffix="+">0</span>
                </div>
                <div class="font-heading text-sm sm:text-base font-bold text-slate-800 mb-1">
                    Institutional &amp; Corporate SLAs
                </div>
                <p class="text-xs text-slate-500 font-light leading-relaxed max-w-[220px]">
                    Educational schools, university campuses &amp; IT facility contracts.
                </p>
            </div>

            <!-- Stat 3: 99.8% On-Time -->
            <div class="py-6 sm:py-4 px-4 sm:px-6 text-center flex flex-col items-center">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-[#81BA41] flex items-center justify-center mb-3">
                    <i data-lucide="clock-check" class="w-6 h-6"></i>
                </div>
                <div class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#0F172A] tracking-tight mb-1">
                    <span class="count-up" data-target="99.8" data-suffix="%" data-decimals="1">0</span>
                </div>
                <div class="font-heading text-sm sm:text-base font-bold text-slate-800 mb-1">
                    On-Time Handover Rate
                </div>
                <p class="text-xs text-slate-500 font-light leading-relaxed max-w-[220px]">
                    Punctual start and zero-delay completion aligned with schedules.
                </p>
            </div>

            <!-- Stat 4: 100% Verified -->
            <div class="py-6 sm:py-4 px-4 sm:px-6 text-center flex flex-col items-center">
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#00448B] flex items-center justify-center mb-3">
                    <i data-lucide="shield-check" class="w-6 h-6"></i>
                </div>
                <div class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#0F172A] tracking-tight mb-1">
                    <span class="count-up" data-target="100" data-suffix="%">0</span>
                </div>
                <div class="font-heading text-sm sm:text-base font-bold text-slate-800 mb-1">
                    Police-Verified Crew
                </div>
                <p class="text-xs text-slate-500 font-light leading-relaxed max-w-[220px]">
                    Background-audited specialists with biometric verification.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- ======================================================== -->
<!-- 4. HOW IT WORKS / OUR 4-STEP DELIVERY PROCESS            -->
<!-- Exact Design Layout from User Uploaded Reference Image   -->
<!-- Clean Matrix Color Theme (Primary Green & Clenix Blue)   -->
<!-- ======================================================== -->
<section class="py-20 sm:py-28 bg-white font-body border-b border-slate-100 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header (Centered Clean Typography) -->
        <div class="text-center max-w-2xl mx-auto mb-16 sm:mb-20 space-y-3">
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold text-[#0F172A] tracking-tight">
                How it works
            </h2>
            <p class="font-body text-sm sm:text-base text-slate-500 font-normal leading-relaxed max-w-xl mx-auto">
                Clean Matrix project workflow combines transparent audits, German mechanized equipment, and 100% certified client handovers.
            </p>
        </div>

        <!-- Flow Container with Curved Connecting Dashed Wave -->
        <div class="relative max-w-6xl mx-auto">

            <!-- Subtle Connecting Dashed Wavy Line (Visible on Desktop) -->
            <div class="hidden lg:block absolute top-[60px] left-[10%] right-[10%] w-[80%] pointer-events-none z-0">
                <svg class="w-full h-20 overflow-visible" viewBox="0 0 900 60" fill="none">
                    <!-- Smooth S-curve wave traveling across all 4 cards -->
                    <path d="M 30,30 C 130,5 200,55 300,30 C 400,5 500,55 600,30 C 700,5 770,55 870,30" 
                          stroke="#e2e8f0" 
                          stroke-width="2" 
                          stroke-dasharray="6 6" 
                          stroke-linecap="round" />
                </svg>
            </div>

            <!-- 4-Steps Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 sm:gap-10 lg:gap-8 relative z-10 items-start">
                
                <!-- =================================================== -->
                <!-- STEP 1: Site Inspection & Audit                     -->
                <!-- =================================================== -->
                <div class="flex flex-col items-center text-center group cursor-pointer">
                    
                    <!-- Top Visual Graphic Mockup Card -->
                    <div class="h-32 flex items-center justify-center mb-6 relative">
                        <div class="w-40 h-28 bg-white rounded-2xl shadow-sm border border-slate-200/90 p-3.5 flex flex-col justify-between relative group-hover:-translate-y-2 group-hover:shadow-md transition-all duration-300">
                            <!-- Skeleton Rows -->
                            <div class="space-y-1.5">
                                <div class="w-3/4 h-2 bg-slate-100 rounded-full"></div>
                                <div class="w-full h-2 bg-slate-100 rounded-full"></div>
                                <div class="w-1/2 h-2 bg-slate-100 rounded-full"></div>
                            </div>

                            <!-- Bottom Accent Button in Brand Green -->
                            <div class="bg-[#81BA41] text-white py-1.5 px-3 rounded-lg text-[11px] font-heading font-semibold flex items-center justify-center gap-1.5 shadow-sm">
                                <i data-lucide="clipboard-check" class="w-3.5 h-3.5 text-white"></i>
                                <span>Free Audit</span>
                            </div>

                            <!-- Floating Top Right Badge -->
                            <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-emerald-600 text-white flex items-center justify-center shadow-md border-2 border-white">
                                <i data-lucide="map-pin" class="w-3 h-3"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Step Title -->
                    <h3 class="font-heading text-lg sm:text-xl font-bold text-[#0F172A] group-hover:text-emerald-600 transition-colors mb-2 tracking-tight">
                        Site Inspection &amp; Audit
                    </h3>

                    <!-- Step Description -->
                    <p class="font-body text-xs sm:text-sm text-slate-500 font-light leading-relaxed max-w-[230px] mx-auto">
                        Free on-site assessment, square-footage measurement, and custom stain severity analysis.
                    </p>
                </div>

                <!-- =================================================== -->
                <!-- STEP 2: Chemical & Tech Plan                        -->
                <!-- =================================================== -->
                <div class="flex flex-col items-center text-center group cursor-pointer">
                    
                    <!-- Top Visual Graphic Mockup Card (Bar Chart + Shield Badge) -->
                    <div class="h-32 flex items-center justify-center mb-6 relative">
                        <div class="w-40 h-28 bg-white rounded-2xl shadow-sm border border-slate-200/90 p-3.5 flex flex-col justify-end relative group-hover:-translate-y-2 group-hover:shadow-md transition-all duration-300">
                            <!-- Vertical Bars in Brand Colors -->
                            <div class="flex items-end justify-center gap-2 pb-1">
                                <div class="w-3.5 h-10 bg-[#81BA41] rounded-t-sm"></div>
                                <div class="w-3.5 h-16 bg-[#00448B] rounded-t-sm"></div>
                                <div class="w-3.5 h-7 bg-slate-200 rounded-t-sm"></div>
                                <div class="w-3.5 h-14 bg-[#00448B] rounded-t-sm"></div>
                                <div class="w-3.5 h-11 bg-[#81BA41] rounded-t-sm"></div>
                            </div>

                            <!-- Floating Top Right Shield Badge -->
                            <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-[#00448B] text-white flex items-center justify-center shadow-md border-2 border-white">
                                <i data-lucide="shield" class="w-3 h-3"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Step Title -->
                    <h3 class="font-heading text-lg sm:text-xl font-bold text-[#0F172A] group-hover:text-[#00448B] transition-colors mb-2 tracking-tight">
                        Chemical &amp; Tech Plan
                    </h3>

                    <!-- Step Description -->
                    <p class="font-body text-xs sm:text-sm text-slate-500 font-light leading-relaxed max-w-[230px] mx-auto">
                        Selection of German mechanized scrubbers and certified Taski bio-safe chemical descalers.
                    </p>
                </div>

                <!-- =================================================== -->
                <!-- STEP 3: Mechanized Deep Execution                   -->
                <!-- =================================================== -->
                <div class="flex flex-col items-center text-center group cursor-pointer">
                    
                    <!-- Top Visual Graphic Mockup Card (German Scrubber Graphic) -->
                    <div class="h-32 flex items-center justify-center mb-6 relative">
                        <div class="w-40 h-28 bg-white rounded-2xl shadow-sm border border-slate-200/90 p-3.5 flex flex-col justify-between relative group-hover:-translate-y-2 group-hover:shadow-md transition-all duration-300">
                            <!-- Rotating Disc Visual -->
                            <div class="flex items-center justify-center py-1">
                                <div class="w-10 h-10 rounded-full border-2 border-dashed border-[#00448B] flex items-center justify-center bg-blue-50/50">
                                    <i data-lucide="sparkles" class="w-5 h-5 text-[#00448B]"></i>
                                </div>
                            </div>

                            <!-- Bottom Accent Button in Clenix Blue -->
                            <div class="bg-[#00448B] text-white py-1.5 px-3 rounded-lg text-[11px] font-heading font-semibold flex items-center justify-center gap-1.5 shadow-sm">
                                <i data-lucide="zap" class="w-3.5 h-3.5 text-white"></i>
                                <span>German Tech</span>
                            </div>

                            <!-- Floating Top Right Badge -->
                            <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-emerald-600 text-white flex items-center justify-center shadow-md border-2 border-white">
                                <i data-lucide="shield-check" class="w-3 h-3"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Step Title -->
                    <h3 class="font-heading text-lg sm:text-xl font-bold text-[#0F172A] group-hover:text-[#00448B] transition-colors mb-2 tracking-tight">
                        Mechanized Execution
                    </h3>

                    <!-- Step Description -->
                    <p class="font-body text-xs sm:text-sm text-slate-500 font-light leading-relaxed max-w-[230px] mx-auto">
                        Trained specialists deployed with full safety PPE kits and rotary scrubbers for deep sanitization.
                    </p>
                </div>

                <!-- =================================================== -->
                <!-- STEP 4: Supervisor Sign-off                         -->
                <!-- =================================================== -->
                <div class="flex flex-col items-center text-center group cursor-pointer">
                    
                    <!-- Top Visual Graphic Mockup Card (100% Quality Pass Tag) -->
                    <div class="h-32 flex items-center justify-center mb-6 relative">
                        <div class="w-40 h-28 bg-white rounded-2xl shadow-sm border border-slate-200/90 p-3.5 flex flex-col justify-between relative group-hover:-translate-y-2 group-hover:shadow-md transition-all duration-300">
                            <!-- Score Tag Row -->
                            <div class="flex items-center justify-between text-xs font-heading font-bold text-slate-800">
                                <span class="flex items-center gap-1 text-emerald-600">
                                    <i data-lucide="check-circle" class="w-3.5 h-3.5"></i>
                                    <span>Audit Pass</span>
                                </span>
                                <span class="text-[10px] text-slate-400 font-normal">50 / 50</span>
                            </div>

                            <!-- Bottom Accent Button in Brand Green -->
                            <div class="bg-[#81BA41] text-white py-1.5 px-3 rounded-lg text-[11px] font-heading font-semibold flex items-center justify-center gap-1.5 shadow-sm">
                                <i data-lucide="award" class="w-3.5 h-3.5 text-white"></i>
                                <span>100% Handover</span>
                            </div>

                            <!-- Floating Top Right Badge -->
                            <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-amber-500 text-white flex items-center justify-center shadow-md border-2 border-white">
                                <i data-lucide="star" class="w-3 h-3"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Step Title -->
                    <h3 class="font-heading text-lg sm:text-xl font-bold text-[#0F172A] group-hover:text-emerald-600 transition-colors mb-2 tracking-tight">
                        Supervisor Sign-off
                    </h3>

                    <!-- Step Description -->
                    <p class="font-body text-xs sm:text-sm text-slate-500 font-light leading-relaxed max-w-[230px] mx-auto">
                        50-point checklist inspection followed by 100% client walkthrough and sign-off.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- ======================================================== -->
<!-- 5. CTA BANNER COMPONENT                                  -->
<!-- ======================================================== -->
@include('components.cta-banner')

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // IntersectionObserver for Smooth Number Count-Up Animation
        const statsSection = document.getElementById('stats-section');
        const counters = document.querySelectorAll('.count-up');
        let animated = false;

        if (statsSection && counters.length > 0) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting && !animated) {
                        animated = true;
                        animateCounters();
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.3
            });

            observer.observe(statsSection);
        }

        function animateCounters() {
            const duration = 2000; // 2 seconds animation duration

            counters.forEach((counter) => {
                const target = parseFloat(counter.getAttribute('data-target'));
                const suffix = counter.getAttribute('data-suffix') || '';
                const hasComma = counter.getAttribute('data-comma') === 'true';
                const decimals = parseInt(counter.getAttribute('data-decimals') || '0', 10);
                const startTime = performance.now();

                function update(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);

                    // Quartic Ease-Out Curve for butter-smooth deceleration
                    const ease = 1 - Math.pow(1 - progress, 4);
                    const current = target * ease;

                    if (hasComma) {
                        counter.textContent = Math.floor(current).toLocaleString('en-IN') + suffix;
                    } else if (decimals > 0) {
                        counter.textContent = current.toFixed(decimals) + suffix;
                    } else {
                        counter.textContent = Math.floor(current) + suffix;
                    }

                    if (progress < 1) {
                        requestAnimationFrame(update);
                    } else {
                        // Ensure final exact value
                        if (hasComma) {
                            counter.textContent = target.toLocaleString('en-IN') + suffix;
                        } else if (decimals > 0) {
                            counter.textContent = target.toFixed(decimals) + suffix;
                        } else {
                            counter.textContent = target + suffix;
                        }
                    }
                }

                requestAnimationFrame(update);
            });
        }
    });
</script>
@endpush
