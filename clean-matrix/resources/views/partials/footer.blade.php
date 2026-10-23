<!-- ======================================================== -->
<!-- PRE-FOOTER: QUICK LINKS & OTHER SERVICES (Exact Reference) -->
<!-- ======================================================== -->
<section class="bg-white border-t border-slate-200/80 py-12 sm:py-16 font-body">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        
        <!-- Main Section Title -->
        <h2 class="font-heading text-2xl sm:text-3xl font-bold text-[#0C0C0C] tracking-tight">
            Quick Links
        </h2>

        <!-- Block 1: Explore Clean Matrix Pages -->
        <div class="space-y-3">
            <h3 class="font-heading text-sm sm:text-base font-semibold text-[#0C0C0C]">
                Explore Clean Matrix
            </h3>
            <div class="flex flex-wrap items-center gap-x-5 gap-y-2.5 text-xs sm:text-[13px] text-[#666666]">
                @php
                    $sitePages = [
                        ['name' => 'Home', 'url' => route('home')],
                        ['name' => 'About Clean Matrix', 'url' => route('about')],
                        ['name' => 'Compare Service Packages', 'url' => route('packages')],
                        ['name' => 'Projects & Case Studies', 'url' => route('projects')],
                        ['name' => 'Get a Free Quote', 'url' => route('contact')],
                        ['name' => 'Privacy Policy', 'url' => route('privacy')],
                        ['name' => 'Terms & Conditions', 'url' => route('terms')],
                    ];
                @endphp
                @foreach($sitePages as $page)
                    <a href="{{ $page['url'] }}" class="inline-flex items-center gap-1.5 hover:text-primary transition-colors group">
                        <span class="w-2 h-2 rounded-full bg-[#2563eb] group-hover:scale-125 transition-transform shrink-0"></span>
                        <span class="hover:underline">{{ $page['name'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Block 2: Featured Packages & Cleaning Solutions -->
        <div class="space-y-3 pt-2 border-t border-slate-100">
            <h3 class="font-heading text-sm sm:text-base font-semibold text-[#0C0C0C]">
                Featured Packages &amp; Cleaning Solutions
            </h3>
            <div class="flex flex-wrap items-center gap-x-5 gap-y-2.5 text-xs sm:text-[13px] text-[#666666]">
                @php
                    $packageLinks = [
                        ['name' => '4-in-1 Essential Cleaning Plan', 'url' => route('packages')],
                        ['name' => '6-in-1 Comprehensive Deep Clean (Popular)', 'url' => route('packages')],
                        ['name' => 'Custom Commercial & Institutional SLA', 'url' => route('packages')],
                        ['name' => 'Residential Villa Deep Cleaning', 'url' => route('packages')],
                        ['name' => 'School & College Campus Sanitization', 'url' => route('packages')],
                        ['name' => 'Corporate Office & Commercial Property Care', 'url' => route('packages')],
                        ['name' => 'Fabric Sofa & Upholstery Shampooing', 'url' => route('packages')],
                        ['name' => 'Kitchen Chimney & Tile Degreasing', 'url' => route('packages')],
                        ['name' => 'Balcony High-Pressure Jet Wash', 'url' => route('packages')],
                        ['name' => 'Herbal Odorless Pest Management', 'url' => route('packages')],
                    ];
                @endphp
                @foreach($packageLinks as $pkg)
                    <a href="{{ $pkg['url'] }}" class="inline-flex items-center gap-1.5 hover:text-primary transition-colors group">
                        <span class="w-2 h-2 rounded-full bg-[#2563eb] group-hover:scale-125 transition-transform shrink-0"></span>
                        <span class="hover:underline">{{ $pkg['name'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Block 3: Serving in Coimbatore & Surrounding Locations -->
        <div class="space-y-3 pt-2 border-t border-slate-100">
            <h3 class="font-heading text-sm sm:text-base font-semibold text-[#0C0C0C]">
                Serving in Coimbatore &amp; Surrounding Hubs
            </h3>
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2.5 text-xs sm:text-[13px] text-[#666666]">
                @php
                    $locations = [
                        'RS Puram', 'Gandhipuram', 'Peelamedu', 'Saravanampatti', 'Race Course', 
                        'Saibaba Colony', 'Vadavalli', 'Ramanathapuram', 'Singanallur', 'Thudiyalur', 
                        'Kovaipudur', 'Kalapatti', 'Sundarapuram', 'Kuniyamuthur', 'Ganapathy', 
                        'Ondipudur', 'Eachanari', 'Avinashi Road', 'Trichy Road', 'Mettupalayam Road'
                    ];
                @endphp
                @foreach($locations as $loc)
                    <a href="{{ route('contact') }}?location={{ urlencode($loc) }}" class="inline-flex items-center gap-1.5 hover:text-primary transition-colors group" title="Book Cleaning in {{ $loc }}">
                        <span class="w-2 h-2 rounded-full bg-[#2563eb] group-hover:scale-125 transition-transform shrink-0"></span>
                        <span class="hover:underline">{{ $loc }}</span>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</section>

<!-- ======================================================== -->
<!-- MAIN FOOTER: 5-COLUMN REFERENCE LAYOUT                   -->
<!-- ======================================================== -->
<footer class="bg-[#181c2e] text-white pt-16 sm:pt-20 pb-8 font-body relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- 5-Column Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-8 pb-14 border-b border-white/10">

            <!-- ================= COLUMN 1: OUR SERVICES ================= -->
            <div class="space-y-4">
                <h4 class="font-heading text-sm font-bold text-white uppercase tracking-wider">
                    Our Services
                </h4>
                <ul class="space-y-2.5 text-xs sm:text-[13px] text-white/70 font-light">
                    <li><a href="#deep-cleaning" class="hover:text-primary transition-colors">Cleaning Service</a></li>
                    <li><a href="#pest-control" class="hover:text-primary transition-colors">Pest Control Service</a></li>
                    <li><a href="#deep-cleaning" class="hover:text-primary transition-colors">Deep Cleaning Service</a></li>
                    <li><a href="#floor-scrubbing" class="hover:text-primary transition-colors">Floor Scrubbing &amp; Buffing</a></li>
                    <li><a href="#housekeeping" class="hover:text-primary transition-colors">Housekeeping Service</a></li>
                    <li><a href="#commercial-cleaning" class="hover:text-primary transition-colors">Commercial Cleaning</a></li>
                    <li><a href="#sofa-shampooing" class="hover:text-primary transition-colors">Sofa &amp; Carpet Shampoo</a></li>
                    <li><a href="#sanitization" class="hover:text-primary transition-colors">Sanitization Service</a></li>
                </ul>
            </div>

            <!-- ================= COLUMN 2: ABOUT US ================= -->
            <div class="space-y-4">
                <h4 class="font-heading text-sm font-bold text-white uppercase tracking-wider">
                    About Us
                </h4>
                <ul class="space-y-2.5 text-xs sm:text-[13px] text-white/70 font-light">
                    <li><a href="{{ route('about') }}" class="hover:text-primary transition-colors">About Clean Matrix</a></li>
                    <li><a href="{{ route('packages') }}" class="hover:text-primary transition-colors">Our Service Packages</a></li>
                    <li><a href="{{ route('projects') }}" class="hover:text-primary transition-colors">Recent Projects</a></li>
                    <li><a href="{{ route('terms') }}" class="hover:text-primary transition-colors">Terms &amp; Conditions</a></li>
                    <li><a href="{{ route('privacy') }}" class="hover:text-primary transition-colors">Privacy Policy</a></li>
                    <li><a href="#reviews" class="hover:text-primary transition-colors">Verified Customer Reviews</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-primary transition-colors">Contact Us</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-primary transition-colors">Partner With Us</a></li>
                </ul>
            </div>

            <!-- ================= COLUMN 3: SERVING IN COIMBATORE ================= -->
            <div class="space-y-4">
                <h4 class="font-heading text-sm font-bold text-white uppercase tracking-wider">
                    Serving In Coimbatore
                </h4>
                <ul class="space-y-2.5 text-xs sm:text-[13px] text-white/70 font-light">
                    <li><a href="#locations" class="hover:text-primary transition-colors">RS Puram</a></li>
                    <li><a href="#locations" class="hover:text-primary transition-colors">Gandhipuram</a></li>
                    <li><a href="#locations" class="hover:text-primary transition-colors">Peelamedu</a></li>
                    <li><a href="#locations" class="hover:text-primary transition-colors">Saravanampatti</a></li>
                    <li><a href="#locations" class="hover:text-primary transition-colors">Race Course</a></li>
                    <li><a href="#locations" class="hover:text-primary transition-colors">Saibaba Colony</a></li>
                    <li><a href="#locations" class="hover:text-primary transition-colors">Vadavalli</a></li>
                    <li><a href="#locations" class="hover:text-primary transition-colors">Ramanathapuram</a></li>
                    <li><a href="#locations" class="hover:text-primary transition-colors">Singanallur</a></li>
                    <li><a href="#locations" class="hover:text-primary transition-colors">Thudiyalur</a></li>
                </ul>
            </div>

            <!-- ================= COLUMN 4: GET IN TOUCH ================= -->
            <div class="space-y-4">
                <h4 class="font-heading text-sm font-bold text-white uppercase tracking-wider">
                    Get in Touch
                </h4>
                
                <div class="space-y-3 text-xs sm:text-[13px] text-white/80">
                    <a href="tel:+919566666199" class="flex items-center gap-2.5 hover:text-primary transition-colors">
                        <i data-lucide="phone-call" class="w-4 h-4 text-primary shrink-0"></i>
                        <span>+91 95666 66199</span>
                    </a>
                    <a href="https://wa.me/919500475798" target="_blank" rel="noopener" class="flex items-center gap-2.5 hover:text-primary transition-colors">
                        <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="WhatsApp" class="w-5 h-5 object-contain shrink-0">
                        <span>+91 95004 75798</span>
                    </a>
                    <a href="mailto:info@cleanmatrix.in" class="flex items-center gap-2.5 hover:text-primary transition-colors break-all">
                        <i data-lucide="mail" class="w-4 h-4 text-primary shrink-0"></i>
                        <span>info@cleanmatrix.in</span>
                    </a>
                </div>

                <!-- Follow Us On Social Links (Listed vertically one-by-one with crisp vector icons) -->
                <div class="pt-2 space-y-2.5">
                    <span class="block text-xs font-semibold text-white/90 uppercase tracking-wider">
                        Follow us on
                    </span>
                    <ul class="space-y-2.5 text-xs sm:text-[13px]">
                        <li>
                            <a href="https://facebook.com" target="_blank" rel="noopener" class="flex items-center gap-2.5 text-white/80 hover:text-white transition-colors group">
                                <span class="w-7 h-7 rounded-full bg-white/10 group-hover:bg-[#1877F2] flex items-center justify-center text-white transition-all duration-200 shrink-0">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </span>
                                <span class="group-hover:translate-x-0.5 transition-transform">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com" target="_blank" rel="noopener" class="flex items-center gap-2.5 text-white/80 hover:text-white transition-colors group">
                                <span class="w-7 h-7 rounded-full bg-white/10 group-hover:bg-[#E4405F] flex items-center justify-center text-white transition-all duration-200 shrink-0">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </span>
                                <span class="group-hover:translate-x-0.5 transition-transform">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://linkedin.com" target="_blank" rel="noopener" class="flex items-center gap-2.5 text-white/80 hover:text-white transition-colors group">
                                <span class="w-7 h-7 rounded-full bg-white/10 group-hover:bg-[#0A66C2] flex items-center justify-center text-white transition-all duration-200 shrink-0">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                </span>
                                <span class="group-hover:translate-x-0.5 transition-transform">LinkedIn</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://youtube.com" target="_blank" rel="noopener" class="flex items-center gap-2.5 text-white/80 hover:text-white transition-colors group">
                                <span class="w-7 h-7 rounded-full bg-white/10 group-hover:bg-[#FF0000] flex items-center justify-center text-white transition-all duration-200 shrink-0">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                    </svg>
                                </span>
                                <span class="group-hover:translate-x-0.5 transition-transform">YouTube</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com" target="_blank" rel="noopener" class="flex items-center gap-2.5 text-white/80 hover:text-white transition-colors group">
                                <span class="w-7 h-7 rounded-full bg-white/10 group-hover:bg-black flex items-center justify-center text-white transition-all duration-200 shrink-0">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                    </svg>
                                </span>
                                <span class="group-hover:translate-x-0.5 transition-transform">X (Twitter)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- ================= COLUMN 5: ADDRESS ================= -->
            <div class="space-y-4">
                <h4 class="font-heading text-sm font-bold text-white uppercase tracking-wider">
                    Address
                </h4>

                <div class="bg-white/5 rounded-xl border border-white/10 p-4 space-y-3">
                    <div class="flex items-center gap-2 text-primary font-semibold text-xs sm:text-sm">
                        <i data-lucide="map-pin" class="w-4 h-4 text-primary shrink-0"></i>
                        <span>Coimbatore (HQ)</span>
                    </div>
                    <p class="text-white/75 font-light text-xs sm:text-[13px] leading-relaxed">
                        No. 42, Avinashi Road, Peelamedu / RS Puram, Coimbatore, Tamil Nadu - 641004.
                    </p>
                    <div class="pt-1 border-t border-white/10">
                        <a href="https://maps.google.com/?q=Coimbatore,Tamil+Nadu" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 text-xs text-primary hover:text-white transition-colors font-medium">
                            <span>View on Google Map</span>
                            <i data-lucide="external-link" class="w-3 h-3"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- ================= BOTTOM COPYRIGHT BAR ================= -->
        <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-light text-white/60">
            <p>
                Copyright &copy; {{ date('Y') }} Clean Matrix. All Rights Reserved.
            </p>
            <div class="flex items-center gap-3 text-xs text-white/60">
                <a href="{{ route('privacy') }}" class="hover:text-white transition-colors">Privacy Policy</a>
                <span>|</span>
                <a href="{{ route('terms') }}" class="hover:text-white transition-colors">Terms and Conditions</a>
            </div>
        </div>

    </div>

    <!-- Floating Back To Top Button in Clean Matrix Theme Green (#81BA41) -->
    <button id="backToTopBtn" aria-label="Back to Top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" class="fixed bottom-6 right-6 z-40 w-11 h-11 rounded-full bg-[#81BA41] hover:bg-[#73aa38] text-white shadow-xl flex items-center justify-center transition-all duration-300 opacity-0 pointer-events-none translate-y-4 hover:scale-110 cursor-pointer">
        <i data-lucide="chevron-up" class="w-5 h-5 stroke-[2.5]"></i>
    </button>

</footer>

<script>
    // Back to top floating button visibility
    window.addEventListener('scroll', () => {
        const backToTopBtn = document.getElementById('backToTopBtn');
        if (backToTopBtn) {
            if (window.scrollY > 400) {
                backToTopBtn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-4');
                backToTopBtn.classList.add('opacity-100', 'translate-y-0');
            } else {
                backToTopBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
                backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
            }
        }
    });
</script>
