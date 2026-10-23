<!-- Custom Styles for Clenix Services Tab with Slider & 3D Glass Bubble -->
<style>
    /* Tab Box Active & Hover Styling (Equal size, Boxie rounded-[4px] as per Clenix) */
    .clenix-prop-tab {
        border-radius: 4px !important;
    }
    .clenix-prop-tab.active {
        background-color: #287ff9 !important;
        border-color: #287ff9 !important;
    }
    .clenix-prop-tab.active .tab-icon-wrap,
    .clenix-prop-tab.active .tab-title-text {
        color: #ffffff !important;
    }
    .clenix-prop-tab:hover {
        background-color: #287ff9;
        border-color: #287ff9;
    }
    .clenix-prop-tab:hover .tab-icon-wrap,
    .clenix-prop-tab:hover .tab-title-text {
        color: #ffffff;
    }

    /* Clenix Signature Curved Image Mask (Exact circle clip-path from theme on desktop) */
    @media (min-width: 1024px) {
        .clenix-banner-img-wrap {
            overflow: hidden;
            -webkit-clip-path: circle(65% at 65% 50%);
            clip-path: circle(65% at 65% 50%);
            height: 100%;
        }
    }
    @media (max-width: 1023px) {
        .clenix-banner-img-wrap {
            -webkit-clip-path: none;
            clip-path: none;
            height: 100%;
        }
        .clenix-photo-col {
            line-height: 0 !important;
        }
        .clenix-photo-col img {
            vertical-align: bottom !important;
            display: block !important;
        }
    }

    /* 3D Realistic Glossy Bubble */
    .clenix-3d-bubble {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        background: radial-gradient(circle at 35% 28%, rgba(255, 255, 255, 0.5) 0%, rgba(40, 127, 249, 0.85) 42%, #14287b 95%);
        box-shadow: inset -4px -4px 10px rgba(0, 0, 0, 0.4), inset 3px 3px 8px rgba(255, 255, 255, 0.7), 0 8px 20px rgba(0, 0, 0, 0.28);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        flex-shrink: 0;
        position: relative;
    }
    @media (min-width: 640px) {
        .clenix-3d-bubble {
            width: 125px;
            height: 125px;
        }
    }
    .clenix-3d-bubble::after {
        content: '';
        position: absolute;
        top: 12px;
        left: 20px;
        width: 26px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: rotate(-30deg);
        filter: blur(1px);
    }
</style>

<!-- ======================================================== -->
<!-- CHOOSE BY PROPERTY SECTION (Clenix Tabs + Sliding Track) -->
<!-- ======================================================== -->
<section id="property-types" class="relative py-16 sm:py-24 lg:py-28 bg-[#F9FBFC] overflow-hidden border-t border-neutral-border/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Heading -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14 space-y-3">
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-normal leading-tight tracking-tight text-secondary">
                Choose By Property Type
            </h2>

            <p class="font-body text-sm sm:text-base text-neutral-text font-light leading-relaxed">
                Explore specialized cleaning and hygiene protocols specifically calibrated to your property type and footfall.
            </p>
        </div>

        <!-- ======================================================== -->
        <!-- TOP TABS SLIDER BAR (100% Equal Size Cards + Outer Arrows)-->
        <!-- ======================================================== -->
        <div class="relative max-w-6xl mx-auto mb-8 sm:mb-10 px-12 sm:px-14">
            
            <!-- Left Slider Arrow (Outside the cards, never touching) -->
            <button id="clenixTabPrev" 
                    type="button"
                    aria-label="Previous tab"
                    class="flex absolute left-0 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white shadow-md border border-neutral-border items-center justify-center text-secondary-sub hover:bg-primary hover:text-white hover:border-primary transition-all duration-200 cursor-pointer">
                <i data-lucide="chevron-left" class="w-5 h-5"></i>
            </button>

            <!-- Right Slider Arrow (Outside the cards, never touching) -->
            <button id="clenixTabNext" 
                    type="button"
                    aria-label="Next tab"
                    class="flex absolute right-0 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white shadow-md border border-neutral-border items-center justify-center text-secondary-sub hover:bg-primary hover:text-white hover:border-primary transition-all duration-200 cursor-pointer">
                <i data-lucide="chevron-right" class="w-5 h-5"></i>
            </button>

            <!-- Tabs Track Wrapper -->
            <div id="clenixTabsTrack" class="overflow-hidden w-full">
                <!-- Inner Track: On mobile slides 1-by-1; on sm+ displays 5 perfectly equal cards -->
                <div id="clenixTabsInner" class="flex items-center gap-2 sm:gap-3 transition-transform duration-500 ease-out py-1">
                    
                    <!-- Tab 0: Residential Homes -->
                    <button type="button" 
                            onclick="switchClenixTab(0)"
                            class="clenix-prop-tab active w-full flex-shrink-0 sm:flex-shrink sm:flex-1 sm:w-1/5 sm:min-w-0 bg-white p-3 sm:p-4 text-center border border-neutral-border/70 shadow-sm transition-all duration-300 group cursor-pointer h-24 sm:h-28 flex flex-col items-center justify-center"
                            data-index="0">
                        <div class="tab-icon-wrap h-8 sm:h-9 flex items-center justify-center text-[#287ff9] transition-colors mb-1.5">
                            <i data-lucide="home" class="w-7 h-7 sm:w-8 sm:h-8 stroke-[1.8]"></i>
                        </div>
                        <div class="tab-title-text font-heading text-xs sm:text-[13px] lg:text-[14px] font-medium text-secondary-sub transition-colors text-center leading-tight h-8 flex items-center justify-center">
                            Residential Homes
                        </div>
                    </button>

                    <!-- Tab 1: Schools & Daycares -->
                    <button type="button" 
                            onclick="switchClenixTab(1)"
                            class="clenix-prop-tab w-full flex-shrink-0 sm:flex-shrink sm:flex-1 sm:w-1/5 sm:min-w-0 bg-white p-3 sm:p-4 text-center border border-neutral-border/70 shadow-sm transition-all duration-300 group cursor-pointer h-24 sm:h-28 flex flex-col items-center justify-center"
                            data-index="1">
                        <div class="tab-icon-wrap h-8 sm:h-9 flex items-center justify-center text-[#287ff9] transition-colors mb-1.5">
                            <i data-lucide="book-open" class="w-7 h-7 sm:w-8 sm:h-8 stroke-[1.8]"></i>
                        </div>
                        <div class="tab-title-text font-heading text-xs sm:text-[13px] lg:text-[14px] font-medium text-secondary-sub transition-colors text-center leading-tight h-8 flex items-center justify-center">
                            Schools & Daycares
                        </div>
                    </button>

                    <!-- Tab 2: Colleges & Campuses -->
                    <button type="button" 
                            onclick="switchClenixTab(2)"
                            class="clenix-prop-tab w-full flex-shrink-0 sm:flex-shrink sm:flex-1 sm:w-1/5 sm:min-w-0 bg-white p-3 sm:p-4 text-center border border-neutral-border/70 shadow-sm transition-all duration-300 group cursor-pointer h-24 sm:h-28 flex flex-col items-center justify-center"
                            data-index="2">
                        <div class="tab-icon-wrap h-8 sm:h-9 flex items-center justify-center text-[#287ff9] transition-colors mb-1.5">
                            <i data-lucide="graduation-cap" class="w-7 h-7 sm:w-8 sm:h-8 stroke-[1.8]"></i>
                        </div>
                        <div class="tab-title-text font-heading text-xs sm:text-[13px] lg:text-[14px] font-medium text-secondary-sub transition-colors text-center leading-tight h-8 flex items-center justify-center">
                            Colleges & Campuses
                        </div>
                    </button>

                    <!-- Tab 3: Commercial & IT -->
                    <button type="button" 
                            onclick="switchClenixTab(3)"
                            class="clenix-prop-tab w-full flex-shrink-0 sm:flex-shrink sm:flex-1 sm:w-1/5 sm:min-w-0 bg-white p-3 sm:p-4 text-center border border-neutral-border/70 shadow-sm transition-all duration-300 group cursor-pointer h-24 sm:h-28 flex flex-col items-center justify-center"
                            data-index="3">
                        <div class="tab-icon-wrap h-8 sm:h-9 flex items-center justify-center text-[#287ff9] transition-colors mb-1.5">
                            <i data-lucide="building-2" class="w-7 h-7 sm:w-8 sm:h-8 stroke-[1.8]"></i>
                        </div>
                        <div class="tab-title-text font-heading text-xs sm:text-[13px] lg:text-[14px] font-medium text-secondary-sub transition-colors text-center leading-tight h-8 flex items-center justify-center">
                            Commercial & IT
                        </div>
                    </button>

                    <!-- Tab 4: Move-In / Handover -->
                    <button type="button" 
                            onclick="switchClenixTab(4)"
                            class="clenix-prop-tab w-full flex-shrink-0 sm:flex-shrink sm:flex-1 sm:w-1/5 sm:min-w-0 bg-white p-3 sm:p-4 text-center border border-neutral-border/70 shadow-sm transition-all duration-300 group cursor-pointer h-24 sm:h-28 flex flex-col items-center justify-center"
                            data-index="4">
                        <div class="tab-icon-wrap h-8 sm:h-9 flex items-center justify-center text-[#287ff9] transition-colors mb-1.5">
                            <i data-lucide="key-round" class="w-7 h-7 sm:w-8 sm:h-8 stroke-[1.8]"></i>
                        </div>
                        <div class="tab-title-text font-heading text-xs sm:text-[13px] lg:text-[14px] font-medium text-secondary-sub transition-colors text-center leading-tight h-8 flex items-center justify-center">
                            Move-In / Handover
                        </div>
                    </button>

                </div>
            </div>
        </div>

        <!-- ======================================================== -->
        <!-- BANNER SLIDING TRACK (Smooth Horizontal Right-to-Left)   -->
        <!-- ======================================================== -->
        <div class="max-w-6xl mx-auto rounded-2xl lg:rounded-3xl overflow-hidden shadow-2xl bg-[#14287b] relative">
            
            <!-- Continuous Slider Track (500% width = 5 x 100% slides) -->
            <div id="clenixSliderTrack" class="flex w-[500%] transition-transform duration-500 ease-out">

                <!-- ================= SLIDE 0: RESIDENTIAL ================= -->
                <div class="w-[20%] flex-shrink-0">
                    <div class="flex flex-col lg:flex-row items-stretch h-full">
                        <!-- Left Content Area -->
                        <div class="w-full lg:w-[54%] p-6 sm:p-10 lg:p-14 z-10 flex flex-col justify-center relative">
                            <h3 class="font-heading text-2xl sm:text-3xl lg:text-[40px] font-normal text-white leading-tight mb-3 sm:mb-4">
                                Residential Cleaning
                            </h3>

                            <p class="font-body text-xs sm:text-sm lg:text-base text-white/85 font-light leading-relaxed mb-6 sm:mb-8 max-w-lg">
                                Routine upkeep, deep floor scrubbing, and intensive kitchen & bathroom sanitisation for villas, apartments, and modern homes. Delivered with 100% eco-friendly, family & pet-safe formulations.
                            </p>

                            <!-- Price Bubble & Brand Green Action Button -->
                            <div class="flex items-center gap-4 sm:gap-6 flex-wrap pt-1">
                                <!-- 3D Bubble -->
                                <div class="clenix-3d-bubble">
                                    <div class="text-[22px] sm:text-[28px] font-heading font-medium leading-none">
                                        <span class="text-sm sm:text-base font-light">₹</span>1,499
                                    </div>
                                    <div class="text-[9px] sm:text-[11px] text-white/80 uppercase tracking-widest font-light mt-1">
                                        Start From
                                    </div>
                                </div>

                                <!-- Brand Green Book Now Button with White Text -->
                                <a href="#quote" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white font-medium text-xs sm:text-sm lg:text-base px-6 sm:px-8 py-3 sm:py-3.5 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                                    <span>Book Now</span>
                                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                                </a>
                            </div>

                            <!-- Faint Watermark Outline Icon -->
                            <div class="absolute right-4 -bottom-6 opacity-[0.08] pointer-events-none text-white select-none hidden sm:block">
                                <i data-lucide="home" class="w-44 h-44 stroke-[1.2]"></i>
                            </div>
                        </div>

                        <!-- Right Photo Area (Zero bottom gap on mobile) -->
                        <div class="w-full lg:w-[46%] relative flex-1 h-[260px] sm:h-[320px] lg:h-auto min-h-[260px] sm:min-h-[320px] lg:min-h-[480px] overflow-hidden leading-none clenix-photo-col">
                            <div class="w-full h-full clenix-banner-img-wrap leading-none">
                                <img src="{{ asset('images/properties/residential.jpg') }}" alt="Residential Cleaning Clean Matrix" class="w-full h-full object-cover block align-bottom">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ================= SLIDE 1: SCHOOLS ================= -->
                <div class="w-[20%] flex-shrink-0">
                    <div class="flex flex-col lg:flex-row items-stretch h-full">
                        <div class="w-full lg:w-[54%] p-6 sm:p-10 lg:p-14 z-10 flex flex-col justify-center relative">
                            <h3 class="font-heading text-2xl sm:text-3xl lg:text-[40px] font-normal text-white leading-tight mb-3 sm:mb-4">
                                School Cleaning
                            </h3>

                            <p class="font-body text-xs sm:text-sm lg:text-base text-white/85 font-light leading-relaxed mb-6 sm:mb-8 max-w-lg">
                                Specialized child-safe sanitisation for kindergartens, primary schools, and daycare centers. Non-toxic chemicals with flexible after-school and weekend schedules ensuring zero academic disruption.
                            </p>

                            <div class="flex items-center gap-4 sm:gap-6 flex-wrap pt-1">
                                <div class="clenix-3d-bubble">
                                    <div class="text-[22px] sm:text-[28px] font-heading font-medium leading-none">
                                        <span class="text-sm sm:text-base font-light">₹</span>3,999
                                    </div>
                                    <div class="text-[9px] sm:text-[11px] text-white/80 uppercase tracking-widest font-light mt-1">
                                        Start From
                                    </div>
                                </div>

                                <a href="#quote" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white font-medium text-xs sm:text-sm lg:text-base px-6 sm:px-8 py-3 sm:py-3.5 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                                    <span>Book Now</span>
                                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                                </a>
                            </div>

                            <div class="absolute right-4 -bottom-6 opacity-[0.08] pointer-events-none text-white select-none hidden sm:block">
                                <i data-lucide="book-open" class="w-44 h-44 stroke-[1.2]"></i>
                            </div>
                        </div>

                        <div class="w-full lg:w-[46%] relative flex-1 h-[260px] sm:h-[320px] lg:h-auto min-h-[260px] sm:min-h-[320px] lg:min-h-[480px] overflow-hidden leading-none clenix-photo-col">
                            <div class="w-full h-full clenix-banner-img-wrap leading-none">
                                <img src="{{ asset('images/properties/school.jpg') }}" alt="School Cleaning Clean Matrix" class="w-full h-full object-cover block align-bottom">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ================= SLIDE 2: COLLEGES ================= -->
                <div class="w-[20%] flex-shrink-0">
                    <div class="flex flex-col lg:flex-row items-stretch h-full">
                        <div class="w-full lg:w-[54%] p-6 sm:p-10 lg:p-14 z-10 flex flex-col justify-center relative">
                            <h3 class="font-heading text-2xl sm:text-3xl lg:text-[40px] font-normal text-white leading-tight mb-3 sm:mb-4">
                                Campus Cleaning
                            </h3>

                            <p class="font-body text-xs sm:text-sm lg:text-base text-white/85 font-light leading-relaxed mb-6 sm:mb-8 max-w-lg">
                                High-capacity janitorial management for university lecture halls, auditoriums, campus laboratories, dining halls, and student hostels using industrial mechanized floor polishers.
                            </p>

                            <div class="flex items-center gap-4 sm:gap-6 flex-wrap pt-1">
                                <div class="clenix-3d-bubble">
                                    <div class="text-[20px] sm:text-[26px] font-heading font-medium leading-none">
                                        Custom
                                    </div>
                                    <div class="text-[9px] sm:text-[11px] text-white/80 uppercase tracking-widest font-light mt-1">
                                        Start From
                                    </div>
                                </div>

                                <a href="#quote" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white font-medium text-xs sm:text-sm lg:text-base px-6 sm:px-8 py-3 sm:py-3.5 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                                    <span>Book Now</span>
                                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                                </a>
                            </div>

                            <div class="absolute right-4 -bottom-6 opacity-[0.08] pointer-events-none text-white select-none hidden sm:block">
                                <i data-lucide="graduation-cap" class="w-44 h-44 stroke-[1.2]"></i>
                            </div>
                        </div>

                        <div class="w-full lg:w-[46%] relative flex-1 h-[260px] sm:h-[320px] lg:h-auto min-h-[260px] sm:min-h-[320px] lg:min-h-[480px] overflow-hidden leading-none clenix-photo-col">
                            <div class="w-full h-full clenix-banner-img-wrap leading-none">
                                <img src="{{ asset('images/properties/college.jpg') }}" alt="Campus Cleaning Clean Matrix" class="w-full h-full object-cover block align-bottom">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ================= SLIDE 3: COMMERCIAL ================= -->
                <div class="w-[20%] flex-shrink-0">
                    <div class="flex flex-col lg:flex-row items-stretch h-full">
                        <div class="w-full lg:w-[54%] p-6 sm:p-10 lg:p-14 z-10 flex flex-col justify-center relative">
                            <h3 class="font-heading text-2xl sm:text-3xl lg:text-[40px] font-normal text-white leading-tight mb-3 sm:mb-4">
                                Office Cleaning
                            </h3>

                            <p class="font-body text-xs sm:text-sm lg:text-base text-white/85 font-light leading-relaxed mb-6 sm:mb-8 max-w-lg">
                                Enterprise janitorial solutions for corporate towers, IT parks, and retail outlets. Streak-free glass partitions, desk disinfection, and silent night shifts ensuring zero business downtime.
                            </p>

                            <div class="flex items-center gap-4 sm:gap-6 flex-wrap pt-1">
                                <div class="clenix-3d-bubble">
                                    <div class="text-[22px] sm:text-[28px] font-heading font-medium leading-none">
                                        <span class="text-sm sm:text-base font-light">₹</span>2,499
                                    </div>
                                    <div class="text-[9px] sm:text-[11px] text-white/80 uppercase tracking-widest font-light mt-1">
                                        Start From
                                    </div>
                                </div>

                                <a href="#quote" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white font-medium text-xs sm:text-sm lg:text-base px-6 sm:px-8 py-3 sm:py-3.5 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                                    <span>Book Now</span>
                                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                                </a>
                            </div>

                            <div class="absolute right-4 -bottom-6 opacity-[0.08] pointer-events-none text-white select-none hidden sm:block">
                                <i data-lucide="building-2" class="w-44 h-44 stroke-[1.2]"></i>
                            </div>
                        </div>

                        <div class="w-full lg:w-[46%] relative flex-1 h-[260px] sm:h-[320px] lg:h-auto min-h-[260px] sm:min-h-[320px] lg:min-h-[480px] overflow-hidden leading-none clenix-photo-col">
                            <div class="w-full h-full clenix-banner-img-wrap leading-none">
                                <img src="{{ asset('images/properties/commercial.jpg') }}" alt="Commercial Cleaning Clean Matrix" class="w-full h-full object-cover block align-bottom">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ================= SLIDE 4: HANDOVER ================= -->
                <div class="w-[20%] flex-shrink-0">
                    <div class="flex flex-col lg:flex-row items-stretch h-full">
                        <div class="w-full lg:w-[54%] p-6 sm:p-10 lg:p-14 z-10 flex flex-col justify-center relative">
                            <h3 class="font-heading text-2xl sm:text-3xl lg:text-[40px] font-normal text-white leading-tight mb-3 sm:mb-4">
                                Handover Cleaning
                            </h3>

                            <p class="font-body text-xs sm:text-sm lg:text-base text-white/85 font-light leading-relaxed mb-6 sm:mb-8 max-w-lg">
                                Comprehensive post-renovation scrub, paint splatter removal, and deep sanitisation for newly completed villas, flats, or office handovers. Move into a fresh, spotless, turnkey space.
                            </p>

                            <div class="flex items-center gap-4 sm:gap-6 flex-wrap pt-1">
                                <div class="clenix-3d-bubble">
                                    <div class="text-[22px] sm:text-[28px] font-heading font-medium leading-none">
                                        <span class="text-sm sm:text-base font-light">₹</span>2,999
                                    </div>
                                    <div class="text-[9px] sm:text-[11px] text-white/80 uppercase tracking-widest font-light mt-1">
                                        Start From
                                    </div>
                                </div>

                                <a href="#quote" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white font-medium text-xs sm:text-sm lg:text-base px-6 sm:px-8 py-3 sm:py-3.5 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                                    <span>Book Now</span>
                                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                                </a>
                            </div>

                            <div class="absolute right-4 -bottom-6 opacity-[0.08] pointer-events-none text-white select-none hidden sm:block">
                                <i data-lucide="key-round" class="w-44 h-44 stroke-[1.2]"></i>
                            </div>
                        </div>

                        <!-- Photo Area: Zero blue space at bottom -->
                        <div class="w-full lg:w-[46%] relative flex-1 h-[260px] sm:h-[320px] lg:h-auto min-h-[260px] sm:min-h-[320px] lg:min-h-[480px] overflow-hidden leading-none clenix-photo-col">
                            <div class="w-full h-full clenix-banner-img-wrap leading-none">
                                <img src="{{ asset('images/properties/handover.jpg') }}" alt="Handover Cleaning Clean Matrix" class="w-full h-full object-cover block align-bottom">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- ======================================================== -->
<!-- TAB SWITCHER & SMOOTH SLIDING JAVASCRIPT                 -->
<!-- ======================================================== -->
<script>
    let currentClenixIndex = 0;
    const totalClenixTabs = 5;

    function switchClenixTab(index) {
        currentClenixIndex = index;

        // 1. Smoothly Slide the 500% Banner Track (Right-to-Left / Left-to-Right)
        const sliderTrack = document.getElementById('clenixSliderTrack');
        if (sliderTrack) {
            sliderTrack.style.transform = `translateX(-${index * 20}%)`;
        }

        // 2. Update Tabs Active State (Blue background & White text)
        const tabs = document.querySelectorAll('.clenix-prop-tab');
        tabs.forEach((tab, i) => {
            if (i === index) {
                tab.classList.add('active');
            } else {
                tab.classList.remove('active');
            }
        });

        // 3. On Mobile Screens, slide the inner tabs row so active tab is 100% visible
        const isMobile = window.innerWidth < 640;
        const tabsInner = document.getElementById('clenixTabsInner');
        if (tabsInner) {
            if (isMobile) {
                tabsInner.style.transform = `translateX(-${index * 100}%)`;
            } else {
                tabsInner.style.transform = 'none';
            }
        }

        // 4. Refresh Lucide Icons if dynamic
        if (window.lucide) {
            window.lucide.createIcons();
        }
    }

    // Attach Left / Right Arrow listeners & Resize handler
    document.addEventListener('DOMContentLoaded', () => {
        const prevBtn = document.getElementById('clenixTabPrev');
        const nextBtn = document.getElementById('clenixTabNext');

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                let prevIdx = (currentClenixIndex - 1 + totalClenixTabs) % totalClenixTabs;
                switchClenixTab(prevIdx);
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                let nextIdx = (currentClenixIndex + 1) % totalClenixTabs;
                switchClenixTab(nextIdx);
            });
        }

        // Adjust tabs track transform on screen resize
        window.addEventListener('resize', () => {
            switchClenixTab(currentClenixIndex);
        });
    });
</script>
