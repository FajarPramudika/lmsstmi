<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e(isset($page_title) ? $page_title : 'Autentikasi — Digital Learn Platform'); ?></title>

    <!-- Google Fonts: Plus Jakarta Sans strictly -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Design System CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/css/tokens.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/base.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/components.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/layout.css'); ?>">
</head>
<body style="background-color:#ffffff; margin:0; font-family:'Plus Jakarta Sans', system-ui, sans-serif;">
    <div class="auth-split-wrapper">
        <!-- Main Form Panel (Left 50%) -->
        <div class="auth-form-panel">
            <?= isset($content) ? $content : ''; ?>
        </div>

        <!-- Showcase Panel (Right 50%) matching sign-up.html & sign-in.html -->
        <div class="auth-showcase-panel" style="background-image: linear-gradient(0deg, rgba(14, 29, 50, 0.72) 0%, rgba(14, 29, 50, 0.90) 100%), url('<?= base_url('assets/img/city.png'); ?>'); background-size:cover; background-position:center; padding: 64px; display:flex; flex-direction:column; justify-content:space-between; box-sizing:border-box;">
            <!-- Showcase Top Badge -->
            <div style="display:inline-flex; align-items:center; gap:8px; height:36px; padding:0 16px; background:rgba(255,255,255,0.1); border-radius:999px; outline:1px solid rgba(255,255,255,0.2); outline-offset:-0.5px; width:fit-content;">
                <?= icon('shield-check', 'icon-xs', 'style="color:#2872fa;"'); ?>
                <span style="color:#ffffff; font-size:12px; font-weight:600;">Akses Pembelajaran Digital Mandiri &amp; Terstruktur</span>
            </div>

            <!-- Benefits Card -->
            <div style="background-color:rgba(255, 255, 255, 0.07); border-radius:24px; box-shadow:0px 16px 32px rgba(0,0,0,0.2); outline:1px solid rgba(255,255,255,0.16); outline-offset:-0.5px; padding:32px; display:flex; flex-direction:column; gap:20px;">
                <div style="color:#ffffff; font-size:20px; font-weight:800;">
                    Keuntungan Belajar di Digital Learn Platform
                </div>

                <div style="display:flex; flex-direction:column; gap:14px;">
                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:20px; height:20px; border-radius:10px; background:#2872fa; display:flex; align-items:center; justify-content:center; color:#ffffff; flex-shrink:0;">
                            <?= icon('check', 'icon-xs'); ?>
                        </div>
                        <span style="color:#e2e8f0; font-size:13px; font-weight:500;">Akses puluhan modul course praktis kapan saja dan di mana saja</span>
                    </div>

                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:20px; height:20px; border-radius:10px; background:#2872fa; display:flex; align-items:center; justify-content:center; color:#ffffff; flex-shrink:0;">
                            <?= icon('check', 'icon-xs'); ?>
                        </div>
                        <span style="color:#e2e8f0; font-size:13px; font-weight:500;">Sistem pembelajaran bertahap (progressive learning) yang terstruktur</span>
                    </div>

                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:20px; height:20px; border-radius:10px; background:#2872fa; display:flex; align-items:center; justify-content:center; color:#ffffff; flex-shrink:0;">
                            <?= icon('check', 'icon-xs'); ?>
                        </div>
                        <span style="color:#e2e8f0; font-size:13px; font-weight:500;">Ujian evaluasi akhir dengan kesempatan attempt terukur</span>
                    </div>

                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:20px; height:20px; border-radius:10px; background:#2872fa; display:flex; align-items:center; justify-content:center; color:#ffffff; flex-shrink:0;">
                            <?= icon('check', 'icon-xs'); ?>
                        </div>
                        <span style="color:#e2e8f0; font-size:13px; font-weight:500;">Sertifikat digital resmi dengan QR code dan verifikasi publik instan</span>
                    </div>
                </div>
            </div>

            <!-- Showcase Bottom 3 Stats -->
            <div style="display:flex; justify-content:space-between; align-items:center; padding-top:24px; border-top:1px solid rgba(255,255,255,0.15);">
                <div>
                    <div style="font-size:26px; font-weight:800; color:#ffffff; line-height:1;">3.500+</div>
                    <div style="font-size:12px; font-weight:500; color:#93c5fd; margin-top:4px;">Peserta Terdaftar</div>
                </div>
                <div>
                    <div style="font-size:26px; font-weight:800; color:#ffffff; line-height:1;">50+</div>
                    <div style="font-size:12px; font-weight:500; color:#93c5fd; margin-top:4px;">Course Tersedia</div>
                </div>
                <div>
                    <div style="font-size:26px; font-weight:800; color:#ffffff; line-height:1;">100%</div>
                    <div style="font-size:12px; font-weight:500; color:#93c5fd; margin-top:4px;">Sertifikat Terverifikasi</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notifications Container -->
    <div id="toastContainer" class="toast-container"></div>

    <!-- Application Script -->
    <script src="<?= base_url('assets/js/app.js'); ?>"></script>
</body>
</html>
