<!-- Custom Styles for Clenix Packages & Pricing Cards -->
<style>
    /* Clenix Signature Pricing Card Styling */
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

<!-- ======================================================== -->
<!-- PACKAGES / OFFERS SECTION (Exact Clenix Pricing Table 1) -->
<!-- ======================================================== -->
<section id="packages" class="relative py-20 sm:py-24 bg-white overflow-hidden border-t border-neutral-border/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Heading -->
        <div class="text-center max-w-3xl mx-auto mb-14 sm:mb-16 space-y-2">
            <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                PLANS &amp; PRICING
            </p>

            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight tracking-tight text-[#0F172A]">
                Packages &amp; Smart Combo Offers
            </h2>
            
            <p class="font-body text-sm sm:text-base text-slate-600 font-light leading-relaxed max-w-2xl mx-auto pt-1">
                Transparent monthly plans with mechanized German scrubbing, certified eco-friendly chemicals, and free home care kits.
            </p>
        </div>

        <!-- 3 Pricing Cards Grid (Exact Clenix Layout) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-8 max-w-6xl mx-auto items-stretch">

            <!-- ======================================================== -->
            <!-- CARD 1: 4-IN-1 ESSENTIAL PACKAGE                        -->
            <!-- ======================================================== -->
            <div class="clenix-pricing-card border border-[#e4e7eb] pt-12 pb-10 px-6 sm:px-8 text-center flex flex-col justify-between group shadow-sm">
                
                <div>
                    <!-- Original Lucide Icon: spray-can -->
                    <div class="mb-5 flex items-center justify-center">
                        <div class="pricing-icon text-[#00448B] transition-transform duration-300">
                            <i data-lucide="spray-can" class="w-12 h-12 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <!-- Single-Line Heading -->
                    <h3 class="font-heading text-2xl font-medium text-secondary-sub mb-8 tracking-tight whitespace-nowrap">
                        4-in-1 Essential
                    </h3>

                    <!-- Straight Vertical Alignment Checklist -->
                    <div class="flex justify-center mb-9">
                        <ul class="space-y-3.5 text-neutral-text text-[15px] font-body font-light text-left w-max mx-auto">
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">2 Bedrooms Cleaning</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">Vacuuming & Scrubbing</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">2 Bathroom Cleaning</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">Window & Glass Wash</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">1 Livingroom Cleaning</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <!-- Price Box: ₹ and numbers at exact same height -->
                    <div class="mb-7">
                        <div class="font-heading text-4xl sm:text-5xl font-semibold text-[#00448B] leading-tight mb-1">
                            ₹2,499
                        </div>
                        <div class="text-[13px] text-neutral-text/75 font-body font-light tracking-wide">
                            / Per month
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="flex justify-center">
                        <a href="#quote" class="inline-flex items-center justify-center gap-2 bg-[#00448B] hover:bg-[#00366f] text-white text-sm font-medium py-3.5 px-8 rounded-[4px] shadow-sm hover:shadow-md transition-all duration-200 group-hover:bg-[#00366f] w-48 sm:w-52">
                            <span>Book Now</span>
                            <i data-lucide="chevron-right" class="w-4 h-4 stroke-[2.5] transition-transform duration-200 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- ======================================================== -->
            <!-- CARD 2: 6-IN-1 COMPREHENSIVE (WITH POPULAR SALE RIBBON)   -->
            <!-- ======================================================== -->
            <div class="clenix-pricing-card border border-[#e4e7eb] pt-12 pb-10 px-6 sm:px-8 text-center flex flex-col justify-between group shadow-sm relative">
                
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

                <div>
                    <!-- Original Lucide Icon: sparkles -->
                    <div class="mb-5 flex items-center justify-center">
                        <div class="pricing-icon text-[#00448B] transition-transform duration-300">
                            <i data-lucide="sparkles" class="w-12 h-12 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <!-- Single-Line Heading -->
                    <h3 class="font-heading text-2xl font-medium text-secondary-sub mb-8 tracking-tight whitespace-nowrap">
                        6-in-1 Comprehensive
                    </h3>

                    <!-- Straight Vertical Alignment Checklist -->
                    <div class="flex justify-center mb-9">
                        <ul class="space-y-3.5 text-neutral-text text-[15px] font-body font-light text-left w-max mx-auto">
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">3 Bedrooms Cleaning</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">Vacuuming & Scrubbing</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">2 Bathroom Cleaning</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">Window & Glass Wash</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">1 Livingroom Cleaning</span>
                            </li>
                            <li class="flex items-center gap-3 text-primary font-medium">
                                <i data-lucide="check" class="w-4 h-4 text-primary stroke-[2.5] shrink-0"></i>
                                <span class="whitespace-nowrap">FREE Home Care Kit</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <!-- Price Box: ₹ and numbers at exact same height -->
                    <div class="mb-7">
                        <div class="font-heading text-4xl sm:text-5xl font-semibold text-[#00448B] leading-tight mb-1">
                            ₹4,499
                        </div>
                        <div class="text-[13px] text-neutral-text/75 font-body font-light tracking-wide">
                            / Per month
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="flex justify-center">
                        <a href="#quote" class="inline-flex items-center justify-center gap-2 bg-[#00448B] hover:bg-[#00366f] text-white text-sm font-medium py-3.5 px-8 rounded-[4px] shadow-sm hover:shadow-md transition-all duration-200 group-hover:bg-[#00366f] w-48 sm:w-52">
                            <span>Book Now</span>
                            <i data-lucide="chevron-right" class="w-4 h-4 stroke-[2.5] transition-transform duration-200 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- ======================================================== -->
            <!-- CARD 3: TURNKEY HANDOVER + FREE KIT                      -->
            <!-- ======================================================== -->
            <div class="clenix-pricing-card border border-[#e4e7eb] pt-12 pb-10 px-6 sm:px-8 text-center flex flex-col justify-between group shadow-sm">
                
                <div>
                    <!-- Original Lucide Icon: package-check -->
                    <div class="mb-5 flex items-center justify-center">
                        <div class="pricing-icon text-[#00448B] transition-transform duration-300">
                            <i data-lucide="package-check" class="w-12 h-12 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <!-- Single-Line Heading -->
                    <h3 class="font-heading text-2xl font-medium text-secondary-sub mb-8 tracking-tight whitespace-nowrap">
                        Turnkey & Free Kit
                    </h3>

                    <!-- Straight Vertical Alignment Checklist -->
                    <div class="flex justify-center mb-9">
                        <ul class="space-y-3.5 text-neutral-text text-[15px] font-body font-light text-left w-max mx-auto">
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">4 Bedrooms Cleaning</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">Vacuuming & Scrubbing</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">2 Bathroom Cleaning</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">Window & Glass Wash</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check" class="w-4 h-4 text-[#00448B] stroke-[2.2] shrink-0"></i>
                                <span class="whitespace-nowrap">1 Livingroom Cleaning</span>
                            </li>
                            <li class="flex items-center gap-3 text-primary font-medium">
                                <i data-lucide="check" class="w-4 h-4 text-primary stroke-[2.5] shrink-0"></i>
                                <span class="whitespace-nowrap">FREE Premium Care Kit</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <!-- Price Box: ₹ and numbers at exact same height -->
                    <div class="mb-7">
                        <div class="font-heading text-4xl sm:text-5xl font-semibold text-[#00448B] leading-tight mb-1">
                            ₹5,999
                        </div>
                        <div class="text-[13px] text-neutral-text/75 font-body font-light tracking-wide">
                            / Per month
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="flex justify-center">
                        <a href="#quote" class="inline-flex items-center justify-center gap-2 bg-[#00448B] hover:bg-[#00366f] text-white text-sm font-medium py-3.5 px-8 rounded-[4px] shadow-sm hover:shadow-md transition-all duration-200 group-hover:bg-[#00366f] w-48 sm:w-52">
                            <span>Book Now</span>
                            <i data-lucide="chevron-right" class="w-4 h-4 stroke-[2.5] transition-transform duration-200 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>
