<!-- Custom Styles for Teardrop & Inner Icon Waterfall Drop Hover Animation -->
<style>
    @keyframes dropToBottomFromTop {
        0% {
            transform: translateY(0);
        }
        49% {
            transform: translateY(125%);
        }
        50% {
            opacity: 0;
            transform: translateY(-125%);
        }
        51% {
            opacity: 1;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }
    .group:hover .card-drop-svg {
        animation: dropToBottomFromTop 0.6s cubic-bezier(0.25, 1, 0.5, 1) forwards;
    }
    .group:hover .card-drop-icon {
        animation: dropToBottomFromTop 0.78s cubic-bezier(0.25, 1, 0.5, 1) forwards;
    }
</style>

<!-- ============================================== -->
<!-- CORE SERVICE CARDS SECTION                     -->
<!-- ============================================== -->
<section id="services" class="relative bg-neutral-light/50 py-20 sm:py-28 overflow-hidden border-t border-neutral-border/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header (Clean H2 without badge, mentioning services clearly) -->
        <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-20 space-y-4">
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-normal leading-tight tracking-tight text-secondary">
                Cleaning & Pest Control Services
            </h2>

            <p class="font-body text-base text-neutral-text font-light leading-relaxed">
                Discover our specialized residential, commercial, and pest management services delivered by verified, trained professionals.
            </p>
        </div>

        <!-- 6 Core Service Cards Grid (3 Columns on Desktop) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10">

            <!-- ================= CARD 1: Housekeeping ================= -->
            <div class="relative bg-white rounded-2xl p-8 sm:p-10 border border-neutral-border/70 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden group text-center cursor-pointer">
                <!-- Dropdown Sliding Background Layer (Slides from Top to Bottom on Hover) -->
                <div class="absolute inset-0 bg-secondary-sub -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out z-0"></div>

                <!-- Card Content (Layered above sliding bg) -->
                <div class="relative z-10 flex flex-col items-center">
                    <!-- Clenix Exact Teardrop Icon Container (Cyan Blue -> White on hover with plunge & drop-in animation) -->
                    <div class="service-icon-box relative w-20 h-28 mb-6 overflow-hidden flex items-center justify-center">
                        <svg viewBox="0 0 79 116" class="card-drop-svg w-16 h-24 drop-shadow-sm transition-colors duration-400 fill-[#287ff9] group-hover:fill-white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M39.502 0C31.6073 22.5089 16.6608 39.8484 5.37571 59.9846C-9.69117 86.9025 8.57537 116 39.5 116C70.4246 116 88.6912 86.9025 73.6243 59.9846C62.3532 39.8484 47.3968 22.5089 39.502 0ZM67.7268 92.3406C65.1794 97.4267 61.3492 101.773 56.6082 104.959C51.8671 108.144 46.3762 110.06 40.6683 110.52C50.3741 106.605 58.3021 99.3068 62.9602 89.9995C67.6184 80.6922 68.6854 70.0175 65.9604 59.9846C69.042 64.7695 70.824 70.2631 71.1335 75.9323C71.443 81.6015 70.2695 87.2537 67.7268 92.3406V92.3406Z"/>
                        </svg>
                        <div class="card-drop-icon absolute inset-0 flex items-center justify-center pt-3 text-white group-hover:text-secondary-sub transition-colors duration-400">
                            <i data-lucide="home" class="w-7 h-7 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <!-- Title -->
                    <h3 class="font-heading text-xl sm:text-2xl font-normal text-secondary-sub group-hover:text-white transition-colors duration-400 mb-3">
                        Housekeeping Services
                    </h3>

                    <!-- Description -->
                    <p class="font-body text-[14.5px] text-neutral-text font-light leading-relaxed group-hover:text-white/80 transition-colors duration-400 mb-6">
                        Routine upkeep, sweeping, dusting, mopping, and recurring maintenance for homes, apartments, and living spaces.
                    </p>

                    <!-- Read More Link (Turns White on Hover) -->
                    <a href="#housekeeping" class="inline-flex items-center gap-1.5 text-sm font-medium text-secondary group-hover:text-white transition-colors duration-400">
                        <span>Read More</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>

            <!-- ================= CARD 2: Deep Cleaning ================= -->
            <div class="relative bg-white rounded-2xl p-8 sm:p-10 border border-neutral-border/70 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden group text-center cursor-pointer">
                <div class="absolute inset-0 bg-secondary-sub -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out z-0"></div>

                <div class="relative z-10 flex flex-col items-center">
                    <div class="service-icon-box relative w-20 h-28 mb-6 overflow-hidden flex items-center justify-center">
                        <svg viewBox="0 0 79 116" class="card-drop-svg w-16 h-24 drop-shadow-sm transition-colors duration-400 fill-[#287ff9] group-hover:fill-white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M39.502 0C31.6073 22.5089 16.6608 39.8484 5.37571 59.9846C-9.69117 86.9025 8.57537 116 39.5 116C70.4246 116 88.6912 86.9025 73.6243 59.9846C62.3532 39.8484 47.3968 22.5089 39.502 0ZM67.7268 92.3406C65.1794 97.4267 61.3492 101.773 56.6082 104.959C51.8671 108.144 46.3762 110.06 40.6683 110.52C50.3741 106.605 58.3021 99.3068 62.9602 89.9995C67.6184 80.6922 68.6854 70.0175 65.9604 59.9846C69.042 64.7695 70.824 70.2631 71.1335 75.9323C71.443 81.6015 70.2695 87.2537 67.7268 92.3406V92.3406Z"/>
                        </svg>
                        <div class="card-drop-icon absolute inset-0 flex items-center justify-center pt-3 text-white group-hover:text-secondary-sub transition-colors duration-400">
                            <i data-lucide="sparkles" class="w-7 h-7 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <h3 class="font-heading text-xl sm:text-2xl font-normal text-secondary-sub group-hover:text-white transition-colors duration-400 mb-3">
                        Deep Cleaning
                    </h3>

                    <p class="font-body text-[14.5px] text-neutral-text font-light leading-relaxed group-hover:text-white/80 transition-colors duration-400 mb-6">
                        Intensive scrubbing, advanced machine disinfection, and deep grease removal for bathrooms, kitchens, and entire premises.
                    </p>

                    <a href="#deep-cleaning" class="inline-flex items-center gap-1.5 text-sm font-medium text-secondary group-hover:text-white transition-colors duration-400">
                        <span>Read More</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>

            <!-- ================= CARD 3: Pest Control ================= -->
            <div class="relative bg-white rounded-2xl p-8 sm:p-10 border border-neutral-border/70 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden group text-center cursor-pointer">
                <div class="absolute inset-0 bg-secondary-sub -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out z-0"></div>

                <div class="relative z-10 flex flex-col items-center">
                    <div class="service-icon-box relative w-20 h-28 mb-6 overflow-hidden flex items-center justify-center">
                        <svg viewBox="0 0 79 116" class="card-drop-svg w-16 h-24 drop-shadow-sm transition-colors duration-400 fill-[#287ff9] group-hover:fill-white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M39.502 0C31.6073 22.5089 16.6608 39.8484 5.37571 59.9846C-9.69117 86.9025 8.57537 116 39.5 116C70.4246 116 88.6912 86.9025 73.6243 59.9846C62.3532 39.8484 47.3968 22.5089 39.502 0ZM67.7268 92.3406C65.1794 97.4267 61.3492 101.773 56.6082 104.959C51.8671 108.144 46.3762 110.06 40.6683 110.52C50.3741 106.605 58.3021 99.3068 62.9602 89.9995C67.6184 80.6922 68.6854 70.0175 65.9604 59.9846C69.042 64.7695 70.824 70.2631 71.1335 75.9323C71.443 81.6015 70.2695 87.2537 67.7268 92.3406V92.3406Z"/>
                        </svg>
                        <div class="card-drop-icon absolute inset-0 flex items-center justify-center pt-3 text-white group-hover:text-secondary-sub transition-colors duration-400">
                            <i data-lucide="shield-check" class="w-7 h-7 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <h3 class="font-heading text-xl sm:text-2xl font-normal text-secondary-sub group-hover:text-white transition-colors duration-400 mb-3">
                        Pest Control
                    </h3>

                    <p class="font-body text-[14.5px] text-neutral-text font-light leading-relaxed group-hover:text-white/80 transition-colors duration-400 mb-6">
                        Certified, eco-friendly formulations targeting termites, cockroaches, rodents, and bed bugs. Family and pet safe.
                    </p>

                    <a href="#pest-control" class="inline-flex items-center gap-1.5 text-sm font-medium text-secondary group-hover:text-white transition-colors duration-400">
                        <span>Read More</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>

            <!-- ================= CARD 4: Commercial Cleaning ================= -->
            <div class="relative bg-white rounded-2xl p-8 sm:p-10 border border-neutral-border/70 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden group text-center cursor-pointer">
                <div class="absolute inset-0 bg-secondary-sub -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out z-0"></div>

                <div class="relative z-10 flex flex-col items-center">
                    <div class="service-icon-box relative w-20 h-28 mb-6 overflow-hidden flex items-center justify-center">
                        <svg viewBox="0 0 79 116" class="card-drop-svg w-16 h-24 drop-shadow-sm transition-colors duration-400 fill-[#287ff9] group-hover:fill-white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M39.502 0C31.6073 22.5089 16.6608 39.8484 5.37571 59.9846C-9.69117 86.9025 8.57537 116 39.5 116C70.4246 116 88.6912 86.9025 73.6243 59.9846C62.3532 39.8484 47.3968 22.5089 39.502 0ZM67.7268 92.3406C65.1794 97.4267 61.3492 101.773 56.6082 104.959C51.8671 108.144 46.3762 110.06 40.6683 110.52C50.3741 106.605 58.3021 99.3068 62.9602 89.9995C67.6184 80.6922 68.6854 70.0175 65.9604 59.9846C69.042 64.7695 70.824 70.2631 71.1335 75.9323C71.443 81.6015 70.2695 87.2537 67.7268 92.3406V92.3406Z"/>
                        </svg>
                        <div class="card-drop-icon absolute inset-0 flex items-center justify-center pt-3 text-white group-hover:text-secondary-sub transition-colors duration-400">
                            <i data-lucide="building-2" class="w-7 h-7 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <h3 class="font-heading text-xl sm:text-2xl font-normal text-secondary-sub group-hover:text-white transition-colors duration-400 mb-3">
                        Commercial Cleaning
                    </h3>

                    <p class="font-body text-[14.5px] text-neutral-text font-light leading-relaxed group-hover:text-white/80 transition-colors duration-400 mb-6">
                        Custom janitorial solutions, desk sanitization, and scheduled facility maintenance for offices, IT parks, and retail outlets.
                    </p>

                    <a href="#commercial-cleaning" class="inline-flex items-center gap-1.5 text-sm font-medium text-secondary group-hover:text-white transition-colors duration-400">
                        <span>Read More</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>

            <!-- ================= CARD 5: School & College Cleaning ================= -->
            <div class="relative bg-white rounded-2xl p-8 sm:p-10 border border-neutral-border/70 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden group text-center cursor-pointer">
                <div class="absolute inset-0 bg-secondary-sub -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out z-0"></div>

                <div class="relative z-10 flex flex-col items-center">
                    <div class="service-icon-box relative w-20 h-28 mb-6 overflow-hidden flex items-center justify-center">
                        <svg viewBox="0 0 79 116" class="card-drop-svg w-16 h-24 drop-shadow-sm transition-colors duration-400 fill-[#287ff9] group-hover:fill-white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M39.502 0C31.6073 22.5089 16.6608 39.8484 5.37571 59.9846C-9.69117 86.9025 8.57537 116 39.5 116C70.4246 116 88.6912 86.9025 73.6243 59.9846C62.3532 39.8484 47.3968 22.5089 39.502 0ZM67.7268 92.3406C65.1794 97.4267 61.3492 101.773 56.6082 104.959C51.8671 108.144 46.3762 110.06 40.6683 110.52C50.3741 106.605 58.3021 99.3068 62.9602 89.9995C67.6184 80.6922 68.6854 70.0175 65.9604 59.9846C69.042 64.7695 70.824 70.2631 71.1335 75.9323C71.443 81.6015 70.2695 87.2537 67.7268 92.3406V92.3406Z"/>
                        </svg>
                        <div class="card-drop-icon absolute inset-0 flex items-center justify-center pt-3 text-white group-hover:text-secondary-sub transition-colors duration-400">
                            <i data-lucide="graduation-cap" class="w-7 h-7 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <h3 class="font-heading text-xl sm:text-2xl font-normal text-secondary-sub group-hover:text-white transition-colors duration-400 mb-3">
                        Educational Facilities
                    </h3>

                    <p class="font-body text-[14.5px] text-neutral-text font-light leading-relaxed group-hover:text-white/80 transition-colors duration-400 mb-6">
                        Rigorous hygiene protocols for classrooms, campus corridors, labs, and washrooms aligned around academic hours.
                    </p>

                    <a href="#school-cleaning" class="inline-flex items-center gap-1.5 text-sm font-medium text-secondary group-hover:text-white transition-colors duration-400">
                        <span>Read More</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>

            <!-- ================= CARD 6: Move-In / Move-Out ================= -->
            <div class="relative bg-white rounded-2xl p-8 sm:p-10 border border-neutral-border/70 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden group text-center cursor-pointer">
                <div class="absolute inset-0 bg-secondary-sub -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out z-0"></div>

                <div class="relative z-10 flex flex-col items-center">
                    <div class="service-icon-box relative w-20 h-28 mb-6 overflow-hidden flex items-center justify-center">
                        <svg viewBox="0 0 79 116" class="card-drop-svg w-16 h-24 drop-shadow-sm transition-colors duration-400 fill-[#287ff9] group-hover:fill-white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M39.502 0C31.6073 22.5089 16.6608 39.8484 5.37571 59.9846C-9.69117 86.9025 8.57537 116 39.5 116C70.4246 116 88.6912 86.9025 73.6243 59.9846C62.3532 39.8484 47.3968 22.5089 39.502 0ZM67.7268 92.3406C65.1794 97.4267 61.3492 101.773 56.6082 104.959C51.8671 108.144 46.3762 110.06 40.6683 110.52C50.3741 106.605 58.3021 99.3068 62.9602 89.9995C67.6184 80.6922 68.6854 70.0175 65.9604 59.9846C69.042 64.7695 70.824 70.2631 71.1335 75.9323C71.443 81.6015 70.2695 87.2537 67.7268 92.3406V92.3406Z"/>
                        </svg>
                        <div class="card-drop-icon absolute inset-0 flex items-center justify-center pt-3 text-white group-hover:text-secondary-sub transition-colors duration-400">
                            <i data-lucide="check-check" class="w-7 h-7 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <h3 class="font-heading text-xl sm:text-2xl font-normal text-secondary-sub group-hover:text-white transition-colors duration-400 mb-3">
                        Move-In / Handover
                    </h3>

                    <p class="font-body text-[14.5px] text-neutral-text font-light leading-relaxed group-hover:text-white/80 transition-colors duration-400 mb-6">
                        Complete deep sanitization and handover preparation, ensuring fresh, spotless spaces for new tenants and owners.
                    </p>

                    <a href="#packages" class="inline-flex items-center gap-1.5 text-sm font-medium text-secondary group-hover:text-white transition-colors duration-400">
                        <span>Read More</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>

        </div>

        <!-- Bottom Action CTA Banner -->
        <div class="mt-16 text-center">
            <p class="font-body text-[15px] text-neutral-text mb-4 font-light">
                Need a tailored cleaning package for your home or business?
            </p>
            <a href="#quote" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white text-sm font-medium px-8 py-3.5 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                <span>Request a Custom Quote</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

    </div>
</section>
