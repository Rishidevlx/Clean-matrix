<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Master registry for the 4 core services.
     */
    protected function getServices()
    {
        return [
            'housekeeping' => [
                'slug'              => 'housekeeping',
                'name'              => 'Housekeeping Services',
                'badge'             => 'ROUTINE & RECURRING HOUSEKEEPING',
                'hero_title'        => "Professional Housekeeping<br class='hidden sm:inline'> for Homes & Workplaces",
                'hero_subtitle'     => "Reliable recurring and scheduled housekeeping with German scrubbers, eco-certified chemicals, and dedicated background-checked specialists across Coimbatore.",
                'hero_image'        => asset('images/about-hero-specialist.jpg'),
                'hero_image_alt'    => 'Clean Matrix Housekeeping Team in Coimbatore',
                'meta_title'        => 'Housekeeping Services for Homes & Offices | Clean Matrix Coimbatore',
                'meta_desc'         => 'Explore Clean Matrix professional housekeeping services for residential and commercial properties in Coimbatore. Recurring weekly & monthly plans.',
                'done_right_title'  => 'Housekeeping in Coimbatore — Done Right, Every Time',
                'done_right_points' => [
                    '10+ years of mechanized housekeeping and hygiene experience in Coimbatore',
                    '5,000+ homes, villas, and workplaces serviced with spotless consistency',
                    '100% in-house, police-verified and uniformed staff — never unvetted gig workers',
                    'Plant & enzyme-based Diversey formulations — child-safe, pet-friendly & allergy-safe',
                    'German mechanized scrubbers & HEPA-filtered dust extraction equipment',
                    'Colour-coded microfiber mops and cloths to prevent cross-contamination between rooms',
                    'Payment collected only after you and your supervisor fully approve — no advance required',
                    '100% Re-cleaning guarantee — free return within 24 hours if not completely satisfied',
                ],
                'comparison_title'  => 'What Makes Our Housekeeping Different',
                'comparison_rows'   => [
                    [
                        'feature' => 'Systematic Room-by-Room Coverage',
                        'matrix'  => 'Fans, switchboards, exhaust vents, under-furniture & corners — every visit',
                        'other'   => 'Hard-to-reach areas and hidden corners frequently skipped',
                    ],
                    [
                        'feature' => 'Colour-Coded Microfiber Cloths',
                        'matrix'  => 'Separate dedicated cloths for kitchen, bathroom, glass & living — zero cross-contamination',
                        'other'   => 'Same rag used across toilet, countertops, and dining tables',
                    ],
                    [
                        'feature' => 'Child-Safe & Pet-Safe Products',
                        'matrix'  => 'Diversey certified non-toxic, plant & enzyme biodegradable cleaners with zero harsh odors',
                        'other'   => 'Pungent acid, hazardous chlorine bleach & corrosive chemicals',
                    ],
                    [
                        'feature' => 'Consistent Verified Staff',
                        'matrix'  => 'Dedicated assigned team familiar with your home layout and surface preferences',
                        'other'   => 'Random unvetted daily-wage workers assigned each session',
                    ],
                    [
                        'feature' => 'Payment After Service',
                        'matrix'  => 'Zero advance required — pay only after you inspect and approve the result',
                        'other'   => 'Full advance or prepayment demanded upfront; disputes ignored',
                    ],
                    [
                        'feature' => '24-Hour Re-Cleaning Guarantee',
                        'matrix'  => 'Free supervisor return within 24 hours if any spot doesn’t meet your standard',
                        'other'   => 'Complaint resolution slow or not guaranteed',
                    ],
                ],
                'how_it_works_title' => 'Our Working Process',
                'steps' => [
                    [
                        'number' => '1',
                        'title'  => 'Book Online Form',
                        'desc'   => 'Choose your preferred home size, schedule frequency, and share your property details.',
                        'icon'   => 'calendar-check',
                    ],
                    [
                        'number' => '2',
                        'title'  => 'Get Confirmation',
                        'desc'   => 'Receive instant transparent quote, verified task list, and designated cleaning crew details with ETA.',
                        'icon'   => 'mail',
                    ],
                    [
                        'number' => '3',
                        'title'  => "Let's Enjoy",
                        'desc'   => 'Our verified crew carries out mechanized German deep clean, supervisor inspects, and you enjoy a sparkling space.',
                        'icon'   => 'smile',
                    ],
                ],
                'gallery' => [
                    asset('images/customers/residential.jpg'),
                    asset('images/about/about-staff.jpg'),
                    asset('images/about-hero-specialist.jpg'),
                    asset('images/customers/schools.jpg'),
                    asset('images/customers/commercial.jpg'),
                    asset('images/properties/residential.jpg'),
                    asset('images/about/about-1.jpg'),
                    asset('images/about/about-2.jpg'),
                    asset('images/properties/commercial.jpg'),
                ],
            ],

            'deep-cleaning' => [
                'slug'              => 'deep-cleaning',
                'name'              => 'Deep Cleaning Services',
                'badge'             => 'INTENSIVE MECHANIZED DEEP CLEANING',
                'hero_title'        => "Intensive Deep Cleaning<br class='hidden sm:inline'> for Homes & Businesses",
                'hero_subtitle'     => "360-degree top-to-bottom mechanized sanitization tackling stubborn grime, limescale, grout dirt, and hidden allergens across Coimbatore.",
                'hero_image'        => asset('images/properties/residential.jpg'),
                'hero_image_alt'    => 'Clean Matrix Deep Cleaning Services in Coimbatore',
                'meta_title'        => 'Deep Cleaning Services for Homes & Offices | Clean Matrix Coimbatore',
                'meta_desc'         => 'Intensive mechanized deep cleaning in Coimbatore. Single-disc German floor scrubbers, tile descaling, kitchen degreasing, and 100% satisfaction guarantee.',
                'done_right_title'  => 'Home Deep Cleaning in Coimbatore — Done Right, Every Time',
                'done_right_points' => [
                    '10+ years of mechanized deep cleaning expertise across Coimbatore homes and villas',
                    '5,000+ homes and offices deep cleaned with German floor scrubbers and steam units',
                    '100% In-house, police-verified and uniformed technicians with full safety PPE',
                    'Diversey certified non-toxic, eco-safe formulations safe for children, pets and elders',
                    'Single-disc mechanized floor scrubbers restoring tile, marble, and granite gloss',
                    'Colour-coded microfiber cloths and specialized sponges to prevent cross-contamination',
                    'Payment collected only after you and your supervisor fully approve — no advance required',
                    '100% Re-cleaning guarantee — free supervisor revisit within 24 hours if not satisfied',
                ],
                'comparison_title'  => 'What Makes Our Home Deep Cleaning Different',
                'comparison_rows'   => [
                    [
                        'feature' => 'Systematic Room-by-Room Coverage',
                        'matrix'  => 'Fans, grills, exhaust vents, appliances, sliding window tracks & bathroom fittings — every area',
                        'other'   => 'Hard-to-reach areas and hidden corners frequently skipped',
                    ],
                    [
                        'feature' => 'Single-Disc German Floor Scrubbing',
                        'matrix'  => 'High-torque orbital scrubbing extracting deep grime, oil, and grout stains without scratching',
                        'other'   => 'Basic manual mop and broom that only moves dirt around',
                    ],
                    [
                        'feature' => 'Child-Safe & Pet-Safe Products',
                        'matrix'  => 'Plant & enzyme-based, biodegradable formulations — zero harsh chemical fumes or corrosive acids',
                        'other'   => 'Synthetic harsh chemicals with pungent fumes and hazardous acid washes',
                    ],
                    [
                        'feature' => 'Colour-Coded Microfiber Cloths',
                        'matrix'  => 'Separate dedicated cloths for kitchen, sanitary, glass & furniture — zero cross-contamination',
                        'other'   => 'Same tools and dirty rags used across all residential areas',
                    ],
                    [
                        'feature' => 'Payment After Service',
                        'matrix'  => 'Zero advance required — pay only after the supervisor inspection meets your full satisfaction',
                        'other'   => 'Advance or prepayment typically required upfront before starting',
                    ],
                    [
                        'feature' => '100% Re-Cleaning Guarantee',
                        'matrix'  => 'No questions asked — free re-cleaning revisit within 24 hours if any spot is missed',
                        'other'   => 'Complaint resolution slow, disputed, or completely unavailable',
                    ],
                ],
                'how_it_works_title' => 'Our Working Process',
                'steps' => [
                    [
                        'number' => '1',
                        'title'  => 'Book Online Form',
                        'desc'   => 'Choose your deep clean service package, pick a convenient date & time, and share your property details.',
                        'icon'   => 'calendar-check',
                    ],
                    [
                        'number' => '2',
                        'title'  => 'Get Confirmation',
                        'desc'   => 'Receive instant transparent quote, verified task list, and designated cleaning crew details with ETA.',
                        'icon'   => 'mail',
                    ],
                    [
                        'number' => '3',
                        'title'  => "Let's Enjoy",
                        'desc'   => 'Our verified crew carries out mechanized German deep clean, supervisor inspects, and you enjoy a sparkling space.',
                        'icon'   => 'smile',
                    ],
                ],
                'gallery' => [
                    asset('images/properties/residential.jpg'),
                    asset('images/customers/residential.jpg'),
                    asset('images/about/about-staff.jpg'),
                    asset('images/about-hero-specialist.jpg'),
                    asset('images/customers/schools.jpg'),
                    asset('images/customers/commercial.jpg'),
                    asset('images/about/about-1.jpg'),
                    asset('images/about/about-2.jpg'),
                    asset('images/properties/commercial.jpg'),
                ],
            ],

            'pest-control' => [
                'slug'              => 'pest-control',
                'name'              => 'Pest Control Services',
                'badge'             => 'GOVERNMENT-CERTIFIED PEST CONTROL',
                'hero_title'        => "Targeted Odorless Pest Control<br class='hidden sm:inline'> for Homes & Businesses",
                'hero_subtitle'     => "Herbal gel baiting, anti-termite treatment, bed bug thermal spray, and rodent exclusion using 100% child and pet-safe certified formulations.",
                'hero_image'        => asset('images/hero-sections.png'),
                'hero_image_alt'    => 'Clean Matrix Pest Control in Coimbatore',
                'meta_title'        => 'Residential & Commercial Pest Control | Clean Matrix Coimbatore',
                'meta_desc'         => 'Certified odorless pest control in Coimbatore for cockroaches, termites, bedbugs, mosquitoes and rodents. Child & pet safe herbal formulations.',
                'done_right_title'  => 'Pest Control in Coimbatore — Done Right, Every Time',
                'done_right_points' => [
                    'Targeted eradication for cockroaches, termites, bedbugs, wood-borers & rodents',
                    '100% Odorless herbal gel baiting — no need to vacate kitchen or empty food cabinets',
                    'Certified safe Bayer & Syngenta formulations compliant with WHO & CIB standards',
                    'Completely child-friendly & pet-safe with zero hazardous chemical fumes',
                    'Experienced technicians trained in biological pest behavior and entry-point sealing',
                    'Long-lasting residual protective barrier preventing future breeding cycles',
                    'Transparent flat pricing with zero hidden surcharges or surprise upgrade fees',
                    'Up to 90-day service warranty with complimentary return inspection if pests reappear',
                ],
                'comparison_title'  => 'What Makes Our Pest Control Different',
                'comparison_rows'   => [
                    [
                        'feature' => '100% Odorless Gel Formulations',
                        'matrix'  => 'Clean herbal gel dots applied inside hinges & cracks — no messy spraying, zero chemical smell',
                        'other'   => 'Pungent oil-based sprays forcing family and pets to evacuate for hours',
                    ],
                    [
                        'feature' => 'Targeted Biological Eradication',
                        'matrix'  => 'Attacks pest nesting colonies through domino-effect ingestion for complete extermination',
                        'other'   => 'Surface aerosol spray that only kills visible bugs without reaching nests',
                    ],
                    [
                        'feature' => 'Child & Pet Safe Precautions',
                        'matrix'  => 'Government-registered non-toxic products placed safely out of children & pets’ reach',
                        'other'   => 'Hazardous agricultural-grade pesticides used indoors illegally',
                    ],
                    [
                        'feature' => 'In-House Certified Technicians',
                        'matrix'  => 'Uniformed, background-verified specialists equipped with proper application safety gear',
                        'other'   => 'Untrained local vendors with zero chemical safety certification',
                    ],
                    [
                        'feature' => 'Transparent Fixed Quotation',
                        'matrix'  => 'Pre-agreed transparent pricing with no surprise charges on treatment day',
                        'other'   => 'Low initial bait price followed by aggressive upselling at your door',
                    ],
                    [
                        'feature' => 'Documented Service Warranty',
                        'matrix'  => 'Up to 90-day warranty — free follow-up revisit if pests return during the warranty period',
                        'other'   => 'Zero warranty or guarantee once the vendor leaves your property',
                    ],
                ],
                'how_it_works_title' => 'Our Working Process',
                'steps' => [
                    [
                        'number' => '1',
                        'title'  => 'Book Online Form',
                        'desc'   => 'Select your pest issue (cockroaches, termites, bed bugs, rodents) and property details.',
                        'icon'   => 'calendar-check',
                    ],
                    [
                        'number' => '2',
                        'title'  => 'Get Confirmation',
                        'desc'   => 'Receive appointment confirmation with pre-service preparation checklist and transparent quote.',
                        'icon'   => 'mail',
                    ],
                    [
                        'number' => '3',
                        'title'  => "Let's Enjoy",
                        'desc'   => 'Our certified pest specialist conducts odorless treatment and issues your service warranty card.',
                        'icon'   => 'smile',
                    ],
                ],
                'gallery' => [
                    asset('images/customers/residential.jpg'),
                    asset('images/about-hero-specialist.jpg'),
                    asset('images/about/about-staff.jpg'),
                    asset('images/customers/commercial.jpg'),
                    asset('images/properties/residential.jpg'),
                    asset('images/customers/schools.jpg'),
                    asset('images/about/about-1.jpg'),
                    asset('images/about/about-2.jpg'),
                    asset('images/properties/commercial.jpg'),
                ],
            ],

            'commercial-cleaning' => [
                'slug'              => 'commercial-cleaning',
                'name'              => 'Commercial Cleaning Services',
                'badge'             => 'CORPORATE & FACILITY HYGIENE',
                'hero_title'        => "Commercial Cleaning<br class='hidden sm:inline'> for Workspaces & Hubs",
                'hero_subtitle'     => "High-capacity corporate housekeeping, industrial scrubbing, campus sanitization, and flexible after-hours maintenance across Coimbatore.",
                'hero_image'        => asset('images/properties/commercial.jpg'),
                'hero_image_alt'    => 'Clean Matrix Commercial Cleaning Coimbatore',
                'meta_title'        => 'Commercial Cleaning Services in Coimbatore | Clean Matrix',
                'meta_desc'         => 'Reliable commercial cleaning and corporate housekeeping across Coimbatore. Offices, tech parks, schools, colleges, and retail facilities.',
                'done_right_title'  => 'Commercial Cleaning in Coimbatore — Done Right, Every Time',
                'done_right_points' => [
                    'Tailored hygiene solutions for IT offices, tech parks, retail showrooms & institutions',
                    'Flexible after-hours and weekend schedules to ensure zero disruption to your workday',
                    'High-capacity single-disc scrubbers, industrial wet extraction & high-reach glass cleaning',
                    '100% Police-verified staff with biometric attendance tracking and dedicated on-site supervisor',
                    'GST-compliant B2B billing with itemized audit checklists and transparent SLA terms',
                    'Hospital-grade sanitization compliant with OSHA and corporate workplace safety norms',
                    'Comprehensive public liability coverage for complete peace of mind',
                    'Dedicated facility account manager with guaranteed 2-hour response resolution',
                ],
                'comparison_title'  => 'What Makes Our Commercial Cleaning Different',
                'comparison_rows'   => [
                    [
                        'feature' => 'SLA-Driven Corporate Standards',
                        'matrix'  => 'Rigorous multi-point checklists with digital supervisor audits before daily handover',
                        'other'   => 'Informal manual cleaning with zero accountability or checklist inspection',
                    ],
                    [
                        'feature' => 'Mechanized High-Capacity Equipment',
                        'matrix'  => 'Heavy-duty floor scrubbers, carpet extractors, and micro-fiber flat mops',
                        'other'   => 'Basic domestic mops and brooms inadequate for large commercial sq.ft',
                    ],
                    [
                        'feature' => 'Zero Workflow Interruption',
                        'matrix'  => 'Silent operating procedures and flexible after-hours or early morning shifts',
                        'other'   => 'Disruptive daytime cleaning interrupting client meetings and staff calls',
                    ],
                    [
                        'feature' => 'Verified & Insured Workforce',
                        'matrix'  => '100% background-checked, uniformed personnel with PPE and safety training',
                        'other'   => 'Unvetted daily-wage workers posing security and compliance risks',
                    ],
                    [
                        'feature' => 'GST & Transparent Invoicing',
                        'matrix'  => 'Proper tax invoices, corporate credit terms, and itemized task reporting',
                        'other'   => 'Cash-only demands with missing invoices and undocumented tax compliance',
                    ],
                    [
                        'feature' => 'Dedicated Account Manager',
                        'matrix'  => 'Single point of contact for escalations, supplies, and emergency support',
                        'other'   => 'No dedicated support; calls routed to unresponsive contractors',
                    ],
                ],
                'how_it_works_title' => 'Our Working Process',
                'steps' => [
                    [
                        'number' => '1',
                        'title'  => 'Book Online Form',
                        'desc'   => 'Submit facility details (office, campus, retail), square footage, and cleaning frequency.',
                        'icon'   => 'calendar-check',
                    ],
                    [
                        'number' => '2',
                        'title'  => 'Get Confirmation',
                        'desc'   => 'Receive site assessment schedule, transparent SLA proposal, and customized pricing.',
                        'icon'   => 'mail',
                    ],
                    [
                        'number' => '3',
                        'title'  => "Let's Enjoy",
                        'desc'   => 'Our certified crew commences scheduled work with dedicated supervisor audits and report handover.',
                        'icon'   => 'smile',
                    ],
                ],
                'gallery' => [
                    asset('images/customers/commercial.jpg'),
                    asset('images/properties/commercial.jpg'),
                    asset('images/customers/schools.jpg'),
                    asset('images/about-hero-specialist.jpg'),
                    asset('images/about/about-staff.jpg'),
                    asset('images/customers/colleges.jpg'),
                    asset('images/properties/residential.jpg'),
                    asset('images/about/about-1.jpg'),
                    asset('images/about/about-2.jpg'),
                ],
            ],
        ];
    }

    /**
     * Show a specific service page.
     */
    public function show($slug)
    {
        // Normalize slug: strip -services or match base
        $cleanSlug = str_replace('-services', '', strtolower($slug));
        
        $services = $this->getServices();

        if (!array_key_exists($cleanSlug, $services)) {
            abort(404);
        }

        $service = $services[$cleanSlug];

        return view('pages.service-detail', compact('service'));
    }

    /**
     * Services index route (defaults to deep-cleaning or overview).
     */
    public function index()
    {
        return redirect()->route('services.show', 'deep-cleaning');
    }
}
