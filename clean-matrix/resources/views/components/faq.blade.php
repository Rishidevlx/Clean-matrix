<!-- ======================================================== -->
<!-- FAQ SECTION (Exact Clenix Layout with Clean Matrix Theme) -->
<!-- ======================================================== -->

<style>
    /* Clenix FAQ Accordion Styling */
    .faq-item-header {
        transition: all 0.25s ease-in-out;
    }
    .faq-item.active .faq-item-header {
        background-color: #287ff9;
        color: #ffffff;
        border-color: #287ff9;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    .faq-item.active .faq-item-header h3 {
        color: #ffffff;
    }
    .faq-item.active .faq-icon-circle {
        background-color: rgba(255, 255, 255, 0.2);
        color: #ffffff;
        transform: rotate(0deg);
    }
    .faq-item:not(.active) .faq-item-header {
        background-color: #ffffff;
        color: #0f172a;
    }
    .faq-item:not(.active) .faq-item-header:hover {
        border-color: #287ff9;
    }
    .faq-item:not(.active) .faq-icon-circle {
        background-color: #f1f5f9;
        color: #64748b;
        transform: rotate(-90deg); /* Points right '>' when collapsed */
    }
    .faq-item:not(.active) .faq-item-header:hover .faq-icon-circle {
        background-color: #287ff9;
        color: #ffffff;
    }
    .faq-content {
        transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>

<section id="faq" class="relative py-16 sm:py-24 bg-white border-t border-neutral-border/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16 space-y-2">
            <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-medium tracking-tight text-secondary">
                Frequently Asked Questions
            </h2>
            <p class="font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed max-w-xl mx-auto">
                Got questions about our cleaning processes, packages, or booking? Find quick, clear answers below.
            </p>
        </div>

        <!-- 2-Column Clenix Layout: Left FAQ Accordion | Right Question Form Card -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start">

            <!-- ======================================================== -->
            <!-- LEFT COLUMN: FAQ ACCORDION LIST (7 Columns)               -->
            <!-- ======================================================== -->
            <div class="lg:col-span-7 space-y-4">

                <!-- FAQ ITEM 1 (Active by Default) -->
                <div class="faq-item active bg-white rounded-[4px] border border-[#e2e8f0] shadow-sm overflow-hidden transition-all duration-200">
                    <button type="button" class="faq-item-header w-full px-5 py-4 sm:px-6 sm:py-4.5 flex items-center justify-between text-left cursor-pointer border-b border-transparent" onclick="toggleFaq(this)">
                        <h3 class="font-heading text-base sm:text-lg font-medium tracking-tight pr-4">
                            Do I have to sign a long-term contract?
                        </h3>
                        <div class="faq-icon-circle w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-transform duration-200">
                            <i data-lucide="chevron-down" class="w-4 h-4 stroke-[2.5]"></i>
                        </div>
                    </button>
                    <!-- Outer container with padding: 0 so max-height: 0 completely hides all content with 0px height -->
                    <div class="faq-content overflow-hidden" style="max-height: 300px;">
                        <div class="px-5 py-4 sm:px-6 sm:py-4.5 border-t border-[#f1f5f9] bg-white">
                            <p class="font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                                No contract is required! We offer 100% flexible booking options: one-time deep cleaning, move-in/out sanitization, as well as customized recurring plans (weekly or monthly). You have complete freedom to pause, reschedule, or cancel anytime with zero cancellation fees.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 2 -->
                <div class="faq-item bg-white rounded-[4px] border border-[#e2e8f0] shadow-sm overflow-hidden transition-all duration-200">
                    <button type="button" class="faq-item-header w-full px-5 py-4 sm:px-6 sm:py-4.5 flex items-center justify-between text-left cursor-pointer border-b border-transparent" onclick="toggleFaq(this)">
                        <h3 class="font-heading text-base sm:text-lg font-medium text-secondary tracking-tight pr-4">
                            Will I always have the same house cleaner?
                        </h3>
                        <div class="faq-icon-circle w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-transform duration-200">
                            <i data-lucide="chevron-down" class="w-4 h-4 stroke-[2.5]"></i>
                        </div>
                    </button>
                    <div class="faq-content overflow-hidden" style="max-height: 0px;">
                        <div class="px-5 py-4 sm:px-6 sm:py-4.5 border-t border-[#f1f5f9] bg-white">
                            <p class="font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                                Yes! For regular weekly or monthly maintenance plans, we designate a consistent, background-verified cleaning team and dedicated supervisor to your property. This ensures our cleaners are familiar with your home layout, specialized surfaces, and personal preferences.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 3 -->
                <div class="faq-item bg-white rounded-[4px] border border-[#e2e8f0] shadow-sm overflow-hidden transition-all duration-200">
                    <button type="button" class="faq-item-header w-full px-5 py-4 sm:px-6 sm:py-4.5 flex items-center justify-between text-left cursor-pointer border-b border-transparent" onclick="toggleFaq(this)">
                        <h3 class="font-heading text-base sm:text-lg font-medium text-secondary tracking-tight pr-4">
                            Do you guarantee your cleaning work?
                        </h3>
                        <div class="faq-icon-circle w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-transform duration-200">
                            <i data-lucide="chevron-down" class="w-4 h-4 stroke-[2.5]"></i>
                        </div>
                    </button>
                    <div class="faq-content overflow-hidden" style="max-height: 0px;">
                        <div class="px-5 py-4 sm:px-6 sm:py-4.5 border-t border-[#f1f5f9] bg-white">
                            <p class="font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                                Every Clean Matrix service is backed by our 100% Satisfaction Guarantee. Every job concludes with a 24-point supervisor checklist inspection. In the rare event any spot or area doesn't meet your expectation, our team returns within 24 hours to re-clean it free of charge.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 4 -->
                <div class="faq-item bg-white rounded-[4px] border border-[#e2e8f0] shadow-sm overflow-hidden transition-all duration-200">
                    <button type="button" class="faq-item-header w-full px-5 py-4 sm:px-6 sm:py-4.5 flex items-center justify-between text-left cursor-pointer border-b border-transparent" onclick="toggleFaq(this)">
                        <h3 class="font-heading text-base sm:text-lg font-medium text-secondary tracking-tight pr-4">
                            How can I make payments?
                        </h3>
                        <div class="faq-icon-circle w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-transform duration-200">
                            <i data-lucide="chevron-down" class="w-4 h-4 stroke-[2.5]"></i>
                        </div>
                    </button>
                    <div class="faq-content overflow-hidden" style="max-height: 0px;">
                        <div class="px-5 py-4 sm:px-6 sm:py-4.5 border-t border-[#f1f5f9] bg-white">
                            <p class="font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                                We support fast and transparent digital payment methods: UPI (Google Pay, PhonePe, Paytm), Credit & Debit cards, Net Banking, and instant bank transfers. Commercial corporate clients also receive GST-compliant tax invoices with convenient 15-day settlement terms.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 5 -->
                <div class="faq-item bg-white rounded-[4px] border border-[#e2e8f0] shadow-sm overflow-hidden transition-all duration-200">
                    <button type="button" class="faq-item-header w-full px-5 py-4 sm:px-6 sm:py-4.5 flex items-center justify-between text-left cursor-pointer border-b border-transparent" onclick="toggleFaq(this)">
                        <h3 class="font-heading text-base sm:text-lg font-medium text-secondary tracking-tight pr-4">
                            Can I hire cleaning professionals for a full month?
                        </h3>
                        <div class="faq-icon-circle w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-transform duration-200">
                            <i data-lucide="chevron-down" class="w-4 h-4 stroke-[2.5]"></i>
                        </div>
                    </button>
                    <div class="faq-content overflow-hidden" style="max-height: 0px;">
                        <div class="px-5 py-4 sm:px-6 sm:py-4.5 border-t border-[#f1f5f9] bg-white">
                            <p class="font-body text-xs sm:text-sm text-neutral-text font-light leading-relaxed">
                                Yes! Our turnkey monthly packages provide scheduled visits by trained, police-verified personnel equipped with German mechanized scrubbers and eco-friendly certified chemicals. All packages include a complimentary Clean Matrix maintenance kit.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ======================================================== -->
            <!-- RIGHT COLUMN: HAVE ANY QUESTION? FORM CARD (5 Columns)    -->
            <!-- ======================================================== -->
            <div class="lg:col-span-5">
                <div class="bg-white border border-[#eaedf2] rounded-[6px] p-6 sm:p-8 shadow-sm">
                    
                    <!-- Card Heading with Primary Green Underline -->
                    <div class="mb-6">
                        <h3 class="font-heading text-xl sm:text-2xl font-medium text-secondary tracking-tight">
                            Have you Any Question?
                        </h3>
                        <div class="w-10 h-[3px] bg-primary mt-2.5 rounded-full"></div>
                    </div>

                    <!-- Contact Inquiry Form -->
                    <form onsubmit="handleFaqSubmit(event)" class="space-y-3.5">
                        <!-- Name Field -->
                        <div>
                            <input type="text" name="name" required placeholder="Name*" class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[4px] px-4 py-3 text-xs sm:text-sm font-body text-secondary placeholder:text-neutral-text/50 focus:border-[#287ff9] focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- Email Field -->
                        <div>
                            <input type="email" name="email" required placeholder="Email Address*" class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[4px] px-4 py-3 text-xs sm:text-sm font-body text-secondary placeholder:text-neutral-text/50 focus:border-[#287ff9] focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- Phone Field -->
                        <div>
                            <input type="tel" name="phone" required placeholder="Phone*" class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[4px] px-4 py-3 text-xs sm:text-sm font-body text-secondary placeholder:text-neutral-text/50 focus:border-[#287ff9] focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- Subject Field -->
                        <div>
                            <input type="text" name="subject" required placeholder="Subject*" class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[4px] px-4 py-3 text-xs sm:text-sm font-body text-secondary placeholder:text-neutral-text/50 focus:border-[#287ff9] focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- Message Field -->
                        <div>
                            <textarea name="message" rows="3" placeholder="Message" class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[4px] px-4 py-3 text-xs sm:text-sm font-body text-secondary placeholder:text-neutral-text/50 focus:border-[#287ff9] focus:bg-white focus:outline-none transition-colors resize-none"></textarea>
                        </div>

                        <!-- Submit Button in Clean Matrix Green (#81BA41) -->
                        <div class="pt-1.5">
                            <button type="submit" id="faqSubmitBtn" class="w-full bg-[#81BA41] hover:bg-[#72a637] text-white font-medium text-sm py-3.5 px-6 rounded-[4px] transition-all duration-200 shadow-sm hover:shadow-md cursor-pointer flex items-center justify-center gap-2">
                                <span>Send Message</span>
                            </button>
                        </div>

                        <!-- Success Feedback Notice -->
                        <div id="faqSuccessMsg" class="hidden text-center py-2 text-xs text-[#81BA41] font-medium bg-[#81BA41]/10 rounded-[4px]">
                            Thank you! Your message has been sent successfully. We will call you shortly.
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- Interactive Accordion & Form JS -->
<script>
    function toggleFaq(button) {
        const item = button.closest('.faq-item');
        const content = item.querySelector('.faq-content');
        const isActive = item.classList.contains('active');

        // Close all items completely to 0px
        document.querySelectorAll('.faq-item').forEach(otherItem => {
            otherItem.classList.remove('active');
            const otherContent = otherItem.querySelector('.faq-content');
            if (otherContent) {
                otherContent.style.maxHeight = '0px';
            }
        });

        // If clicked item was not active, open it
        if (!isActive) {
            item.classList.add('active');
            content.style.maxHeight = content.scrollHeight + 40 + 'px';
        }
    }

    function handleFaqSubmit(event) {
        event.preventDefault();
        const btn = document.getElementById('faqSubmitBtn');
        const msg = document.getElementById('faqSuccessMsg');
        
        btn.innerHTML = '<span class="inline-block animate-spin mr-1">&#9696;</span> Sending...';
        btn.disabled = true;

        setTimeout(() => {
            btn.innerHTML = '<span>Message Sent!</span>';
            btn.classList.add('bg-[#38863F]');
            btn.classList.remove('bg-[#81BA41]');
            if (msg) msg.classList.remove('hidden');
            event.target.reset();

            setTimeout(() => {
                btn.innerHTML = '<span>Send Message</span>';
                btn.classList.add('bg-[#81BA41]');
                btn.classList.remove('bg-[#38863F]');
                btn.disabled = false;
            }, 4000);
        }, 800);
    }
</script>
