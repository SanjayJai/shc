{{-- filepath: resources/views/emails/contact-message.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f8f9fa; margin: 0; padding: 0;">
    <table width="100%" bgcolor="#f8f9fa" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background: #fff; margin: 40px 0; border-radius: 8px; box-shadow: 0 4px 24px rgba(0,0,0,0.07);">
                    <tr>
                        <td style="background: #ff9800; color: #fff; padding: 24px 0; border-radius: 8px 8px 0 0; text-align: center;">
                            <h2 style="margin: 0; font-size: 28px; letter-spacing: 1px;">SHC New Enquiry</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 32px;">
                            <p style="font-size: 18px; color: #333; margin-bottom: 24px;">
                                You have received a new message from your website contact form.
                            </p>
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 24px;">
                                <tr>
                                    <td style="padding: 8px 0; color: #888; width: 120px;">Name:</td>
                                    <td style="padding: 8px 0; color: #222;"><strong>{{ $data['name'] }}</strong></td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px 0; color: #888;">Email:</td>
                                    <td style="padding: 8px 0; color: #222;"><a href="mailto:{{ $data['email'] }}" style="color: #ff9800;">{{ $data['email'] }}</a></td>
                                </tr>
                            </table>
                            <div style="background: #f6f6f6; border-left: 4px solid #ff9800; padding: 18px 20px; border-radius: 4px;">
                                <p style="margin: 0; color: #444; font-size: 16px; line-height: 1.7;">
                                    {{ $data['message'] }}
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="background: #f1f1f1; color: #888; text-align: center; padding: 18px; border-radius: 0 0 8px 8px; font-size: 13px;">
                            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
