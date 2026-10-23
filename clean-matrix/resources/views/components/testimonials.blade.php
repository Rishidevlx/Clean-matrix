<!-- ======================================================== -->
<!-- CLIENT TESTIMONIALS SECTION: Pronto Inspired 2-Row Marquee -->
<!-- Hover pauses the specific row | Left & Right Gradient Mask -->
<!-- ======================================================== -->

<style>
    @keyframes marqueeLeft {
        0% { transform: translateX(0%); }
        100% { transform: translateX(-50%); }
    }
    @keyframes marqueeRight {
        0% { transform: translateX(-50%); }
        100% { transform: translateX(0%); }
    }
    .marquee-row-1 {
        display: flex;
        width: max-content;
        animation: marqueeLeft 42s linear infinite;
        will-change: transform;
    }
    .marquee-row-2 {
        display: flex;
        width: max-content;
        animation: marqueeRight 45s linear infinite;
        will-change: transform;
    }
    .marquee-row-1:hover,
    .marquee-row-2:hover {
        animation-play-state: paused !important;
    }
</style>

<section id="testimonials" class="relative py-16 sm:py-24 bg-white overflow-hidden border-t border-slate-200/80 font-body">
    
    <!-- Section Header (Exact Pronto Style) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10 sm:mb-14 text-center">
        <span class="inline-block text-primary text-xs sm:text-[13px] font-heading font-bold uppercase tracking-widest mb-2.5">
            OUR TESTIMONIALS
        </span>
        <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold text-[#0C0C0C] tracking-tight mb-3">
            Loved by Clean Matrix homes.
        </h2>
        <p class="font-body text-xs sm:text-sm text-[#666666] font-light max-w-xl mx-auto leading-relaxed">
            Real reviews from real homes, villa communities, and corporate facilities across Coimbatore.
        </p>
    </div>

    <!-- Infinite Carousel Outer Container with Left and Right Fade Gradients -->
    <div class="relative w-full overflow-hidden space-y-6">
        
        <!-- Left Smooth Fade Gradient Mask -->
        <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-32 lg:w-44 bg-gradient-to-r from-white via-white/80 to-transparent pointer-events-none z-20"></div>

        <!-- Right Smooth Fade Gradient Mask -->
        <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-32 lg:w-44 bg-gradient-to-l from-white via-white/80 to-transparent pointer-events-none z-20"></div>

        @php
            // Row 1 Testimonials
            $row1 = [
                [
                    'quote' => 'I’d say it was great value for money. The urgency was handled well, without compromising quality. Really satisfied with the experience.',
                    'author' => 'Kirti',
                    'location' => 'Peelamedu, Coimbatore',
                    'initial' => 'K',
                    'rating' => 5,
                ],
                [
                    'quote' => 'The service was simple and effective. It met my expectations without any hassle. Good overall experience with the mechanized team.',
                    'author' => 'Neha',
                    'location' => 'RS Puram, Coimbatore',
                    'initial' => 'N',
                    'rating' => 5,
                ],
                [
                    'quote' => 'Great work, my home was left spotless and fresh. The cleaning was thorough, and I appreciated the attention to detail. I’ll recommend it. 👍',
                    'author' => 'Pradnyesh',
                    'location' => 'Race Course, Coimbatore',
                    'initial' => 'P',
                    'rating' => 5,
                ],
                [
                    'quote' => 'The services have definitely improved our workplace hygiene. Team is polite, punctual, and very systematic with the machine scrubbers.',
                    'author' => 'Ridhi Saluja',
                    'location' => 'Saravanampatti Tech Park',
                    'initial' => 'R',
                    'rating' => 5,
                ],
                [
                    'quote' => 'Moved into a new villa in Vadavalli. Clean Matrix did complete post-construction restoration with zero chemical odor. Top notch work!',
                    'author' => 'Vigneshwaran',
                    'location' => 'Vadavalli, Coimbatore',
                    'initial' => 'V',
                    'rating' => 5,
                ],
            ];

            // Row 2 Testimonials
            $row2 = [
                [
                    'quote' => 'Really liked your service, it was smooth, efficient, and just what I needed. Would definitely recommend to others in our apartment community. 🌟',
                    'author' => 'Sameer',
                    'location' => 'Saibaba Colony, Coimbatore',
                    'initial' => 'S',
                    'rating' => 5,
                ],
                [
                    'quote' => 'Absolutely excellent service! The team was prompt and professional throughout. Would love to use it again for our regular maintenance.',
                    'author' => 'Karishma',
                    'location' => 'Gandhipuram, Coimbatore',
                    'initial' => 'K',
                    'rating' => 5,
                ],
                [
                    'quote' => 'Really impressive compared to local vendors. Communication was clear, quotes were transparent, and fast — very pleased with Clean Matrix!',
                    'author' => 'Rabia',
                    'location' => 'Ramanathapuram, Coimbatore',
                    'initial' => 'R',
                    'rating' => 5,
                ],
                [
                    'quote' => 'Seamless experience from booking to completion. The staff was courteous, punctual, and did a fantastic job on the sofa shampooing.',
                    'author' => 'Ritika',
                    'location' => 'Singanallur, Coimbatore',
                    'initial' => 'R',
                    'rating' => 5,
                ],
                [
                    'quote' => 'Their 6-in-1 combo package for our 3BHK flat was worth every rupee. Single disc scrubbing brought our faded tiles back to life!',
                    'author' => 'Anand Kumar',
                    'location' => 'Thudiyalur, Coimbatore',
                    'initial' => 'A',
                    'rating' => 5,
                ],
            ];
        @endphp

        <!-- ROW 1 (Continuous Scrolling Left | Pauses on Hover) -->
        <div class="relative overflow-hidden cursor-default py-1">
            <div class="marquee-row-1 gap-6 px-4">
                {{-- Loop twice for seamless infinite loop --}}
                @for ($pass = 0; $pass < 2; $pass++)
                    @foreach ($row1 as $item)
                        <div class="w-[300px] sm:w-[340px] md:w-[360px] shrink-0 bg-white rounded-2xl border border-slate-200/80 p-5 sm:p-6 shadow-xs hover:shadow-lg hover:border-slate-300 transition-all duration-300 flex flex-col justify-between">
                            
                            <div>
                                <!-- 5 Green Stars (Exact Pronto Theme) -->
                                <div class="flex items-center gap-1 text-[#81BA41] mb-3.5">
                                    @for ($s = 0; $s < $item['rating']; $s++)
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    @endfor
                                </div>

                                <!-- Review Quote Text -->
                                <p class="font-body text-xs sm:text-[13px] text-[#222222] font-normal leading-relaxed mb-6">
                                    “{{ $item['quote'] }}”
                                </p>
                            </div>

                            <!-- Author Info with Round Initial Avatar -->
                            <div class="flex items-center gap-3 pt-2">
                                <div class="w-8 h-8 rounded-full bg-emerald-50 text-primary-sub font-heading font-bold text-xs flex items-center justify-center shrink-0 border border-emerald-100">
                                    {{ $item['initial'] }}
                                </div>
                                <div class="leading-tight">
                                    <div class="font-heading font-bold text-xs sm:text-[13px] text-[#0C0C0C]">
                                        {{ $item['author'] }}
                                    </div>
                                    <div class="text-[11px] text-[#666666] font-light mt-0.5">
                                        {{ $item['location'] }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endfor
            </div>
        </div>

        <!-- ROW 2 (Continuous Scrolling Right | Pauses on Hover) -->
        <div class="relative overflow-hidden cursor-default py-1">
            <div class="marquee-row-2 gap-6 px-4">
                {{-- Loop twice for seamless infinite loop --}}
                @for ($pass = 0; $pass < 2; $pass++)
                    @foreach ($row2 as $item)
                        <div class="w-[300px] sm:w-[340px] md:w-[360px] shrink-0 bg-white rounded-2xl border border-slate-200/80 p-5 sm:p-6 shadow-xs hover:shadow-lg hover:border-slate-300 transition-all duration-300 flex flex-col justify-between">
                            
                            <div>
                                <!-- 5 Green Stars (Exact Pronto Theme) -->
                                <div class="flex items-center gap-1 text-[#81BA41] mb-3.5">
                                    @for ($s = 0; $s < $item['rating']; $s++)
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    @endfor
                                </div>

                                <!-- Review Quote Text -->
                                <p class="font-body text-xs sm:text-[13px] text-[#222222] font-normal leading-relaxed mb-6">
                                    “{{ $item['quote'] }}”
                                </p>
                            </div>

                            <!-- Author Info with Round Initial Avatar -->
                            <div class="flex items-center gap-3 pt-2">
                                <div class="w-8 h-8 rounded-full bg-emerald-50 text-primary-sub font-heading font-bold text-xs flex items-center justify-center shrink-0 border border-emerald-100">
                                    {{ $item['initial'] }}
                                </div>
                                <div class="leading-tight">
                                    <div class="font-heading font-bold text-xs sm:text-[13px] text-[#0C0C0C]">
                                        {{ $item['author'] }}
                                    </div>
                                    <div class="text-[11px] text-[#666666] font-light mt-0.5">
                                        {{ $item['location'] }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endfor
            </div>
        </div>

    </div>

</section>
