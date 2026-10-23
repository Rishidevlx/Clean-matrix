@extends('layouts.app')

@section('title', 'Cleaning Service Packages | Clean Matrix')
@section('meta_description', 'Compare available Clean Matrix cleaning packages and contact the team to confirm inclusions, terms and prices.')

@section('content')

<!-- ======================================================== -->
<!-- SECTION 1: DYNAMIC PAGE HERO COMPONENT                   -->
<!-- ======================================================== -->
<x-page-hero 
    badge="PLANS &amp; PACKAGES"
    title="Comprehensive Cleaning<br class='hidden sm:inline'> Packages for Every Space" 
    subtitle="From essential residential maintenance to heavy-duty campus & commercial transformations with guaranteed on-time execution."
    breadcrumb="Packages" 
    :image="asset('images/properties/residential.jpg')" 
    imageAlt="Clean Matrix Cleaning Packages"
    :showActions="true"
/>

<!-- ======================================================== -->
<!-- SECTION 2: PACKAGES & SMART COMBO OFFERS CARDS           -->
<!-- ======================================================== -->
@include('components.packages-offers')

<!-- ======================================================== -->
<!-- SECTION 3: COMPREHENSIVE PACKAGE COMPARISON MATRIX (Commented out as requested) -->
<!-- ======================================================== -->
{{-- @include('components.packages-comparison') --}}

<!-- ======================================================== -->
<!-- SECTION 4: CTA BANNER SECTION                            -->
<!-- ======================================================== -->
@include('components.cta-banner')

@endsection
