<!-- ======================================================== -->
<!-- COMPONENT: CTA BANNER SECTION (Exact Uploaded Reference)  -->
<!-- Rounded Brand Card, Bold Headline, 3 Action Buttons & Arrow-->
<!-- ======================================================== -->
@props([
    'title' => 'Ready to Experience Spotless Hygiene?',
    'subtitle' => 'Mechanized deep cleaning, sanitization & pest control tailored for homes and businesses in Coimbatore.',
    'quoteUrl' => route('contact'),
    'callNumber' => '+91 95666 66199',
    'callUrl' => 'tel:+919566666199',
    'whatsappUrl' => 'https://wa.me/919500475798?text=Hello%20Clean%20Matrix%2C%20I%20would%20like%20to%20book%20a%20service',
])

<section class="py-12 sm:py-16 lg:py-20 bg-white font-body">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Clean Matrix Brand Rounded Card -->
        <div class="relative bg-gradient-to-r from-[#00448B] via-[#003c7c] to-[#1A2C5D] rounded-2xl sm:rounded-3xl lg:rounded-[32px] p-8 sm:p-12 lg:p-14 text-white shadow-xl shadow-blue-950/15 overflow-hidden">
            
            <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8 lg:gap-6">
                
                <!-- 1. Left Content: Headline & Subtitle -->
                <div class="max-w-md xl:max-w-lg space-y-3 sm:space-y-4 shrink-0">
                    <h2 class="font-heading text-2xl sm:text-3xl md:text-4xl lg:text-[40px] font-bold tracking-tight text-white leading-tight">
                        {{ $title }}
                    </h2>
                    <p class="font-body text-sm sm:text-base text-white/85 font-light leading-relaxed">
                        {{ $subtitle }}
                    </p>
                </div>

                <!-- 2. Middle: Curved Vector Arrow (Starts directly from left content, with comfortable space before buttons) -->
                <div class="hidden lg:flex items-center justify-center flex-1 px-4 xl:px-6 pointer-events-none select-none">
                    <svg viewBox="0 0 240 80" fill="none" class="w-full max-w-[220px] xl:max-w-[260px] h-auto text-white drop-shadow-sm" xmlns="http://www.w3.org/2000/svg">
                        <!-- Smooth Hand-Drawn Curve starting near left text, swooping into the right buttons -->
                        <path d="M 10 58 C 80 58, 150 42, 210 18" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
                        <!-- Crisp Arrowhead pointing towards buttons with breathing room -->
                        <path d="M 192 14 L 211 17 L 206 34" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <!-- 3. Right Content: 3 Action Buttons Listed in a Line with Site Consistent Style -->
                <div class="flex flex-col gap-3 w-full sm:w-[260px] shrink-0">
                    
                    <!-- 1. Get a Free Quote Button (Theme Primary Green) -->
                    <a href="{{ $quoteUrl }}" 
                       class="w-full bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading text-sm font-semibold px-5 py-3 rounded-lg shadow-sm hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-between group">
                        <span class="flex items-center gap-2.5">
                            <i data-lucide="clipboard-check" class="w-4 h-4 shrink-0"></i>
                            <span>Get a Free Quote</span>
                        </span>
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform shrink-0"></i>
                    </a>

                    <!-- 2. Direct Call Button (Clean White Card Button) -->
                    <a href="{{ $callUrl }}" 
                       class="w-full bg-white hover:bg-slate-50 text-[#00448B] font-heading text-sm font-semibold px-5 py-3 rounded-lg shadow-sm hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-between group">
                        <span class="flex items-center gap-2.5">
                            <i data-lucide="phone-call" class="w-4 h-4 text-[#81BA41] shrink-0"></i>
                            <span>{{ $callNumber }}</span>
                        </span>
                        <i data-lucide="arrow-right" class="w-4 h-4 text-[#00448B]/60 group-hover:translate-x-1 group-hover:text-[#00448B] transition-all shrink-0"></i>
                    </a>

                    <!-- 3. WhatsApp Action Button (WhatsApp Green) -->
                    <a href="{{ $whatsappUrl }}" 
                       target="_blank" 
                       rel="noopener" 
                       class="w-full bg-[#25D366] hover:bg-[#20ba5a] text-white font-heading text-sm font-semibold px-5 py-3 rounded-lg shadow-sm hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-between group">
                        <span class="flex items-center gap-2.5">
                            <span class="w-5 h-5 sm:w-5.5 sm:h-5.5 flex items-center justify-center shrink-0">
                                <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="WhatsApp" class="w-full h-full object-contain">
                            </span>
                            <span>Chat on WhatsApp</span>
                        </span>
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform shrink-0"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
