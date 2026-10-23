@extends('layouts.app')

@section('title', 'About Clean Matrix | Cleaning Service Team')
@section('meta_description', 'Learn about Clean Matrix, its cleaning and pest control services, service approach and the customers it supports in Coimbatore.')

@section('content')

<!-- ======================================================== -->
<!-- 1. GLOBAL REUSABLE HEADER BANNER (Light Black Overlay)   -->
<!-- ======================================================== -->
<x-page-banner 
    title="About Clean Matrix" 
    breadcrumb="About" 
    :bgImage="asset('images/about-banner.jpg')" 
/>

<!-- ======================================================== -->
<!-- 2. COMPANY STORY & BRAND VISION (Exact Clenix Layout)     -->
<!-- ======================================================== -->
<section class="relative py-16 sm:py-24 bg-white font-body overflow-hidden">

    <!-- Reused Signature Sparkles Watermark on the Left Background -->
    <div class="absolute -left-12 top-1/2 -translate-y-1/2 w-72 sm:w-96 h-72 sm:h-96 pointer-events-none select-none opacity-[0.06] z-0">
        <img src="{{ asset('images/Footer/footer-sparkles.png') }}" alt="" class="w-full h-full object-contain">
    </div>

    <div class="max-w-[1440px] mx-auto px-4 sm:px-8 lg:px-12 xl:px-16 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            <!-- LEFT COLUMN: STORY, PHILOSOPHY & FEATURE BULLETS -->
            <div class="lg:col-span-7 space-y-6 sm:space-y-7">
                
                <!-- Main Section Heading (Single Deep Navy Heading) -->
                <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-medium tracking-tight text-secondary leading-tight sm:leading-tight">
                    Company Story &amp; Brand Vision
                </h2>

                <!-- Story & Philosophy Paragraph 1 -->
                <p class="font-body text-sm sm:text-base text-neutral-text font-light leading-relaxed">
                    Clean Matrix was founded with a clear purpose: to bridge the gap between unorganized local manual cleaning and international facility hygiene standards. Operating across Coimbatore, we combine German mechanized scrubbers, HEPA-filtered extraction vacuums, and eco-certified chemicals to deliver spotless, sanitized spaces.
                </p>

                <!-- Story & Philosophy Paragraph 2 -->
                <p class="font-body text-sm sm:text-base text-neutral-text font-light leading-relaxed">
                    Our guiding philosophy — <strong class="text-secondary font-medium">“Clean Smarter. Live Better.”</strong> — shapes every assignment we undertake. From recurring residential housekeeping and intense post-renovation deep cleaning to audited campus and workplace maintenance, our supervisor-inspected protocols guarantee reliable hygiene without compromise.
                </p>

                <!-- 2 Checkmark Feature Bullet Blocks (Exact Clenix Design) -->
                <div class="space-y-6 pt-3">

                    <!-- Bullet 1: Customer-Focused Quality -->
                    <div class="flex items-start gap-4">
                        <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full border-2 border-primary text-primary flex items-center justify-center shrink-0 mt-0.5 bg-primary/5">
                            <i data-lucide="check" class="w-4 h-4 sm:w-4.5 sm:h-4.5 stroke-[2.8]"></i>
                        </div>
                        <div class="space-y-1">
                            <h3 class="font-heading text-base sm:text-lg font-medium text-secondary tracking-tight">
                                Customer Focused Reviews &amp; Checklists
                            </h3>
                            <p class="font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                                Every residential and commercial cleaning session follows a rigorous multi-point checklist with on-site supervisor sign-off before final handover.
                            </p>
                        </div>
                    </div>

                    <!-- Bullet 2: Safety & Verified Training -->
                    <div class="flex items-start gap-4">
                        <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full border-2 border-primary text-primary flex items-center justify-center shrink-0 mt-0.5 bg-primary/5">
                            <i data-lucide="check" class="w-4 h-4 sm:w-4.5 sm:h-4.5 stroke-[2.8]"></i>
                        </div>
                        <div class="space-y-1">
                            <h3 class="font-heading text-base sm:text-lg font-medium text-secondary tracking-tight">
                                We Are Committed to Safety &amp; Trust
                            </h3>
                            <p class="font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                                100% police-verified and background-checked staff equipped with full PPE safety gear and government-certified, non-toxic formulations safe for children and pets.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- RIGHT COLUMN: CLEAN MATRIX UNIFORMED SPECIALIST PHOTO -->
            <div class="lg:col-span-5">
                <div class="relative rounded-[8px] overflow-hidden shadow-xl border border-slate-100 group">
                    <img 
                        src="{{ asset('images/about/about-staff.jpg') }}" 
                        alt="Clean Matrix Uniformed Cleaning Specialist" 
                        class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-105"
                    >
                    <!-- Subtle Green Accent Border at the Bottom Edge -->
                    <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-primary"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ======================================================== -->
