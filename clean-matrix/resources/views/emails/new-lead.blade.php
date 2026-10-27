<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Customer Lead | Clean Matrix</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f1f5f9;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            color: #0f172a;
            -webkit-font-smoothing: antialiased;
        }
        table {
            border-collapse: collapse;
        }
        .container {
            max-width: 620px;
            margin: 24px auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.05);
        }
        .header {
            background-color: #ffffff;
            padding: 28px 24px 20px 24px;
            text-align: center;
            border-bottom: 2px solid #f1f5f9;
        }
        .header p {
            margin: 10px 0 0 0;
            font-size: 13px;
            color: #64748b;
            font-weight: 400;
        }
        .content {
            padding: 28px;
        }
        .lead-title {
            font-size: 16px;
            font-weight: 700;
            color: #0f172a;
            margin-top: 0;
            margin-bottom: 18px;
            padding-bottom: 12px;
            border-bottom: 2px solid #f1f5f9;
            letter-spacing: -0.2px;
        }
        .lead-table {
            width: 100%;
            margin-bottom: 24px;
        }
        .lead-table td {
            padding: 12px 0;
            border-bottom: 1px solid #f1f5f9;
            font-size: 14px;
            vertical-align: middle;
        }
        .lead-label {
            width: 32%;
            font-weight: 600;
            color: #64748b;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 0.5px;
        }
        .lead-value {
            color: #0f172a !important;
            font-weight: 600;
        }
        .lead-value a {
            color: #0f172a !important;
            text-decoration: none;
        }
        .message-box {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-left: 4px solid #81BA41;
            border-radius: 6px;
            padding: 14px 16px;
            font-size: 13.5px;
            color: #334155;
            line-height: 1.6;
            margin-bottom: 24px;
            white-space: pre-wrap;
        }
        .action-buttons {
            text-align: center;
            padding-top: 8px;
            padding-bottom: 12px;
        }
        .btn {
            display: inline-block;
            padding: 12px 22px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 6px;
            margin: 4px 6px;
            vertical-align: middle;
        }
        .btn-call {
            background-color: #81BA41;
            color: #ffffff !important;
        }
        .btn-reply {
            background-color: #00448B;
            color: #ffffff !important;
        }
        .footer {
            background-color: #f8fafc;
            padding: 20px 28px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
            font-size: 12px;
            color: #94a3b8;
            line-height: 1.6;
        }
        .footer a {
            color: #00448B;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <!-- Header with Logo and White Background -->
        <div class="header">
            <a href="{{ url('/') }}" target="_blank" style="text-decoration: none; display: inline-block;">
                @if(isset($message) && method_exists($message, 'embed'))
                    <img src="{{ $message->embed(public_path('logo-header.png')) }}" alt="Clean Matrix" style="height: 42px; width: auto; max-width: 230px; display: block; margin: 0 auto; border: 0;">
                @else
                    <img src="{{ asset('logo-header.png') }}" alt="Clean Matrix" style="height: 42px; width: auto; max-width: 230px; display: block; margin: 0 auto; border: 0;">
                @endif
            </a>
            <p>Clean Smarter. Live Better. &mdash; New Lead Inquiry</p>
        </div>

        <!-- Content Body -->
        <div class="content">
            <h2 class="lead-title">Lead Information Details</h2>

            <table class="lead-table">
                <tr>
                    <td class="lead-label">Customer Name</td>
                    <td class="lead-value">{{ $lead['name'] ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td class="lead-label">Phone Number</td>
                    <td class="lead-value">
                        @if(!empty($lead['phone']))
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $lead['phone']) }}">
                                {{ $lead['phone'] }}
                            </a>
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="lead-label">Email Address</td>
                    <td class="lead-value">
                        @if(!empty($lead['email']))
                            <a href="mailto:{{ $lead['email'] }}">
                                {{ $lead['email'] }}
                            </a>
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="lead-label">Service / Subject</td>
                    <td class="lead-value">
                        {{ $lead['subject'] ?? $lead['service'] ?? 'General Cleaning Service' }}
                    </td>
                </tr>
                @if(!empty($lead['property_type']))
                <tr>
                    <td class="lead-label">Property Type</td>
                    <td class="lead-value">{{ $lead['property_type'] }}</td>
                </tr>
                @endif
                @if(!empty($lead['location']))
                <tr>
                    <td class="lead-label">Preferred Location</td>
                    <td class="lead-value">{{ $lead['location'] }}</td>
                </tr>
                @endif
                <tr>
                    <td class="lead-label">Received At</td>
                    <td class="lead-value" style="font-weight: 500;">
                        {{ now()->setTimezone('Asia/Kolkata')->format('d M Y, h:i A') }} (IST)
                    </td>
                </tr>
            </table>

            <!-- Customer Message -->
            <div style="font-size: 11px; font-weight: 600; text-transform: uppercase; color: #64748b; margin-bottom: 6px; letter-spacing: 0.5px;">
                Customer Message / Notes:
            </div>
            <div class="message-box">
                {{ !empty($lead['message']) ? $lead['message'] : 'No specific message was provided by the customer.' }}
            </div>

            <!-- Quick Action Buttons with Vector Icons -->
            <div class="action-buttons">
                @if(!empty($lead['phone']))
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $lead['phone']) }}" class="btn btn-call">
                        <!-- Phone Icon -->
                        <svg style="width: 14px; height: 14px; vertical-align: -2px; margin-right: 6px; display: inline-block;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        Call Customer Now
                    </a>
                @endif
                @if(!empty($lead['email']))
                    <a href="mailto:{{ $lead['email'] }}?subject=Clean%20Matrix%20Quote%20Follow-up" class="btn btn-reply">
                        <!-- Email Icon -->
                        <svg style="width: 14px; height: 14px; vertical-align: -2px; margin-right: 6px; display: inline-block;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                        Reply by Email
                    </a>
                @endif
            </div>

        </div>

        <!-- Email Footer -->
        <div class="footer">
            <p style="margin: 0 0 4px 0;">This email was automatically generated from the contact form on <a href="{{ url('/') }}">cleanmatrix.in</a>.</p>
            <p style="margin: 0;">Clean Matrix Facility Services &mdash; Coimbatore, Tamil Nadu, India.</p>
        </div>

    </div>

</body>
</html>
