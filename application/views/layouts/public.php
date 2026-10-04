<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    $active_public_tab = isset($active_public_tab) ? $active_public_tab : 'beranda';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(isset($page_title) ? $page_title : 'Digital Learn Platform — Politeknik STMI Jakarta'); ?></title>

    <!-- Preconnect Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Design System CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/tokens.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/base.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/components.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/layout.css'); ?>">
</head>
<body style="background-color: var(--color-bg-page);">
    <a href="#main-content" class="skip-link">Lewati ke konten utama</a>

    <div class="public-shell">
        <!-- Main Academic Navbar Header (74px) matching design.pen DSG:R8qHF -->
        <header class="public-navbar">
            <div class="public-nav-container">
                <!-- Brand Logo Group -->
                <a href="<?php echo base_url(); ?>" style="display:flex; align-items:center; gap:12px; text-decoration:none;">
                    <div class="brand-emblem" style="width:42px; height:42px; font-size:14px; border-radius:10px;">DL</div>
                    <div class="brand-titles">
                        <span class="brand-name" style="font-size:14px; font-weight:800; letter-spacing:0.4px;">DigiLearn</span>
                        <span class="brand-sub" style="font-size:11px;">Politeknik STMI Jakarta</span>
                    </div>
                </a>



                <!-- Header Right Actions -->
                <div style="display:flex; align-items:center; gap:12px;">
                    <a href="<?php echo base_url('login'); ?>" class="btn btn-primary btn-sm" style="padding:8px 18px; border-radius:8px; font-weight:700;">
                        <?php echo icon('sign-in', 'icon-xs'); ?>
                        <span>Login</span>
                    </a>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main id="main-content" style="flex:1;">
            <?php echo isset($content) ? $content : ''; ?>
        </main>

        <!-- Footer Section High-End matching design.pen -->
        <footer data-pencil-name="Footer Section High-End" class="public-footer"
            style="align-items: center; background-color: #ffffff; box-sizing: border-box; display: flex; flex-direction: column; gap: 25px; justify-content: flex-start; padding: 60px 24px 40px 24px; width: 100%; margin-top: auto;">
            <div data-pencil-name="Footer Columns Grid"
                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-around; width: 100%; max-width: 1280px;">
                <div data-pencil-name="FC 1 Identity"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 14px; height: fit-content; justify-content: center; width: 380px; max-width: 100%;">
                    <div data-pencil-name="F Logo Row"
                        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <div data-pencil-name="F Brand Title"
                            style='box-sizing: border-box; color: #000000; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 14px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Digital Learn Platform
                        </div>
                    </div>
                    <div data-pencil-name="F Address Text"
                        style='box-sizing: border-box; color: #000000; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: 19px; text-align: center; width: 360px; max-width: 100%;'>
                        Kementerian Perindustrian Republik Indonesia
                        <br />
                        Jl. Letjen Suprapto No.26, Cempaka Putih, Jakarta Pusat 10510
                    </div>
                    <div data-pencil-name="F Contact Info"
                        style='box-sizing: border-box; color: #2872fa; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                        Telp: (021) 42886064 • Email: info@stmi.ac.id
                    </div>
                </div>
            </div>
            <div data-pencil-name="Footer Hairline"
                style="align-items: flex-start; background-color: #182333; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 1px; justify-content: flex-start; width: 100%; max-width: 1280px;">
            </div>
            <div data-pencil-name="Footer Bottom Bar"
                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-around; width: 100%; max-width: 1280px;">
                <div data-pencil-name="Copy Text"
                    style='box-sizing: border-box; color: #667085; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                    Copyright © 2026 Digital Learn Platform. Seluruh hak cipta dilindungi.
                </div>
            </div>
        </footer>
    </div>

    <!-- Toast Notifications Container -->
    <div id="toastContainer" class="toast-container"></div>

    <!-- Application Script -->
    <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
</body>
</html>
