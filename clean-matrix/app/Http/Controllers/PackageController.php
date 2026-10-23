<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Master registry for the 4 property-specific package types.
     */
    protected function getPackages()
    {
        return [
            'residential-cleaning' => [
                'slug'              => 'residential-cleaning',
                'name'              => 'Residential Cleaning',
                'badge'             => 'RESIDENTIAL PACKAGES',
                'hero_title'        => "Residential Cleaning Packages<br class='hidden sm:inline'> for Every Home",
                'hero_subtitle'     => "Transparent monthly plans with mechanized German scrubbing, certified eco-friendly chemicals, and free home care kits for apartments and villas in Coimbatore.",
                'hero_image'        => asset('images/properties/residential.jpg'),
                'hero_image_alt'    => 'Clean Matrix Residential Cleaning Packages in Coimbatore',
                'meta_title'        => 'Residential Cleaning Packages | Clean Matrix Coimbatore',
                'meta_desc'         => 'Compare residential cleaning packages from Clean Matrix. 4-in-1 Essential and 6-in-1 Comprehensive combo plans with German scrubbing technology.',
                'section_badge'     => 'PLANS & PRICING',
                'section_title'     => 'Residential Packages & Smart Combos',
                'section_subtitle'  => 'Transparent monthly plans with mechanized German scrubbing, certified eco-friendly chemicals, and free home care kits.',
                'tiers' => [
                    [
                        'name'        => '4-in-1 Essential',
                        'icon'        => 'spray-can',
                        'price'       => '₹2,499',
                        'period'      => '/ Per month',
                        'is_popular'  => false,
                        'features'    => [
                            '2 Bedrooms Cleaning',
                            'Vacuuming & Scrubbing',
                            '2 Bathroom Cleaning',
                            'Window & Glass Wash',
                            '1 Livingroom Cleaning',
                        ],
                        'btn_text'    => 'Get Started',
                    ],
                    [
                        'name'        => '6-in-1 Comprehensive',
                        'icon'        => 'sparkles',
                        'price'       => '₹4,499',
                        'period'      => '/ Per month',
                        'is_popular'  => true,
                        'badge'       => 'POPULAR',
                        'features'    => [
                            'Full Home Mechanized Scrub',
                            'Kitchen Chimney & Degreasing',
                            '3 Bathrooms Descaling',
                            'Balcony Pressure Wash',
                            'Free Home Care Kit Included',
                        ],
                        'btn_text'    => 'Choose Plan',
                    ],
                    [
                        'name'        => 'Villa & Custom Combo',
                        'icon'        => 'home',
                        'price'       => '₹5,999',
                        'period'      => '/ Per visit',
                        'is_popular'  => false,
                        'features'    => [
                            'Complete Villa Deep Clean',
                            'Fabric Sofa Shampooing',
                            'Italian Marble Buffing',
                            'Herbal Pest Control Included',
                            'Supervisor Handover Sign-off',
                        ],
                        'btn_text'    => 'Contact Team',
                    ],
                ],
            ],

            'school-cleaning' => [
                'slug'              => 'school-cleaning',
                'name'              => 'School Cleaning Services',
                'badge'             => 'INSTITUTIONAL PACKAGES',
                'hero_title'        => "School &amp; Daycare Cleaning<br class='hidden sm:inline'> Packages &amp; SLAs",
                'hero_subtitle'     => "Child-safe, certified non-toxic sanitization packages scheduled around academic timetables with certified bio-safety standards and trained manpower.",
                'hero_image'        => asset('images/properties/school.jpg'),
                'hero_image_alt'    => 'Clean Matrix School Cleaning Packages Coimbatore',
                'meta_title'        => 'School Cleaning Packages | Clean Matrix Coimbatore',
                'meta_desc'         => 'Certified child-safe cleaning packages for schools and daycare centers across Coimbatore. Non-toxic sanitization and holiday deep cleaning.',
                'section_badge'     => 'EDUCATION HYGIENE',
                'section_title'     => 'School Campus Hygiene Plans & SLAs',
                'section_subtitle'  => 'Flexible after-school, weekend, and vacation deep cleaning plans designed for nurseries, CBSE schools, and institutions.',
                'tiers' => [
                    [
                        'name'        => 'Classroom Care Plan',
                        'icon'        => 'school',
                        'price'       => '₹9,999',
                        'period'      => '/ Per month',
                        'is_popular'  => false,
                        'features'    => [
                            'Up to 10 Classrooms Sanitization',
                            'Desk & Bench Food-Grade Wipe',
                            'Restroom Daily Descaling',
                            'Safe Corridor Mopping',
                            'Weekly Supervisor Inspection',
                        ],
                        'btn_text'    => 'Select Plan',
                    ],
                    [
                        'name'        => 'Campus Comprehensive',
                        'icon'        => 'shield-check',
                        'price'       => '₹18,499',
                        'period'      => '/ Per month',
                        'is_popular'  => true,
                        'badge'       => 'MOST POPULAR',
                        'features'    => [
                            'Up to 25 Classrooms & Staffrooms',
                            'Science Lab Disinfection',
                            'Restroom Deep Sanitation',
                            'Playground Toy Disinfection',
                            'Term-Holiday Machine Scrub',
                        ],
                        'btn_text'    => 'Request Proposal',
                    ],
                    [
                        'name'        => 'Annual Turnkey SLA',
                        'icon'        => 'building',
                        'price'       => 'Custom Quote',
                        'period'      => '/ Annual SLA',
                        'is_popular'  => false,
                        'features'    => [
                            'Entire Campus & Auditorium',
                            'High-Reach Glass Facade Washing',
                            'Termite & Pest Control Combo',
                            'Full In-House Verified Crew',
                            'Monthly Hygiene Audit Report',
                        ],
                        'btn_text'    => 'Schedule Site Visit',
                    ],
                ],
            ],

            'college-cleaning' => [
                'slug'              => 'college-cleaning',
                'name'              => 'College Cleaning Services',
                'badge'             => 'CAMPUS & HIGHER EDUCATION',
                'hero_title'        => "College &amp; University Facility<br class='hidden sm:inline'> Cleaning Packages",
                'hero_subtitle'     => "High-capacity mechanized solutions for university auditoriums, science laboratories, student canteens, and multi-storey hostel facilities.",
                'hero_image'        => asset('images/properties/college.jpg'),
                'hero_image_alt'    => 'Clean Matrix College Cleaning Packages Coimbatore',
                'meta_title'        => 'College Campus Cleaning Packages | Clean Matrix Coimbatore',
                'meta_desc'         => 'Mechanized campus cleaning plans for colleges and universities in Coimbatore. Auditorium acoustic care, hostel blocks, and laboratories.',
                'section_badge'     => 'CAMPUS HYGIENE',
                'section_title'     => 'Higher Education Facility Plans & SLAs',
                'section_subtitle'  => 'Audited hygiene packages using heavy-duty German scrubbers and certified industrial extractors.',
                'tiers' => [
                    [
                        'name'        => 'Academic Block Care',
                        'icon'        => 'graduation-cap',
                        'price'       => '₹19,999',
                        'period'      => '/ Per month',
                        'is_popular'  => false,
                        'features'    => [
                            'Lecture Halls & Seminar Rooms',
                            'Corridor Single-Disc Scrubbing',
                            'Campus Restroom Restoration',
                            'Daily High-Traffic Mopping',
                            'Weekly Checklist Reporting',
                        ],
                        'btn_text'    => 'Select Plan',
                    ],
                    [
                        'name'        => 'Hostel & Campus SLA',
                        'icon'        => 'layers',
                        'price'       => '₹34,999',
                        'period'      => '/ Per month',
                        'is_popular'  => true,
                        'badge'       => 'POPULAR',
                        'features'    => [
                            'Multi-Storey Hostel Blocks Care',
                            'Canteen & Mess Steam Degreasing',
                            'Heavy Washroom Sanitization',
                            'Weekend Machine Deep Scrub',
                            'Free Disinfection Care Kits',
                        ],
                        'btn_text'    => 'Request Proposal',
                    ],
                    [
                        'name'        => 'Complete University SLA',
                        'icon'        => 'building-2',
                        'price'       => 'Custom Quote',
                        'period'      => '/ Institutional SLA',
                        'is_popular'  => false,
                        'features'    => [
                            'Turnkey Auditorium & Labs Care',
                            'Acoustic Chair Shampooing',
                            'Grounds & Facade Jet Wash',
                            'Biometric Attendance Crew',
                            'ISO Hygiene Compliance Audit',
                        ],
                        'btn_text'    => 'Book Assessment',
                    ],
                ],
            ],

            'commercial-property' => [
                'slug'              => 'commercial-property',
                'name'              => 'Commercial Property Cleaning',
                'badge'             => 'CORPORATE & ENTERPRISE',
                'hero_title'        => "Commercial Property Cleaning<br class='hidden sm:inline'> Packages &amp; SLAs",
                'hero_subtitle'     => "SLA-driven corporate housekeeping, carpet extraction, high-reach glass cleaning, and night-shift maintenance for office spaces across Coimbatore.",
                'hero_image'        => asset('images/properties/commercial.jpg'),
                'hero_image_alt'    => 'Clean Matrix Commercial Cleaning Packages Coimbatore',
                'meta_title'        => 'Commercial Property Cleaning Packages | Clean Matrix Coimbatore',
                'meta_desc'         => 'Transparent corporate housekeeping and office cleaning packages in Coimbatore. B2B contracts, carpet extraction, and after-hours service.',
                'section_badge'     => 'COMMERCIAL PACKAGES',
                'section_title'     => 'Commercial Office & Facility Plans',
                'section_subtitle'  => 'Transparent B2B monthly packages with GST-compliant billing and dedicated facility managers across Coimbatore.',
                'tiers' => [
                    [
                        'name'        => 'Small Office Care',
                        'icon'        => 'briefcase',
                        'price'       => '₹7,499',
                        'period'      => '/ Per month',
                        'is_popular'  => false,
                        'features'    => [
                            'Up to 2,000 Sq.Ft Office Space',
                            'Daily Workstation Dusting',
                            'Pantry Steam Sanitization',
                            'Restroom Deep Disinfection',
                            'Weekend Single-Disc Floor Scrub',
                        ],
                        'btn_text'    => 'Select Plan',
                    ],
                    [
                        'name'        => 'Corporate Office Pro',
                        'icon'        => 'building-2',
                        'price'       => '₹14,999',
                        'period'      => '/ Per month',
                        'is_popular'  => true,
                        'badge'       => 'POPULAR',
                        'features'    => [
                            'Up to 6,000 Sq.Ft Corporate Office',
                            'Carpet Vacuum & Spot Removal',
                            'Glass Partition Deep Wipe',
                            'Flexible After-Hours Shifts',
                            'Weekly Supervisor Audit Report',
                        ],
                        'btn_text'    => 'Request Proposal',
                    ],
                    [
                        'name'        => 'Enterprise Facility SLA',
                        'icon'        => 'shield-check',
                        'price'       => 'Custom Quote',
                        'period'      => '/ Corporate SLA',
                        'is_popular'  => false,
                        'features'    => [
                            '10,000+ Sq.Ft IT Parks & Retail',
                            'Dedicated Uniformed Crew with PPE',
                            'Mechanized Ride-On Scrubbers',
                            'GST-Compliant Monthly Invoicing',
                            'Dedicated Account Manager SLA',
                        ],
                        'btn_text'    => 'Book Assessment',
                    ],
                ],
            ],
        ];
    }

    /**
     * Show a property-specific package page.
     */
    public function show($slug)
    {
        // Normalize slug: e.g. residential or residential-cleaning
        $cleanSlug = strtolower($slug);
        
        $aliasMap = [
            'residential'                   => 'residential-cleaning',
            'residential-cleaning'          => 'residential-cleaning',
            'school'                        => 'school-cleaning',
            'school-cleaning'               => 'school-cleaning',
            'school-cleaning-services'      => 'school-cleaning',
            'college'                       => 'college-cleaning',
            'college-cleaning'              => 'college-cleaning',
            'college-cleaning-services'     => 'college-cleaning',
            'commercial'                    => 'commercial-property',
            'commercial-property'           => 'commercial-property',
            'commercial-property-cleaning'  => 'commercial-property',
        ];

        if (array_key_exists($cleanSlug, $aliasMap)) {
            $cleanSlug = $aliasMap[$cleanSlug];
        }

        $packages = $this->getPackages();

        if (!array_key_exists($cleanSlug, $packages)) {
            abort(404);
        }

        $package = $packages[$cleanSlug];

        return view('pages.package-detail', compact('package'));
    }

    /**
     * Direct /packages redirect to first sub-menu item.
     */
    public function index()
    {
        return redirect()->route('packages.show', 'residential-cleaning');
    }
}
