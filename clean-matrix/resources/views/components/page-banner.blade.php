@props([
    'title' => 'Page Title',
    'breadcrumb' => null,
    'badge' => null,
    'subtitle' => null,
    'image' => null,
    'imageAlt' => null,
    'bgImage' => null,
    'showActions' => true,
])

<x-page-hero 
    :title="$title"
    :breadcrumb="$breadcrumb"
    :badge="$badge"
    :subtitle="$subtitle ?? 'Professional mechanized cleaning and pest control services across Coimbatore.'"
    :image="$image ?? asset('images/hero-sections.png')"
    :imageAlt="$imageAlt ?? $title"
    :showActions="$showActions"
/>
