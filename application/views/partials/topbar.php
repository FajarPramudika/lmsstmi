<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    $search_placeholder = isset($search_placeholder) ? $search_placeholder : 'Cari course, modul pembelajaran, atau materi...';
    $user_name          = isset($current_user['name']) ? $current_user['name'] : 'Muhammad Raihan';
?>
<!-- Top Navigation Bar (70px) matching design.pen DSG:wKYlM -->
<header class="app-topbar">
    <div style="display:flex; align-items:center; gap:16px;">
        <button type="button" class="sidebar-toggle-btn" id="mobileSidebarToggle" aria-label="Buka/Tutup Sidebar" title="Buka/Tutup Sidebar">
            <?php echo icon('sidebar', 'icon-md'); ?>
        </button>
        <?php if (!empty($search_placeholder)): ?>
        <div class="topbar-search-wrap">
            <div style="position:relative; display:flex; align-items:center;">
                <span style="position:absolute; left:14px; color:var(--color-text-muted); display:flex; align-items:center; pointer-events:none;">
                    <?php echo icon('magnifying-glass', 'icon-sm'); ?>
                </span>
                <input type="text" class="form-input" style="padding-left:38px; height:40px; border-radius:var(--radius-md, 8px); background-color:var(--color-bg-app, #f8fafc); border:1px solid var(--color-border, #dfe3ea); font-size:13px; width:100%;" placeholder="<?php echo e($search_placeholder); ?>">
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="topbar-right-actions">
        <!-- Static Notification Bell (as decided in C11) -->
        <button type="button" class="topbar-icon-btn" title="Notifikasi Aktivitas" aria-label="Notifikasi">
            <?php echo icon('bell'); ?>
            <span class="notif-badge-dot"></span>
        </button>


    </div>
</header>
