<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_menu = isset($active_menu) ? $active_menu : 'dashboard';
?>
<!-- Sidebar (260px desktop) matching design.pen DSG:TPXUm -->
<aside class="app-sidebar">
    <div>
        <!-- Brand Logo Group -->
        <a href="<?= base_url(); ?>" class="sidebar-brand-box" style="text-decoration:none;">
            <div class="brand-emblem">DL</div>
            <div class="brand-titles">
                <span class="brand-name">Digital Learn</span>
                <span class="brand-sub">Platform Belajar Digital</span>
            </div>
        </a>

        <!-- Main Navigation (4 Menus only as per C4 Decision) -->
        <nav class="sidebar-nav">
            <span class="sidebar-label">Menu Utama</span>

            <a href="<?= base_url('dashboard'); ?>" class="sidebar-link <?= ($active_menu === 'dashboard') ? 'is-active' : ''; ?>">
                <div class="sidebar-link-content">
                    <?= icon('sparkle', 'icon-md'); ?>
                    <span>Dashboard</span>
                </div>
            </a>

            <a href="<?= base_url('my-courses'); ?>" class="sidebar-link <?= ($active_menu === 'my_courses') ? 'is-active' : ''; ?>">
                <div class="sidebar-link-content">
                    <?= icon('book-open', 'icon-md'); ?>
                    <span>Course Saya</span>
                </div>
                <span class="badge badge-primary" style="font-size:10px; padding:2px 7px;">3 Course</span>
            </a>

            <a href="<?= base_url('courses'); ?>" class="sidebar-link <?= ($active_menu === 'courses') ? 'is-active' : ''; ?>">
                <div class="sidebar-link-content">
                    <?= icon('compass', 'icon-md'); ?>
                    <span>Katalog Course</span>
                </div>
            </a>

            <a href="<?= base_url('certificates'); ?>" class="sidebar-link <?= ($active_menu === 'certificates') ? 'is-active' : ''; ?>">
                <div class="sidebar-link-content">
                    <?= icon('medal', 'icon-md'); ?>
                    <span>Sertifikat Digital</span>
                </div>
            </a>
        </nav>
    </div>

    <!-- User Profile Card & Mini Menu (Bottom) -->
    <div class="sidebar-user-card" id="sidebarUserCard" style="cursor:pointer;">
        <div class="sidebar-user-info">
            <?= ui_avatar(isset($current_user['name']) ? $current_user['name'] : 'Muhammad Raihan', 36); ?>
            <div class="user-card-names">
                <div class="user-card-name"><?= e(isset($current_user['name']) ? $current_user['name'] : 'Muhammad Raihan'); ?></div>
                <div class="user-card-role">Peserta Belajar</div>
            </div>
        </div>
        <div style="color:var(--color-text-muted);">
            <?= icon('caret-up', 'icon-xs'); ?>
        </div>

        <!-- Floating Mini Menu -->
        <div class="user-mini-menu" id="sidebarUserMenu">
            <a href="<?= base_url('profile'); ?>" class="user-mini-item">
                <?= icon('user', 'icon-xs'); ?>
                <span>Profil Akun</span>
            </a>
            <a href="<?= base_url('login'); ?>" class="user-mini-item danger-link">
                <?= icon('sign-out', 'icon-xs'); ?>
                <span>Sign Out</span>
            </a>
        </div>
    </div>
</aside>
<div class="sidebar-backdrop" id="sidebarBackdrop"></div>
