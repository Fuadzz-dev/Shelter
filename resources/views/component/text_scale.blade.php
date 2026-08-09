@once
    <!-- ================================================================= -->
    <!-- START: GLOBAL TEXT SCALE (membuat semua teks lebih kecil di mobile) -->
    <!-- ================================================================= -->
    <style>
        @media (max-width: 1023px) {
            .text-display-lg-mobile,
            .font-display-lg-mobile {
                font-size: 19px !important;
                line-height: 26px !important;
            }
            .text-display-lg,
            .font-display-lg {
                font-size: 23px !important;
                line-height: 31px !important;
                letter-spacing: -0.01em !important;
            }
            .text-headline-md,
            .font-headline-md {
                font-size: 18px !important;
                line-height: 25px !important;
            }
            .text-headline-sm,
            .font-headline-sm {
                font-size: 16px !important;
                line-height: 23px !important;
            }
            .text-body-lg,
            .font-body-lg {
                font-size: 14px !important;
                line-height: 21px !important;
            }
            .text-body-md,
            .font-body-md,
            body {
                font-size: 13px !important;
                line-height: 19px !important;
            }
            .text-label-md,
            .font-label-md {
                font-size: 11px !important;
                line-height: 15px !important;
            }
            .text-label-sm,
            .font-label-sm {
                font-size: 10px !important;
                line-height: 13px !important;
            }
            /* Ukuran Tailwind umum agar ikut mengecil */
            .text-2xl { font-size: 20px !important; line-height: 28px !important; }
            .text-xl   { font-size: 18px !important; line-height: 26px !important; }
            .text-lg   { font-size: 15px !important; line-height: 22px !important; }
            .text-base { font-size: 13px !important; line-height: 19px !important; }
            .text-sm   { font-size: 12px !important; line-height: 18px !important; }
            .text-xs   { font-size: 11px !important; line-height: 15px !important; }
        }
    </style>
    <!-- ================================================================= -->
    <!-- END: GLOBAL TEXT SCALE -->
    <!-- ================================================================= -->
@endonce
