<!-- ======================================================== -->
<!-- FOOTER (Exact Clenix Layout with Clean Matrix Theme)      -->
<!-- ======================================================== -->

<footer class="relative bg-[#002766] text-white pt-20 sm:pt-24 pb-10 overflow-hidden font-body">

    <!-- Clenix Watermark Sparkle Images (Left-Top & Right-Bottom) -->
    <img src="{{ asset('images/Footer/footer-sparkles.png') }}" 
         alt="" 
         class="absolute -top-6 -left-6 sm:-top-10 sm:-left-10 w-72 sm:w-96 md:w-[400px] pointer-events-none select-none z-0 opacity-60">

    <img src="{{ asset('images/Footer/footer-sparkles.png') }}" 
         alt="" 
         class="absolute -bottom-8 -right-8 sm:-bottom-12 sm:-right-12 w-80 sm:w-[420px] md:w-[460px] pointer-events-none select-none z-0 opacity-60 transform rotate-180">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- 4-Column Spacious Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 md:gap-12 lg:gap-14 pb-16 sm:pb-20">

            <!-- ======================================================== -->
            <!-- COLUMN 1: BRAND / ABOUT & SOCIALS (4 Columns)             -->
            <!-- ======================================================== -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Clean Matrix Logo on Crisp White Card -->
                <a href="/" class="inline-block bg-white/95 rounded-lg px-4 py-2 shadow-sm transition-transform hover:scale-[1.02]">
                    <img src="{{ asset('logo-header.png') }}" alt="Clean Matrix" class="h-10 sm:h-11 w-auto object-contain">
                </a>

                <!-- Brand Paragraph -->
                <p class="text-white/75 text-xs sm:text-sm font-light leading-relaxed max-w-sm">
                    Chennai's premier mechanized cleaning and hygiene service. From luxury villas in ECR to corporate campuses, we deliver German-standard mechanized deep cleaning and certified sanitization.
                </p>

                <!-- Follow Us On: Social Icons in Their Own Brand Colors -> Hover turns Pure White (No Black) -->
                <div class="pt-2">
                    <h4 class="font-heading text-sm font-medium text-white mb-3.5 tracking-wide">
                        Follow Us On:
                    </h4>
                    <div class="flex items-center gap-3">
                        <!-- Facebook (White Icon -> Green Hover) -->
                        <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook" class="w-9 h-9 rounded-full bg-white/15 hover:bg-[#81BA41] flex items-center justify-center transition-all duration-200 hover:scale-110 shadow-xs">
                            <svg class="w-4 h-4" style="fill: #ffffff;" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>

                        <!-- X / Twitter (White Icon -> Green Hover) -->
                        <a href="https://twitter.com" target="_blank" rel="noopener" aria-label="X Twitter" class="w-9 h-9 rounded-full bg-white/15 hover:bg-[#81BA41] flex items-center justify-center transition-all duration-200 hover:scale-110 shadow-xs">
                            <svg class="w-4 h-4" style="fill: #ffffff;" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>

                        <!-- LinkedIn (White Icon -> Green Hover) -->
                        <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn" class="w-9 h-9 rounded-full bg-white/15 hover:bg-[#81BA41] flex items-center justify-center transition-all duration-200 hover:scale-110 shadow-xs">
                            <svg class="w-4 h-4" style="fill: #ffffff;" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>

                        <!-- Instagram (White Icon -> Green Hover) -->
                        <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram" class="w-9 h-9 rounded-full bg-white/15 hover:bg-[#81BA41] flex items-center justify-center transition-all duration-200 hover:scale-110 shadow-xs">
                            <svg class="w-4 h-4" style="fill: #ffffff;" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>

                        <!-- YouTube (White Icon -> Green Hover) -->
                        <a href="https://youtube.com" target="_blank" rel="noopener" aria-label="YouTube" class="w-9 h-9 rounded-full bg-white/15 hover:bg-[#81BA41] flex items-center justify-center transition-all duration-200 hover:scale-110 shadow-xs">
                            <svg class="w-4 h-4" style="fill: #ffffff;" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

            <!-- ======================================================== -->
            <!-- COLUMN 2: SERVICES (Exact Services Menu Items)            -->
            <!-- ======================================================== -->
            <div class="lg:col-span-2 sm:col-span-1 space-y-4">
                <h3 class="font-heading text-base sm:text-lg font-medium text-white tracking-tight mb-5">
                    Services
                </h3>
                <ul class="space-y-3.5">
                    <li>
                        <a href="#housekeeping" class="flex items-center gap-2 text-white/75 hover:text-[#81BA41] hover:translate-x-1 transition-all duration-200 text-xs sm:text-sm font-light">
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-white/40 shrink-0"></i>
                            <span>Housekeeping</span>
                        </a>
                    </li>
                    <li>
                        <a href="#deep-cleaning" class="flex items-center gap-2 text-white/75 hover:text-[#81BA41] hover:translate-x-1 transition-all duration-200 text-xs sm:text-sm font-light">
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-white/40 shrink-0"></i>
                            <span>Deep Cleaning</span>
                        </a>
                    </li>
                    <li>
                        <a href="#pest-control" class="flex items-center gap-2 text-white/75 hover:text-[#81BA41] hover:translate-x-1 transition-all duration-200 text-xs sm:text-sm font-light">
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-white/40 shrink-0"></i>
                            <span>Pest Control</span>
                        </a>
                    </li>
                    <li>
                        <a href="#commercial-cleaning" class="flex items-center gap-2 text-white/75 hover:text-[#81BA41] hover:translate-x-1 transition-all duration-200 text-xs sm:text-sm font-light">
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-white/40 shrink-0"></i>
                            <span>Commercial Cleaning</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- ======================================================== -->
            <!-- COLUMN 3: INDUSTRIES (Exact Industry Menu Items)          -->
            <!-- ======================================================== -->
            <div class="lg:col-span-2 sm:col-span-1 space-y-4">
                <h3 class="font-heading text-base sm:text-lg font-medium text-white tracking-tight mb-5">
                    Industries
                </h3>
                <ul class="space-y-3.5">
                    <li>
                        <a href="#residential" class="flex items-center gap-2 text-white/75 hover:text-[#81BA41] hover:translate-x-1 transition-all duration-200 text-xs sm:text-sm font-light">
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-white/40 shrink-0"></i>
                            <span>Residential Cleaning</span>
                        </a>
                    </li>
                    <li>
                        <a href="#school-cleaning" class="flex items-center gap-2 text-white/75 hover:text-[#81BA41] hover:translate-x-1 transition-all duration-200 text-xs sm:text-sm font-light">
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-white/40 shrink-0"></i>
                            <span>School Cleaning</span>
                        </a>
                    </li>
                    <li>
                        <a href="#college-cleaning" class="flex items-center gap-2 text-white/75 hover:text-[#81BA41] hover:translate-x-1 transition-all duration-200 text-xs sm:text-sm font-light">
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-white/40 shrink-0"></i>
                            <span>College Cleaning</span>
                        </a>
                    </li>
                    <li>
                        <a href="#commercial-property" class="flex items-center gap-2 text-white/75 hover:text-[#81BA41] hover:translate-x-1 transition-all duration-200 text-xs sm:text-sm font-light">
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-white/40 shrink-0"></i>
                            <span>Commercial Properties</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- ======================================================== -->
            <!-- COLUMN 4: CONTACT DETAILS (Exact Developer Guide PDF)     -->
            <!-- ======================================================== -->
            <div class="lg:col-span-4 space-y-4">
                <h3 class="font-heading text-base sm:text-lg font-medium text-white tracking-tight mb-5">
                    Contact Details
                </h3>
                <ul class="space-y-4">
                    <!-- Primary Phone Number from Developer Guide -->
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <i data-lucide="phone-call" class="w-4 h-4 text-[#81BA41]"></i>
                        </div>
                        <div>
                            <div class="text-[11px] text-white/50 font-light">Direct Call Enquiries</div>
                            <a href="tel:+919566666199" class="text-white hover:text-[#81BA41] text-sm font-medium transition-colors tracking-wide">
                                +91 95666 66199
                            </a>
                        </div>
                    </li>

                    <!-- Secondary Phone / WhatsApp from Developer Guide -->
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <i data-lucide="message-square" class="w-4 h-4 text-[#81BA41]"></i>
                        </div>
                        <div>
                            <div class="text-[11px] text-white/50 font-light">Call & WhatsApp Support</div>
                            <a href="https://wa.me/919500475798" target="_blank" rel="noopener" class="text-white hover:text-[#81BA41] text-sm font-medium transition-colors tracking-wide">
                                +91 95004 75798
                            </a>
                        </div>
                    </li>

                    <!-- Official Email from Developer Guide -->
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <i data-lucide="mail" class="w-4 h-4 text-[#81BA41]"></i>
                        </div>
                        <div>
                            <div class="text-[11px] text-white/50 font-light">Official Email</div>
                            <a href="mailto:info@cleanmatrix.in" class="text-white/80 hover:text-white text-xs sm:text-sm font-light transition-colors">
                                info@cleanmatrix.in
                            </a>
                        </div>
                    </li>

                    <!-- Operating Location from Developer Guide -->
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0 mt-0.5">
                            <i data-lucide="map-pin" class="w-4 h-4 text-[#81BA41]"></i>
                        </div>
                        <div>
                            <div class="text-[11px] text-white/50 font-light">Service Coverage</div>
                            <span class="text-white/80 text-xs sm:text-sm font-light leading-relaxed">
                                Coimbatore, Tamil Nadu (Residential, Institutions & Commercial Properties)
                            </span>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <!-- ======================================================== -->
        <!-- BOTTOM COPYRIGHT & LEGAL BAR (Sitemap Removed)           -->
        <!-- ======================================================== -->
        <div class="border-t border-white/10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-light text-white/60">
            <p>
                &copy; {{ date('Y') }} Clean Matrix. All Rights Reserved.
            </p>
            <div class="flex items-center gap-4 text-xs text-white/60">
                <a href="{{ route('terms') }}" class="hover:text-white transition-colors">Terms of Service</a>
                <span>&bull;</span>
                <a href="{{ route('privacy') }}" class="hover:text-white transition-colors">Privacy Policy</a>
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
        const btn = document.getElementById('backToTopBtn');
        if (btn) {
            if (window.scrollY > 400) {
                btn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-4');
                btn.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
            } else {
                btn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
                btn.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
            }
        }
    });
</script>
