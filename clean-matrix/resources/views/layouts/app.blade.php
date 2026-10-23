<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Clean Matrix — Clean Smarter. Live Better.')</title>
    <meta name="description" content="@yield('meta_description', 'Clean Matrix — Professional Mechanized Deep Cleaning, Sanitization, Housekeeping and Pest Control Services for Homes and Businesses in Chennai.')">
    
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
    <!-- COMPULSORY GLOBAL SECTIONS (All Pages)                   -->
    <!-- 1. OUR TESTIMONIALS SECTION                              -->
    <!-- 2. FAQ'S SECTION                                         -->
    <!-- 3. QUICK LINKS & 4. MAIN FOOTER                          -->
    <!-- ======================================================== -->
    @include('components.testimonials')
    @include('components.faq')
    @include('partials.footer')

    <!-- Global Lucide Icon Initialization & Page Scripts -->
    <script>
        lucide.createIcons();
    </script>
    @stack('scripts')
</body>
</html>
