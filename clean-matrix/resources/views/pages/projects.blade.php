@extends('layouts.app')

@section('title', 'Projects & Completed Cleaning Assignments | Clean Matrix')
@section('meta_description', 'Explore verified cleaning projects, deep sanitation case studies, and facility transformations completed by Clean Matrix across Coimbatore and Tamil Nadu.')

@section('content')

<!-- ======================================================== -->
<!-- 1. DYNAMIC PAGE HERO COMPONENT                           -->
<!-- ======================================================== -->
<x-page-hero 
    badge="PROVEN FIELDWORK"
    title="Featured Cleaning &amp;<br class='hidden sm:inline'> Facility Transformations" 
    subtitle="Explore verified deep sanitation case studies completed with German mechanized equipment across Coimbatore's homes, schools, and campuses."
    breadcrumb="Projects" 
    :image="asset('images/properties/commercial.jpg')" 
    imageAlt="Clean Matrix Cleaning Case Studies"
    :showActions="true"
/>

<!-- ======================================================== -->
<!-- 2. PROJECTS GALLERY SECTION (Pure White Background)      -->
<!-- ======================================================== -->
<section class="py-16 sm:py-20 lg:py-24 bg-white font-body border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16 space-y-2">
            <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                CASE STUDIES
            </p>
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold text-[#0F172A] tracking-tight">
                Featured Sanitation Transformations
            </h2>
            <p class="font-body text-sm sm:text-base text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto pt-1">
                Discover our mechanized deep cleaning work across luxury residential complexes, educational campuses, industrial warehouses, and commercial spaces.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Project 1: Luxury Villa Deep Clean -->
            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl transition-all duration-300 group">
                <div class="relative h-60 overflow-hidden bg-slate-900">
                    <img src="{{ asset('images/customers/commercial.jpg') }}" alt="Luxury Villa Deep Cleaning" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-[#81BA41] text-white text-[11px] font-semibold rounded-full uppercase tracking-wider">Residential</span>
                    </div>
                </div>
                <div class="p-6 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-[#0F172A] group-hover:text-emerald-600 transition-colors">
                        5,200 Sq.Ft Villa Pre-Occupancy Clean
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 font-normal line-clamp-2 leading-relaxed">
                        Complete post-renovation paint-splatter removal, single-disc Italian marble scrubbing, and 5-stage HEPA sanitization in Peelamedu, Coimbatore.
                    </p>
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span class="flex items-center gap-1 font-medium"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-emerald-600"></i> Peelamedu</span>
                        <span class="flex items-center gap-1 font-semibold text-emerald-600"><i data-lucide="check-circle" class="w-3.5 h-3.5"></i> 100% Sign-off</span>
                    </div>
                </div>
            </div>

            <!-- Project 2: School Campus Sanitization -->
            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl transition-all duration-300 group">
                <div class="relative h-60 overflow-hidden bg-slate-900">
                    <img src="{{ asset('images/customers/schools.jpg') }}" alt="School Cleaning & Sanitation" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-[#287ff9] text-white text-[11px] font-semibold rounded-full uppercase tracking-wider">Institution</span>
                    </div>
                </div>
                <div class="p-6 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-[#0F172A] group-hover:text-emerald-600 transition-colors">
                        CBSE School 42-Classroom Sanitization
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 font-normal line-clamp-2 leading-relaxed">
                        Comprehensive washroom descaling, non-toxic chemical fumigation, playground sanitization, and corridor mechanized scrubbing over weekend schedule.
                    </p>
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span class="flex items-center gap-1 font-medium"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-emerald-600"></i> Saravanampatti</span>
                        <span class="flex items-center gap-1 font-semibold text-emerald-600"><i data-lucide="check-circle" class="w-3.5 h-3.5"></i> Certified Safe</span>
                    </div>
                </div>
            </div>

            <!-- Project 3: University Campus Auditorium -->
            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl transition-all duration-300 group">
                <div class="relative h-60 overflow-hidden bg-slate-900">
                    <img src="{{ asset('images/customers/colleges.jpg') }}" alt="College Campus Facility Cleaning" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-[#00448B] text-white text-[11px] font-semibold rounded-full uppercase tracking-wider">Campus SLA</span>
                    </div>
                </div>
                <div class="p-6 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-[#0F172A] group-hover:text-emerald-600 transition-colors">
                        Engineering College 1,200-Seat Auditorium
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 font-normal line-clamp-2 leading-relaxed">
                        High-capacity acoustic fabric upholstery shampooing, stage wooden floor buffing, and high-reach glass cleaning for convocation ceremony.
                    </p>
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span class="flex items-center gap-1 font-medium"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-emerald-600"></i> Avinashi Road</span>
                        <span class="flex items-center gap-1 font-semibold text-emerald-600"><i data-lucide="check-circle" class="w-3.5 h-3.5"></i> Completed in 8 Hrs</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Quick Call to Action -->
        <div class="mt-16 text-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading text-sm sm:text-base font-semibold px-8 py-3.5 rounded-xl shadow-md hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5">
                <span>Book Similar Service</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

    </div>
</section>

<!-- CTA BANNER -->
@include('components.cta-banner')

@endsection
