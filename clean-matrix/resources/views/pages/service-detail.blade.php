@extends('layouts.app')

@section('title', $service['meta_title'] ?? ($service['name'] . ' | Clean Matrix'))
@section('meta_description', $service['meta_desc'] ?? ($service['name'] . ' in Coimbatore by Clean Matrix'))

@push('styles')
<!-- Styles for Clenix Signature Slanted Process Cards (Exact Home Page Match) -->
<style>
    .service-process-box {
        width: 140px;
        height: 140px;
        border-radius: 4px;
        background-color: #287ff9;
        border: 1px solid transparent;
        box-shadow: 0 6px 18px rgba(40, 127, 249, 0.18);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
        transform: rotate(6deg);
        transition: all 0.75s cubic-bezier(0.25, 1, 0.5, 1);
        cursor: pointer;
    }
    @media (min-width: 640px) {
        .service-process-box {
            width: 160px;
            height: 160px;
        }
    }
    .service-process-box .service-process-icon {
        color: #ffffff;
        transition: all 0.75s cubic-bezier(0.25, 1, 0.5, 1);
    }
    .service-process-card-item:hover .service-process-box {
        transform: rotate(0deg) translateY(-8px);
        background-color: #ffffff !important;
        border-color: #e2e8f0 !important;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08) !important;
    }
    .service-process-card-item:hover .service-process-box .service-process-icon {
        color: #287ff9 !important;
        transform: scale(1.15);
    }
</style>
@endpush

@section('content')

<!-- ======================================================== -->
<!-- SECTION 1: DYNAMIC PAGE HERO (Consistent with Home Hero) -->
<!-- ======================================================== -->
<x-page-hero 
    :badge="$service['badge']"
    :title="$service['hero_title']"
    :subtitle="$service['hero_subtitle']"
    :breadcrumb="$service['name']"
    :image="$service['hero_image']"
    :imageAlt="$service['hero_image_alt']"
    :showActions="true"
/>

