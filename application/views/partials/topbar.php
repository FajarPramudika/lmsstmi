<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$search_placeholder = isset($search_placeholder) ? $search_placeholder : 'Cari course, modul pembelajaran, atau materi...';
$user_name = isset($current_user['name']) ? $current_user['name'] : 'Muhammad Raihan';
?>
<!-- Top Navigation Bar (70px) matching design.pen DSG:wKYlM -->
<header class="app-topbar">
    <div style="display:flex; align-items:center; gap:16px;">
        <button type="button" class="btn btn-secondary btn-sm mobile-menu-toggle" id="mobileSidebarToggle" aria-label="Toggle Menu">
            <?= icon('funnel', 'icon-sm'); ?>
        </button>

        <div class="topbar-search-wrap">
            <div class="input-wrap">
                <span class="input-icon-left"><?= icon('magnifying-glass'); ?></span>
                <input type="text" class="form-control has-icon-left" placeholder="<?= e($search_placeholder); ?>" style="height:44px; font-size:13px;">
            </div>
        </div>
    </div>

    <div class="topbar-right-actions">
        <!-- Static Notification Bell (as decided in C11) -->
        <button type="button" class="topbar-icon-btn" title="Notifikasi Aktivitas" aria-label="Notifikasi">
            <?= icon('bell'); ?>
            <span class="notif-badge-dot"></span>
        </button>

        <!-- User Profile Pill -->
        <div style="display:flex; align-items:center; gap:10px; padding:4px 8px 4px 4px; background:var(--color-surface); border:1px solid var(--color-border); border-radius:var(--radius-pill);">
            <?= ui_avatar($user_name, 32); ?>
            <span style="font-size:13px; font-weight:700; color:var(--color-text-main); margin-right:4px;"><?= e($user_name); ?></span>
        </div>
    </div>
</header>
