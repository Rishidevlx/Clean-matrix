<!-- ======================================================== -->
<!-- COMPONENT: HERO SECTION (Pronto Clean Minimal White Design)-->
<!-- Clean White Background, Bold Lexend 2-Line Typography,     -->
<!-- New hero-sections.png with Wave Animation, 2 Action Btns   -->
<!-- ======================================================== -->
<section class="relative bg-white pt-8 sm:pt-12 lg:pt-16 pb-12 sm:pb-16 lg:pb-20 overflow-hidden font-body border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">

            <!-- ================= LEFT COLUMN: HERO CONTENT ================= -->
            <div class="lg:col-span-7 space-y-6 sm:space-y-7">

                <!-- 1. Main Large Headline in Lexend (Pure h1 without span, 2 clean lines) -->
                <h1 class="font-heading text-4xl sm:text-5xl lg:text-[56px] xl:text-[60px] font-bold text-[#0F172A] tracking-tight leading-[1.15]">
                    Trusted house &amp; office cleaning<br>
                    in minutes!
                </h1>

                <!-- 2. Clean Descriptive Subtitle -->
                <p class="font-body text-base sm:text-lg text-slate-600 font-normal leading-relaxed max-w-xl">
                    Your home and commercial property, professionally mechanized &amp; deep cleaned — exactly when you need it with German scrubbing machinery and eco-safe formulations.
                </p>

                <!-- 3. Quick Action Locality Link -->
                <div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-emerald-600 hover:text-emerald-700 transition-colors group">
                        <span>Request Clean Matrix in your locality</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- 4. Two Action Buttons (Get a Quote & Transparent Outline WhatsApp) -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-1">
                    
                    <!-- Button 1: Get a Quote (Primary Theme Green) -->
                    <a href="{{ route('contact') }}" 
                       class="inline-flex items-center justify-center gap-2.5 bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading text-sm sm:text-base font-semibold px-7 py-3.5 rounded-xl shadow-md hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 group">
                        <i data-lucide="clipboard-check" class="w-4 h-4 shrink-0"></i>
                        <span>Get a Quote</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform shrink-0"></i>
                    </a>

                    <!-- Button 2: WhatsApp (Transparent bg, Outline border, smooth green hover) -->
                    <a href="https://wa.me/919500475798?text=Hello%20Clean%20Matrix%2C%20I%20would%20like%20to%20get%20a%20free%20quote" 
                       target="_blank" 
                       rel="noopener" 
                       class="inline-flex items-center justify-center gap-2.5 bg-transparent border-2 border-[#25D366] text-[#25D366] hover:bg-[#25D366] hover:text-white font-heading text-sm sm:text-base font-semibold px-7 py-3.5 rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-green-500/20 hover:-translate-y-0.5 active:translate-y-0 group">
                        <span class="w-6 h-6 flex items-center justify-center shrink-0">
                            <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="WhatsApp" class="w-full h-full object-contain group-hover:scale-110 transition-transform">
                        </span>
                        <span>WhatsApp Quote</span>
                    </a>

                </div>

                <!-- 5. Rating Badge (Exact Pronto Match) -->
                <div class="flex items-center gap-3 pt-2">
                    <div class="flex items-center text-emerald-500 text-sm sm:text-base tracking-tight">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <span class="text-sm font-bold text-slate-900">4.9</span>
                    <span class="text-xs sm:text-sm text-slate-500 font-normal">from 2,500+ verified Coimbatore ratings</span>
                </div>

                <!-- 6. Live Localities Badges (Exact Pronto Match) -->
                <div class="pt-3 space-y-2.5 border-t border-slate-100">
                    <div class="text-[11px] font-bold uppercase tracking-wider text-slate-400">
                        Live In Coimbatore Hubs
                    </div>
                    <div class="flex flex-wrap items-center gap-2 text-xs font-medium text-slate-700">
                        <a href="{{ route('contact') }}?loc=RS+Puram" class="px-3 py-1.5 rounded-full bg-slate-50 border border-slate-200/80 hover:border-slate-300 hover:bg-white transition-colors">RS Puram</a>
                        <a href="{{ route('contact') }}?loc=Gandhipuram" class="px-3 py-1.5 rounded-full bg-slate-50 border border-slate-200/80 hover:border-slate-300 hover:bg-white transition-colors">Gandhipuram</a>
                        <a href="{{ route('contact') }}?loc=Peelamedu" class="px-3 py-1.5 rounded-full bg-slate-50 border border-slate-200/80 hover:border-slate-300 hover:bg-white transition-colors">Peelamedu</a>
                        <a href="{{ route('contact') }}?loc=Saravanampatti" class="px-3 py-1.5 rounded-full bg-slate-50 border border-slate-200/80 hover:border-slate-300 hover:bg-white transition-colors">Saravanampatti</a>
                        <a href="{{ route('contact') }}?loc=Race+Course" class="px-3 py-1.5 rounded-full bg-slate-50 border border-slate-200/80 hover:border-slate-300 hover:bg-white transition-colors">Race Course</a>
                        <a href="{{ route('contact') }}" class="px-3 py-1.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 hover:bg-emerald-100 transition-colors inline-flex items-center gap-1 font-semibold">
                            <span>+ 15 more hubs</span>
                            <i data-lucide="arrow-right" class="w-3 h-3"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- ================= RIGHT COLUMN: LARGER HERO-SECTIONS.PNG (STATIC, NO WAVE ANIMATION) ================= -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end relative">
                
                <div class="relative w-full max-w-[560px] sm:max-w-[620px] lg:max-w-[680px] xl:max-w-[740px] lg:scale-105 xl:scale-110 origin-center lg:origin-right select-none">
                    <img src="{{ asset('images/hero-sections.png') }}" 
                         alt="Clean Matrix Mechanized Cleaning Services" 
                         draggable="false" 
                         oncontextmenu="return false;"
                         class="w-full h-auto object-contain select-none pointer-events-none drop-shadow-2xl">
                </div>

            </div>

        </div>
    </div>
</section>
