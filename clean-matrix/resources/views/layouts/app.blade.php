<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cleaning & Pest Control Services | Clean Matrix')</title>
    <meta name="description" content="@yield('meta_description', 'Explore Clean Matrix housekeeping, deep cleaning and pest control services for homes and businesses across Coimbatore. Contact us to discuss options and request a quote.')">
    <meta name="keywords" content="@yield('meta_keywords', 'cleaning services coimbatore, housekeeping services, deep cleaning coimbatore, pest control coimbatore, mechanized floor scrubbing, divergent chemicals, commercial cleaning SLA')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <meta name="author" content="Clean Matrix">

    <!-- Open Graph / Facebook / WhatsApp Preview -->
    <meta property="og:locale" content="en_IN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Cleaning & Pest Control Services | Clean Matrix')">
    <meta property="og:description" content="@yield('meta_description', 'Explore Clean Matrix housekeeping, deep cleaning and pest control services for homes and businesses across Coimbatore.')">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:site_name" content="Clean Matrix">
    <meta property="og:image" content="{{ asset('logo-mark.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Cleaning & Pest Control Services | Clean Matrix')">
    <meta name="twitter:description" content="@yield('meta_description', 'Explore Clean Matrix housekeeping, deep cleaning and pest control services for homes and businesses across Coimbatore.')">
    <meta name="twitter:image" content="{{ asset('logo-mark.png') }}">

    <!-- JSON-LD Structured Data (LocalBusiness, CleaningService & WebSite Schema - PDF Page 10) -->
    @php
        $siteSchema = [
            '@context' => 'https://schema.org',
            '@graph'   => [
                [
                    '@type'       => 'WebSite',
                    '@id'         => url('/') . '#website',
                    'url'         => url('/'),
                    'name'        => 'Clean Matrix',
                    'description' => 'Professional Mechanized Deep Cleaning, Sanitization, Housekeeping and Pest Control Services for Homes and Businesses in Coimbatore.',
                    'publisher'   => [
                        '@id' => url('/') . '#organization',
                    ],
                ],
                [
                    '@type'                      => ['CleaningService', 'LocalBusiness'],
                    '@id'                        => url('/') . '#organization',
                    'name'                       => 'Clean Matrix',
                    'alternateName'              => 'Clean Matrix Facility Services',
                    'url'                        => url('/'),
                    'logo'                       => asset('logo-mark.png'),
                    'image'                      => asset('images/hero-sections.png'),
                    'telephone'                  => '+919566666199',
                    'email'                      => 'info@cleanmatrix.in',
                    'priceRange'                 => '₹₹',
                    'currenciesAccepted'         => 'INR',
                    'paymentAccepted'            => 'Cash, Credit Card, UPI, Bank Transfer',
                    'address'                    => [
                        '@type'           => 'PostalAddress',
                        'streetAddress'   => 'No. 42, Avinashi Road, Peelamedu / RS Puram',
                        'addressLocality' => 'Coimbatore',
                        'addressRegion'   => 'Tamil Nadu',
                        'postalCode'      => '641004',
                        'addressCountry'  => 'IN',
                    ],
                    'geo'                        => [
                        '@type'     => 'GeoCoordinates',
                        'latitude'  => 11.0168,
                        'longitude' => 76.9558,
                    ],
                    'openingHoursSpecification'  => [
                        [
                            '@type'     => 'OpeningHoursSpecification',
                            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                            'opens'     => '08:00',
                            'closes'    => '20:00',
                        ],
                    ],
                    'areaServed'                 => [
                        ['@type' => 'AdministrativeArea', 'name' => 'Coimbatore'],
                        ['@type' => 'Place', 'name' => 'RS Puram'],
                        ['@type' => 'Place', 'name' => 'Gandhipuram'],
                        ['@type' => 'Place', 'name' => 'Peelamedu'],
                        ['@type' => 'Place', 'name' => 'Saravanampatti'],
                        ['@type' => 'Place', 'name' => 'Race Course'],
                        ['@type' => 'Place', 'name' => 'Saibaba Colony'],
                        ['@type' => 'Place', 'name' => 'Vadavalli'],
                        ['@type' => 'Place', 'name' => 'Ramanathapuram'],
                        ['@type' => 'Place', 'name' => 'Singanallur'],
                    ],
                    'hasOfferCatalog'            => [
                        '@type'           => 'OfferCatalog',
                        'name'            => 'Clean Matrix Cleaning Services',
                        'itemListElement' => [
                            [
                                '@type'       => 'Offer',
                                'itemOffered' => [
                                    '@type'       => 'Service',
                                    'name'        => 'Housekeeping Services',
                                    'description' => 'Routine upkeep and scheduled housekeeping for homes, villas, and workplaces in Coimbatore.',
                                ],
                            ],
                            [
                                '@type'       => 'Offer',
                                'itemOffered' => [
                                    '@type'       => 'Service',
                                    'name'        => 'Deep Cleaning Services',
                                    'description' => '360-degree intensive mechanized deep cleaning with single-disc German scrubbers and Taski formulations.',
                                ],
                            ],
                            [
                                '@type'       => 'Offer',
                                'itemOffered' => [
                                    '@type'       => 'Service',
                                    'name'        => 'Pest Control Services',
                                    'description' => 'Government-certified herbal gel baiting, anti-termite and odorless pest control.',
                                ],
                            ],
                            [
                                '@type'       => 'Offer',
                                'itemOffered' => [
                                    '@type'       => 'Service',
                                    'name'        => 'Commercial Cleaning Services',
                                    'description' => 'SLA-driven corporate housekeeping, IT park sanitization, and institutional cleaning.',
                                ],
                            ],
                        ],
                    ],
                    'sameAs'                     => [
                        'https://facebook.com',
                        'https://instagram.com',
                        'https://linkedin.com',
                        'https://youtube.com',
                    ],
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">
    {!! json_encode($siteSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    
    <!-- Favicon using logo-mark.png -->
    <link rel="icon" type="image/png" href="{{ asset('logo-mark.png') }}">
    
    <!-- Google Fonts: Lexend (Headings & Body Content) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (CDN configured with brand tokens) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#81BA41',
                            hover: '#73aa38',
                            sub: '#38863F',
                        },
                        secondary: {
                            DEFAULT: '#00448B',
                            hover: '#00366f',
                            sub: '#1A2C5D',
                        },
                        neutral: {
                            text: '#666666',
                            border: '#DBDCDE',
                            light: '#F8FAF9'
                        }
                    },
                    fontFamily: {
                        heading: ['Lexend', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        body: ['Lexend', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        sans: ['Lexend', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Lexend', ui-sans-serif, system-ui, sans-serif;
            color: #666666;
            background-color: #FFFFFF;
            font-weight: 400;
        }
        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Lexend', ui-sans-serif, system-ui, sans-serif;
            letter-spacing: -0.015em;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-neutral-text antialiased min-h-screen flex flex-col">

    <!-- Reusable Navbar Partial (Desktop + Mobile) -->
    @include('partials.navbar')

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Floating WhatsApp Quick Quote Widget (Right Side, Simple Icon, Expands on Hover) -->
    <a href="https://wa.me/919500475798?text=Hello%20Clean%20Matrix%2C%20I%20would%20like%20a%20quick%20quote" 
       target="_blank" 
       rel="noopener" 
       aria-label="WhatsApp Quick Quote"
       class="fixed bottom-20 right-6 z-50 group flex items-center bg-[#25D366] hover:bg-[#20ba5a] text-white rounded-full shadow-xl hover:shadow-2xl hover:shadow-green-500/30 transition-all duration-300 p-2 cursor-pointer">
        
        <!-- Expanding Text on Hover (Smoothly expands inward to the left) -->
        <span class="max-w-0 opacity-0 overflow-hidden whitespace-nowrap group-hover:max-w-[220px] group-hover:opacity-100 group-hover:pl-3.5 group-hover:pr-2 transition-all duration-300 ease-in-out font-heading text-xs font-semibold tracking-wide select-none">
            WhatsApp Quick Quote
        </span>

        <!-- Simple WhatsApp Icon (Default Clean Circle, No Blink Animation) -->
        <div class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center shrink-0">
            <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="WhatsApp" class="w-full h-full object-contain drop-shadow-sm group-hover:scale-110 transition-transform duration-300">
        </div>
    </a>

    <!-- ======================================================== -->
    <!-- GLOBAL SECTIONS                                          -->
    <!-- 1. OUR TESTIMONIALS SECTION                              -->
    <!-- 2. FAQ'S SECTION (Except Terms, Privacy & 404)           -->
    <!-- 3. QUICK LINKS & 4. MAIN FOOTER                          -->
    <!-- ======================================================== -->
    @php
        $isNotFound = request()->routeIs('404') || (isset($exception) && method_exists($exception, 'getStatusCode') && $exception->getStatusCode() == 404);
    @endphp
    @unless(request()->routeIs('privacy', 'terms') || $isNotFound)
        @include('components.testimonials')
        @include('components.faq')
    @endunless
    @include('partials.footer')

    <!-- Global Lucide Icon Initialization & Page Scripts -->
    <script>
        lucide.createIcons();
    </script>
    @stack('scripts')
</body>
</html>
