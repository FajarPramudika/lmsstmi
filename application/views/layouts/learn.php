<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e(isset($page_title) ? $page_title : 'Digital Learn Platform'); ?></title>

    <!-- Preconnect Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Design System CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/css/tokens.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/base.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/components.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/layout.css'); ?>">
</head>
<body style="background-color: var(--bg-page-user);">
    <a href="#learn-workspace" class="skip-link">Lewati ke workspace belajar</a>

    <div class="learn-shell">
        <!-- Reusable Classroom Header (60px) -->
        <?php $this->load->view('partials/learn_topbar'); ?>

        <!-- Split Learning Canvas (Drawer + Workspace) -->
        <main id="learn-workspace" class="learn-container">
            <?= isset($content) ? $content : ''; ?>
        </main>
    </div>

    <!-- Toast Notifications Container -->
    <div id="toastContainer" class="toast-container"></div>

    <!-- Application Script -->
    <script src="<?= base_url('assets/js/app.js'); ?>"></script>
</body>
</html>
