@props([
    'badge' => null,
    'title' => 'Clean Matrix',
    'subtitle' => 'Professional mechanized cleaning and pest control services across Coimbatore.',
    'breadcrumb' => null,
    'image' => asset('images/hero-sections.png'),
    'imageAlt' => 'Clean Matrix Professional Cleaning',
    'showActions' => true,
    'highlights' => null,
])

@php
    $crumbText = $breadcrumb ?? strip_tags($title);
    $badgeText = $badge ?? (strtoupper($crumbText));
@endphp

<!-- ======================================================== -->
<!-- COMPONENT: DYNAMIC PAGE HERO (Consistent with Home Hero) -->
<!-- Clean White Background, Bold Lexend Typography, 2-Column -->
<!-- Left: Content, Breadcrumb & Action Btns | Right: Related Image -->
<!-- ======================================================== -->
<section class="relative bg-white pt-10 sm:pt-14 lg:pt-16 pb-14 sm:pb-18 lg:pb-20 overflow-hidden font-body border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

            <!-- ================= LEFT COLUMN: HERO CONTENT ================= -->
            <div class="lg:col-span-7 space-y-6 sm:space-y-7">

                <!-- 1. Small Emerald Green Heading & Breadcrumb -->
                <div class="space-y-2.5">
                    <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                        {!! $badgeText !!}
                    </p>
                    
                    <!-- Breadcrumbs -->
                    <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-xs sm:text-sm text-slate-500 font-medium">
                        <a href="{{ route('home') }}" class="hover:text-emerald-600 transition-colors inline-flex items-center gap-1">
                            <i data-lucide="home" class="w-3.5 h-3.5"></i>
                            <span>Home</span>
                        </a>
                        <span class="text-slate-300">/</span>
                        <span class="text-slate-800 font-semibold">{{ $crumbText }}</span>
                    </nav>
                </div>

                <!-- 2. Main Large Headline in Lexend Bold (Spacious Y-Axis Line Height) -->
                <h1 class="font-heading text-4xl sm:text-5xl lg:text-[54px] font-bold text-[#0F172A] tracking-tight leading-[1.24] sm:leading-[1.28] lg:leading-[1.3]">
                    {!! $title !!}
                </h1>

                <!-- 3. Clean Descriptive Subtitle -->
                @if($subtitle)
                    <p class="font-body text-base sm:text-lg text-slate-600 font-normal leading-relaxed max-w-xl">
                        {{ $subtitle }}
                    </p>
                @endif

                <!-- 4. Two Action Buttons (Get a Quote & Transparent WhatsApp) -->
                @if($showActions)
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-1">
                        
                        <!-- Button 1: Get a Quote -->
                        <a href="{{ route('contact') }}" 
                           class="inline-flex items-center justify-center gap-2.5 bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading text-sm sm:text-base font-semibold px-7 py-3.5 rounded-xl shadow-md hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 group">
                            <i data-lucide="clipboard-check" class="w-4 h-4 shrink-0"></i>
                            <span>Get a Quote</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform shrink-0"></i>
                        </a>

                        <!-- Button 2: WhatsApp (Transparent bg, Outline border) -->
                        <a href="https://wa.me/919500475798?text=Hello%20Clean%20Matrix%2C%20I%20would%20like%20to%20know%20more%20about%20{{ urlencode($crumbText) }}" 
                           target="_blank" 
                           rel="noopener" 
                           class="inline-flex items-center justify-center gap-2.5 bg-transparent border-2 border-[#25D366] text-[#25D366] hover:bg-[#25D366] hover:text-white font-heading text-sm sm:text-base font-semibold px-7 py-3.5 rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-green-500/20 hover:-translate-y-0.5 active:translate-y-0 group">
                            <span class="w-6 h-6 flex items-center justify-center shrink-0">
                                <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="WhatsApp" class="w-full h-full object-contain group-hover:scale-110 transition-transform">
                            </span>
                            <span>WhatsApp Quote</span>
                        </a>

                    </div>
                @endif

                <!-- 5. Trust / Key Highlights Strip -->
                <div class="pt-2 flex flex-wrap items-center gap-x-6 gap-y-2 text-xs sm:text-sm font-medium text-slate-600">
                    <div class="flex items-center gap-1.5 text-emerald-600">
                        <i data-lucide="check-circle-2" class="w-4 h-4 shrink-0"></i>
                        <span class="text-slate-700 font-semibold">100% Verified Staff</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-emerald-600">
                        <i data-lucide="shield-check" class="w-4 h-4 shrink-0"></i>
                        <span class="text-slate-700 font-semibold">German Equipment</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-emerald-600">
                        <i data-lucide="sparkles" class="w-4 h-4 shrink-0"></i>
                        <span class="text-slate-700 font-semibold">Eco-Safe Chemicals</span>
                    </div>
                </div>

            </div>

            <!-- ================= RIGHT COLUMN: PAGE RELATED IMAGE ================= -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end relative">
                
                @if(str_ends_with($image, '.png'))
                    <!-- Transparent PNG Display (Matching Home Hero layout) -->
                    <div class="relative w-full max-w-[500px] sm:max-w-[560px] lg:max-w-[620px] select-none">
                        <img src="{{ $image }}" 
                             alt="{{ $imageAlt }}" 
                             draggable="false" 
                             oncontextmenu="return false;"
                             class="w-full h-auto object-contain select-none pointer-events-none drop-shadow-xl hover:scale-102 transition-transform duration-500">
                    </div>
                @else
                    <!-- Photo Display in Premium Clean Rounded Card with Subtle Border and Shadow -->
                    <div class="relative w-full max-w-[500px] sm:max-w-[540px] rounded-2xl overflow-hidden shadow-xl border border-slate-100 group select-none">
                        <img src="{{ $image }}" 
                             alt="{{ $imageAlt }}" 
                             draggable="false" 
                             oncontextmenu="return false;"
                             class="w-full h-[320px] sm:h-[380px] lg:h-[420px] object-cover transition-transform duration-700 ease-out group-hover:scale-105 select-none pointer-events-none">
                        <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-[#81BA41]"></div>
                    </div>
                @endif

            </div>

        </div>
    </div>
</section>
