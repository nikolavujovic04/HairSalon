<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f4f4f4; padding:20px;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" cellpadding="20" cellspacing="0" style="background:#ffffff; border-radius:6px;">
                    
                    <tr>
                        <td style="border-bottom:1px solid #ddd;">
                            <h2 style="margin:0;">📩 New Contact Form Message</h2>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p><strong>Name:</strong> {{ $formData['name'] }}</p>
                            <p><strong>Email:</strong> {{ $formData['email'] }}</p>

                            <hr>

                            <p><strong>Message:</strong></p>
                            <p style="white-space:pre-line;">
                                {{ $formData['message'] }}
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="background:#f9f9f9; text-align:center; font-size:12px; color:#777;">
                            This message was sent from the contact form on your website.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
