@extends('layouts.app')

@section('title', $package['meta_title'] ?? ($package['name'] . ' Packages | Clean Matrix'))
@section('meta_description', $package['meta_desc'] ?? ($package['name'] . ' packages in Coimbatore by Clean Matrix'))

@push('styles')
<!-- Custom Styles for Clenix Packages & Pricing Cards -->
<style>
    .clenix-pricing-card {
        border-radius: 4px;
        transition: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
        position: relative;
        background-color: #ffffff;
    }
    .clenix-pricing-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px -12px rgba(0, 68, 139, 0.12);
        border-color: #00448B !important;
    }
    .clenix-pricing-card:hover .pricing-icon {
        transform: scale(1.14) translateY(-2px);
        color: #00448B;
    }
</style>
@endpush

@section('content')

<!-- ======================================================== -->
<!-- SECTION 1: DYNAMIC PAGE HERO COMPONENT                   -->
<!-- ======================================================== -->
<x-page-hero 
    :badge="$package['badge']"
    :title="$package['hero_title']" 
    :subtitle="$package['hero_subtitle']"
    :breadcrumb="$package['name']" 
    :image="$package['hero_image']" 
    :imageAlt="$package['hero_image_alt']"
    :showActions="true"
/>

<!-- ======================================================== -->
<!-- SECTION 2: PROPERTY-SPECIFIC PACKAGES & SMART COMBOS     -->
<!-- Exact Clenix 3-Card Pricing Table Design                 -->
<!-- ======================================================== -->
<section id="packages" class="relative py-20 sm:py-24 bg-white overflow-hidden border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Heading -->
        <div class="text-center max-w-3xl mx-auto mb-14 sm:mb-16 space-y-2">
            <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                {{ $package['section_badge'] }}
            </p>

            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight tracking-tight text-[#0F172A]">
                {!! $package['section_title'] !!}
            </h2>
            
            <p class="font-body text-sm sm:text-base text-slate-600 font-light leading-relaxed max-w-2xl mx-auto pt-1">
                {{ $package['section_subtitle'] }}
            </p>
        </div>

        <!-- 3 Pricing Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-8 max-w-6xl mx-auto items-stretch">

            @foreach($package['tiers'] as $tier)
                <div class="clenix-pricing-card border border-[#e4e7eb] pt-12 pb-10 px-6 sm:px-8 text-center flex flex-col justify-between group shadow-sm relative {{ !empty($tier['is_popular']) ? 'ring-2 ring-primary/30' : '' }}">
                    
                    @if(!empty($tier['is_popular']))
                        <!-- 100% Solid Airtight Vector Corner Ribbon (Zero-gap 3D folds) -->
                        <svg class="absolute -top-[5px] -left-[5px] w-[130px] h-[130px] z-20 pointer-events-none drop-shadow-sm" viewBox="0 0 130 130" fill="none">
                            <!-- Top 3D Fold (Dark Navy behind card border) -->
                            <polygon points="121,5 126,0 121,0" fill="#002752" />
                            <!-- Left 3D Fold (Dark Navy behind card border) -->
                            <polygon points="5,121 0,126 0,121" fill="#002752" />
                            <!-- Main Diagonal Blue Ribbon (Sash) -->
                            <polygon points="0,95 95,0 126,0 0,126" fill="#00448B" />
                            <!-- Crisp White Ribbon Text -->
                            <text x="55" y="59" transform="rotate(-45 55 55)" fill="#ffffff" font-family="'Poppins', sans-serif" font-size="11.5" font-weight="600" text-anchor="middle" letter-spacing="0.5">Popular Sale!</text>
                        </svg>
                    @endif

                    <div>
                        <!-- Lucide Icon -->
                        <div class="mb-5 flex items-center justify-center">
                            <div class="pricing-icon text-[#00448B] transition-transform duration-300">
                                <i data-lucide="{{ $tier['icon'] ?? 'sparkles' }}" class="w-12 h-12 stroke-[1.8]"></i>
                            </div>
                        </div>

                        <!-- Card Heading -->
                        <h3 class="font-heading text-2xl font-bold text-[#0F172A] tracking-tight mb-8">
                            {{ $tier['name'] }}
                        </h3>

                        <!-- Checklist -->
                        <div class="flex justify-center mb-9">
                            <ul class="space-y-3.5 text-neutral-text text-[15px] font-body font-light text-left w-max mx-auto">
                                @foreach($tier['features'] as $feature)
                                    <li class="flex items-center gap-3">
                                        <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                        <span class="text-slate-700">{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div>
                        <!-- Price Box -->
                        <div class="mb-7">
                            <div class="font-heading text-4xl sm:text-5xl font-semibold text-[#00448B] leading-tight mb-1">
                                {{ $tier['price'] }}
                            </div>
                            <div class="text-[13px] text-neutral-text/75 font-body font-light tracking-wide">
                                {{ $tier['period'] }}
                            </div>
                        </div>

                        <!-- Action Button -->
                        <div class="flex justify-center">
                            <a href="{{ route('contact') }}" 
                               class="inline-flex items-center justify-center gap-2 bg-[#00448B] hover:bg-[#00366f] text-white text-sm font-medium py-3.5 px-8 rounded-[4px] shadow-sm hover:shadow-md transition-all duration-200 w-full group/btn">
                                <span>{{ $tier['btn_text'] ?? 'Choose Plan' }}</span>
                                <i data-lucide="chevron-right" class="w-4 h-4 stroke-[2.5] transition-transform duration-200 group-hover/btn:translate-x-1"></i>
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>

<!-- ======================================================== -->
<!-- SECTION 3: CTA BANNER SECTION                            -->
<!-- ======================================================== -->
@include('components.cta-banner')

@endsection
