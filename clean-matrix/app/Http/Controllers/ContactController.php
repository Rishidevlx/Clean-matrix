<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContactLeadNotification;

class ContactController extends Controller
{
    /**
     * Display the Clean Matrix Contact Page.
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Handle incoming quote request or contact message.
     */
    public function submit(Request $request)
    {
        // 1. Spam Honeypot Check: If hidden honeypot field is filled by a bot, silently drop
        if (!empty($request->input('b_address'))) {
            Log::warning('Contact form spam bot detected and blocked via honeypot field.', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been received. Our operations team will call you within 30 minutes.'
            ]);
        }

        // 2. Strict Input Validations with Custom Error Feedback
        $validated = $request->validate([
            'name'          => ['required', 'string', 'min:3', 'max:50', 'regex:/^[\pL\s\-]+$/u'],
            'email'         => ['required', 'email:rfc,dns', 'max:35'],
            'phone'         => ['required', 'regex:/^(?:(?:\+|00)91[\s\-]?)?[6-9]\d{9}$/'],
            'subject'       => ['required', 'string', 'min:2', 'max:50'],
            // Non-UI fields commented out for fast performance & cleaner payload:
            // 'service'       => ['nullable', 'string', 'max:100'],
            // 'property_type' => ['nullable', 'string', 'max:100'],
            // 'location'      => ['nullable', 'string', 'max:150'],
            'message'       => ['required', 'string', 'min:5', 'max:300'],
        ], [
            'name.regex'       => 'Please enter a valid name using only letters and spaces.',
            'name.max'         => 'Name cannot exceed 50 characters.',
            'email.email'      => 'Please provide a valid and active email address.',
            'email.max'        => 'Email address cannot exceed 35 characters.',
            'phone.regex'      => 'Please enter a valid 10-digit Indian mobile number (e.g., 9876543210).',
            'subject.required' => 'Please specify the service or property type required.',
            'subject.max'      => 'Service / property field cannot exceed 50 characters.',
            'message.min'      => 'Please describe your requirements with at least 5 characters.',
            'message.max'      => 'Message cannot exceed 300 characters.',
        ]);

        // Normalize subject / service for consistent display
        $validated['service'] = $validated['subject'];

        // Log enquiry for auditing / CRM integration
        Log::info('New Contact/Quote Enquiry received:', $validated);

        // Send Email Notification to Admin / Operations Team
        $adminEmail = env('MAIL_TO_ADMIN', 'rishiaravindhaoff@gmail.com');

        try {
            Mail::to($adminEmail)->send(new NewContactLeadNotification($validated));
            Log::info("Lead email notification successfully sent to {$adminEmail}");
        } catch (\Throwable $e) {
            // Log mail failure gracefully so user submission is never broken
            Log::error('Failed to send lead email notification: ' . $e->getMessage(), [
                'recipient' => $adminEmail,
                'lead'      => $validated,
            ]);
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been received. Our operations team will call you within 30 minutes.'
            ]);
        }

        return back()->with('success', 'Thank you! Your message has been received. Our operations team will call you within 30 minutes.');
    }
}
