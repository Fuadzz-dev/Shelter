<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode OTP Reset Password</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f5f7; font-family: Arial, Helvetica, sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f5f7; padding:24px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="480" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 1px 3px rgba(0,0,0,0.08);">
                    <tr>
                        <td style="background-color:#1f2937; padding:20px 32px;">
                            <span style="color:#ffffff; font-size:18px; font-weight:bold;">{{ config('app.name') }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px;">
                            <h2 style="margin:0 0 16px; color:#111827; font-size:20px;">Permintaan Reset Password</h2>
                            <p style="margin:0 0 16px; color:#374151; font-size:14px; line-height:1.6;">
                                Halo{{ $namaLengkap ? ' ' . $namaLengkap : '' }},
                            </p>
                            <p style="margin:0 0 24px; color:#374151; font-size:14px; line-height:1.6;">
                                Kami menerima permintaan untuk mereset password akun Anda. Gunakan kode OTP berikut untuk melanjutkan proses reset password:
                            </p>
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="margin:0 0 24px;">
                                <tr>
                                    <td align="center" style="background-color:#f3f4f6; border-radius:8px; padding:20px;">
                                        <span style="font-size:32px; font-weight:bold; letter-spacing:8px; color:#111827;">{{ $otp }}</span>
                                    </td>
                                </tr>
                            </table>
                            <p style="margin:0 0 16px; color:#374151; font-size:14px; line-height:1.6;">
                                Kode ini berlaku selama <strong>{{ $expiresInMinutes }} menit</strong>. Jangan bagikan kode ini kepada siapa pun, termasuk pihak yang mengatasnamakan admin.
                            </p>
                            <p style="margin:0; color:#6b7280; font-size:13px; line-height:1.6;">
                                Jika Anda tidak merasa melakukan permintaan ini, abaikan email ini atau segera hubungi admin.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:16px 32px; background-color:#f9fafb; border-top:1px solid #e5e7eb;">
                            <p style="margin:0; color:#9ca3af; font-size:12px; text-align:center;">
                                Email ini dikirim otomatis oleh sistem {{ config('app.name') }}. Mohon tidak membalas email ini.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
