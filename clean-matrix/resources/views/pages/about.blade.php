@extends('layouts.app')

@section('title', 'About Clean Matrix | Cleaning Service Team')
@section('meta_description', 'Learn about Clean Matrix, its cleaning and pest control services, service approach and the customers it supports.')
@section('meta_keywords', 'about clean matrix, cleaning company coimbatore, verified cleaning crew, mechanized cleaning standards, Diversey Taski chemicals, facility care')
@section('canonical', route('about'))

@section('content')

<!-- ======================================================== -->
<!-- 1. DYNAMIC PAGE HERO COMPONENT (2-Column White Layout)   -->
<!-- ======================================================== -->
<x-page-hero 
    badge="ABOUT CLEAN MATRIX"
    title="Setting the Standard in<br class='hidden sm:inline'> Mechanized Cleaning"
    subtitle="Combining German scrubbing technology, eco-certified formulations, and police-verified specialists to deliver spotless, sanitized homes and workspaces."
    breadcrumb="About" 
    :image="asset('images/about-hero-specialist.jpg')" 
    imageAlt="Clean Matrix Cleaning Specialist"
    :showActions="true"
/>

<!-- ======================================================== -->
<!-- 2. COMPANY STORY & BRAND VISION                          -->
<!-- ======================================================== -->
<section class="relative py-16 sm:py-24 bg-white font-body overflow-hidden border-b border-slate-100">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-8 lg:px-12 xl:px-16 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            <!-- LEFT COLUMN: STORY, PHILOSOPHY & FEATURE BULLETS -->
            <div class="lg:col-span-7 space-y-6 sm:space-y-7">
                
                <!-- Small Green Heading & Main Section Heading -->
                <div class="space-y-2">
                    <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                        OUR STORY &amp; VISION
                    </p>
                    <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#0F172A] leading-tight">
                        Company Story &amp; Brand Vision
                    </h2>
                </div>

                <!-- Story & Philosophy Paragraph 1 -->
                <p class="font-body text-base text-slate-600 font-normal leading-relaxed">
                    Clean Matrix was founded with a clear purpose: to bridge the gap between unorganized local manual cleaning and international facility hygiene standards. Operating across Coimbatore, we combine German mechanized scrubbers, HEPA-filtered extraction vacuums, and eco-certified chemicals to deliver spotless, sanitized spaces.
                </p>

                <!-- Story & Philosophy Paragraph 2 -->
                <p class="font-body text-base text-slate-600 font-normal leading-relaxed">
                    Our guiding philosophy — <strong class="text-[#0F172A] font-bold">“Clean Smarter. Live Better.”</strong> — shapes every assignment we undertake. From recurring residential housekeeping and intense post-renovation deep cleaning to audited campus and workplace maintenance, our supervisor-inspected protocols guarantee reliable hygiene without compromise.
                </p>

                <!-- 2 Checkmark Feature Bullet Blocks -->
                <div class="space-y-6 pt-3">

                    <!-- Bullet 1: Customer-Focused Quality -->
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full border-2 border-emerald-600 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5 bg-emerald-50">
                            <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                        </div>
                        <div class="space-y-1">
                            <h3 class="font-heading text-lg sm:text-xl font-bold text-[#0F172A] tracking-tight">
                                Customer Focused Reviews &amp; Checklists
                            </h3>
                            <p class="font-body text-sm text-slate-600 font-normal leading-relaxed">
                                Every residential and commercial cleaning session follows a rigorous multi-point checklist with on-site supervisor sign-off before final handover.
                            </p>
                        </div>
                    </div>

                    <!-- Bullet 2: Safety & Verified Training -->
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full border-2 border-emerald-600 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5 bg-emerald-50">
                            <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                        </div>
                        <div class="space-y-1">
                            <h3 class="font-heading text-lg sm:text-xl font-bold text-[#0F172A] tracking-tight">
                                We Are Committed to Safety &amp; Trust
                            </h3>
                            <p class="font-body text-sm text-slate-600 font-normal leading-relaxed">
                                100% police-verified and background-checked staff equipped with full PPE safety gear and government-certified, non-toxic formulations safe for children and pets.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- RIGHT COLUMN: CLEAN MATRIX UNIFORMED SPECIALIST PHOTO -->
            <div class="lg:col-span-5">
                <div class="relative rounded-2xl overflow-hidden shadow-xl border border-slate-100 group select-none">
                    <img 
                        src="{{ asset('images/about/about-staff.jpg') }}" 
                        alt="Clean Matrix Uniformed Cleaning Specialist" 
                        class="w-full h-auto object-cover transition-transform duration-700 ease-out group-hover:scale-105 pointer-events-none select-none"
                    >
                    <!-- Subtle Green Accent Border at the Bottom Edge -->
                    <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-[#81BA41]"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ======================================================== -->
<!-- 3. TARGET CUSTOMER TYPES (Pure White Background)         -->
<!-- ======================================================== -->
<section class="relative py-16 sm:py-24 bg-white font-body border-b border-slate-100">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-8 lg:px-12 xl:px-16">

        <!-- Section Header with Small Green Heading -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16 space-y-2">
            <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                WHO WE SERVE
            </p>
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#0F172A]">
                Target Customer Types
            </h2>
            <p class="font-body text-sm sm:text-base text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto pt-1">
                Clean Matrix designs customized hygiene, mechanized scrub, and pest management procedures engineered specifically for each facility type across Coimbatore.
            </p>
        </div>

        <!-- 4-Column Responsive Grid with Hover-Slide UI -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">

            <!-- ================= CARD 1: RESIDENTIAL ================= -->
            <div class="group relative rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 h-[380px] sm:h-[400px] bg-slate-900 cursor-pointer">
                
                <!-- Facility Image with Clean Matrix Staff -->
                <img 
                    src="{{ asset('images/customers/residential.jpg') }}" 
                    alt="Clean Matrix Residential Cleaning for Homes and Villas" 
                    class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110"
                >

                <!-- Scrim Shadow for Crisp Text Visibility -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent pointer-events-none"></div>

                <!-- Sliding Translucent Glassmorphism Drawer Box -->
                <div class="absolute inset-x-0 bottom-0 bg-[#0F172A]/90 backdrop-blur-md border-t border-white/10 px-5 py-5 text-center text-white transition-all duration-500 ease-in-out transform translate-y-[calc(100%-64px)] group-hover:translate-y-0 flex flex-col justify-center items-center rounded-b-xl shadow-2xl">
                    
                    <!-- Always-Visible Card Title Header -->
                    <h3 class="font-heading text-lg font-bold tracking-tight text-white mb-2 transition-all">
                        Residential Cleaning
                    </h3>

                    <!-- Hidden Content that Slides Up and Reveals on Hover -->
                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 flex flex-col items-center">
                        <p class="font-body text-xs text-slate-200 font-normal leading-relaxed mb-4">
                            Deep cleaning, routine housekeeping, and pet &amp; child-safe sanitization for independent villas, apartments, and gated communities.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading text-xs font-semibold px-4 py-2 rounded-lg transition-all shadow-md hover:shadow-lg">
                            <span>Get a Quote</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </a>
                    </div>

                </div>

            </div>

            <!-- ================= CARD 2: SCHOOLS ================= -->
            <div class="group relative rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 h-[380px] sm:h-[400px] bg-slate-900 cursor-pointer">
                
                <!-- Facility Image with Clean Matrix Staff -->
                <img 
                    src="{{ asset('images/customers/schools.jpg') }}" 
                    alt="Clean Matrix School Cleaning and Classroom Disinfection" 
                    class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent pointer-events-none"></div>

                <!-- Sliding Translucent Glassmorphism Drawer Box -->
                <div class="absolute inset-x-0 bottom-0 bg-[#0F172A]/90 backdrop-blur-md border-t border-white/10 px-5 py-5 text-center text-white transition-all duration-500 ease-in-out transform translate-y-[calc(100%-64px)] group-hover:translate-y-0 flex flex-col justify-center items-center rounded-b-xl shadow-2xl">
                    
                    <h3 class="font-heading text-lg font-bold tracking-tight text-white mb-2 transition-all">
                        School Cleaning
                    </h3>

                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 flex flex-col items-center">
                        <p class="font-body text-xs text-slate-200 font-normal leading-relaxed mb-4">
                            Classroom sanitization, washroom disinfection, and playground hygiene scheduled around school timetables with certified non-toxic chemicals.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading text-xs font-semibold px-4 py-2 rounded-lg transition-all shadow-md hover:shadow-lg">
                            <span>Get a Quote</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </a>
                    </div>

                </div>

            </div>

            <!-- ================= CARD 3: COLLEGES ================= -->
            <div class="group relative rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 h-[380px] sm:h-[400px] bg-slate-900 cursor-pointer">
                
                <!-- Facility Image with Clean Matrix Staff -->
                <img 
                    src="{{ asset('images/customers/colleges.jpg') }}" 
                    alt="Clean Matrix College and University Campus Cleaning" 
                    class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent pointer-events-none"></div>

                <!-- Sliding Translucent Glassmorphism Drawer Box -->
                <div class="absolute inset-x-0 bottom-0 bg-[#0F172A]/90 backdrop-blur-md border-t border-white/10 px-5 py-5 text-center text-white transition-all duration-500 ease-in-out transform translate-y-[calc(100%-64px)] group-hover:translate-y-0 flex flex-col justify-center items-center rounded-b-xl shadow-2xl">
                    
                    <h3 class="font-heading text-lg font-bold tracking-tight text-white mb-2 transition-all">
                        College Cleaning
                    </h3>

                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 flex flex-col items-center">
                        <p class="font-body text-xs text-slate-200 font-normal leading-relaxed mb-4">
                            High-capacity campus sanitation, corridor scrubbing, auditorium upkeep, and hostel hygiene handled by mechanized heavy-duty floor polishers.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading text-xs font-semibold px-4 py-2 rounded-lg transition-all shadow-md hover:shadow-lg">
                            <span>Get a Quote</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </a>
                    </div>

                </div>

            </div>

            <!-- ================= CARD 4: COMMERCIAL ================= -->
            <div class="group relative rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 h-[380px] sm:h-[400px] bg-slate-900 cursor-pointer">
                
                <!-- Facility Image with Clean Matrix Staff -->
                <img 
                    src="{{ asset('images/customers/commercial.jpg') }}" 
                    alt="Clean Matrix Commercial Property and Office Cleaning" 
                    class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent pointer-events-none"></div>

                <!-- Sliding Translucent Glassmorphism Drawer Box -->
                <div class="absolute inset-x-0 bottom-0 bg-[#0F172A]/90 backdrop-blur-md border-t border-white/10 px-5 py-5 text-center text-white transition-all duration-500 ease-in-out transform translate-y-[calc(100%-64px)] group-hover:translate-y-0 flex flex-col justify-center items-center rounded-b-xl shadow-2xl">
                    
                    <h3 class="font-heading text-lg font-bold tracking-tight text-white mb-2 transition-all">
                        Commercial Properties
                    </h3>

                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 flex flex-col items-center">
                        <p class="font-body text-xs text-slate-200 font-normal leading-relaxed mb-4">
                            Flexible after-hours and day-shift office maintenance, carpet care, and glass cleaning for corporate workspaces with zero workflow interruption.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading text-xs font-semibold px-4 py-2 rounded-lg transition-all shadow-md hover:shadow-lg">
                            <span>Get a Quote</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- ======================================================== -->
<!-- 4. CTA BANNER SECTION                                    -->
<!-- ======================================================== -->
@include('components.cta-banner')

@endsection
