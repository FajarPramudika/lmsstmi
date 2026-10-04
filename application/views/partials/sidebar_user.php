<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    $active_menu = isset($active_menu) ? $active_menu : 'dashboard';
?>
<!-- Sidebar (260px desktop) matching design.pen DSG:TPXUm -->
<aside class="app-sidebar">
    <div>
        <!-- Brand Logo Group & Close Toggle -->
        <div class="sidebar-header-row">
            <a href="<?php echo base_url(); ?>" class="sidebar-brand-box" style="text-decoration:none;">
                <div class="brand-emblem">DL</div>
                <div class="brand-titles">
                    <span class="brand-name">DigiLearn</span>
                    <span class="brand-sub">Politeknik STMI Jakarta</span>
                </div>
            </a>
            <button type="button" class="sidebar-close-btn" id="sidebarCloseBtn" aria-label="Tutup Sidebar" title="Tutup Sidebar">
                <?php echo icon('sidebar', 'icon-md'); ?>
            </button>
        </div>

        <!-- Main Navigation (4 Menus only as per C4 Decision) -->
        <nav class="sidebar-nav">
            <span class="sidebar-label">Menu Utama</span>

            <a href="<?php echo base_url('dashboard'); ?>" class="sidebar-link <?php echo($active_menu === 'dashboard') ? 'is-active' : ''; ?>">
                <div class="sidebar-link-content">
                    <?php echo icon('squares-four', 'icon-md'); ?>
                    <span>Dashboard</span>
                </div>
            </a>

            <a href="<?php echo base_url('courses'); ?>" class="sidebar-link <?php echo($active_menu === 'courses') ? 'is-active' : ''; ?>">
                <div class="sidebar-link-content">
                    <?php echo icon('compass', 'icon-md'); ?>
                    <span>Katalog Course</span>
                </div>
            </a>

            <a href="<?php echo base_url('certificates'); ?>" class="sidebar-link <?php echo($active_menu === 'certificates') ? 'is-active' : ''; ?>">
                <div class="sidebar-link-content">
                    <?php echo icon('medal', 'icon-md'); ?>
                    <span>Sertifikat Digital</span>
                </div>
            </a>
        </nav>
    </div>

    <!-- User Profile Card & Mini Menu (Bottom) -->
    <div class="sidebar-user-card <?php echo ($active_menu === 'profile') ? 'is-active' : ''; ?>" id="sidebarUserCard" style="cursor:pointer;">
        <div class="sidebar-user-info">
            <?php echo ui_avatar(isset($current_user['name']) ? $current_user['name'] : 'Muhammad Raihan', 36); ?>
            <div class="user-card-names">
                <div class="user-card-name"><?php echo e(isset($current_user['name']) ? $current_user['name'] : 'Muhammad Raihan'); ?></div>
                <div class="user-card-role">Peserta Belajar</div>
            </div>
        </div>
        <div style="color:var(--color-text-muted);">
            <?php echo icon('caret-up', 'icon-xs'); ?>
        </div>

        <!-- Floating Mini Menu -->
        <div class="user-mini-menu" id="sidebarUserMenu">
            <a href="<?php echo base_url('profile'); ?>" class="user-mini-item <?php echo ($active_menu === 'profile') ? 'is-active' : ''; ?>">
                <?php echo icon('user', 'icon-xs'); ?>
                <span>Profil Akun</span>
            </a>
            <a href="<?php echo base_url('login'); ?>" class="user-mini-item danger-link">
                <?php echo icon('sign-out', 'icon-xs'); ?>
                <span>Sign Out</span>
            </a>
        </div>
    </div>
</aside>
<div class="sidebar-backdrop" id="sidebarBackdrop"></div>