<!-- 3. TARGET CUSTOMER TYPES (Exact Clenix Hover Card UI)     -->
<!-- ======================================================== -->
<section class="relative py-16 sm:py-24 bg-[#f8fafc] font-body border-t border-slate-100">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-8 lg:px-12 xl:px-16">

        <!-- Section Header (Single Clean Blue Heading) -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16 space-y-2.5">
            <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-medium tracking-tight text-secondary">
                Target Customer Types
            </h2>
            <p class="font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed max-w-2xl mx-auto">
                Clean Matrix designs customized hygiene, mechanized scrub, and pest management procedures engineered specifically for each facility type across Coimbatore.
            </p>
        </div>

        <!-- 4-Column Responsive Grid with Clenix Hover-Slide UI -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">

            <!-- ================= CARD 1: RESIDENTIAL ================= -->
            <div class="group relative rounded-[8px] overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 h-[380px] sm:h-[400px] bg-slate-900 cursor-pointer">
                
                <!-- Facility Image with Clean Matrix Staff -->
                <img 
                    src="{{ asset('images/customers/residential.jpg') }}" 
                    alt="Clean Matrix Residential Cleaning for Homes and Villas" 
                    class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110"
                >

                <!-- Scrim Shadow for Crisp Text Visibility -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent pointer-events-none"></div>

                <!-- Sliding Translucent Glassmorphism Drawer Box -->
                <div class="absolute inset-x-0 bottom-0 bg-[#002766]/80 backdrop-blur-md border-t border-white/20 px-5 py-5 text-center text-white transition-all duration-500 ease-in-out transform translate-y-[calc(100%-64px)] group-hover:translate-y-0 flex flex-col justify-center items-center rounded-b-[8px] shadow-2xl">
                    
                    <!-- Always-Visible Card Title Header (66px height bar) -->
                    <h3 class="font-heading text-lg font-semibold tracking-tight text-white mb-2 transition-all">
                        Residential Cleaning
                    </h3>

                    <!-- Hidden Content that Slides Up and Reveals on Hover -->
                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 flex flex-col items-center">
                        <p class="font-body text-xs text-white/85 font-light leading-relaxed mb-4">
                            Deep cleaning, routine housekeeping, and pet &amp; child-safe sanitization for independent villas, apartments, and gated communities.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 bg-[#81BA41] hover:bg-[#72a637] text-white font-heading text-xs font-semibold px-4 py-2 rounded-[4px] transition-all shadow-md hover:shadow-lg">
                            <span>Details</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </a>
                    </div>

                </div>

            </div>

            <!-- ================= CARD 2: SCHOOLS ================= -->
            <div class="group relative rounded-[8px] overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 h-[380px] sm:h-[400px] bg-slate-900 cursor-pointer">
                
                <!-- Facility Image with Clean Matrix Staff -->
                <img 
                    src="{{ asset('images/customers/schools.jpg') }}" 
                    alt="Clean Matrix School Cleaning and Classroom Disinfection" 
                    class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent pointer-events-none"></div>

                <!-- Sliding Translucent Glassmorphism Drawer Box -->
                <div class="absolute inset-x-0 bottom-0 bg-[#002766]/80 backdrop-blur-md border-t border-white/20 px-5 py-5 text-center text-white transition-all duration-500 ease-in-out transform translate-y-[calc(100%-64px)] group-hover:translate-y-0 flex flex-col justify-center items-center rounded-b-[8px] shadow-2xl">
                    
                    <h3 class="font-heading text-lg font-semibold tracking-tight text-white mb-2 transition-all">
                        School Cleaning
                    </h3>

                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 flex flex-col items-center">
                        <p class="font-body text-xs text-white/85 font-light leading-relaxed mb-4">
                            Classroom sanitization, washroom disinfection, and playground hygiene scheduled around school timetables with certified non-toxic chemicals.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 bg-[#81BA41] hover:bg-[#72a637] text-white font-heading text-xs font-semibold px-4 py-2 rounded-[4px] transition-all shadow-md hover:shadow-lg">
                            <span>Details</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </a>
                    </div>

                </div>

            </div>

            <!-- ================= CARD 3: COLLEGES ================= -->
            <div class="group relative rounded-[8px] overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 h-[380px] sm:h-[400px] bg-slate-900 cursor-pointer">
                
                <!-- Facility Image with Clean Matrix Staff -->
                <img 
                    src="{{ asset('images/customers/colleges.jpg') }}" 
                    alt="Clean Matrix College and University Campus Cleaning" 
                    class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent pointer-events-none"></div>

                <!-- Sliding Translucent Glassmorphism Drawer Box -->
                <div class="absolute inset-x-0 bottom-0 bg-[#002766]/80 backdrop-blur-md border-t border-white/20 px-5 py-5 text-center text-white transition-all duration-500 ease-in-out transform translate-y-[calc(100%-64px)] group-hover:translate-y-0 flex flex-col justify-center items-center rounded-b-[8px] shadow-2xl">
                    
                    <h3 class="font-heading text-lg font-semibold tracking-tight text-white mb-2 transition-all">
                        College Cleaning
                    </h3>

                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 flex flex-col items-center">
                        <p class="font-body text-xs text-white/85 font-light leading-relaxed mb-4">
                            High-capacity campus sanitation, corridor scrubbing, auditorium upkeep, and hostel hygiene handled by mechanized heavy-duty floor polishers.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 bg-[#81BA41] hover:bg-[#72a637] text-white font-heading text-xs font-semibold px-4 py-2 rounded-[4px] transition-all shadow-md hover:shadow-lg">
                            <span>Details</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </a>
                    </div>

                </div>

            </div>

            <!-- ================= CARD 4: COMMERCIAL ================= -->
            <div class="group relative rounded-[8px] overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 h-[380px] sm:h-[400px] bg-slate-900 cursor-pointer">
                
                <!-- Facility Image with Clean Matrix Staff -->
                <img 
                    src="{{ asset('images/customers/commercial.jpg') }}" 
                    alt="Clean Matrix Commercial Property and Office Cleaning" 
                    class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent pointer-events-none"></div>

                <!-- Sliding Translucent Glassmorphism Drawer Box -->
                <div class="absolute inset-x-0 bottom-0 bg-[#002766]/80 backdrop-blur-md border-t border-white/20 px-5 py-5 text-center text-white transition-all duration-500 ease-in-out transform translate-y-[calc(100%-64px)] group-hover:translate-y-0 flex flex-col justify-center items-center rounded-b-[8px] shadow-2xl">
                    
                    <h3 class="font-heading text-lg font-semibold tracking-tight text-white mb-2 transition-all">
                        Commercial Properties
                    </h3>

                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 flex flex-col items-center">
                        <p class="font-body text-xs text-white/85 font-light leading-relaxed mb-4">
                            Flexible after-hours and day-shift office maintenance, carpet care, and glass cleaning for corporate workspaces with zero workflow interruption.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 bg-[#81BA41] hover:bg-[#72a637] text-white font-heading text-xs font-semibold px-4 py-2 rounded-[4px] transition-all shadow-md hover:shadow-lg">
                            <span>Details</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- ======================================================== -->
<!-- 4. CTA BANNER SECTION (Exact Clenix Origami 3D Ribbon)   -->
<!-- ======================================================== -->
@include('components.cta-banner')

@endsection

