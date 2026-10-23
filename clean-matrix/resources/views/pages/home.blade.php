@extends('layouts.app')

@section('title', 'Clean Matrix — Clean Smarter. Live Better.')

@section('content')
    <!-- Pronto-Style Clean Minimal Hero Section -->
    @include('components.hero-section')

    <!-- Home About / Intro Section with Scallop Wave Divider -->
    @include('components.home-about-intro')

    <!-- Core Service Cards Section (Teardrop Interactive Hover) -->
    @include('components.service-cards')

    <!-- Choose By Property Section (Interactive Split Showcase) -->
    @include('components.choose-by-property')

    <!-- Packages / Offers Section (Exact Clenix Pricing Table UI) -->
    @include('components.packages-offers')

    <!-- How It Works / Working Process Section (Exact Clenix Curved Flow) -->
    @include('components.how-it-works')
@endsection