<!-- ======================================================== -->
<!-- SECTION 2: DONE RIGHT, EVERY TIME (Exact Image 1 Design) -->
<!-- Pure White Background, 8 Green Checkmarks, 3x3 Photo Grid -->
<!-- ======================================================== -->
<section class="py-16 sm:py-20 lg:py-24 bg-white font-body border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-center">

            <!-- LEFT COLUMN: PROMISES & CHECKMARKS -->
            <div class="lg:col-span-7 space-y-6 sm:space-y-7">
                
                <!-- Section Header -->
                <div class="space-y-2">
                    <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                        OUR QUALITY COMMITMENT
                    </p>
                    <h2 class="font-heading text-3xl sm:text-4xl lg:text-[42px] font-bold text-[#0F172A] tracking-tight leading-[1.2]">
                        {{ $service['done_right_title'] }}
                    </h2>
                </div>

                <!-- 8 Checkmark Items with Custom Styled Icons -->
                <div class="space-y-3.5 pt-2">
                    @foreach($service['done_right_points'] as $point)
                        <div class="flex items-start gap-3.5">
                            <div class="w-6 h-6 rounded-md bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5 border border-emerald-200">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <p class="text-sm sm:text-base text-slate-700 font-normal leading-relaxed">
                                {{ $point }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <!-- Instant Action Button -->
                <div class="pt-4">
                    <a href="{{ route('contact') }}" 
                       class="inline-flex items-center gap-2.5 bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading text-sm sm:text-base font-semibold px-7 py-3.5 rounded-xl shadow-md hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5">
                        <i data-lucide="clipboard-check" class="w-4 h-4"></i>
                        <span>Book {{ $service['name'] }}</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

            </div>

            <!-- RIGHT COLUMN: 3x3 SQUARE PHOTO MOSAIC GRID (Exact Image 1 Layout) -->
            <div class="lg:col-span-5">
                <div class="grid grid-cols-3 gap-3 sm:gap-4 p-3 bg-slate-50/80 rounded-2xl border border-slate-200/80 shadow-sm">
                    @foreach($service['gallery'] as $index => $photo)
                        <div class="relative aspect-square rounded-xl overflow-hidden bg-slate-900 group shadow-2xs">
                            <img src="{{ $photo }}" 
                                 alt="{{ $service['name'] }} in action {{ $index + 1 }}" 
                                 class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                            <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-center gap-2 pt-3 text-xs text-slate-400 font-medium">
                    <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
                    <span>Clean Matrix On-Site Verified Staff &amp; German Equipment</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ======================================================== -->
<!-- SECTION 3: COMPARISON TABLE (Ultra-Clean Professional UI) -->
<!-- "What Makes Our [Service Name] Different"                -->
<!-- Clean Matrix vs Other Companies                          -->
<!-- ======================================================== -->
<section class="py-16 sm:py-20 lg:py-24 bg-white font-body border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16 space-y-2">
            <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                THE CLEAN MATRIX ADVANTAGE
            </p>
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-[42px] font-bold text-[#0F172A] tracking-tight">
                {{ $service['comparison_title'] }}
            </h2>
            <p class="font-body text-sm sm:text-base text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto pt-1">
                See how our mechanized equipment, hospital-grade hygiene checklists, and police-verified specialists compare against unorganized local vendors.
            </p>
        </div>

        <!-- Master Comparison Card Container with Proper Shadows and Rounded Corners -->
        <div class="max-w-5xl mx-auto bg-white rounded-2xl sm:rounded-3xl border border-slate-200/90 shadow-xl overflow-hidden">
            
            <!-- Table Header Bar in Sleek Deep Slate & Highlighted Emerald Column -->
            <div class="grid grid-cols-12 bg-[#0F172A] text-white items-center py-4 px-4 sm:px-8 border-b border-slate-800">
                <div class="col-span-4 sm:col-span-4 text-left font-heading text-xs sm:text-sm font-bold tracking-wider text-slate-300 uppercase">
                    Feature
                </div>
                <div class="col-span-4 sm:col-span-4 text-center">
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-[#81BA41] text-white font-heading font-bold text-xs sm:text-sm shadow-sm tracking-wide">
                        <i data-lucide="check-circle-2" class="w-4 h-4"></i>
                        <span>Clean Matrix</span>
                    </span>
                </div>
                <div class="col-span-4 sm:col-span-4 text-center font-heading text-xs sm:text-sm font-semibold tracking-wider text-slate-400 uppercase">
                    Other Companies
                </div>
            </div>

            <!-- Table Rows List with Alternating Hover & Clear Column Layout -->
            <div class="divide-y divide-slate-100">
                @foreach($service['comparison_rows'] as $row)
                    <div class="grid grid-cols-12 py-5 sm:py-6 px-4 sm:px-8 items-center hover:bg-slate-50/70 transition-colors gap-3 sm:gap-4">
                        
                        <!-- Col 1: Feature Title -->
                        <div class="col-span-4 sm:col-span-4 font-heading text-sm sm:text-base font-bold text-[#0F172A] pr-2">
                            <span>{{ $row['feature'] }}</span>
                        </div>

                        <!-- Col 2: Clean Matrix (Emerald Badge + Value Prop) -->
                        <div class="col-span-4 sm:col-span-4 flex flex-col items-center text-center px-2 space-y-1.5">
                            <div class="w-6 h-6 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0 shadow-xs">
                                <i data-lucide="check" class="w-3.5 h-3.5 stroke-[3]"></i>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-800 font-medium leading-relaxed max-w-xs">
                                {{ $row['matrix'] }}
                            </p>
                        </div>

                        <!-- Col 3: Other Companies (Muted Red Badge + Drawback) -->
                        <div class="col-span-4 sm:col-span-4 flex flex-col items-center text-center px-2 space-y-1.5 opacity-75">
                            <div class="w-6 h-6 rounded-full bg-rose-100 text-rose-500 flex items-center justify-center shrink-0">
                                <i data-lucide="x" class="w-3.5 h-3.5 stroke-[3]"></i>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-500 font-normal leading-relaxed max-w-xs">
                                {{ $row['other'] }}
                            </p>
                        </div>

                    </div>
                @endforeach
            </div>

            <!-- Table Reassurance Footer Bar -->
            <div class="bg-slate-50/90 border-t border-slate-200/80 px-6 sm:px-8 py-5 sm:py-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3.5 text-left">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0 shadow-2xs">
                        <i data-lucide="shield-check" class="w-5 h-5 stroke-[2.2]"></i>
                    </div>
                    <div>
                        <p class="font-heading font-bold text-sm sm:text-base text-[#0F172A]">Zero Advance Payment Guarantee</p>
                        <p class="font-body text-xs sm:text-sm text-slate-600 font-normal">Clean Matrix collects payment only after the cleaning meets your approval. No advance. No exceptions.</p>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="shrink-0 inline-flex items-center gap-2 bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading font-semibold text-xs sm:text-sm px-6 py-3 rounded-xl shadow-md hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5">
                    <span>Get Instant Quote</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

        </div>

    </div>
</section>

<!-- ======================================================== -->
<!-- SECTION 4: HOW IT WORKS / OUR WORKING PROCESS             -->
<!-- Exact Home Page Clenix Slanted Cards + Airplane Flight Trail-->
<!-- ======================================================== -->
<section id="how-it-works" class="relative py-20 sm:py-28 bg-white border-t border-slate-100 font-body">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-4">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24 space-y-2">
            <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                HOW IT WORKS
            </p>

            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight tracking-tight text-[#0F172A]">
                Our Working Process
            </h2>
            
            <p class="font-body text-sm sm:text-base text-slate-600 font-light leading-relaxed max-w-2xl mx-auto pt-1">
                Simple, transparent, and hassle-free — experience seamless booking from first enquiry to supervisor-inspected sparkling results.
            </p>
        </div>

        <!-- Working Process Flow Grid & Wide Extended Flight Path -->
        <div class="relative max-w-6xl mx-auto">

            <!-- Background Connecting Dashed Wavy Line & Paper Airplane (Straight on the Line) -->
            <div class="hidden md:block absolute top-[68px] left-0 right-0 w-full pointer-events-none z-0">
                <svg class="w-full h-24 overflow-visible" viewBox="0 0 1200 80" fill="none">
                    <!-- Static Start Point: Blue Ring Circle extended far to the left -->
                    <circle cx="30" cy="50" r="7" stroke="#287ff9" stroke-width="2.5" fill="#ffffff" />
                    <circle cx="30" cy="50" r="2.5" fill="#287ff9" />

                    <!-- Gentle Curved Wavy Dashed Path across entire width -->
                    <path d="M 45,50 C 180,18 300,38 430,46 C 580,56 700,28 850,42 C 980,56 1070,26 1145,15" 
                          stroke="#cbd5e1" 
                          stroke-width="2" 
                          stroke-dasharray="7 7" 
                          stroke-linecap="round" />

                    <!-- Paper Airplane sitting straight at the exact tip of the dashed line -->
                    <g transform="translate(1142, -2) rotate(-10)">
                        <path d="m22 2-7 20-4-9-9-4Z" stroke="#287ff9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        <path d="M22 2 11 13" stroke="#287ff9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                    </g>
                </svg>
            </div>

            <!-- 3 Steps Cards Container (Centered inside extended flight trail) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8 lg:gap-14 relative z-10 items-start max-w-4xl mx-auto">

                <!-- STEP 1 -->
                <div class="service-process-card-item text-center group cursor-pointer flex flex-col items-center">
                    <div class="service-process-box">
                        <div class="service-process-icon">
                            <i data-lucide="{{ $service['steps'][0]['icon'] ?? 'calendar-check' }}" class="w-12 h-12 stroke-[1.8]"></i>
                        </div>
                    </div>
                    <h3 class="font-heading text-xl sm:text-2xl font-medium text-secondary group-hover:text-[#287ff9] transition-colors duration-200 mb-3 tracking-tight">
                        {{ $service['steps'][0]['title'] ?? 'Book Online Form' }}
                    </h3>
                    <p class="font-body text-sm text-neutral-text font-light leading-relaxed max-w-xs mx-auto">
                        {{ $service['steps'][0]['desc'] ?? 'Choose your preferred service package, pick a convenient date & time, and share your property details.' }}
                    </p>
                </div>

                <!-- STEP 2 -->
                <div class="service-process-card-item text-center group cursor-pointer flex flex-col items-center">
                    <div class="service-process-box">
                        <div class="service-process-icon">
                            <i data-lucide="{{ $service['steps'][1]['icon'] ?? 'mail' }}" class="w-12 h-12 stroke-[1.8]"></i>
                        </div>
                    </div>
                    <h3 class="font-heading text-xl sm:text-2xl font-medium text-secondary group-hover:text-[#287ff9] transition-colors duration-200 mb-3 tracking-tight">
                        {{ $service['steps'][1]['title'] ?? 'Get Confirmation' }}
                    </h3>
                    <p class="font-body text-sm text-neutral-text font-light leading-relaxed max-w-xs mx-auto">
                        {{ $service['steps'][1]['desc'] ?? 'Receive instant transparent quote, verified task list, and designated cleaning crew details with ETA.' }}
                    </p>
                </div>

                <!-- STEP 3 -->
                <div class="service-process-card-item text-center group cursor-pointer flex flex-col items-center">
                    <div class="service-process-box">
                        <div class="service-process-icon">
                            <i data-lucide="{{ $service['steps'][2]['icon'] ?? 'smile' }}" class="w-12 h-12 stroke-[1.8]"></i>
                        </div>
                    </div>
                    <h3 class="font-heading text-xl sm:text-2xl font-medium text-secondary group-hover:text-[#287ff9] transition-colors duration-200 mb-3 tracking-tight">
                        {{ $service['steps'][2]['title'] ?? "Let's Enjoy" }}
                    </h3>
                    <p class="font-body text-sm text-neutral-text font-light leading-relaxed max-w-xs mx-auto">
                        {{ $service['steps'][2]['desc'] ?? 'Our verified crew carries out mechanized German deep clean, supervisor inspects, and you enjoy a sparkling space.' }}
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- ======================================================== -->
<!-- SECTION 5: CTA BANNER                                    -->
<!-- ======================================================== -->
@include('components.cta-banner')

@endsection
