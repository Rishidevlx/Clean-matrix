<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $validated = $request->validate([
            'name'          => 'required|string|max:100',
            'email'         => 'required|email|max:150',
            'phone'         => 'required|string|max:25',
            'service'       => 'nullable|string|max:100',
            'property_type' => 'nullable|string|max:100',
            'location'      => 'nullable|string|max:150',
            'message'       => 'nullable|string|max:2000',
        ]);

        // Log enquiry for auditing / CRM integration
        Log::info('New Contact/Quote Enquiry received:', $validated);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been received. Our operations team will call you within 30 minutes.'
            ]);
        }

        return back()->with('success', 'Thank you! Your message has been received. Our operations team will call you within 30 minutes.');
    }
}
