@extends('layouts.app')

@section('title', 'Privacy Policy | Clean Matrix')
@section('meta_description', 'Read the Clean Matrix Privacy Policy to understand how we collect, protect, and handle your personal and property information with complete security.')
@section('meta_keywords', 'privacy policy clean matrix, customer data protection, service security, coimbatore cleaning privacy')
@section('canonical', route('privacy'))

@section('content')

<!-- ======================================================== -->
<!-- SECTION 2: PRIVACY POLICY CONTENT & STICKY NAVIGATION    -->
<!-- ======================================================== -->
<section class="py-12 sm:py-16 lg:py-20 bg-white font-body relative border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Top Overview Banner Card -->
        <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 mb-10 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="space-y-1.5">
                <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                    TRANSPARENCY &amp; TRUST
                </p>
                <h2 class="font-heading text-2xl sm:text-3xl font-bold text-[#0F172A] tracking-tight">
                    Clean Matrix Privacy Policy
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 font-normal">
                    Effective Date: October 2026 &bull; Last Updated: October 24, 2026
                </p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-[#81BA41] hover:bg-[#72aa38] text-white text-xs sm:text-sm font-heading font-semibold transition-colors shadow-sm">
                    <i data-lucide="help-circle" class="w-4 h-4"></i>
                    <span>Legal Support</span>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-8 lg:gap-10">

            <!-- ======================================================== -->
            <!-- LEFT COLUMN: STICKY TABLE OF CONTENTS                    -->
            <!-- ======================================================== -->
            <aside class="col-span-12 lg:col-span-4 space-y-6">
                
                <div class="sticky top-24 bg-white rounded-2xl border border-slate-200/80 p-6 shadow-sm space-y-6">
                    <div>
                        <h2 class="font-heading text-base font-bold text-secondary flex items-center gap-2 pb-3 border-b border-slate-100">
                            <i data-lucide="list-ordered" class="w-4 h-4 text-primary"></i>
                            <span>Table of Contents</span>
                        </h2>
                    </div>

                    <nav class="space-y-1.5 text-xs font-heading">
                        <a href="#intro" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>1. Introduction &amp; Commitment</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#collect" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>2. Information We Collect</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#usage" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>3. How We Use Your Data</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#sharing" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>4. Information Sharing &amp; Disclosure</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#security" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>5. Data Security &amp; Encryption</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#cookies" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>6. Cookies &amp; Analytics</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#rights" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>7. Your Privacy Rights (DPDP Act)</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#officer" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>8. Grievance &amp; Contact Details</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                    </nav>

                    <!-- Quick Support Callout -->
                    <div class="bg-gradient-to-br from-[#00448B] to-[#002766] text-white p-5 rounded-xl shadow-xs space-y-3">
                        <div class="flex items-center gap-2 font-heading font-semibold text-xs text-[#81BA41]">
                            <i data-lucide="lock" class="w-4 h-4"></i>
                            <span>Zero Data Resale Guarantee</span>
                        </div>
                        <p class="text-[11px] text-white/80 font-light leading-relaxed">
                            Clean Matrix never rents, sells, or monetizes client information or property details to telemarketers or third-party advertisers.
                        </p>
                        <div class="pt-2 border-t border-white/10 flex items-center justify-between text-xs font-heading">
                            <span class="text-white/70">Questions?</span>
                            <a href="tel:+919566666199" class="text-primary hover:underline font-semibold">+91 95666 66199</a>
                        </div>
                    </div>

                </div>

            </aside>

            <!-- ======================================================== -->
            <!-- RIGHT COLUMN: DETAILED LEGAL POLICY ARTICLES             -->
            <!-- ======================================================== -->
            <main class="col-span-12 lg:col-span-8 space-y-8">

                <!-- Article 1: Introduction -->
                <article id="intro" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            01
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Introduction &amp; Commitment
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            Welcome to <strong>Clean Matrix</strong> ("Clean Matrix", "we", "our", or "us"). We operate mechanized cleaning, deep sanitation, and residential/commercial facility maintenance services headquartered in Coimbatore, Tamil Nadu, India.
                        </p>
                        <p>
                            We value your trust and are fully committed to protecting your personal and property data in accordance with the applicable laws of India, including the <em>Information Technology Act, 2000</em> and the <em>Digital Personal Data Protection Act (DPDPA), 2023</em>.
                        </p>
                        <p>
                            This Privacy Policy explains how we collect, process, safeguard, and retain information when you visit our website (<a href="{{ route('home') }}" class="text-primary font-medium hover:underline">cleanmatrix.in</a>), book our deep cleaning services, or interact with our customer care representatives.
                        </p>
                    </div>
                </article>

                <!-- Article 2: Information We Collect -->
                <article id="collect" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            02
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Information We Collect
                        </h2>
                    </div>
                    <div class="space-y-4 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            To deliver timely, high-grade cleaning and provide accurate quotes, we collect the following categories of information:
                        </p>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1">
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 space-y-1.5">
                                <h3 class="font-heading font-semibold text-xs text-secondary-sub flex items-center gap-2">
                                    <i data-lucide="user" class="w-4 h-4 text-primary"></i>
                                    <span>Personal Contact Data</span>
                                </h3>
                                <p class="text-xs text-neutral-text/80">
                                    Full name, primary phone number, WhatsApp contact number, and email address for booking notifications and quote approvals.
                                </p>
                            </div>
                            
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 space-y-1.5">
                                <h3 class="font-heading font-semibold text-xs text-secondary-sub flex items-center gap-2">
                                    <i data-lucide="map-pin" class="w-4 h-4 text-primary"></i>
                                    <span>Property &amp; Location Details</span>
                                </h3>
                                <p class="text-xs text-neutral-text/80">
                                    Premises address, apartment/villa complex name, square footage, property configuration (e.g. 2 BHK, 3 BHK), and landmark.
                                </p>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 space-y-1.5">
                                <h3 class="font-heading font-semibold text-xs text-secondary-sub flex items-center gap-2">
                                    <i data-lucide="credit-card" class="w-4 h-4 text-primary"></i>
                                    <span>Billing &amp; Transaction Details</span>
                                </h3>
                                <p class="text-xs text-neutral-text/80">
                                    GST number (for corporate invoices), transaction reference IDs, and payment receipts. We do <strong>not</strong> store debit/credit card CVVs or net banking credentials.
                                </p>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 space-y-1.5">
                                <h3 class="font-heading font-semibold text-xs text-secondary-sub flex items-center gap-2">
                                    <i data-lucide="camera" class="w-4 h-4 text-primary"></i>
                                    <span>Scope Photographs (Optional)</span>
                                </h3>
                                <p class="text-xs text-neutral-text/80">
                                    Customer-provided photos of heavily stained surfaces, tile condition, or kitchen exhaust for accurate machinery and chemical assessment.
                                </p>
                            </div>
                        </div>

                    </div>
                </article>

                <!-- Article 3: How We Use Your Data -->
                <article id="usage" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            03
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            How We Use Your Data
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>We use your information strictly for legitimate operational purposes:</p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li><strong>Service Dispatch &amp; Execution:</strong> Route our field crew, supervisor, and mechanized equipment to your premises on scheduled dates.</li>
                            <li><strong>Quote Calculation &amp; Invoicing:</strong> Generating transparent, itemized estimates and GST-compliant tax invoices.</li>
                            <li><strong>Booking Reminders &amp; OTPs:</strong> Sending WhatsApp or SMS updates containing technician arrival windows and crew verification details.</li>
                            <li><strong>Service Follow-up &amp; Quality Audit:</strong> Contacting you after job completion to verify satisfaction under our 24-Hour Rework Guarantee.</li>
                            <li><strong>Statutory Compliance:</strong> Maintaining accounting, tax, and legal records mandated by Indian regulatory authorities.</li>
                        </ul>
                    </div>
                </article>

                <!-- Article 4: Information Sharing & Disclosure -->
                <article id="sharing" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            04
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Information Sharing &amp; Third Parties
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            Clean Matrix maintains strict non-disclosure safeguards. We do not sell, trade, or lease your personal information. Information is only shared under these limited scenarios:
                        </p>
                        <div class="bg-slate-50 border border-slate-200/70 p-4 rounded-xl space-y-2">
                            <h4 class="font-heading font-semibold text-xs text-secondary-sub">Authorized On-Ground Crew</h4>
                            <p class="text-xs text-neutral-text/80">
                                Assigned cleaning supervisors receive property address and client phone number solely to execute the scheduled service. All crew members are background-verified and bound by confidentiality protocols.
                            </p>
                        </div>
                        <div class="bg-slate-50 border border-slate-200/70 p-4 rounded-xl space-y-2">
                            <h4 class="font-heading font-semibold text-xs text-secondary-sub">Certified Payment Gateways</h4>
                            <p class="text-xs text-neutral-text/80">
                                Digital payments are processed through PCI-DSS Level 1 compliant Indian payment aggregators (e.g. Razorpay/UPI/Bank Transfer).
                            </p>
                        </div>
                        <div class="bg-slate-50 border border-slate-200/70 p-4 rounded-xl space-y-2">
                            <h4 class="font-heading font-semibold text-xs text-secondary-sub">Legal Obligations</h4>
                            <p class="text-xs text-neutral-text/80">
                                When required by valid legal orders, summons, or statutory directives issued by government or law enforcement authorities.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Article 5: Data Security & Encryption -->
                <article id="security" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            05
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Data Security &amp; Encryption
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            We employ comprehensive physical, electronic, and procedural controls:
                        </p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li><strong>SSL/TLS 256-bit Encryption:</strong> All data transmitted through our website forms is protected using active HTTPS encryption.</li>
                            <li><strong>Access Restriction:</strong> Customer data is accessible only by authorized operations management on need-to-know basis.</li>
                            <li><strong>Secure Server Hosting:</strong> Our web infrastructure is monitored with active firewalls, brute-force mitigation, and daily security snapshots.</li>
                        </ul>
                    </div>
                </article>

                <!-- Article 6: Cookies & Analytics -->
                <article id="cookies" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            06
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Cookies &amp; Analytics
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            Our website uses minimal, non-intrusive cookies:
                        </p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li><strong>Essential Session Cookies:</strong> Required to maintain security tokens (CSRF protection) and ensure smooth quote form submissions.</li>
                            <li><strong>Performance &amp; Analytics:</strong> Anonymous diagnostic metrics (such as page load speeds and visitor counts) via Google Analytics to enhance user experience.</li>
                        </ul>
                        <p class="text-xs text-neutral-text/75 italic">
                            You can choose to disable cookies through your browser settings; however, certain interactive booking features may operate with reduced functionality.
                        </p>
                    </div>
                </article>

                <!-- Article 7: Your Privacy Rights -->
                <article id="rights" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            07
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Your Privacy Rights
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            Under India's <em>Digital Personal Data Protection Act, 2023</em>, you hold the following rights:
                        </p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li><strong>Right of Access:</strong> Request a summary of personal data held about you by Clean Matrix.</li>
                            <li><strong>Right to Correction &amp; Erasure:</strong> Request rectification of outdated contact records or deletion of non-statutory records.</li>
                            <li><strong>Right to Withdraw Consent:</strong> Opt-out of non-transactional marketing messages or promotional SMS at any time by notifying our support desk.</li>
                        </ul>
                    </div>
                </article>

                <!-- Article 8: Grievance Officer & Contact -->
                <article id="officer" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            08
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Grievance Officer &amp; Inquiries
                        </h2>
                    </div>
                    <div class="space-y-4 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            If you have questions, feedback, or grievance requests concerning this Privacy Policy, please contact our designated Privacy &amp; Grievance Officer:
                        </p>
                        
                        <div class="p-5 rounded-xl bg-slate-50 border border-slate-200/80 space-y-3">
                            <div class="font-heading font-semibold text-sm text-secondary">
                                Clean Matrix Customer Grievance Cell
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                                <div>
                                    <span class="text-neutral-text/70 block">Office Address:</span>
                                    <span class="font-medium text-secondary">Clean Matrix Headquarters, Coimbatore, Tamil Nadu, India - 641001</span>
                                </div>
                                <div>
                                    <span class="text-neutral-text/70 block">Email Inquiries:</span>
                                    <a href="mailto:info@cleanmatrix.in" class="font-medium text-primary hover:underline">info@cleanmatrix.in</a>
                                </div>
                                <div>
                                    <span class="text-neutral-text/70 block">Phone Support:</span>
                                    <a href="tel:+919566666199" class="font-medium text-secondary hover:text-primary">+91 95666 66199</a>
                                </div>
                                <div>
                                    <span class="text-neutral-text/70 block">Response SLA:</span>
                                    <span class="font-medium text-secondary">Within 48 Business Hours</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </article>

            </main>

        </div>

    </div>
</section>

@endsection
