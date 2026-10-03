<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_public_tab = isset($active_public_tab) ? $active_public_tab : 'beranda';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e(isset($page_title) ? $page_title : 'Digital Learn Platform — Politeknik STMI Jakarta'); ?></title>

    <!-- Preconnect Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Design System CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/css/tokens.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/base.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/components.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/layout.css'); ?>">
</head>
<body style="background-color: var(--color-bg-page);">
    <a href="#main-content" class="skip-link">Lewati ke konten utama</a>

    <div class="public-shell">
        <!-- Main Academic Navbar Header (74px) matching design.pen DSG:R8qHF -->
        <header class="public-navbar">
            <div class="public-nav-container">
                <!-- Brand Logo Group -->
                <a href="<?= base_url(); ?>" style="display:flex; align-items:center; gap:12px; text-decoration:none;">
                    <div class="brand-emblem" style="width:42px; height:42px; font-size:14px; border-radius:10px;">DL</div>
                    <div class="brand-titles">
                        <span class="brand-name" style="font-size:14px; font-weight:800; letter-spacing:0.4px;">Digital Learn Platform</span>
                        <span class="brand-sub" style="font-size:11px;">Politeknik STMI Jakarta</span>
                    </div>
                </a>

                <!-- Academic Nav Links -->
                <nav class="public-nav-links">
                    <a href="<?= base_url(); ?>" class="public-nav-link <?= ($active_public_tab === 'beranda') ? 'is-active' : ''; ?>">
                        Beranda
                    </a>
                    <a href="<?= base_url('courses'); ?>" class="public-nav-link <?= ($active_public_tab === 'katalog') ? 'is-active' : ''; ?>">
                        Katalog Kursus
                    </a>
                    <a href="<?= base_url('verify'); ?>" class="public-nav-link <?= ($active_public_tab === 'verify') ? 'is-active' : ''; ?>">
                        Verifikasi Publik
                    </a>
                </nav>

                <!-- Header Right Actions -->
                <div style="display:flex; align-items:center; gap:12px;">
                    <a href="<?= base_url('login'); ?>" class="btn btn-primary btn-sm" style="padding:8px 18px; border-radius:8px; font-weight:700;">
                        <?= icon('sign-in', 'icon-xs'); ?>
                        <span>Login</span>
                    </a>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main id="main-content" style="flex:1;">
            <?= isset($content) ? $content : ''; ?>
        </main>

        <!-- Footer Section High-End matching design.pen DSG:IGOVi -->
        <footer class="public-footer">
            <div style="max-width:var(--container-max-public); margin:0 auto; display:flex; justify-content:space-between; flex-wrap:wrap; gap:32px;">
                <div style="max-width:380px;">
                    <div style="display:flex; align-items:center; gap:10px; margin-bottom:14px;">
                        <div class="brand-emblem" style="width:36px; height:36px; font-size:12px; border-radius:8px;">DL</div>
                        <span style="font-size:15px; font-weight:800; color:#ffffff;">Digital Learn Platform</span>
                    </div>
                    <p style="font-size:13px; color:var(--slate-400); line-height:1.6; margin-bottom:12px;">
                        Platform pembelajaran digital mandiri terstruktur dengan standar industri vokasi, di bawah naungan Kementerian Perindustrian Republik Indonesia &amp; Politeknik STMI Jakarta.
                    </p>
                    <div style="font-size:12px; color:var(--slate-400);">
                        Jl. Letjen Suprapto No. 26, Cempaka Putih, Jakarta Pusat
                    </div>
                </div>

                <div style="display:flex; gap:48px; flex-wrap:wrap;">
                    <div>
                        <div style="font-size:12px; font-weight:700; color:#ffffff; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:12px;">Navigasi Utama</div>
                        <ul style="list-style:none; display:flex; flex-direction:column; gap:8px; font-size:13px;">
                            <li><a href="<?= base_url(); ?>" style="color:var(--slate-400);">Beranda Platform</a></li>
                            <li><a href="<?= base_url('courses'); ?>" style="color:var(--slate-400);">Katalog Course</a></li>
                            <li><a href="<?= base_url('verify'); ?>" style="color:var(--slate-400);">Verifikasi Sertifikat</a></li>
                            <li><a href="<?= base_url('register'); ?>" style="color:var(--slate-400);">Daftar Akun Baru</a></li>
                        </ul>
                    </div>

                    <div>
                        <div style="font-size:12px; font-weight:700; color:#ffffff; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:12px;">Kredensial Digital</div>
                        <ul style="list-style:none; display:flex; flex-direction:column; gap:8px; font-size:13px;">
                            <li><a href="<?= base_url('verify/DL-2026-000001'); ?>" style="color:var(--slate-400);">Contoh Sertifikat Resmi</a></li>
                            <li><a href="<?= base_url('_styleguide'); ?>" style="color:var(--color-primary);">Design System Styleguide</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div style="max-width:var(--container-max-public); margin:32px auto 0; padding-top:20px; border-top:1px solid var(--slate-800); display:flex; justify-content:space-between; font-size:12px; color:var(--slate-400);">
                <span>&copy; 2026 Digital Learn Platform &bull; Politeknik STMI Jakarta. Hak cipta dilindungi undang-undang.</span>
                <span>Format: PDF Resmi &bull; ID Unik &bull; QR Verifikasi Publik</span>
            </div>
        </footer>
    </div>

    <!-- Toast Notifications Container -->
    <div id="toastContainer" class="toast-container"></div>

    <!-- Application Script -->
    <script src="<?= base_url('assets/js/app.js'); ?>"></script>
</body>
</html>
