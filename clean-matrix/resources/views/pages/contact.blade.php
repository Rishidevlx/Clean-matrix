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

                    <!-- ERROR STATE BOX -->
                    <div id="contactErrorState" class="hidden border border-red-200 p-4 text-xs sm:text-sm text-red-700 font-normal text-left rounded-xl bg-red-50/70 leading-relaxed mb-4 space-y-1">
                        <div class="flex items-center gap-2 text-red-600 font-bold font-heading">
                            <i data-lucide="alert-circle" class="w-4 h-4"></i>
                            <span id="contactErrorTitle">Please check your inputs</span>
                        </div>
                        <p id="contactErrorMessage"></p>
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

                        <!-- Anti-Spam Bot Honeypot (Invisible to humans, triggers silent drop for bots) -->
                        <div style="position: absolute; left: -9999px; top: -9999px; opacity: 0; pointer-events: none;" aria-hidden="true">
                            <input type="text" name="b_address" tabindex="-1" autocomplete="off" value="">
                        </div>

                        <!-- 1. Name* Field (Max 50 chars) -->
                        <div>
                            <input type="text" 
                                   name="name" 
                                   id="inputName"
                                   required 
                                   maxlength="50"
                                   placeholder="Your Name*" 
                                   oninput="validateNameInput(this)"
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-[#0F172A] placeholder:text-slate-400 focus:border-emerald-500 focus:bg-white focus:outline-none transition-colors">
                            <p id="nameInputError" class="hidden text-xs text-red-500 mt-1 pl-1 font-medium"></p>
                        </div>

                        <!-- 2. Email Address* Field (Max 35 chars) -->
                        <div>
                            <input type="email" 
                                   name="email" 
                                   id="inputEmail"
                                   required 
                                   maxlength="35"
                                   placeholder="Email Address*" 
                                   oninput="validateEmailInput(this)"
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-[#0F172A] placeholder:text-slate-400 focus:border-emerald-500 focus:bg-white focus:outline-none transition-colors">
                            <p id="emailInputError" class="hidden text-xs text-red-500 mt-1 pl-1 font-medium"></p>
                        </div>

                        <!-- 3. Phone* Field (Only numbers 0-9, max 10 digits) -->
                        <div>
                            <input type="tel" 
                                   name="phone" 
                                   id="inputPhone"
                                   required 
                                   maxlength="10"
                                   inputmode="numeric"
                                   placeholder="Phone Number* (10 digits)" 
                                   onkeypress="return isOnlyNumberKey(event)"
                                   oninput="validatePhoneInput(this)"
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-[#0F172A] placeholder:text-slate-400 focus:border-emerald-500 focus:bg-white focus:outline-none transition-colors">
                            <div class="flex justify-between items-center text-xs mt-1 pl-1">
                                <p id="phoneInputError" class="hidden text-red-500 font-medium"></p>
                                <span id="phoneDigitCounter" class="text-slate-400 ml-auto hidden font-mono">0/10</span>
                            </div>
                        </div>

                        <!-- 4. Subject* / Service Field (Max 50 chars) -->
                        <div>
                            <input type="text" 
                                   name="subject" 
                                   id="inputSubject"
                                   required 
                                   maxlength="50"
                                   placeholder="Property Type or Service Required*" 
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-[#0F172A] placeholder:text-slate-400 focus:border-emerald-500 focus:bg-white focus:outline-none transition-colors">
                        </div>

                        <!-- 5. Message Field* (Max 300 chars) -->
                        <div>
                            <textarea name="message" 
                                      id="inputMessage"
                                      rows="4" 
                                      required
                                      maxlength="300"
                                      oninput="validateMessageInput(this)"
                                      placeholder="Describe your requirements* (e.g. 3BHK deep cleaning, office sanitization...)" 
                                      class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-[#0F172A] placeholder:text-slate-400 focus:border-emerald-500 focus:bg-white focus:outline-none transition-colors resize-none"></textarea>
                            <div class="flex justify-between items-center text-xs mt-1 pl-1 text-slate-400">
                                <span id="messageInputError" class="text-red-500 font-medium hidden">Minimum 5 characters required</span>
                                <span id="messageCharCount" class="ml-auto font-mono">0 / 300</span>
                            </div>
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

<!-- Real-Time Client-Side Validation & AJAX Submission Scripts -->
<script>
    // 1. Block any non-numeric key in phone field on keypress
    function isOnlyNumberKey(evt) {
        const charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            evt.preventDefault();
            return false;
        }
        return true;
    }

    // 2. Real-time Phone validation (digits only, Indian starting 6-9, max 10 digits)
    function validatePhoneInput(input) {
        input.value = input.value.replace(/[^0-9]/g, '').slice(0, 10);
        
        const errorEl = document.getElementById('phoneInputError');
        const counterEl = document.getElementById('phoneDigitCounter');
        const val = input.value;
        
        counterEl.classList.remove('hidden');
        counterEl.textContent = val.length + '/10';

        if (val.length === 0) {
            errorEl.classList.add('hidden');
            counterEl.classList.add('hidden');
            input.classList.remove('border-red-400', 'border-emerald-400');
            return;
        }

        if (!/^[6-9]/.test(val)) {
            errorEl.textContent = 'Must start with 6, 7, 8, or 9';
            errorEl.classList.remove('hidden');
            input.classList.add('border-red-400');
            input.classList.remove('border-emerald-400');
        } else if (val.length < 10) {
            errorEl.textContent = 'Must be 10 digits';
            errorEl.classList.remove('hidden');
            input.classList.add('border-red-400');
            input.classList.remove('border-emerald-400');
        } else {
            errorEl.classList.add('hidden');
            input.classList.remove('border-red-400');
            input.classList.add('border-emerald-400');
        }
    }

    // 3. Real-time Name validation (letters and spaces only, max 50)
    function validateNameInput(input) {
        input.value = input.value.replace(/[^a-zA-Z\s\-]/g, '').slice(0, 50);
        
        const errorEl = document.getElementById('nameInputError');
        const val = input.value.trim();

        if (val.length === 0) {
            errorEl.classList.add('hidden');
            input.classList.remove('border-red-400', 'border-emerald-400');
            return;
        }

        if (val.length < 3) {
            errorEl.textContent = 'Name must be at least 3 letters';
            errorEl.classList.remove('hidden');
            input.classList.add('border-red-400');
            input.classList.remove('border-emerald-400');
        } else {
            errorEl.classList.add('hidden');
            input.classList.remove('border-red-400');
            input.classList.add('border-emerald-400');
        }
    }

    // 4. Real-time Email validation (syntax format, max 35)
    function validateEmailInput(input) {
        input.value = input.value.slice(0, 35);
        const errorEl = document.getElementById('emailInputError');
        const val = input.value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (val.length === 0) {
            errorEl.classList.add('hidden');
            input.classList.remove('border-red-400', 'border-emerald-400');
            return;
        }

        if (!emailRegex.test(val)) {
            errorEl.textContent = 'Please enter a valid email (e.g. name@example.com)';
            errorEl.classList.remove('hidden');
            input.classList.add('border-red-400');
            input.classList.remove('border-emerald-400');
        } else {
            errorEl.classList.add('hidden');
            input.classList.remove('border-red-400');
            input.classList.add('border-emerald-400');
        }
    }

    // 5. Real-time Message character counter & minimum requirement (max 300)
    function validateMessageInput(textarea) {
        textarea.value = textarea.value.slice(0, 300);
        const charCountEl = document.getElementById('messageCharCount');
        const errorEl = document.getElementById('messageInputError');
        const length = textarea.value.length;
        
        charCountEl.textContent = length + ' / 300';

        if (length === 0) {
            errorEl.classList.add('hidden');
            textarea.classList.remove('border-red-400', 'border-emerald-400');
            return;
        }

        if (length < 5) {
            errorEl.classList.remove('hidden');
            textarea.classList.add('border-red-400');
            textarea.classList.remove('border-emerald-400');
        } else {
            errorEl.classList.add('hidden');
            textarea.classList.remove('border-red-400');
            textarea.classList.add('border-emerald-400');
        }
    }

    // 6. Handle Form Submission
    function handleContactPageSubmit(event) {
        event.preventDefault();
        const form = document.getElementById('contactFormContainer');
        const btn = document.getElementById('contactPageSubmitBtn');
        const loader = document.getElementById('contactFormLoader');
        const successBox = document.getElementById('contactSuccessState');
        const errorBox = document.getElementById('contactErrorState');
        const errorMessage = document.getElementById('contactErrorMessage');
        
        // Reset states
        errorBox.classList.add('hidden');
        btn.disabled = true;
        btn.classList.add('opacity-75');
        loader.classList.remove('hidden');

        const formData = new FormData(form);

        fetch("{{ route('contact.submit') }}", {
            method: "POST",
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                "Accept": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: formData
        })
        .then(async response => {
            const data = await response.json();
            if (!response.ok) {
                let msg = data.message || 'Something went wrong. Please check your inputs.';
                if (data.errors) {
                    const firstErr = Object.values(data.errors).flat()[0];
                    if (firstErr) msg = firstErr;
                }
                throw new Error(msg);
            }
            return data;
        })
        .then(data => {
            loader.classList.add('hidden');
            form.classList.add('hidden');
            successBox.classList.remove('hidden');
            if (window.lucide) { window.lucide.createIcons(); }
        })
        .catch(err => {
            loader.classList.add('hidden');
            btn.disabled = false;
            btn.classList.remove('opacity-75');
            errorMessage.textContent = err.message || 'Unable to send message right now. Please call us directly.';
            errorBox.classList.remove('hidden');
            if (window.lucide) { window.lucide.createIcons(); }
        });
    }
</script>

@endsection
