<!-- ======================================================== -->
<!-- HOW IT WORKS / OUR WORKING PROCESS (Exact Clenix Layout)  -->
<!-- ======================================================== -->

<style>
    /* Process Box Base & Transitions (Clenix Signature Slanted Cards) */
    .process-box {
        width: 140px;
        height: 140px;
        border-radius: 4px;
        background-color: #287ff9;
        border: 1px solid transparent;
        box-shadow: 0 6px 18px rgba(40, 127, 249, 0.18);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
        transform: rotate(6deg); /* All 3 cards slanted to the right */
        /* Leisurely, ultra-smooth transition */
        transition: all 0.75s cubic-bezier(0.25, 1, 0.5, 1);
        cursor: pointer;
    }
    @media (min-width: 640px) {
        .process-box {
            width: 160px;
            height: 160px;
        }
    }
    .process-box .process-icon {
        color: #ffffff;
        transition: all 0.75s cubic-bezier(0.25, 1, 0.5, 1);
    }

    /* On Hover: Smoothly straightens to center (0deg), lifts, turns WHITE, icon turns BLUE */
    .process-card-item:hover .process-box {
        transform: rotate(0deg) translateY(-8px);
        background-color: #ffffff !important;
        border-color: #e2e8f0 !important;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08) !important;
    }
    .process-card-item:hover .process-box .process-icon {
        color: #287ff9 !important;
        transform: scale(1.15);
    }
</style>

<section id="how-it-works" class="relative py-20 sm:py-28 bg-[#f4f7fc]">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-4">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24 space-y-3">
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-medium tracking-tight text-secondary">
                Our Working Process
            </h2>
            <p class="font-body text-sm sm:text-base text-neutral-text font-light leading-relaxed max-w-2xl mx-auto">
                Simple, transparent, and hassle-free — experience seamless booking from first enquiry to supervisor-inspected sparkling results.
            </p>
        </div>

        <!-- Working Process Flow Grid & Wide Extended Flight Path -->
        <div class="relative max-w-6xl mx-auto">

            <!-- Background Connecting Dashed Wavy Line & Paper Airplane (Straight on the Line) -->
            <div class="hidden md:block absolute top-[68px] left-0 right-0 w-full pointer-events-none z-0">
                <svg class="w-full h-24 overflow-visible" viewBox="0 0 1200 80" fill="none">
                    <!-- Static Start Point: Blue Ring Circle extended far to the left -->
                    <circle cx="30" cy="50" r="7" stroke="#287ff9" stroke-width="2.5" fill="#ffffff" />
                    <circle cx="30" cy="50" r="2.5" fill="#287ff9" />

                    <!-- Gentle Curved Wavy Dashed Path across entire width -->
                    <path d="M 45,50 C 180,18 300,38 430,46 C 580,56 700,28 850,42 C 980,56 1070,26 1145,15" 
                          stroke="#cbd5e1" 
                          stroke-width="2" 
                          stroke-dasharray="7 7" 
                          stroke-linecap="round" />

                    <!-- Paper Airplane sitting straight at the exact tip of the dashed line -->
                    <g transform="translate(1142, -2) rotate(-10)">
                        <path d="m22 2-7 20-4-9-9-4Z" stroke="#287ff9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        <path d="M22 2 11 13" stroke="#287ff9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                    </g>
                </svg>
            </div>

            <!-- 3 Steps Cards Container (Centered inside extended flight trail) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8 lg:gap-14 relative z-10 items-start max-w-4xl mx-auto">

                <!-- ======================================================== -->
                <!-- STEP 1: BOOK ONLINE FORM                                 -->
                <!-- ======================================================== -->
                <div class="process-card-item text-center group cursor-pointer flex flex-col items-center">
                    
                    <!-- Blue Slanted Box -> Turns White on Hover -->
                    <div class="process-box">
                        <div class="process-icon">
                            <i data-lucide="calendar-check" class="w-12 h-12 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <!-- Step Title -->
                    <h3 class="font-heading text-xl sm:text-2xl font-medium text-secondary group-hover:text-[#287ff9] transition-colors duration-200 mb-3 tracking-tight">
                        Book Online Form
                    </h3>

                    <!-- Step Description -->
                    <p class="font-body text-sm text-neutral-text font-light leading-relaxed max-w-xs mx-auto">
                        Choose your preferred service package, pick a convenient date & time, and share your property details.
                    </p>
                </div>

                <!-- ======================================================== -->
                <!-- STEP 2: GET CONFIRMATION                                 -->
                <!-- ======================================================== -->
                <div class="process-card-item text-center group cursor-pointer flex flex-col items-center">
                    
                    <!-- Blue Slanted Box -> Turns White on Hover -->
                    <div class="process-box">
                        <div class="process-icon">
                            <i data-lucide="mail" class="w-12 h-12 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <!-- Step Title -->
                    <h3 class="font-heading text-xl sm:text-2xl font-medium text-secondary group-hover:text-[#287ff9] transition-colors duration-200 mb-3 tracking-tight">
                        Get Confirmation
                    </h3>

                    <!-- Step Description -->
                    <p class="font-body text-sm text-neutral-text font-light leading-relaxed max-w-xs mx-auto">
                        Receive instant transparent quote, verified task list, and designated cleaning crew details with ETA.
                    </p>
                </div>

                <!-- ======================================================== -->
                <!-- STEP 3: LET'S ENJOY                                      -->
                <!-- ======================================================== -->
                <div class="process-card-item text-center group cursor-pointer flex flex-col items-center">
                    
                    <!-- Blue Slanted Box -> Turns White on Hover -->
                    <div class="process-box">
                        <div class="process-icon">
                            <i data-lucide="smile" class="w-12 h-12 stroke-[1.8]"></i>
                        </div>
                    </div>

                    <!-- Step Title -->
                    <h3 class="font-heading text-xl sm:text-2xl font-medium text-secondary group-hover:text-[#287ff9] transition-colors duration-200 mb-3 tracking-tight">
                        Let's Enjoy
                    </h3>

                    <!-- Step Description -->
                    <p class="font-body text-sm text-neutral-text font-light leading-relaxed max-w-xs mx-auto">
                        Our verified crew carries out mechanized German deep clean, supervisor inspects, and you enjoy a sparkling space.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>
