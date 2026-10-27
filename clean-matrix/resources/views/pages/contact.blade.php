@extends('layouts.app')

@section('title', 'Contact Clean Matrix | Request a Cleaning Quote')
@section('meta_description', 'Contact Clean Matrix about housekeeping, deep cleaning or pest control. Call or send your requirements to request a quotation.')
@section('meta_keywords', 'contact clean matrix, request cleaning quote coimbatore, cleaning services phone number, cleaning enquiry, book cleaning service, emergency pest control')
@section('canonical', route('contact'))

@section('content')

<!-- ======================================================== -->
<!-- 1. DYNAMIC PAGE HERO COMPONENT                           -->
<!-- ======================================================== -->
<x-page-hero 
    badge="GET IN TOUCH"
    title="Get in Touch with<br class='hidden sm:inline'> Clean Matrix"
    subtitle="Schedule an on-site property assessment, request a customized package quote, or connect directly with our Coimbatore operations team."
    breadcrumb="Contact" 
    :image="asset('images/contact-hero-support.jpg')" 
    imageAlt="Clean Matrix Customer Support Specialist"
    :showActions="true"
/>

<!-- ======================================================== -->
<!-- 2. MAIN CONTACT SECTION: MAP & DETAILS + INQUIRY FORM     -->
<!-- ======================================================== -->
<section class="relative py-14 sm:py-20 bg-white font-body border-b border-slate-100">
    <div class="max-w-[1520px] mx-auto px-4 sm:px-8 lg:px-12 xl:px-16">

        <!-- 2-Column Contact Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 xl:gap-12 items-start">

            <!-- ======================================================== -->
            <!-- LEFT COLUMN: INTERACTIVE MAP + 4 CONTACT INFO BLOCKS    -->
            <!-- ======================================================== -->
            <div class="lg:col-span-7 xl:col-span-8 space-y-8 order-2 lg:order-1">

                <!-- Interactive Embedded Google Map (Coimbatore Operating Center) -->
                <div class="w-full rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm relative group">
                    <iframe 
                        title="Clean Matrix Coimbatore Operating Location"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125322.51194266185!2d76.88483256087922!3d11.014207865203306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859af2f971cb5%3A0x2fc1c81e183ed282!2sCoimbatore%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                        class="w-full h-[360px] sm:h-[420px] border-0" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- 4 Contact Information Columns: Phone, E-mail, Location, Working Hours -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 xl:gap-8 pt-4 border-t border-slate-100">

                    <!-- 1. Phone Block -->
                    <div class="space-y-2.5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 border border-emerald-100">
                                <i data-lucide="phone" class="w-5 h-5 stroke-[2.2]"></i>
                            </div>
                            <h3 class="font-heading text-base sm:text-lg font-bold text-[#0F172A] tracking-tight">
                                Phone:
                            </h3>
                        </div>
                        <div class="space-y-1 pl-1 text-sm font-normal text-slate-600">
                            <a href="tel:+919566666199" class="block hover:text-emerald-600 transition-colors tracking-wide whitespace-nowrap">
                                +91 95666 66199
                            </a>
                            <a href="tel:+919500475798" class="block hover:text-emerald-600 transition-colors tracking-wide whitespace-nowrap">
                                +91 95004 75798
                            </a>
                        </div>
                    </div>

                    <!-- 2. E-mail Block -->
                    <div class="space-y-2.5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 border border-emerald-100">
                                <i data-lucide="mail" class="w-5 h-5 stroke-[2.2]"></i>
                            </div>
                            <h3 class="font-heading text-base sm:text-lg font-bold text-[#0F172A] tracking-tight">
                                E-mail:
                            </h3>
                        </div>
                        <div class="space-y-1 pl-1 text-sm font-normal text-slate-600">
                            <a href="mailto:info@cleanmatrix.in" class="block hover:text-emerald-600 transition-colors truncate">
                                info@cleanmatrix.in
                            </a>
                            <a href="mailto:support@cleanmatrix.in" class="block hover:text-emerald-600 transition-colors truncate">
                                support@cleanmatrix.in
                            </a>
                        </div>
                    </div>

                    <!-- 3. Location Block (Coimbatore) -->
                    <div class="space-y-2.5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 border border-emerald-100">
                                <i data-lucide="map-pin" class="w-5 h-5 stroke-[2.2]"></i>
                            </div>
                            <h3 class="font-heading text-base sm:text-lg font-bold text-[#0F172A] tracking-tight">
                                Location:
                            </h3>
                        </div>
                        <div class="space-y-1 pl-1 text-xs sm:text-sm font-normal text-slate-600 leading-relaxed">
                            <p class="font-semibold text-[#0F172A]">RS Puram &amp; Avinashi Rd</p>
                            <p>Coimbatore, TN 641002</p>
                        </div>
                    </div>

                    <!-- 4. Working Hours Block (Next to Location) -->
                    <div class="space-y-2.5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 border border-emerald-100">
                                <i data-lucide="clock" class="w-5 h-5 stroke-[2.2]"></i>
                            </div>
                            <h3 class="font-heading text-base sm:text-lg font-bold text-[#0F172A] tracking-tight">
                                Hours:
                            </h3>
                        </div>
                        <div class="space-y-1 pl-1 text-xs sm:text-sm font-normal text-slate-600 leading-relaxed">
                            <p>Mon - Sun: 7am - 9pm</p>
                            <p class="text-emerald-600 font-semibold">Emergency 24/7</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- ======================================================== -->
            <!-- RIGHT COLUMN: HAVE ANY QUESTION? CONTACT & QUOTE CARD     -->
            <!-- ======================================================== -->
            <div class="lg:col-span-5 xl:col-span-4 order-1 lg:order-2">
                <div class="bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-8 shadow-sm">
                    
                    <!-- Card Heading with Small Green Label -->
                    <div class="mb-6 space-y-1">
                        <p class="text-xs sm:text-sm font-bold uppercase tracking-wider text-emerald-600 font-heading">
                            SEND AN INQUIRY
                        </p>
                        <h2 class="font-heading text-2xl sm:text-3xl font-bold text-[#0F172A] tracking-tight">
                            Have Any Questions?
                        </h2>
                    </div>

                    <!-- SUCCESS STATE BOX -->
                    <div id="contactSuccessState" class="hidden border border-emerald-200 p-6 text-sm text-slate-700 font-normal text-left rounded-xl bg-emerald-50/50 leading-relaxed animate-fade-in space-y-2">
                        <div class="flex items-center gap-2 text-emerald-600 font-bold font-heading">
                            <i data-lucide="check-circle" class="w-5 h-5"></i>
                            <span>Message Sent Successfully</span>
                        </div>
                        <p>Thank you for reaching out. A Clean Matrix service coordinator will contact you shortly.</p>
                    </div>

                    <!-- Contact Form -->
                    <form id="contactFormContainer" onsubmit="handleContactPageSubmit(event)" class="space-y-4 font-body">
                        @csrf

                        <!-- 1. Name* Field -->
                        <div>
                            <input type="text" 
                                   name="name" 
                                   required 
                                   placeholder="Your Name*" 
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-[#0F172A] placeholder:text-slate-400 focus:border-emerald-500 focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- 2. Email Address* Field -->
                        <div>
                            <input type="email" 
                                   name="email" 
                                   required 
                                   placeholder="Email Address*" 
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-[#0F172A] placeholder:text-slate-400 focus:border-emerald-500 focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- 3. Phone* Field -->
                        <div>
                            <input type="tel" 
                                   name="phone" 
                                   required 
                                   placeholder="Phone Number*" 
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-[#0F172A] placeholder:text-slate-400 focus:border-emerald-500 focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- 4. Subject* Field -->
                        <div>
                            <input type="text" 
                                   name="subject" 
                                   required 
                                   placeholder="Property Type or Service Required*" 
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-[#0F172A] placeholder:text-slate-400 focus:border-emerald-500 focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- 5. Message Field -->
                        <div>
                            <textarea name="message" 
                                      rows="4" 
                                      placeholder="Describe your requirements (e.g. 3BHK deep cleaning, office sanitization...)" 
                                      class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-[#0F172A] placeholder:text-slate-400 focus:border-emerald-500 focus:bg-white focus:outline-none transition-colors resize-none"></textarea>
                        </div>

                        <!-- Submit Button in Theme Green -->
                        <div class="pt-2">
                            <button type="submit" 
                                    id="contactPageSubmitBtn" 
                                    class="w-full bg-[#81BA41] hover:bg-[#72aa38] text-white font-heading font-semibold text-sm sm:text-base py-3.5 px-6 rounded-xl transition-all duration-200 shadow-md hover:shadow-lg cursor-pointer flex items-center justify-center gap-2">
                                <i data-lucide="send" class="w-4 h-4"></i>
                                <span>Send Message</span>
                            </button>
                        </div>

                        <!-- Loader -->
                        <div id="contactFormLoader" class="hidden flex items-center justify-center gap-2.5 py-3 text-slate-700 text-sm font-medium">
                            <svg class="animate-spin h-5 w-5 text-emerald-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                            </svg>
                            <span class="text-xs sm:text-sm text-slate-500 font-normal">Sending your message...</span>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- Contact Form AJAX Submission with Spinner Loader -->
<script>
    function handleContactPageSubmit(event) {
        event.preventDefault();
        const form = document.getElementById('contactFormContainer');
        const btn = document.getElementById('contactPageSubmitBtn');
        const loader = document.getElementById('contactFormLoader');
        const successBox = document.getElementById('contactSuccessState');
        
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
            loader.classList.add('hidden');
            form.classList.add('hidden');
            successBox.classList.remove('hidden');
            if (window.lucide) { window.lucide.createIcons(); }
        })
        .catch(err => {
            loader.classList.add('hidden');
            form.classList.add('hidden');
            successBox.classList.remove('hidden');
            if (window.lucide) { window.lucide.createIcons(); }
        });
    }
</script>

@endsection
