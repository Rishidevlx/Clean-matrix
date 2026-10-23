@props([
    'title' => 'Page Title',
    'breadcrumb' => null,
    'bgImage' => asset('images/contact-banner.jpg')
])

<!-- ======================================================== -->
<!-- GLOBAL PAGE HEADER BANNER (Reusable for All Sub-Pages)   -->
<!-- Clean & Crystal Light Black Overlay (Clenix Signature)   -->
<!-- ======================================================== -->
<section class="relative bg-secondary py-20 sm:py-28 overflow-hidden font-body">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $bgImage }}');">
        <!-- Clean Crystal Light Black Layer (Replaced heavy blue overlay) -->
        <div class="absolute inset-0 bg-black/45"></div>
    </div>

    <!-- Centered Content -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white z-10 space-y-3">
        <!-- Main Page H1 -->
        <h1 class="font-heading text-3xl sm:text-5xl lg:text-6xl font-medium tracking-tight text-white drop-shadow-sm">
            {{ $title }}
        </h1>

        <!-- Breadcrumb / Slug Navigation -->
        <div class="flex items-center justify-center gap-2 text-xs sm:text-sm font-body text-white/90 pt-1">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a>
            <span class="text-white/50 tracking-widest">&gt;&gt;</span>
            <span class="text-primary font-medium">{{ $breadcrumb ?? $title }}</span>
        </div>
    </div>
</section>
