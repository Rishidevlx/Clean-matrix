<!-- ======================================================== -->
<!-- COMPONENT: CHOOSE BY PROPERTY TYPE                        -->
<!-- Alternating Zigzag Layout (Pure White Background, No Card)-->
<!-- Clean, Minimal & Consistent with Pronto/Clean Matrix Brand-->
<!-- ======================================================== -->
@php
    $properties = [
        [
            'id' => 'residential',
            'title' => 'Residential Cleaning',
            'desc' => 'Routine upkeep, deep floor scrubbing, and intensive kitchen & bathroom sanitisation for villas, apartments, and modern homes across Coimbatore. Delivered with 100% eco-friendly, family & pet-safe formulations.',
            'bullets' => [
                'Deep tile & grout mechanized scrubbing with German machinery',
                'Odorless kitchen chimney & countertop degreasing',
                'Bathroom limescale removal & sanitary sanitization',
                'Upholstery shampooing & balcony pressure jet washing'
            ],
            'image' => asset('images/properties/residential.jpg'),
        ],
        [
            'id' => 'schools',
            'title' => 'Schools & Daycares',
            'desc' => 'Specialized child-safe sanitisation for kindergartens, primary schools, and daycare centers. Non-toxic, herbal chemicals with flexible after-school and weekend schedules ensuring zero academic disruption.',
            'bullets' => [
                'Non-toxic, food-grade antibacterial sanitization',
                'Play equipment, desk & toy disinfection',
                'Restroom hygiene maintenance & odor neutralization',
                'Scheduled weekend & term-holiday deep sanitization'
            ],
            'image' => asset('images/properties/school.jpg'),
        ],
        [
            'id' => 'colleges',
            'title' => 'Colleges & Campuses',
            'desc' => 'High-capacity mechanized cleaning solutions for university auditoriums, science labs, canteens, and multi-storey hostel facilities with certified bio-safety standards and trained manpower.',
            'bullets' => [
                'Auditorium acoustic chair shampooing & floor buffing',
                'High-reach exterior glass & facade washing',
                'Hostel block mechanized washroom restoration',
                'Central dining & food court steam degreasing'
            ],
            'image' => asset('images/properties/college.jpg'),
        ],
        [
            'id' => 'commercial',
            'title' => 'Commercial & IT Offices',
            'desc' => 'High-uptime corporate hygiene protocols. Server room anti-static vacuuming, open-plan workstation sanitisation, and boardroom carpet deep shampooing with flexible night-shift deployments.',
            'bullets' => [
                'Anti-static HEPA vacuuming for electronics & servers',
                'Boardroom fabric & leather chair care',
                'Pantry steam degreasing & water cooler sanitization',
                'Overnight & weekend service to prevent workflow downtime'
            ],
            'image' => asset('images/properties/commercial.jpg'),
        ],
        [
            'id' => 'handover',
            'title' => 'Move-In / Post-Construction',
            'desc' => 'Turnkey deep-clean handover for newly constructed homes, commercial tenant changes, and renovated properties. Eradicates paint splatters, fine cement dust, adhesive residues, and grout film.',
            'bullets' => [
                'Complete removal of plaster, cement dust & paint marks',
                'Window glass frame, track & sliding rail restoration',
                'Cupboard, drawer & wardrobe interior vacuuming',
                'Ready-to-occupy sanitized handover with supervisor sign-off'
            ],
            'image' => asset('images/properties/handover.jpg'),
        ],
    ];
@endphp

<section id="property-types" class="relative py-16 sm:py-24 bg-white font-body border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header (Clean Small Heading like OUR TESTIMONIALS / FAQ'S) -->
        <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-20 space-y-2">
            <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                PROPERTY SPECIALIZATIONS
            </p>
            
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#0F172A] leading-tight">
                Choose By Property Type
            </h2>

            <p class="font-body text-sm sm:text-base text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto pt-1">
                Explore specialized cleaning protocols specifically calibrated to your property type, footfall, and hygiene standards across Coimbatore.
            </p>
        </div>

        <!-- Vertical Alternating Zigzag Items List (Pure Content Flow, No Card Box) -->
        <div class="space-y-14 sm:space-y-20 lg:space-y-24">
            @foreach($properties as $index => $prop)
                @php
                    $isReversed = $index % 2 !== 0; // Alternates left/right on desktop
                @endphp

                <div class="pt-10 sm:pt-14 border-t border-slate-100 first:border-t-0 first:pt-0 group">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center {{ $isReversed ? 'lg:[&>*:first-child]:order-2 lg:[&>*:last-child]:order-1' : '' }}">

                        <!-- ================= CONTENT COLUMN ================= -->
                        <div class="lg:col-span-7 space-y-4 sm:space-y-5">

                            <!-- Title (Starts directly without tag/price badges) -->
                            <h3 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#0F172A] tracking-tight group-hover:text-[#00448B] transition-colors leading-tight">
                                {{ $prop['title'] }}
                            </h3>

                            <!-- Description -->
                            <p class="font-body text-sm sm:text-base text-slate-600 font-light leading-relaxed">
                                {{ $prop['desc'] }}
                            </p>

                            <!-- Bullet Points with Green Checkmarks (Listed one-by-one vertically) -->
                            <ul class="flex flex-col space-y-2.5 pt-1 text-xs sm:text-sm text-slate-700">
                                @foreach($prop['bullets'] as $bullet)
                                    <li class="flex items-start gap-2.5">
                                        <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                                        <span class="leading-snug">{{ $bullet }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Action Buttons -->
                            <div class="flex flex-wrap items-center gap-3.5 pt-3">
                                <a href="{{ route('contact') }}?service={{ urlencode($prop['title']) }}" 
                                   class="inline-flex items-center gap-2 bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading text-xs sm:text-sm font-semibold px-6 py-3.5 rounded-xl shadow-md hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 group/btn">
                                    <span>Book This Service</span>
                                    <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                                </a>

                                <a href="https://wa.me/919500475798?text=Hello%20Clean%20Matrix%2C%20I%20would%20like%20to%20enquire%20about%20{{ urlencode($prop['title']) }}" 
                                   target="_blank" 
                                   rel="noopener" 
                                   class="inline-flex items-center gap-2.5 bg-transparent border border-slate-300 hover:border-[#25D366] text-slate-700 hover:text-[#25D366] font-heading text-xs sm:text-sm font-medium px-5 py-3.5 rounded-xl transition-all duration-200 hover:bg-emerald-50/30 group/wa">
                                    <span class="w-5 h-5 sm:w-5.5 sm:h-5.5 flex items-center justify-center shrink-0">
                                        <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="WhatsApp" class="w-full h-full object-contain group-hover/wa:scale-110 transition-transform">
                                    </span>
                                    <span>Quick WhatsApp Enquiry</span>
                                </a>
                            </div>

                        </div>

                        <!-- ================= IMAGE COLUMN ================= -->
                        <div class="lg:col-span-5 relative">
                            <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden aspect-[4/3] sm:aspect-[16/10] lg:aspect-[4/3] shadow-md hover:shadow-xl border border-slate-100 transition-all duration-300">
                                <img src="{{ $prop['image'] }}" 
                                     alt="{{ $prop['title'] }} — Clean Matrix" 
                                     class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-black/35 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                                <!-- Subtle Corner Tag -->
                                <div class="absolute bottom-3 left-3 bg-white/95 backdrop-blur-md px-3.5 py-1.5 rounded-lg text-xs font-semibold text-slate-800 shadow-sm border border-slate-100">
                                    Mechanized &amp; Inspected
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            @endforeach
        </div>

    </div>
</section>
