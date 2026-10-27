@extends('layouts.app')

@section('title', 'Cleaning & Pest Control Services | Clean Matrix')
@section('meta_description', 'Explore Clean Matrix housekeeping, deep cleaning and pest control services for homes and businesses. Contact us to discuss options and request a quote.')
@section('meta_keywords', 'cleaning services coimbatore, housekeeping services, deep cleaning, pest control coimbatore, residential cleaning, commercial cleaning, sanitization coimbatore, floor scrubbing')
@section('canonical', route('home'))

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
