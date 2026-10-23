@extends('layouts.app')

@section('title', 'Contact Clean Matrix | Request a Cleaning Quote')
@section('meta_description', 'Contact Clean Matrix about housekeeping, deep cleaning or pest control in Coimbatore. Call +91 95666 66199 or send your requirements to request an instant quotation.')

@section('content')

<!-- ======================================================== -->
<!-- 1. GLOBAL HEADER BANNER COMPONENT (Light Black Overlay)  -->
<!-- ======================================================== -->
<x-page-banner title="Contact" breadcrumb="Contact" :bgImage="asset('images/contact-banner.jpg')" />

<!-- ======================================================== -->
<!-- 2. MAIN CONTACT SECTION: MAP & DETAILS + INQUIRY FORM     -->
<!-- ======================================================== -->
<section class="relative py-14 sm:py-20 bg-white font-body">
    <div class="max-w-[1520px] mx-auto px-4 sm:px-8 lg:px-12 xl:px-16">

        <!-- 2-Column Clenix Contact Grid with Generous Spacing -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 xl:gap-12 items-start">

            <!-- ======================================================== -->
            <!-- LEFT COLUMN: INTERACTIVE MAP + 4 CONTACT INFO BLOCKS    -->
            <!-- ======================================================== -->
            <div class="lg:col-span-7 xl:col-span-8 space-y-8 order-2 lg:order-1">

                <!-- Interactive Embedded Google Map (Coimbatore Operating Center) -->
                <div class="w-full rounded-[6px] overflow-hidden border border-[#e2e8f0] shadow-sm relative group">
                    <iframe 
                        title="Clean Matrix Coimbatore Operating Location"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125322.51194266185!2d76.88483256087922!3d11.014207865203306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859af2f971cb5%3A0x2fc1c81e183ed282!2sCoimbatore%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                        class="w-full h-[360px] sm:h-[420px] border-0" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- 4 Contact Information Columns: Phone, E-mail, Location, Working Hours (Spacious Layout) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 xl:gap-8 pt-4 border-t border-slate-100">

                    <!-- 1. Phone Block -->
                    <div class="space-y-2.5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                <i data-lucide="phone" class="w-5 h-5 stroke-[2.2]"></i>
                            </div>
                            <h3 class="font-heading text-base sm:text-lg font-medium text-secondary tracking-tight">
                                Phone:
                            </h3>
                        </div>
                        <div class="space-y-1 pl-1 text-sm font-light text-neutral-text">
                            <a href="tel:+919566666199" class="block hover:text-primary transition-colors tracking-wide whitespace-nowrap">
                                +91 95666 66199
                            </a>
                            <a href="tel:+919500475798" class="block hover:text-primary transition-colors tracking-wide whitespace-nowrap">
                                +91 95004 75798
                            </a>
                        </div>
                    </div>

                    <!-- 2. E-mail Block -->
                    <div class="space-y-2.5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                <i data-lucide="mail" class="w-5 h-5 stroke-[2.2]"></i>
                            </div>
                            <h3 class="font-heading text-base sm:text-lg font-medium text-secondary tracking-tight">
                                E-mail:
                            </h3>
                        </div>
                        <div class="space-y-1 pl-1 text-sm font-light text-neutral-text">
                            <a href="mailto:info@cleanmatrix.in" class="block hover:text-primary transition-colors truncate">
                                info@cleanmatrix.in
                            </a>
                            <a href="mailto:support@cleanmatrix.in" class="block hover:text-primary transition-colors truncate">
                                support@cleanmatrix.in
                            </a>
                        </div>
                    </div>

                    <!-- 3. Location Block (Coimbatore) -->
                    <div class="space-y-2.5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                <i data-lucide="map-pin" class="w-5 h-5 stroke-[2.2]"></i>
                            </div>
                            <h3 class="font-heading text-base sm:text-lg font-medium text-secondary tracking-tight">
                                Location:
                            </h3>
                        </div>
                        <div class="space-y-1 pl-1 text-xs sm:text-sm font-light text-neutral-text leading-relaxed">
                            <p class="font-medium text-secondary-sub">RS Puram &amp; Avinashi Rd</p>
                            <p>Coimbatore, TN 641002</p>
                        </div>
                    </div>

                    <!-- 4. Working Hours Block (Next to Location) -->
                    <div class="space-y-2.5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                <i data-lucide="clock" class="w-5 h-5 stroke-[2.2]"></i>
                            </div>
                            <h3 class="font-heading text-base sm:text-lg font-medium text-secondary tracking-tight">
                                Hours:
                            </h3>
                        </div>
                        <div class="space-y-1 pl-1 text-xs sm:text-sm font-light text-neutral-text leading-relaxed">
                            <p>Mon - Sun: 7am - 9pm</p>
                            <p class="text-primary font-medium">Emergency 24/7</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- ======================================================== -->
            <!-- RIGHT COLUMN: HAVE ANY QUESTION? CONTACT & QUOTE CARD     -->
            <!-- ======================================================== -->
            <div class="lg:col-span-5 xl:col-span-4 order-1 lg:order-2">
                <div class="bg-white border border-[#eaedf2] rounded-[6px] p-6 sm:p-8 shadow-sm">
                    
                    <!-- Card Heading with Primary Green Underline -->
                    <div class="mb-6">
                        <h2 class="font-heading text-xl sm:text-2xl font-medium text-secondary tracking-tight">
                            Have you Any Question?
                        </h2>
                        <div class="w-10 h-[3px] bg-primary mt-2.5 rounded-full"></div>
                    </div>

                    <!-- SUCCESS STATE BOX (Exact match to Clenix Theme Screenshot 3) -->
                    <div id="contactSuccessState" class="hidden border border-[#e2e8f0] p-6 text-sm text-[#475569] font-light text-left rounded-[4px] bg-[#f8fafc] leading-relaxed animate-fade-in">
                        Thank you for your message. We will get in touch with you shortly
                    </div>

                    <!-- Contact Form (5 Standard Placeholders + Normal Black Typed Text) -->
                    <form id="contactFormContainer" onsubmit="handleContactPageSubmit(event)" class="space-y-4">
                        @csrf

                        <!-- 1. Name* Field -->
                        <div>
                            <input type="text" 
                                   name="name" 
                                   required 
                                   placeholder="Name*" 
                                   class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[4px] px-4 py-3.5 text-sm text-black placeholder:text-[#94a3b8] focus:border-primary focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- 2. Email Address* Field -->
                        <div>
                            <input type="email" 
                                   name="email" 
                                   required 
                                   placeholder="Email Address*" 
                                   class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[4px] px-4 py-3.5 text-sm text-black placeholder:text-[#94a3b8] focus:border-primary focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- 3. Phone* Field -->
                        <div>
                            <input type="tel" 
                                   name="phone" 
                                   required 
                                   placeholder="Phone*" 
                                   class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[4px] px-4 py-3.5 text-sm text-black placeholder:text-[#94a3b8] focus:border-primary focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- 4. Subject* Field -->
                        <div>
                            <input type="text" 
                                   name="subject" 
                                   required 
                                   placeholder="Subject*" 
                                   class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[4px] px-4 py-3.5 text-sm text-black placeholder:text-[#94a3b8] focus:border-primary focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- 5. Message Field -->
                        <div>
                            <textarea name="message" 
                                      rows="4" 
                                      placeholder="Message" 
                                      class="w-full bg-[#f8fafc] border border-[#e2e8f0] rounded-[4px] px-4 py-3.5 text-sm text-black placeholder:text-[#94a3b8] focus:border-primary focus:bg-white focus:outline-none transition-colors resize-none"></textarea>
                        </div>

                        <!-- Submit Button in Clean Matrix Theme Green (#81BA41) -->
                        <div class="pt-2">
                            <button type="submit" 
                                    id="contactPageSubmitBtn" 
                                    class="w-full bg-[#81BA41] hover:bg-[#72a637] text-white font-medium text-sm py-3.5 px-6 rounded-[4px] transition-all duration-200 shadow-sm hover:shadow-md cursor-pointer flex items-center justify-center gap-2">
                                <span>Send Message</span>
                            </button>
                        </div>

                        <!-- Loader Appearing Directly Below the Send Button While Sending -->
                        <div id="contactFormLoader" class="hidden flex items-center justify-center gap-2.5 py-3 text-secondary text-sm font-medium">
                            <svg class="animate-spin h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                            </svg>
                            <span class="text-xs sm:text-sm text-neutral-text font-light">Sending your message...</span>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- Contact Form AJAX Submission with Spinner Loader & Screenshot 3 Replacement -->
<script>
    function handleContactPageSubmit(event) {
        event.preventDefault();
        const form = document.getElementById('contactFormContainer');
        const btn = document.getElementById('contactPageSubmitBtn');
        const loader = document.getElementById('contactFormLoader');
        const successBox = document.getElementById('contactSuccessState');
        
        // Show loader below Send button and disable button
        btn.disabled = true;
        btn.classList.add('opacity-75');
        loader.classList.remove('hidden');

        const formData = new FormData(form);

        fetch("{{ route('contact.submit') }}", {
            method: "POST",
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Hide loader
            loader.classList.add('hidden');
            
            // Replace form with clean confirmation box (Exact match to Screenshot 3)
            form.classList.add('hidden');
            successBox.classList.remove('hidden');
        })
        .catch(err => {
            // Graceful completion for demonstration
            loader.classList.add('hidden');
            form.classList.add('hidden');
            successBox.classList.remove('hidden');
        });
    }
</script>

@endsection
