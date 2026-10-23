<!-- Main Navigation Bar -->
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-neutral-border shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo -->
            <a href="/" class="flex items-center gap-3 py-1 group">
                <img src="{{ asset('logo-header.png') }}" alt="Clean Matrix" class="h-14 sm:h-16 w-auto object-contain transition-transform group-hover:scale-[1.02]">
            </a>

            <!-- Desktop Navigation Menu -->
            <nav class="hidden lg:flex items-center space-x-1 xl:space-x-2 font-body text-[14.5px] font-normal text-neutral-text">
                <!-- 1. Home -->
                <a href="/" class="px-3.5 py-2 relative transition-colors {{ request()->routeIs('home') ? 'text-primary font-medium after:content-[\'\'] after:absolute after:bottom-0 after:left-3.5 after:right-3.5 after:h-0.5 after:bg-primary' : 'hover:text-secondary' }}">
                    Home
                </a>

                <!-- 2. About -->
                <a href="{{ route('about') }}" class="px-3.5 py-2 relative transition-colors {{ request()->routeIs('about') ? 'text-primary font-medium after:content-[\'\'] after:absolute after:bottom-0 after:left-3.5 after:right-3.5 after:h-0.5 after:bg-primary' : 'hover:text-secondary' }}">
                    About
                </a>

                <!-- 3. Services Dropdown -->
                <div class="relative group">
                    <button class="px-3.5 py-2 inline-flex items-center gap-1.5 hover:text-secondary transition-colors focus:outline-none">
                        <span>Services</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-neutral-text/70 group-hover:rotate-180 transition-transform duration-200"></i>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 top-full pt-2 w-72 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-200 ease-out z-50">
                        <div class="bg-white rounded-xl shadow-xl border border-neutral-border p-2 space-y-1">
                            <a href="{{ route('services.show', 'housekeeping') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-secondary-sub hover:bg-neutral-light hover:text-primary transition-colors group/item">
                                <i data-lucide="home" class="w-4 h-4 text-primary shrink-0 transition-transform group-hover/item:scale-110"></i>
                                <span class="text-[14px] font-normal">Housekeeping Services</span>
                            </a>
                            <a href="{{ route('services.show', 'deep-cleaning') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-secondary-sub hover:bg-neutral-light hover:text-primary transition-colors group/item">
                                <i data-lucide="sparkles" class="w-4 h-4 text-primary shrink-0 transition-transform group-hover/item:scale-110"></i>
                                <span class="text-[14px] font-normal">Deep Cleaning Services</span>
                            </a>
                            <a href="{{ route('services.show', 'pest-control') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-secondary-sub hover:bg-neutral-light hover:text-primary transition-colors group/item">
                                <i data-lucide="shield-alert" class="w-4 h-4 text-primary shrink-0 transition-transform group-hover/item:scale-110"></i>
                                <span class="text-[14px] font-normal">Pest Control Services</span>
                            </a>
                            <a href="{{ route('services.show', 'commercial-cleaning') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-secondary-sub hover:bg-neutral-light hover:text-primary transition-colors group/item">
                                <i data-lucide="building-2" class="w-4 h-4 text-primary shrink-0 transition-transform group-hover/item:scale-110"></i>
                                <span class="text-[14px] font-normal">Commercial Cleaning Services</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 4. Packages Dropdown (with Submenu of Industry items) -->
                <div class="relative group">
                    <button type="button" class="px-3.5 py-2 inline-flex items-center gap-1.5 hover:text-secondary transition-colors focus:outline-none {{ request()->routeIs('packages*') ? 'text-primary font-medium after:content-[\'\'] after:absolute after:bottom-0 after:left-3.5 after:right-3.5 after:h-0.5 after:bg-primary' : '' }}">
                        <span>Packages</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-neutral-text/70 group-hover:rotate-180 transition-transform duration-200"></i>
                    </button>
                    <!-- Packages + Industry Submenu Dropdown -->
                    <div class="absolute left-0 top-full pt-2 w-72 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-200 ease-out z-50">
                        <div class="bg-white rounded-xl shadow-xl border border-neutral-border p-2 space-y-1">
                            <a href="{{ route('packages.show', 'residential-cleaning') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-secondary-sub hover:bg-neutral-light hover:text-primary transition-colors group/item {{ request()->is('packages/residential*') ? 'bg-primary/5 text-primary font-medium' : '' }}">
                                <i data-lucide="home" class="w-4 h-4 text-primary shrink-0 transition-transform group-hover/item:scale-110"></i>
                                <span class="text-[14px] font-normal">Residential Cleaning</span>
                            </a>
                            <a href="{{ route('packages.show', 'school-cleaning') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-secondary-sub hover:bg-neutral-light hover:text-primary transition-colors group/item {{ request()->is('packages/school*') ? 'bg-primary/5 text-primary font-medium' : '' }}">
                                <i data-lucide="school" class="w-4 h-4 text-primary shrink-0 transition-transform group-hover/item:scale-110"></i>
                                <span class="text-[14px] font-normal">School Cleaning Services</span>
                            </a>
                            <a href="{{ route('packages.show', 'college-cleaning') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-secondary-sub hover:bg-neutral-light hover:text-primary transition-colors group/item {{ request()->is('packages/college*') ? 'bg-primary/5 text-primary font-medium' : '' }}">
                                <i data-lucide="graduation-cap" class="w-4 h-4 text-primary shrink-0 transition-transform group-hover/item:scale-110"></i>
                                <span class="text-[14px] font-normal">College Cleaning Services</span>
                            </a>
                            <a href="{{ route('packages.show', 'commercial-property') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-secondary-sub hover:bg-neutral-light hover:text-primary transition-colors group/item {{ request()->is('packages/commercial*') ? 'bg-primary/5 text-primary font-medium' : '' }}">
                                <i data-lucide="building-2" class="w-4 h-4 text-primary shrink-0 transition-transform group-hover/item:scale-110"></i>
                                <span class="text-[14px] font-normal">Commercial Property Cleaning</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 5. Project -->
                <a href="{{ route('projects') }}" class="px-3.5 py-2 relative transition-colors {{ request()->routeIs('projects') ? 'text-primary font-medium after:content-[\'\'] after:absolute after:bottom-0 after:left-3.5 after:right-3.5 after:h-0.5 after:bg-primary' : 'hover:text-secondary' }}">
                    Project
                </a>

                <!-- 6. Contact -->
                <a href="{{ route('contact') }}" class="px-3.5 py-2 relative transition-colors {{ request()->routeIs('contact') ? 'text-primary font-medium after:content-[\'\'] after:absolute after:bottom-0 after:left-3.5 after:right-3.5 after:h-0.5 after:bg-primary' : 'hover:text-secondary' }}">
                    Contact
                </a>
            </nav>

            <!-- Right Side Actions: Quick Contact & Quote Button (7. Action Btn) -->
            <div class="hidden lg:flex items-center space-x-6">
                <!-- Quick Call Box -->
                <div class="flex items-center gap-3 text-left">
                    <div class="w-10 h-10 rounded-full bg-primary/15 text-primary-sub flex items-center justify-center">
                        <i data-lucide="phone-call" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <span class="block text-[11px] text-neutral-text/70 uppercase tracking-wider font-medium">Quick Contact</span>
                        <a href="tel:+919566666199" class="block text-[14px] font-semibold text-secondary hover:text-primary transition-colors">
                            +91 95666 66199
                        </a>
                    </div>
                </div>

                <!-- 7. Action Button: Get a Quote -->
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg bg-primary hover:bg-primary-hover text-white text-[14px] font-medium shadow-sm transition-all duration-200 hover:shadow-md hover:scale-[1.02] active:scale-[0.98]">
                    <span>Get a Quote</span>
                    <i data-lucide="arrow-right" class="w-4 h-4 ml-1.5"></i>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex lg:hidden items-center">
                <button type="button" id="mobileMenuBtn" aria-label="Toggle navigation menu" class="p-2 rounded-lg text-neutral-text hover:text-secondary hover:bg-neutral-light transition-colors">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="mobileMenu" class="hidden lg:hidden border-t border-neutral-border bg-white px-4 pt-3 pb-6 space-y-3 font-body">
        <a href="/" class="block py-2 text-base {{ request()->routeIs('home') ? 'text-primary font-medium' : 'text-neutral-text hover:text-secondary' }}">Home</a>
        <a href="{{ route('about') }}" class="block py-2 text-base {{ request()->routeIs('about') ? 'text-primary font-medium' : 'text-neutral-text hover:text-secondary' }}">About</a>
        
        <!-- Mobile Services Accordion -->
        <div>
            <button id="mobileServicesBtn" class="flex justify-between items-center w-full py-2 text-base text-neutral-text hover:text-secondary">
                <span>Services</span>
                <i data-lucide="chevron-down" id="mobileServicesChevron" class="w-4 h-4 transition-transform duration-200"></i>
            </button>
            <div id="mobileServicesMenu" class="hidden pl-3 py-1 space-y-2 border-l-2 border-primary/30 mt-1">
                <a href="{{ route('services.show', 'housekeeping') }}" class="flex items-center gap-2.5 py-1.5 text-sm text-neutral-text hover:text-primary">
                    <i data-lucide="home" class="w-4 h-4 text-primary"></i>
                    <span>Housekeeping Services</span>
                </a>
                <a href="{{ route('services.show', 'deep-cleaning') }}" class="flex items-center gap-2.5 py-1.5 text-sm text-neutral-text hover:text-primary">
                    <i data-lucide="sparkles" class="w-4 h-4 text-primary"></i>
                    <span>Deep Cleaning Services</span>
                </a>
                <a href="{{ route('services.show', 'pest-control') }}" class="flex items-center gap-2.5 py-1.5 text-sm text-neutral-text hover:text-primary">
                    <i data-lucide="shield-alert" class="w-4 h-4 text-primary"></i>
                    <span>Pest Control Services</span>
                </a>
                <a href="{{ route('services.show', 'commercial-cleaning') }}" class="flex items-center gap-2.5 py-1.5 text-sm text-neutral-text hover:text-primary">
                    <i data-lucide="building-2" class="w-4 h-4 text-primary"></i>
                    <span>Commercial Cleaning Services</span>
                </a>
            </div>
        </div>

        <!-- Mobile Packages Accordion (with Submenu of Industry Items) -->
        <div>
            <button id="mobilePackagesBtn" class="flex justify-between items-center w-full py-2 text-base text-neutral-text hover:text-secondary">
                <span>Packages</span>
                <i data-lucide="chevron-down" id="mobilePackagesChevron" class="w-4 h-4 transition-transform duration-200"></i>
            </button>
            <div id="mobilePackagesMenu" class="hidden pl-3 py-1 space-y-2 border-l-2 border-primary/30 mt-1">
                <a href="{{ route('packages.show', 'residential-cleaning') }}" class="flex items-center gap-2.5 py-1.5 text-sm {{ request()->is('packages/residential*') ? 'text-primary font-medium' : 'text-neutral-text hover:text-primary' }}">
                    <i data-lucide="home" class="w-4 h-4 text-primary"></i>
                    <span>Residential Cleaning</span>
                </a>
                <a href="{{ route('packages.show', 'school-cleaning') }}" class="flex items-center gap-2.5 py-1.5 text-sm {{ request()->is('packages/school*') ? 'text-primary font-medium' : 'text-neutral-text hover:text-primary' }}">
                    <i data-lucide="school" class="w-4 h-4 text-primary"></i>
                    <span>School Cleaning Services</span>
                </a>
                <a href="{{ route('packages.show', 'college-cleaning') }}" class="flex items-center gap-2.5 py-1.5 text-sm {{ request()->is('packages/college*') ? 'text-primary font-medium' : 'text-neutral-text hover:text-primary' }}">
                    <i data-lucide="graduation-cap" class="w-4 h-4 text-primary"></i>
                    <span>College Cleaning Services</span>
                </a>
                <a href="{{ route('packages.show', 'commercial-property') }}" class="flex items-center gap-2.5 py-1.5 text-sm {{ request()->is('packages/commercial*') ? 'text-primary font-medium' : 'text-neutral-text hover:text-primary' }}">
                    <i data-lucide="building-2" class="w-4 h-4 text-primary"></i>
                    <span>Commercial Property Cleaning</span>
                </a>
            </div>
        </div>

        <!-- Mobile Project Link -->
        <a href="{{ route('projects') }}" class="block py-2 text-base {{ request()->routeIs('projects') ? 'text-primary font-medium' : 'text-neutral-text hover:text-secondary' }}">Project</a>

        <!-- Mobile Contact Link -->
        <a href="{{ route('contact') }}" class="block py-2 text-base {{ request()->routeIs('contact') ? 'text-primary font-medium' : 'text-neutral-text hover:text-secondary' }}">Contact</a>

        <!-- Mobile Quick Call & Quote Action -->
        <div class="pt-4 border-t border-neutral-border space-y-3">
            <a href="tel:+919566666199" class="flex items-center gap-2 text-secondary-sub font-medium py-1">
                <i data-lucide="phone-call" class="w-4 h-4 text-primary"></i>
                <span>Call: +91 95666 66199</span>
            </a>
            <a href="{{ route('contact') }}" class="block text-center w-full bg-primary hover:bg-primary-hover text-white text-sm font-medium py-2.5 rounded-lg shadow-sm">
                Get a Quote
            </a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Mobile Drawer Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Mobile Services Accordion
        const mobileServicesBtn = document.getElementById('mobileServicesBtn');
        const mobileServicesMenu = document.getElementById('mobileServicesMenu');
        const mobileServicesChevron = document.getElementById('mobileServicesChevron');
        if (mobileServicesBtn && mobileServicesMenu) {
            mobileServicesBtn.addEventListener('click', () => {
                mobileServicesMenu.classList.toggle('hidden');
                if (mobileServicesChevron) mobileServicesChevron.classList.toggle('rotate-180');
            });
        }

        // Mobile Packages Accordion
        const mobilePackagesBtn = document.getElementById('mobilePackagesBtn');
        const mobilePackagesMenu = document.getElementById('mobilePackagesMenu');
        const mobilePackagesChevron = document.getElementById('mobilePackagesChevron');
        if (mobilePackagesBtn && mobilePackagesMenu) {
            mobilePackagesBtn.addEventListener('click', () => {
                mobilePackagesMenu.classList.toggle('hidden');
                if (mobilePackagesChevron) mobilePackagesChevron.classList.toggle('rotate-180');
            });
        }
    });
</script>
