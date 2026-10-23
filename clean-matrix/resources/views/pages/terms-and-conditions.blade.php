@extends('layouts.app')

@section('title', 'Terms & Conditions | Clean Matrix')
@section('meta_description', 'Read the Clean Matrix Terms and Conditions covering service bookings, mechanized cleaning scope, cancellation guidelines, and our 24-hour quality guarantee.')

@section('content')

<!-- ======================================================== -->
<!-- SECTION 2: TERMS CONTENT & STICKY NAVIGATION             -->
<!-- ======================================================== -->
<section class="py-12 sm:py-16 lg:py-20 bg-white font-body relative border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Top Overview Banner Card -->
        <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 mb-10 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="space-y-1.5">
                <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                    SERVICE STANDARDS AGREEMENT
                </p>
                <h2 class="font-heading text-2xl sm:text-3xl font-bold text-[#0F172A] tracking-tight">
                    Clean Matrix Service Terms &amp; Conditions
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 font-normal">
                    Effective Date: October 2026 &bull; Version 3.2 &bull; Applicable Across Tamil Nadu
                </p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-[#81BA41] hover:bg-[#72aa38] text-white text-xs sm:text-sm font-heading font-semibold transition-colors shadow-sm">
                    <i data-lucide="message-square" class="w-4 h-4"></i>
                    <span>Contact Operations</span>
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
                            <i data-lucide="bookmark" class="w-4 h-4 text-primary"></i>
                            <span>Terms Navigation</span>
                        </h2>
                    </div>

                    <nav class="space-y-1 text-xs font-heading">
                        <a href="#acceptance" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>1. Acceptance of Terms</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#scope" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>2. Scope &amp; Service Packages</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#prerequisites" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>3. Client Prerequisites (Water &amp; Power)</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#pricing" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>4. Pricing, Estimates &amp; Invoicing</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#cancellation" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>5. Rescheduling &amp; Cancellations</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#valuables" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>6. Valuables &amp; Client Responsibility</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#rework" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>7. 24-Hour Rework Guarantee</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#chemicals" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>8. Equipment &amp; Chemicals Standard</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#liability" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>9. Limitation of Liability</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                        <a href="#dispute" class="flex items-center justify-between py-2 px-3 rounded-lg text-neutral-text hover:text-primary hover:bg-slate-50 transition-colors">
                            <span>10. Governing Law &amp; Jurisdiction</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
                        </a>
                    </nav>

                    <!-- Guarantee Badge Callout -->
                    <div class="bg-slate-50 border border-slate-200/90 p-5 rounded-xl space-y-3">
                        <div class="flex items-center gap-2 font-heading font-semibold text-xs text-primary-sub">
                            <i data-lucide="check-circle" class="w-4 h-4 text-primary"></i>
                            <span>Clean Matrix Quality Promise</span>
                        </div>
                        <p class="text-[11px] text-neutral-text font-light leading-relaxed">
                            Every deep cleaning service is supervised by a certified team lead and backed by our signature 24-hour satisfaction rework guarantee.
                        </p>
                        <div class="pt-2 border-t border-slate-200/70 text-xs text-neutral-text/80">
                            Direct Support: <a href="tel:+919566666199" class="font-semibold text-secondary hover:text-primary">+91 95666 66199</a>
                        </div>
                    </div>

                </div>

            </aside>

            <!-- ======================================================== -->
            <!-- RIGHT COLUMN: DETAILED TERMS ARTICLES                    -->
            <!-- ======================================================== -->
            <main class="col-span-12 lg:col-span-8 space-y-8">

                <!-- Article 1: Acceptance -->
                <article id="acceptance" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            01
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Acceptance of Terms
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            By scheduling a cleaning service, requesting a quote, or engaging with <strong>Clean Matrix</strong> via website, telephone, WhatsApp, or email, you ("Client", "Customer", or "You") expressly agree to be bound by these Service Terms and Conditions.
                        </p>
                        <p>
                            These terms govern all residential deep cleaning, commercial maintenance, sofa shampooing, floor scrubbing, post-renovation hygiene, and custom institutional SLAs executed by Clean Matrix staff or affiliated technical personnel.
                        </p>
                    </div>
                </article>

                <!-- Article 2: Scope & Packages -->
                <article id="scope" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            02
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Scope of Services &amp; Packages
                        </h2>
                    </div>
                    <div class="space-y-4 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            Our service inclusions are explicitly mapped per selected tier (e.g. <strong>4-in-1 Essential</strong>, <strong>6-in-1 Comprehensive</strong>, or <strong>Custom SLA</strong>):
                        </p>
                        
                        <div class="space-y-3">
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-primary shrink-0 mt-0.5"></i>
                                <div>
                                    <h3 class="font-heading font-semibold text-xs text-secondary-sub">Standard Inclusions</h3>
                                    <p class="text-xs text-neutral-text/80 mt-0.5">
                                        Mechanized single-disc floor scrubbing, kitchen tile degreasing, sanitaryware descaling, interior cobweb removal, and high-frequency touchpoint sanitization as confirmed in your itemized estimate.
                                    </p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 flex items-start gap-3">
                                <i data-lucide="alert-circle" class="w-4 h-4 text-amber-500 shrink-0 mt-0.5"></i>
                                <div>
                                    <h3 class="font-heading font-semibold text-xs text-secondary-sub">Standard Exclusions (Requires Add-on)</h3>
                                    <p class="text-xs text-neutral-text/80 mt-0.5">
                                        Exterior facade rope-access glass cleaning, hazardous chemical waste handling, structural debris removal from active civil construction, deep upholstery restoration, and appliance interior disassembly unless booked as specific optional add-ons.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </article>

                <!-- Article 3: Client Prerequisites -->
                <article id="prerequisites" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            03
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Client Prerequisites (Water &amp; Power)
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            To ensure high-performance mechanized cleaning, the Client must guarantee:
                        </p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li><strong>Uninterrupted Water Supply:</strong> Adequate running tap water for wet-vacuuming, jet washing, and chemical dilution.</li>
                            <li><strong>220V Electricity Supply:</strong> Continuous power supply with accessible 15A/5A electrical points for single-disc floor polishers and wet extractors.</li>
                            <li><strong>Authorized Access:</strong> Timely entry to the premises for our cleaning crew and supervisor at the agreed arrival window.</li>
                            <li><strong>Pet Safety:</strong> Pets must be comfortably secured in separate rooms during mechanized operations to avoid chemical or noise agitation.</li>
                        </ul>
                    </div>
                </article>

                <!-- Article 4: Pricing, Estimates & Invoicing -->
                <article id="pricing" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            04
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Pricing, Estimates &amp; Invoicing
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            All pricing is determined based on property square footage, structural layout, and contamination levels:
                        </p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li><strong>Pre-Service Quotation:</strong> Quotes provided via WhatsApp or website are provisional based on client disclosures. If on-site conditions diverge significantly (e.g., severe post-renovation paint splatter or severe hard-water calcification), the supervisor will confirm adjusted scope before commencing work.</li>
                            <li><strong>Taxes:</strong> Applicable Goods and Services Tax (GST) is levied as per Government of India regulations.</li>
                            <li><strong>Payment Terms:</strong> 100% settlement is required immediately upon completion of work and supervisor sign-off via UPI, Net Banking, or Cash. For corporate SLAs, payment schedules adhere to the signed purchase order.</li>
                        </ul>
                    </div>
                </article>

                <!-- Article 5: Rescheduling & Cancellation -->
                <article id="cancellation" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            05
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Rescheduling &amp; Cancellation Policy
                        </h2>
                    </div>
                    <div class="space-y-4 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 space-y-1.5">
                                <h3 class="font-heading font-semibold text-xs text-primary-sub flex items-center gap-2">
                                    <i data-lucide="clock" class="w-4 h-4 text-primary"></i>
                                    <span>&gt; 24 Hours Notice</span>
                                </h3>
                                <p class="text-xs text-neutral-text/80">
                                    Free cancellation or rescheduling without any penalty fees. You may change slot date or arrival time easily by notifying our support team.
                                </p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 space-y-1.5">
                                <h3 class="font-heading font-semibold text-xs text-amber-600 flex items-center gap-2">
                                    <i data-lucide="alert-triangle" class="w-4 h-4 text-amber-500"></i>
                                    <span>&lt; 6 Hours / On-Arrival</span>
                                </h3>
                                <p class="text-xs text-neutral-text/80">
                                    If canceled after our team has mobilized with machinery or on premises arrival, a nominal technician mobilization charge of ₹499 applies.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Article 6: Valuables & Responsibility -->
                <article id="valuables" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            06
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Valuables &amp; Client Responsibility
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            While all Clean Matrix technicians undergo rigorous police verification, ID vetting, and biometric attendance:
                        </p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li><strong>Safekeeping of Valuables:</strong> Clients are strictly requested to lock away all jewelry, cash, credit cards, confidential documentation, and fragile antique ornaments before technician arrival.</li>
                            <li><strong>Pre-Existing Damages:</strong> Clients must inform the team lead prior to service about loose tiles, cracked mirrors, fragile plumbing fittings, or pre-existing water leakage to prevent accidental damage.</li>
                        </ul>
                    </div>
                </article>

                <!-- Article 7: 24-Hour Rework Guarantee -->
                <article id="rework" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            07
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            24-Hour Quality Rework Guarantee
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <div class="p-4 rounded-xl bg-emerald-50/80 border border-emerald-200 space-y-2">
                            <h3 class="font-heading font-bold text-xs text-emerald-800 flex items-center gap-2">
                                <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
                                <span>Zero-Hassle Re-Cleaning Assurance</span>
                            </h3>
                            <p class="text-xs text-emerald-900/80 leading-relaxed">
                                If you identify any missed spot or unsatisfactory cleaning within your agreed scope, report it with photos within <strong>24 hours of service completion</strong>. Clean Matrix will dispatch a technician to re-clean the specific area at <strong>zero additional cost</strong>.
                            </p>
                        </div>
                        <p class="text-xs text-neutral-text/75 italic">
                            *Note: Re-cleaning claims submitted after 24 hours or arising from subsequent foot traffic, dust storms, or new cooking oil splatters are not covered under the rework warranty.
                        </p>
                    </div>
                </article>

                <!-- Article 8: Equipment & Chemicals -->
                <article id="chemicals" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            08
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Equipment &amp; Chemical Standards
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            Clean Matrix uses industrial-grade machinery (single-disc scrubbers, high-pressure washers, commercial HEPA extractors) alongside Diversey / Taski certified biodegradable and non-toxic cleaning agents. We do not use corrosive hydrochloric acid that erodes grout or damages bathroom chrome fittings.
                        </p>
                    </div>
                </article>

                <!-- Article 9: Limitation of Liability -->
                <article id="liability" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            09
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Limitation of Liability
                        </h2>
                    </div>
                    <div class="space-y-3 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            To the fullest extent permitted by Indian Law:
                        </p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li>Clean Matrix is not liable for indirect, incidental, or consequential losses, including lost wages or schedule changes.</li>
                            <li>For verified physical damage directly caused by our technician's negligence during service execution, total liability is strictly capped at the <strong>total invoice value of the service executed</strong>.</li>
                        </ul>
                    </div>
                </article>

                <!-- Article 10: Governing Law -->
                <article id="dispute" class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm space-y-4 scroll-mt-28">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary-sub flex items-center justify-center font-heading font-bold text-sm">
                            10
                        </div>
                        <h2 class="font-heading text-xl font-bold text-secondary">
                            Governing Law &amp; Jurisdiction
                        </h2>
                    </div>
                    <div class="space-y-4 font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                        <p>
                            These terms shall be governed, interpreted, and construed in accordance with the Laws of the Republic of India. Any legal dispute, arbitration, or claim arising out of these terms shall be subject to the exclusive jurisdiction of the competent civil courts situated at <strong>Coimbatore, Tamil Nadu, India</strong>.
                        </p>
                        
                        <div class="p-5 rounded-xl bg-slate-50 border border-slate-200/80 space-y-2">
                            <h3 class="font-heading font-semibold text-xs text-secondary-sub">Customer Clarifications</h3>
                            <p class="text-xs text-neutral-text/80">
                                For inquiries or clarifications regarding these terms, reach out to our legal department at <a href="mailto:info@cleanmatrix.in" class="text-primary font-medium hover:underline">info@cleanmatrix.in</a> or call <a href="tel:+919566666199" class="font-medium text-secondary hover:text-primary">+91 95666 66199</a>.
                            </p>
                        </div>
                    </div>
                </article>

            </main>

        </div>

    </div>
</section>

@endsection
