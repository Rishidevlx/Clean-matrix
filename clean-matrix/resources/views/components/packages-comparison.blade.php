<!-- ======================================================== -->
<!-- COMPONENT: PACKAGES COMPARISON MATRIX & INCLUSIONS SCOPE  -->
<!-- Reusable across Packages, Home, Services, etc.            -->
<!-- ======================================================== -->
<section class="pt-4 sm:pt-6 pb-16 sm:pb-24 bg-white font-body relative border-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header with Small Green Heading -->
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-12 space-y-2">
            <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                PACKAGE MATRIX
            </p>
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#0F172A]">
                Detailed Scope, Inclusions &amp; Comparison
            </h2>
            <p class="font-body text-sm sm:text-base text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto pt-1">
                Review every detail before our team arrives. Compare scope, coverage, duration, exclusions and guarantees across our signature cleaning packages.
            </p>
        </div>

        <!-- ======================================================== -->
        <!-- MOBILE / TABLET VIEW: Interactive Plan Switcher (< lg)   -->
        <!-- ======================================================== -->
        <div class="block lg:hidden mb-10">
            
            <!-- Segmented Plan Selector Tabs (Consistent 2-Line Balanced Layout) -->
            <div class="bg-slate-100 p-1.5 rounded-xl border border-slate-200/80 grid grid-cols-3 gap-1.5 mb-6">
                <button type="button" 
                        onclick="switchMobileTab('essential')" 
                        id="tab-btn-essential"
                        class="py-2.5 px-1 rounded-lg text-xs font-heading font-medium text-neutral-text transition-all text-center flex flex-col items-center justify-center gap-0.5">
                    <span class="font-semibold text-xs text-secondary-sub">4-in-1</span>
                    <span class="text-[10px] text-neutral-text/70">Essential</span>
                </button>
                <button type="button" 
                        onclick="switchMobileTab('comprehensive')" 
                        id="tab-btn-comprehensive"
                        class="py-2.5 px-1 rounded-lg text-xs font-heading font-semibold bg-white text-secondary shadow-xs border border-primary/30 transition-all text-center flex flex-col items-center justify-center gap-0.5">
                    <span class="inline-flex items-center gap-1 font-semibold text-xs text-secondary">
                        <span>6-in-1</span>
                        <span class="text-[8px] bg-primary text-white font-bold px-1 py-0.5 rounded leading-none">POPULAR</span>
                    </span>
                    <span class="text-[10px] text-primary-sub font-medium">Comprehensive</span>
                </button>
                <button type="button" 
                        onclick="switchMobileTab('custom')" 
                        id="tab-btn-custom"
                        class="py-2.5 px-1 rounded-lg text-xs font-heading font-medium text-neutral-text transition-all text-center flex flex-col items-center justify-center gap-0.5">
                    <span class="font-semibold text-xs text-secondary-sub">Custom</span>
                    <span class="text-[10px] text-neutral-text/70">Contract SLA</span>
                </button>
            </div>

            <!-- Tab 1: 4-in-1 Essential Plan Card -->
            <div id="mobile-plan-essential" class="hidden bg-white rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-200/80 overflow-hidden">
                <!-- Header -->
                <div class="p-6 bg-slate-50 border-b border-slate-200/80 text-center">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-slate-200/80 text-neutral-text uppercase tracking-wider mb-2">Essential</span>
                    <h3 class="font-heading text-2xl font-medium text-secondary-sub mb-1">4-in-1 Essential</h3>
                    <div class="text-3xl font-semibold text-[#287ff9] font-heading mb-3">₹2,499<span class="text-xs font-normal text-neutral-text/70 font-body">/mo</span></div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 w-full py-3 px-4 rounded-[4px] bg-primary hover:bg-primary-hover text-white font-heading text-xs font-semibold shadow-sm transition-all">
                        <span>Book 4-in-1 Plan</span>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Scope Breakdown List -->
                <div class="p-5 divide-y divide-slate-100 font-body text-xs font-light">
                    <div class="py-2.5 px-2 font-heading font-semibold text-secondary text-xs uppercase tracking-wider bg-slate-100/80 rounded-md mb-2">
                        Space &amp; Property Coverage
                    </div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Property Coverage</span><span class="text-neutral-text text-right">1 to 2 BHK Apartments</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Specialist Crew</span><span class="text-neutral-text text-right">2 Uniformed Specialists</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Service Duration</span><span class="text-neutral-text text-right">3 – 4 Hours</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Frequency Basis</span><span class="text-neutral-text text-right">Monthly / Recurring</span></div>

                    <div class="py-2.5 px-2 font-heading font-semibold text-secondary text-xs uppercase tracking-wider bg-slate-100/80 rounded-md my-2">
                        Cleaning Scope &amp; Inclusions
                    </div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Bedrooms &amp; Living</span><span class="text-neutral-text text-right">2 Beds + 1 Living Room</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Bathrooms</span><span class="text-neutral-text text-right">Up to 2 Bathrooms</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Floor Scrubbing</span><span class="text-neutral-text text-right">Manual Mop &amp; HEPA Vac</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Kitchen Degreasing</span><span class="text-neutral-text text-right">Countertop &amp; Sink Scrub</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Windows &amp; Balcony</span><span class="text-neutral-text text-right">Interior Glass &amp; Mirrors</span></div>

                    <div class="py-2.5 px-2 font-heading font-semibold text-secondary text-xs uppercase tracking-wider bg-slate-100/80 rounded-md my-2">
                        Materials, Safety &amp; Free Bonuses
                    </div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Chemical Standards</span><span class="text-neutral-text text-right">Govt-Certified Eco Agents</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Bonus Care Kit</span><span class="text-neutral-text text-right">&mdash;</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Excluded Scope</span><span class="text-neutral-text text-right">Sofa shampoo, facade</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Validity &amp; Assurance</span><span class="text-neutral-text text-right">30 Days Validity</span></div>
                </div>
            </div>

            <!-- Tab 2: 6-in-1 Comprehensive Plan Card (Default Active) -->
            <div id="mobile-plan-comprehensive" class="bg-white rounded-2xl shadow-xl shadow-slate-200/60 border-2 border-primary/40 overflow-hidden relative">
                <!-- Most Popular Sash (Blue Theme Match) -->
                <div class="absolute top-0 right-0 w-24 h-24 overflow-hidden pointer-events-none z-20">
                    <span class="absolute top-3.5 -right-7 w-28 py-0.5 bg-[#287ff9] text-white text-[9.5px] font-bold font-heading tracking-widest uppercase text-center rotate-45 shadow-sm">
                        POPULAR
                    </span>
                </div>

                <!-- Header -->
                <div class="p-6 bg-slate-50 border-b border-slate-200/80 text-center">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-primary/15 text-primary-sub uppercase tracking-wider mb-2">Comprehensive</span>
                    <h3 class="font-heading text-2xl font-medium text-secondary-sub mb-1">6-in-1 Comprehensive</h3>
                    <div class="text-3xl font-semibold text-[#287ff9] font-heading mb-3">₹4,499<span class="text-xs font-normal text-neutral-text/70 font-body">/mo</span></div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 w-full py-3 px-4 rounded-[4px] bg-primary hover:bg-primary-hover text-white font-heading text-xs font-semibold shadow-sm transition-all">
                        <span>Book 6-in-1 Package</span>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Scope Breakdown List -->
                <div class="p-5 divide-y divide-slate-100 font-body text-xs font-light">
                    <div class="py-2.5 px-2 font-heading font-semibold text-secondary text-xs uppercase tracking-wider bg-slate-100/80 rounded-md mb-2">
                        Space &amp; Property Coverage
                    </div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Property Coverage</span><span class="text-neutral-text text-right font-medium text-primary-sub">3+ BHK, Duplex &amp; Villas</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Specialist Crew</span><span class="text-neutral-text text-right">3 to 4 Specialists + Lead</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Service Duration</span><span class="text-neutral-text text-right">5 – 6 Hours Intensive</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Frequency Basis</span><span class="text-neutral-text text-right">Monthly Intensive Deep Clean</span></div>

                    <div class="py-2.5 px-2 font-heading font-semibold text-secondary text-xs uppercase tracking-wider bg-slate-100/80 rounded-md my-2">
                        Cleaning Scope &amp; Inclusions
                    </div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Bedrooms &amp; Living</span><span class="text-neutral-text text-right">3+ Beds + Dining Areas</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Bathrooms</span><span class="text-neutral-text text-right">All Bathrooms (Deep Descaling)</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Floor Scrubbing</span><span class="text-neutral-text text-right font-medium text-primary-sub">German Rotary Single-Disc</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Kitchen Degreasing</span><span class="text-neutral-text text-right">Deep Tile &amp; Chimney Degrease</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Windows &amp; Balcony</span><span class="text-neutral-text text-right">Sliders, Grills &amp; Balconies</span></div>

                    <div class="py-2.5 px-2 font-heading font-semibold text-secondary text-xs uppercase tracking-wider bg-slate-100/80 rounded-md my-2">
                        Materials, Safety &amp; Free Bonuses
                    </div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Chemical Standards</span><span class="text-neutral-text text-right">Child &amp; Pet Safe Bio Formulations</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Bonus Care Kit</span><span class="text-primary-sub font-medium text-right">FREE Home Care Kit Included</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Excluded Scope</span><span class="text-neutral-text text-right">Paint peeling, sumps</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Validity &amp; Assurance</span><span class="text-neutral-text text-right">30 Days + Free Re-clean Warranty</span></div>
                </div>
            </div>

            <!-- Tab 3: Custom SLA Plan Card -->
            <div id="mobile-plan-custom" class="hidden bg-white rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-200/80 overflow-hidden">
                <!-- Header -->
                <div class="p-6 bg-slate-50 border-b border-slate-200/80 text-center">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-slate-200/80 text-neutral-text uppercase tracking-wider mb-2">Commercial SLA</span>
                    <h3 class="font-heading text-2xl font-medium text-secondary-sub mb-1">Custom Contract</h3>
                    <div class="text-3xl font-semibold text-[#287ff9] font-heading mb-3">Custom Audit</div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 w-full py-3 px-4 rounded-[4px] bg-primary hover:bg-primary-hover text-white font-heading text-xs font-semibold shadow-sm transition-all">
                        <span>Request Custom Audit</span>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Scope Breakdown List -->
                <div class="p-5 divide-y divide-slate-100 font-body text-xs font-light">
                    <div class="py-2.5 px-2 font-heading font-semibold text-secondary text-xs uppercase tracking-wider bg-slate-100/80 rounded-md mb-2">
                        Space &amp; Property Coverage
                    </div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Property Coverage</span><span class="text-neutral-text text-right">Offices, Tech Parks &amp; Hubs</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Specialist Crew</span><span class="text-neutral-text text-right">Dedicated Shift / Facility Team</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Service Duration</span><span class="text-neutral-text text-right">Daily Shift / Scheduled Hours</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Frequency Basis</span><span class="text-neutral-text text-right">Daily / Weekly SLA Contracts</span></div>

                    <div class="py-2.5 px-2 font-heading font-semibold text-secondary text-xs uppercase tracking-wider bg-slate-100/80 rounded-md my-2">
                        Cleaning Scope &amp; Inclusions
                    </div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Bedrooms &amp; Living</span><span class="text-neutral-text text-right">Cabins, Cubicles &amp; Lounges</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Bathrooms</span><span class="text-neutral-text text-right">Multi-Cubicle Washrooms</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Floor Scrubbing</span><span class="text-neutral-text text-right">Heavy-Duty Walk-Behind Polishers</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Kitchen Degreasing</span><span class="text-neutral-text text-right">Pantry &amp; Cafeteria Standards</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Windows &amp; Balcony</span><span class="text-neutral-text text-right">Glass Partitions &amp; Low-Rise</span></div>

                    <div class="py-2.5 px-2 font-heading font-semibold text-secondary text-xs uppercase tracking-wider bg-slate-100/80 rounded-md my-2">
                        Materials, Safety &amp; Free Bonuses
                    </div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Chemical Standards</span><span class="text-neutral-text text-right">Hospital-Grade Disinfectants</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Bonus Care Kit</span><span class="text-neutral-text text-right">Restroom Consumables Support</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Excluded Scope</span><span class="text-neutral-text text-right">High-voltage server rooms</span></div>
                    <div class="py-2.5 flex justify-between gap-3"><span class="text-secondary-sub font-medium">Validity &amp; Assurance</span><span class="text-neutral-text text-right">Service Level Agreement (SLA)</span></div>
                </div>
            </div>

        </div>

        <!-- ======================================================== -->
        <!-- DESKTOP VIEW: Full Side-by-Side Comparison Table (>= lg)  -->
        <!-- ======================================================== -->
        <div class="hidden lg:block bg-white rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-200/80 mb-12 relative">
            <div class="w-full">
                <table class="w-full text-left border-collapse table-fixed">
                    
                    <!-- Table Header (Sticks smoothly below top-20 navbar on scroll) -->
                    <thead>
                        <tr class="border-b border-slate-200 bg-white">
                            
                            <!-- Col 1: Feature Indicator -->
                            <th class="p-5 sm:p-6 w-[28%] align-bottom bg-slate-50 border-r border-slate-200/80 sticky top-20 z-30 rounded-tl-2xl shadow-xs">
                                <span class="block text-xs uppercase tracking-wider font-semibold text-neutral-text/70 mb-1">Package Matrix</span>
                                <h3 class="font-heading text-lg sm:text-xl font-medium text-secondary">Plans &amp; Specifications</h3>
                            </th>

                            <!-- Col 2: 4-in-1 Essential (Sticky) -->
                            <th class="p-5 sm:p-6 w-[24%] text-center align-top bg-white border-r border-slate-200/80 sticky top-20 z-30 shadow-xs">
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-slate-100 text-neutral-text uppercase tracking-wider mb-2.5">Essential</span>
                                <div class="font-heading text-lg sm:text-xl font-medium text-secondary-sub mb-1">4-in-1 Essential</div>
                                <div class="text-2xl sm:text-3xl font-semibold text-[#287ff9] font-heading mb-1">₹2,499<span class="text-xs font-normal text-neutral-text/70 font-body">/mo</span></div>
                            </th>

                            <!-- Col 3: 6-in-1 Comprehensive (Sticky with Blue Corner Ribbon) -->
                            <th class="p-5 sm:p-6 w-[24%] text-center align-top bg-white border-r border-slate-200/80 sticky top-20 z-30 shadow-xs relative overflow-hidden">
                                <!-- Signature Corner Ribbon for Most Popular (Blue #287ff9 Match) -->
                                <div class="absolute top-0 right-0 w-28 h-28 overflow-hidden pointer-events-none z-30">
                                    <span class="absolute top-4 -right-8 w-32 py-1 bg-[#287ff9] text-white text-[10px] font-bold font-heading tracking-widest uppercase text-center rotate-45 shadow-sm border-y border-white/25">
                                        POPULAR
                                    </span>
                                </div>

                                <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-primary/10 text-primary-sub uppercase tracking-wider mb-2.5">Comprehensive</span>
                                <div class="font-heading text-lg sm:text-xl font-medium text-secondary-sub mb-1">6-in-1 Comprehensive</div>
                                <div class="text-2xl sm:text-3xl font-semibold text-[#287ff9] font-heading mb-1">₹4,499<span class="text-xs font-normal text-neutral-text/70 font-body">/mo</span></div>
                            </th>

                            <!-- Col 4: Custom Contract (Sticky) -->
                            <th class="p-5 sm:p-6 w-[24%] text-center align-top bg-white sticky top-20 z-30 rounded-tr-2xl shadow-xs">
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-slate-100 text-neutral-text uppercase tracking-wider mb-2.5">Commercial SLA</span>
                                <div class="font-heading text-lg sm:text-xl font-medium text-secondary-sub mb-1">Custom Contract</div>
                                <div class="text-2xl sm:text-3xl font-semibold text-[#287ff9] font-heading mb-1">Custom Audit</div>
                            </th>

                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100 font-body text-sm font-light">
                        
                        <!-- ================= CATEGORY 1: Space & Coverage (No Icon) ================= -->
                        <tr class="bg-slate-100/80">
                            <td colspan="4" class="py-3 px-6 font-heading text-xs font-semibold uppercase tracking-wider text-secondary">
                                Space &amp; Property Coverage
                            </td>
                        </tr>

                        <!-- Property Type -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Property Coverage</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">1 to 2 BHK Apartments</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">3+ BHK, Duplex &amp; Luxury Villas</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Commercial Offices, Hubs &amp; Schools</td>
                        </tr>

                        <!-- Crew Size -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Specialist Crew</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">2 Uniformed Specialists</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">3 to 4 Specialists + Supervisor</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Dedicated Shift / Facility Team</td>
                        </tr>

                        <!-- Duration -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Service Duration</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">3 – 4 Hours</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">5 – 6 Hours</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Daily Shift / Scheduled Hours</td>
                        </tr>

                        <!-- Frequency Basis -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Frequency Basis</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Monthly / Recurring</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Monthly Intensive Deep Clean</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Daily / Weekly SLA Contracts</td>
                        </tr>

                        <!-- ================= CATEGORY 2: Cleaning Scope & Inclusions (No Icon) ================= -->
                        <tr class="bg-slate-100/80">
                            <td colspan="4" class="py-3 px-6 font-heading text-xs font-semibold uppercase tracking-wider text-secondary">
                                Cleaning Scope &amp; Inclusions
                            </td>
                        </tr>

                        <!-- Bedrooms & Living Area -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Bedrooms &amp; Living Spaces</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">2 Bedrooms + 1 Living Room</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">3+ Bedrooms + Living &amp; Dining Areas</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Cabins, Workstations &amp; Lounges</td>
                        </tr>

                        <!-- Bathrooms -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Bathroom Descaling &amp; Sanitization</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Up to 2 Bathrooms</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">All Bathrooms (Deep Descaling)</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Commercial Multi-Cubicle Washrooms</td>
                        </tr>

                        <!-- Mechanized Floor Scrubbing -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Mechanized Floor Scrubbing</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Manual Mop &amp; HEPA Vacuum</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">German Rotary Single-Disc Machine</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Heavy-Duty Walk-Behind Polishers</td>
                        </tr>

                        <!-- Kitchen & Chimney -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Kitchen Degreasing</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Countertop, Sink &amp; Platform Scrub</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Deep Tile Degreasing &amp; Chimney Surface</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Pantry &amp; Cafeteria Hygiene Standards</td>
                        </tr>

                        <!-- Window Glass & Balcony -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Windows &amp; Balcony Wash</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Interior Glass &amp; Mirrors</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Full Window Sliders, Grills &amp; Balcony</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Glass Partitions &amp; Low-Rise Facade</td>
                        </tr>

                        <!-- ================= CATEGORY 3: Materials, Safety & Free Bonuses (No Icon) ================= -->
                        <tr class="bg-slate-100/80">
                            <td colspan="4" class="py-3 px-6 font-heading text-xs font-semibold uppercase tracking-wider text-secondary">
                                Materials, Safety &amp; Free Bonuses
                            </td>
                        </tr>

                        <!-- Chemicals & Safety -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Chemical Standards</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Govt-Certified Eco Formulations</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Child &amp; Pet Safe Non-Toxic Bio Agents</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Hospital-Grade Disinfectants</td>
                        </tr>

                        <!-- Free Bonus Kit -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Bonus Care Kit</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">&mdash;</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">FREE Home Care Kit Included</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Restroom Consumables Support</td>
                        </tr>

                        <!-- Exclusions -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Excluded Scope</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Sofa shampoo, exterior facade</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Paint peeling, water sumps</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">High-voltage server rooms</td>
                        </tr>

                        <!-- Validity & Assurance -->
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-3.5 px-6 font-medium text-secondary-sub bg-slate-50/40">Validity &amp; Assurance</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">30 Days Validity</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">30 Days + Free Re-clean Warranty</td>
                            <td class="py-3.5 px-6 text-center text-neutral-text">Service Level Agreement (SLA)</td>
                        </tr>

                        <!-- Table Footer Buttons (All in Brand Green) -->
                        <tr class="bg-slate-50/90">
                            <td class="py-5 px-6 font-heading font-medium text-secondary-sub">Ready to Book?</td>
                            <td class="py-5 px-6 text-center">
                                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 w-full py-2.5 px-4 rounded-[4px] bg-primary hover:bg-primary-hover text-white font-heading text-xs font-semibold shadow-sm transition-all duration-200">
                                    <span>Choose 4-in-1</span>
                                    <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                                </a>
                            </td>
                            <td class="py-5 px-6 text-center">
                                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 w-full py-2.5 px-4 rounded-[4px] bg-primary hover:bg-primary-hover text-white font-heading text-xs font-semibold shadow-sm transition-all duration-200">
                                    <span>Choose 6-in-1</span>
                                    <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                                </a>
                            </td>
                            <td class="py-5 px-6 text-center">
                                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 w-full py-2.5 px-4 rounded-[4px] bg-primary hover:bg-primary-hover text-white font-heading text-xs font-semibold shadow-sm transition-all duration-200">
                                    <span>Request Audit</span>
                                    <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- Optional Add-ons Section Header & 4-Column Cards (Exact Clenix Home 10 Style with Blue Badges & Grey Sparkles, No Hover) -->
        <div class="space-y-6">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div>
                    <h3 class="font-heading text-xl sm:text-2xl font-medium text-secondary">
                        Customize With Optional Add-ons
                    </h3>
                    <p class="text-xs sm:text-sm text-neutral-text font-light">
                        Add any of these specialized services to your package for a complete, 360&deg; deep sanitization.
                    </p>
                </div>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white text-xs sm:text-sm font-medium px-5 py-2.5 rounded-[4px] shadow-sm transition-all shrink-0">
                    <span>Enquire Custom Add-ons</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

            <!-- 4 Add-ons Cards Grid (Blue Hexagon Badge + Beside Title + Grey Sparkles + No Hover) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                
                <!-- Add-on 1: Sofa Shampooing -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-xs relative overflow-hidden">
                    <!-- Top-Right Sparkles Vector (Grey Color, No Hover Effect) -->
                    <div class="absolute top-5 right-5 text-slate-300 pointer-events-none">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                        <svg class="w-3 h-3 absolute -top-1.5 -right-2 text-slate-300" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>

                    <!-- Header: Blue Hexagon Badge + Title Beside -->
                    <div class="flex items-center gap-3.5 pr-6 mb-4">
                        <div class="relative w-13 h-14 shrink-0 flex items-center justify-center">
                            <svg viewBox="0 0 56 62" class="w-full h-full text-[#287ff9] drop-shadow-sm" fill="currentColor">
                                <path d="M28 2L53 16V46L28 60L3 46V16L28 2Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                            </svg>
                            <i data-lucide="armchair" class="absolute z-10 w-5 h-5 text-white stroke-[2.2]"></i>
                        </div>
                        <h4 class="font-heading text-base font-semibold text-secondary-sub leading-snug">
                            Fabric Sofa Shampoo
                        </h4>
                    </div>

                    <!-- Description -->
                    <p class="text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        German injection-extraction vacuuming that lifts deep dust mites, grease &amp; sweat stains.
                    </p>
                </div>

                <!-- Add-on 2: Kitchen Chimney -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-xs relative overflow-hidden">
                    <!-- Top-Right Sparkles Vector (Grey Color, No Hover Effect) -->
                    <div class="absolute top-5 right-5 text-slate-300 pointer-events-none">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                        <svg class="w-3 h-3 absolute -top-1.5 -right-2 text-slate-300" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>

                    <!-- Header: Blue Hexagon Badge + Title Beside -->
                    <div class="flex items-center gap-3.5 pr-6 mb-4">
                        <div class="relative w-13 h-14 shrink-0 flex items-center justify-center">
                            <svg viewBox="0 0 56 62" class="w-full h-full text-[#287ff9] drop-shadow-sm" fill="currentColor">
                                <path d="M28 2L53 16V46L28 60L3 46V16L28 2Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                            </svg>
                            <i data-lucide="flame" class="absolute z-10 w-5 h-5 text-white stroke-[2.2]"></i>
                        </div>
                        <h4 class="font-heading text-base font-semibold text-secondary-sub leading-snug">
                            Kitchen Chimney &amp; Hob
                        </h4>
                    </div>

                    <!-- Description -->
                    <p class="text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        Intense chemical baffle-filter degreasing and carbon stripping for smoke-free cooking.
                    </p>
                </div>

                <!-- Add-on 3: Eco Pest Control -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-xs relative overflow-hidden">
                    <!-- Top-Right Sparkles Vector (Grey Color, No Hover Effect) -->
                    <div class="absolute top-5 right-5 text-slate-300 pointer-events-none">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                        <svg class="w-3 h-3 absolute -top-1.5 -right-2 text-slate-300" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>

                    <!-- Header: Blue Hexagon Badge + Title Beside -->
                    <div class="flex items-center gap-3.5 pr-6 mb-4">
                        <div class="relative w-13 h-14 shrink-0 flex items-center justify-center">
                            <svg viewBox="0 0 56 62" class="w-full h-full text-[#287ff9] drop-shadow-sm" fill="currentColor">
                                <path d="M28 2L53 16V46L28 60L3 46V16L28 2Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                            </svg>
                            <i data-lucide="shield-check" class="absolute z-10 w-5 h-5 text-white stroke-[2.2]"></i>
                        </div>
                        <h4 class="font-heading text-base font-semibold text-secondary-sub leading-snug">
                            Herbal Pest Management
                        </h4>
                    </div>

                    <!-- Description -->
                    <p class="text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        Child and pet-safe gel baiting &amp; odorless barrier spray against cockroaches &amp; termites.
                    </p>
                </div>

                <!-- Add-on 4: Balcony Jet Wash -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-xs relative overflow-hidden">
                    <!-- Top-Right Sparkles Vector (Grey Color, No Hover Effect) -->
                    <div class="absolute top-5 right-5 text-slate-300 pointer-events-none">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                        <svg class="w-3 h-3 absolute -top-1.5 -right-2 text-slate-300" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>

                    <!-- Header: Blue Hexagon Badge + Title Beside -->
                    <div class="flex items-center gap-3.5 pr-6 mb-4">
                        <div class="relative w-13 h-14 shrink-0 flex items-center justify-center">
                            <svg viewBox="0 0 56 62" class="w-full h-full text-[#287ff9] drop-shadow-sm" fill="currentColor">
                                <path d="M28 2L53 16V46L28 60L3 46V16L28 2Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                            </svg>
                            <i data-lucide="droplets" class="absolute z-10 w-5 h-5 text-white stroke-[2.2]"></i>
                        </div>
                        <h4 class="font-heading text-base font-semibold text-secondary-sub leading-snug">
                            130-Bar Balcony Jet Wash
                        </h4>
                    </div>

                    <!-- Description -->
                    <p class="text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        High-pressure rotary jet spray that removes stubborn moss, floor grime and pigeon droppings.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Mobile Comparison Tab Switcher Script (Self-Contained in Component) -->
<script>
    if (typeof switchMobileTab !== 'function') {
        function switchMobileTab(planKey) {
            const plans = ['essential', 'comprehensive', 'custom'];
            
            plans.forEach(key => {
                const card = document.getElementById(`mobile-plan-${key}`);
                const btn = document.getElementById(`tab-btn-${key}`);
                
                if (card && btn) {
                    if (key === planKey) {
                        card.classList.remove('hidden');
                        btn.className = "py-2.5 px-1 rounded-lg text-xs font-heading font-semibold bg-white text-secondary shadow-xs border border-primary/30 transition-all text-center flex flex-col items-center justify-center gap-0.5";
                    } else {
                        card.classList.add('hidden');
                        btn.className = "py-2.5 px-1 rounded-lg text-xs font-heading font-medium text-neutral-text hover:text-secondary transition-all text-center flex flex-col items-center justify-center gap-0.5";
                    }
                }
            });

            if (window.lucide) {
                lucide.createIcons();
            }
        }
    }
</script>
