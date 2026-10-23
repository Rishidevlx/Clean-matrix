@extends('layouts.app')

@section('title', 'Cleaning Service Packages | Clean Matrix')
@section('meta_description', 'Compare available Clean Matrix cleaning packages and contact the team to confirm inclusions, terms and prices')

@section('content')

<!-- ======================================================== -->
<!-- SECTION 1: GLOBAL HEADER BANNER WITH SLUG (H1 SEO)       -->
<!-- ======================================================== -->
<x-page-banner 
    title="Compare Clean Matrix Service Packages" 
    breadcrumb="Packages" 
    :bgImage="asset('images/contact-banner.jpg')" 
/>

<!-- ======================================================== -->
<!-- SECTION 2: PACKAGES & SMART COMBO OFFERS CARDS           -->
<!-- ======================================================== -->
@include('components.packages-offers')

<!-- ======================================================== -->
<!-- SECTION 3: COMPREHENSIVE PACKAGE COMPARISON MATRIX        -->
<!-- ======================================================== -->
@include('components.packages-comparison')

<!-- ======================================================== -->
<!-- SECTION 4: FREQUENTLY ASKED QUESTIONS SECTION            -->
<!-- ======================================================== -->
@include('components.faq')

<!-- ======================================================== -->
<!-- SECTION 5: CTA BANNER SECTION (Exact Clenix Origami 3D)  -->
<!-- ======================================================== -->
@include('components.cta-banner')

@endsection
