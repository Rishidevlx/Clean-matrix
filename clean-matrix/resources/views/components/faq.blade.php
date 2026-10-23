<!-- ======================================================== -->
<!-- FAQ SECTION: Exact Pronto Centered Minimalist Layout      -->
<!-- Clean white rounded-2xl cards with smooth toggle & icons  -->
<!-- ======================================================== -->

<section id="faq" class="relative py-16 sm:py-24 bg-white border-t border-slate-200/80 font-body">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Centered Section Header (Exact Pronto Style) -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
            <span class="inline-block text-primary text-xs sm:text-[13px] font-heading font-bold uppercase tracking-widest mb-2.5">
                FAQ'S
            </span>
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold text-[#0C0C0C] tracking-tight">
                Frequently Asked Questions
            </h2>
        </div>

        @php
            $faqs = [
                [
                    'q' => 'What is Clean Matrix?',
                    'a' => 'Clean Matrix is a premier mechanized deep cleaning and hygiene service provider based in Coimbatore. We combine German single-disc floor scrubbers, HEPA-filtered wet/dry extraction vacuums, and Diversey eco-certified, non-toxic formulations to deliver hospital-grade cleanliness for homes, villas, corporate offices, and educational campuses.',
                    'default_open' => true,
                ],
                [
                    'q' => 'Do I have to sign a long-term contract?',
                    'a' => 'No contract is required! We offer 100% flexible booking options: one-time deep cleaning, move-in/out sanitization, as well as customized recurring plans (weekly, bi-weekly, or monthly). You have complete freedom to pause, reschedule, or cancel anytime with zero cancellation fees.',
                    'default_open' => false,
                ],
                [
                    'q' => 'Will I always have the same house cleaning team?',
                    'a' => 'Yes! For regular weekly or monthly maintenance plans, we designate a consistent, background-verified cleaning crew and dedicated supervisor to your property. This ensures our cleaners are familiar with your home layout, specialized surfaces, and personal hygiene preferences.',
                    'default_open' => false,
                ],
                [
                    'q' => 'Do you guarantee your cleaning work?',
                    'a' => 'Every Clean Matrix service is backed by our signature 100% Satisfaction Guarantee. Every job concludes with a supervisor checklist inspection. In the rare event any spot or area doesn’t meet your expectation, our team returns within 24 hours to re-clean it free of charge.',
                    'default_open' => false,
                ],
                [
                    'q' => 'How can I make payments?',
                    'a' => 'We support fast and transparent digital payment methods: UPI (Google Pay, PhonePe, Paytm), Credit & Debit cards, Net Banking, and instant bank transfers. Commercial corporate clients also receive GST-compliant tax invoices with convenient settlement terms.',
                    'default_open' => false,
                ],
                [
                    'q' => 'Are your cleaning chemicals safe for kids and pets?',
                    'a' => 'Absolutely. We exclusively use certified biodegradable, non-hazardous, and phosphate-free cleaning agents from global leaders like Taski and Diversey. We strictly avoid harsh hydrochloric acid fumes or caustic bleaches, making spaces immediately safe for infants, seniors, and pets.',
                    'default_open' => false,
                ],
                [
                    'q' => 'What prerequisites are required before your team arrives?',
                    'a' => 'We only require uninterrupted tap water supply and continuous 220V electricity (15A/5A plugs) for our mechanized floor scrubbers and wet extractors. We bring all machines, specialized cleaning pads, microfiber cloths, ladders, and eco-certified chemicals.',
                    'default_open' => false,
                ],
            ];
        @endphp

        <!-- Centered Single-Column Accordion List -->
        <div class="max-w-3xl mx-auto space-y-4">
            @foreach ($faqs as $index => $faq)
                <div class="faq-card bg-white rounded-2xl border border-slate-200/80 transition-all duration-200 shadow-2xs hover:border-slate-300 {{ $faq['default_open'] ? 'active ring-1 ring-primary/20' : '' }}">
                    
                    <!-- Question Header Button -->
                    <button type="button" 
                            class="w-full p-5 sm:p-6 flex items-center justify-between text-left cursor-pointer group focus:outline-none" 
                            onclick="toggleFaqAccordion(this)">
                        <h3 class="font-heading text-sm sm:text-base font-bold text-[#0C0C0C] group-hover:text-primary transition-colors pr-4">
                            {{ $faq['q'] }}
                        </h3>
                        <i data-lucide="{{ $faq['default_open'] ? 'chevron-up' : 'chevron-down' }}" 
                           class="faq-icon w-5 h-5 text-[#666666] shrink-0 transition-transform duration-200 group-hover:text-primary"></i>
                    </button>

                    <!-- Answer Body Container -->
                    <div class="faq-panel overflow-hidden transition-all duration-300 ease-in-out" 
                         style="{{ $faq['default_open'] ? 'max-height: 400px;' : 'max-height: 0px;' }}">
                        <div class="px-5 sm:px-6 pb-6 pt-2 text-xs sm:text-sm text-[#666666] font-light leading-relaxed border-t border-slate-100">
                            <p>{{ $faq['a'] }}</p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>

<script>
    function toggleFaqAccordion(btn) {
        const card = btn.closest('.faq-card');
        const panel = card.querySelector('.faq-panel');
        const icon = btn.querySelector('.faq-icon');
        const isActive = card.classList.contains('active');

        // Close all other open cards for clean single-open accordion experience
        document.querySelectorAll('.faq-card').forEach(c => {
            if (c !== card) {
                c.classList.remove('active', 'ring-1', 'ring-primary/20');
                const otherPanel = c.querySelector('.faq-panel');
                const otherIcon = c.querySelector('.faq-icon');
                if (otherPanel) otherPanel.style.maxHeight = '0px';
                if (otherIcon) {
                    otherIcon.setAttribute('data-lucide', 'chevron-down');
                }
            }
        });

        if (isActive) {
            // Close clicked card
            card.classList.remove('active', 'ring-1', 'ring-primary/20');
            panel.style.maxHeight = '0px';
            icon.setAttribute('data-lucide', 'chevron-down');
        } else {
            // Open clicked card
            card.classList.add('active', 'ring-1', 'ring-primary/20');
            panel.style.maxHeight = panel.scrollHeight + 30 + 'px';
            icon.setAttribute('data-lucide', 'chevron-up');
        }

        // Re-render lucide icons if icon changed
        if (window.lucide && typeof lucide.createIcons === 'function') {
            lucide.createIcons();
        }
    }
</script>
